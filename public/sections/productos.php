<?php
$productos = $conexion->consultar("SELECT * FROM contenidos WHERE tipo = 'P'");
?>
<div class="container">

  <div class="section-title">
    <h2>Nuestros Productos</h2>
    <p>Productos exclusivos, creados para solucionar tus problemas de Uñas y Pies.</p>
  </div>

  <div class="row gy-4">
    <?php foreach($productos as $producto){ ?>
    <div class="col-lg-4 col-md-6">
      <div class="member">
        <img src="/imagenes/<?=$producto['imagen']?>" alt="">
        <h4><?=$producto['nombre']?></h4>
        <!-- <span>Antimicótico, antitranspirante y desodorante</span> -->
        <p>
          <?=$producto['descripcion']?>
        </p>
      </div>
    </div>
    <?php } ?>
    <!--
    <div class="col-lg-4 col-md-6">
      <div class="member">
        <img src="assets/img/productos/aero-fung-talk.jpg" alt="">
        <h4>Aero Fung Talk Aerosol</h4>
        <span>Antimicótico, antitranspirante y desodorante  en aerosol</span>
        <p>
          Ayuda a evitar la aparición de bacterias causantes del mal olor, calma la picazón.  Contiene Tea Tree.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="member">
        <img src="assets/img/productos/rs-15-nf.jpg" alt="">
        <h4>RS-15</h4>
        <span>Solución desqueratinizante fuerte</span>
        <p>
          Ayuda a eliminar hongos de las uñas de pies y de manos, actúa como removedor deslaminador de toda la placa y el lecho contaminado.
        </p>
      </div>
    </div>
  -->
  </div>

</div>