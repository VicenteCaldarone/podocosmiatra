<?php
include 'model/contenido.php';  # uso una clase para mantener la info del contenido
$contenidoActual = new Contenido();   # se va a crear vacío y se mostrará asi para el alta (inputs en blanco)
$accionActual = 'Guardar';

if($_POST){#si hay envio de datos
    if($_POST['accion'] == 'Guardar'){# si es con la acción Guardar los inserto en la base de datos  
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        #nombre de la imagen
        $imagen = $_FILES['archivo']['name'];
        #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
        $fecha = new DateTime();
        $imagen= $fecha->getTimestamp()."_P_".$imagen;

        #creo una instancia(objeto) de la clase de conexion
        $conexion = new conexion();
        $conexion->ejecutarConParametros(
            'INSERT INTO contenidos (nombre, imagen, descripcion, tipo) VALUES (:nombre, :imagen, :descripcion, :tipo)',
            [':nombre'=>$nombre, ':imagen'=>$imagen, ':descripcion'=>$descripcion, ':tipo'=>'P']
        );
        #-- muevo esta secciona luego del insert, por si falla que no suba la imagen al servidor --
        #tenemos que guardar la imagen en una carpeta 
        $imagen_temporal=$_FILES['archivo']['tmp_name'];
        move_uploaded_file($imagen_temporal,"../imagenes/".$imagen);

        #para que no intente borrar muchas veces
        header("Location:home.php");
        die();
    }

    if($_POST['accion'] == 'Modificar'){# si es con la acción Modificar los auctualizo en la base de datos  
        $id = $_POST['id'];
        #creo una instancia(objeto) de la clase de conexion
        $conexion = new conexion();
        #debemos recuperar la imagen actual y borrarla del servidor para lugar pisar con la nueva imagen en el server y en la base de datos
        #recuperamos la imagen de la base antes de borrar 
        $imagenGuardada = $conexion->consultarConParametros(
            'SELECT imagen FROM contenidos WHERE id_contenido= :id',
            [':id'=>$id]
        );

        #levantamos los datos del formulario
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        #nombre de la imagen
        $imagen = $_FILES['archivo']['name'];
        $imagenModificada = ($imagen != '');
        if($imagenModificada){  # verifico si se indicó otra imagen
            #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
            $fecha = new DateTime();
            $imagen = $fecha->getTimestamp()."_P_".$imagen;
        }else{  # si no se indicó una nueva imagen -> mantengo la actual
            $imagen = $imagenGuardada[0]['imagen'];
        }
        
        $conexion->ejecutarConParametros(
            'UPDATE contenidos SET nombre= :nombre , imagen= :imagen, descripcion= :descripcion WHERE id_contenido = :id',
            [':nombre'=>$nombre, ':imagen'=>$imagen, ':descripcion'=>$descripcion, ':id'=>$id]
        );
    
        #-- muevo esta secciona luego del update, por si falla que no borre la imagen al servidor --
        if($imagenModificada){  # verifico si se indicó otra imagen
            #la borramos de la carpeta
            unlink("../imagenes/".$imagenGuardada[0]['imagen']);
            #tenemos que guardar la imagen en una carpeta 
            $imagen_temporal=$_FILES['archivo']['tmp_name'];
            move_uploaded_file($imagen_temporal,"../imagenes/".$imagen);
        }

        header("location:home.php");
        die();
    }
}

#si nos envian por url, get 
if($_GET){
    # == SECCION QUE CONTROLA LA ELIMINACIÓN ==
    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
    if(isset($_GET['borrar'])){
        $id = $_GET['borrar'];
        $conexion = new conexion();

        #recuperamos la imagen de la base antes de borrar 
        $imagen = $conexion->consultarConParametros(
            'SELECT imagen FROM contenidos WHERE id_contenido= :id',
            [':id' => $id]
        );

        #borramos el registro de la base 
        $id_proyecto = $conexion->ejecutarConParametros(
            'DELETE FROM contenidos WHERE id_contenido = :id', 
            [':id' => $id]
        );

        #-- muevo esta secciona luego del delete, por si falla que no borre la imagen al servidor --
        #la borramos de la carpeta 
        unlink("../imagenes/".$imagen[0]['imagen']);

        #para que no intente borrar muchas veces
        header("Location:home.php");
        die();
    }

    # == SECCION QUE CONTROLA LA MODIFICACIÓN ==
    if(isset($_GET['modificar'])){
        $id = $_GET['modificar'];

        $accionActual = 'Modificar';    # cambio la acción del botón

        #vamos a consultar para llenar los campos
        $conexion = new conexion();
        $contenidoModificar = $conexion->consultarConParametros(
            'SELECT * FROM contenidos WHERE id_contenido= :id',
            [':id'=>$id]
        );
        if($contenidoModificar){
            $contenidoActual->id = $contenidoModificar[0]['id_contenido'];
            $contenidoActual->nombre = $contenidoModificar[0]['nombre'];
            $contenidoActual->imagen = $contenidoModificar[0]['imagen'];
            $contenidoActual->descripcion = $contenidoModificar[0]['descripcion'];
        }
    }    
} 
    // tipo: P=Productos, T=Portfolio, A=Atenciones
    $conexion = new conexion();
    $contenidos = $conexion->consultar("SELECT * FROM contenidos WHERE tipo = 'P'");
?>

<div class="row d-flex justify-content-center mb-5 mt-3">
        <div class="col-md-10 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Datos del Producto
                </div>
                <div class="card-body">
                    <!--para recepcionar archivos uso enctype-->
                    <form action="home.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$contenidoActual->id?>">
                        <div>
                            <label for="nombre">Nombre del Producto</label>
                            <input required class="form-control" type="text" name="nombre" id="nombre" value="<?=$contenidoActual->nombre?>">
                        </div>

                        <?php # muestro esta seccion si es para un alta
                            if($accionActual == 'Guardar'){?>
                        <div>
                            <label for="archivo">Imagen del Producto</label>
                            <input required class="form-control" type="file" name ="archivo" id="archivo" value="<?=$contenidoActual->imagen?>">
                        </div>
                        <?php } ?>

                        <?php # muestro esta seccion si es para modificación
                            if($accionActual == 'Modificar'){?>
                            <div>
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <label for="archivo">Imagen del Producto</label>
                                    <br>
                                    <div class="d-flex justify-content-center align-item-center">
                                        <img src="../imagenes/<?=$contenidoActual->imagen?>" width="100">
                                    </div>
                                </div>
                                <p>Seleccione un nueva Imagen si desea modificar</p>
                                <input class="form-control" type="file" name ="archivo" id="archivo" value="">
                            </div>
                        <?php } ?>

                        <br>
                        <div>
                            <label for="descripcion">Descripción del Producto</label>
                            <textarea required class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"><?=$contenidoActual->descripcion?></textarea>
                        </div>
                        <div>
                        <br>
                        <input class="btn btn-success" type="submit" name="accion" value="<?=$accionActual?>">
                        </div>
                
                    </form>
                </div> <!--cierra el body-->
    
            </div><!--cierra el card-->
            
        </div><!--cierra el col-->
    </div><!--cierra el row-->
    <div class="row d-flex justify-content-center mb-5">
        <div class="col-md-10 col-sm-6">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach($contenidos as $contenido){ ?>
                
                    <tr >
                        <!--<td scope="row"><?php #echo $proyecto['id'];?></td> -->
                        <td><?=$contenido['nombre']?></td>
                        <td> <img width="100" src="../imagenes/<?=$contenido['imagen']?>" alt="">  </td>
                        <td class="texto"><?=$contenido['descripcion']?></td>
                        <td><a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?=$contenido['id_contenido']?>"><i class="bi bi-pencil"></i></a></td>
                        <td><a name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?=$contenido['id_contenido']?>"><i class="bi bi-trash"></i></a></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div><!--cierra el col-->  
    </div>