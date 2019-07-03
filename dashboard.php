<?php
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>



  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
    <!-- sidebar: style can be found in sidebar.less -->
   

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Informacion sobre el evento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class = "row">
    <div class="box-body chart-responsive">
              <div class="chart" id="grafica-registros" style="height: 300px;"></div>
            </div>
    </div>
    <h2 class="page-header">Resumen de Registros</h2>

<div class="row">
      <!-- Default box -->
      <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados ";
         $resultado = $conn->query($sql);
         $registrados = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $registrados['registros']; ?></h3>

              <p>Total Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
        Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 1 ";
         $resultado = $conn->query($sql);
         $registrados = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $registrados['registros']; ?></h3>

              <p>Total Pagados</p>
            </div>
            <div class="icon">
              <i class="fa fa-users "></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
        Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 0 ";
         $resultado = $conn->query($sql);
         $registrados = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $registrados['registros']; ?></h3>

              <p>Total Sin pagar</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-times"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
        Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT SUM(total_pagado) AS ganancias FROM registrados WHERE pagado = 1 ";
         $resultado = $conn->query($sql);
         $registrados = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> $<?php echo $registrados['ganancias']; ?></h3>

              <p>Ganancias Totales</p>
            </div>
            <div class="icon">
              <i class="fa fa-usd"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
              Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <h2 class="page-header">Regalos</h2>
      <div class="row">
      <!-- Default box -->
      <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(total_pagado) AS pulseras FROM registrados WHERE regalo = 1 AND pagado = 1 ";
         $resultado = $conn->query($sql);
         $regalo = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3> Pulseras<br> <?php echo $regalo['pulseras']; ?></h3>
<br>
              
            </div>
            <div class="icon">
              <i class="fa fa-gift"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
              Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>


          <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(total_pagado) AS etiquetas FROM registrados WHERE regalo = 2 AND pagado = 1 ";
         $resultado = $conn->query($sql);
         $regalo = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3> Etiquetas<br> <?php echo $regalo['etiquetas']; ?></h3>
<br>
             
            </div>
            <div class="icon">
              <i class="fa fa-gift"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
              Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
         <?php 
         $sql = "SELECT COUNT(total_pagado) AS plumas FROM registrados WHERE regalo = 3 AND pagado = 1 ";
         $resultado = $conn->query($sql);
         $regalo = $resultado->fetch_assoc(); 
         ?>
      <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3> Plumas<br> <?php echo $regalo['plumas']; ?></h3>
<br>
              
            </div>
            <div class="icon">
              <i class="fa fa-gift"></i>
            </div>
            <a href="lista_registrados.php" class="small-box-footer">
              Mas informacion <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
</div>
      <!-- /.box -->
      </div>
    
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include_once 'templates/footer.php';
  ?>


<!-- ./wrapper -->

<!-- jQuery 3 -->

