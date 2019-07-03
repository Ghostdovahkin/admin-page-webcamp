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
        Crear Evento
        <small>LLena el formulario para crear un evento</small>
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
          <h3 class="box-title">Crear evento</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-evento.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Titulo del evento:</label>
                  
                  <input type="text" class="form-control" id="titulo_evento" name="titulo_evento" placeholder="Titulo Evento">
                  
                <div class="form-group">
                  <label for="nombre">Categoría</label>
                  <select name="categoria_evento" class="form-control seleccionar">
                      <option value="0" >- Seleccione -</option>
                      <?php
                      try{
                        $sql = "SELECT * FROM categoria_evento ";
                        $resultado = $conn->query($sql);
                        while($cat_evento = $resultado->fetch_assoc() ) { ?>
                            <option value ="<?php echo $cat_evento['id_categoria']; ?>"> 
                            <?php echo $cat_evento['cat_evento']; ?>
                        </option>
                            <?php } 
                       } catch (Exception $e){
                        echo " Error: ". $e->getMessage();
                      }



                      ?>
</select>
                </div>
                <div class="form-group">
                <label>Fecha:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="fecha" name="fecha_evento">
                </div>
                </div>
                <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="hora_evento">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
                
              <div class="form-group">
                  <label for="nombre">Invitado</label>
                  <select name="invitado" class="form-control seleccionar">
                      <option value="0" >- Seleccione -</option>
                      <?php
                      try{
                        $sql = "SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados ";
                        $resultado = $conn->query($sql);
                        while($invitados = $resultado->fetch_assoc() ) { ?>
                            <option value ="<?php echo $invitados['invitado_id']; ?>"> 
                            <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?>
                        </option>
                            <?php } 
                       } catch (Exception $e){
                        echo " Error: ". $e->getMessage();
                      }
                      ?>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="registro" value="nuevo">
              <input type="hidden" name="id_registro" value="<?php echo $id; ?>"></input>
                <button type="submit" class="btn btn-primary"  >Añadir</button>
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

