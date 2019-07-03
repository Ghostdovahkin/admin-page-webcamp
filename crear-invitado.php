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
        Crear Invitados
        <small>LLena el formulario para crear un nuevo invitado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <div class="row">
        <div class="col-md-8">


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre_invitado">Nombre :</label>
                  <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="nombre">
                </div>
                <div class="form-group">
                  <label for="apellido_invitado">Apellido :</label>
                  <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="nombre">
                </div>
                <div class="form-group">
                  <label for="biografia_invitado">Biografia :</label>
                  <textarea class="form-control"  id="biografia_invitado" name="biografia_invitado" rows="8" placeholder="biografia"></textarea>
                </div>
                <div class="form-group">
                  <label for="imagen_invitado">Imagen:</label>
                  <input  class="form-control" type="file" id="imagen_invitado" name="archivo_imagen">

                  <p class="help-block">Añada la imagen del invitado aqui!.</p>
                </div> 
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="registro" value="nuevo">
              <input type="hidden" name="id_registro" value="<?php echo $id; ?>"></input>
                <button type="submit" class="btn btn-primary" id="crear_registro" >Añadir</button>
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
