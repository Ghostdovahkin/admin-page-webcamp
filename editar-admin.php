<?php
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)){
      die("ERROR!!");
  }
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
       
        <small></small>
      </h1>
    
    </section>

    <div class="row">
        <div class="col-md-8">


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Editar administrador</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <?php
            $sql = "SELECT * FROM admins WHERE id_admin = $id ";
            $resultado = $conn->query($sql);
            $admin = $resultado->fetch_assoc();
          
        ?>
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" value="<?php echo $admin['usuario']; ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Tu nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php echo $admin['nombre']; ?> ">
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Tu Password">
                </div>
              
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="registro" value="actualizar">
              <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary" >Añadir</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.box-body -->
    
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
        </div>
            </div> <!-- /.content -->
                </div>
  <!-- /.content-wrapper -->

  <?php 
  include_once 'templates/footer.php';
  ?>


<!-- ./wrapper -->

<!-- jQuery 3 -->

