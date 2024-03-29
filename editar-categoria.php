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
        Editar Categoría de Eventos
        <small>LLena el formulario para editar una nueva categoría</small>
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
        <?php 
        $sql = "SELECT * FROM categoria_evento WHERE id_categoria = $id ";
        $resultado = $conn->query($sql);
        $categoria = $resultado->fetch_assoc();
        ?>
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-categoria.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Nombre :</label>
                  <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="categoria" value="<?php echo $categoria['cat_evento']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Icono:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-address-book"></i>
                </div>
                <input type="text" id="icono" name="icono" class="form-control pull-right" placeholder="fa-icon" value="<?php echo $categoria['icono']; ?>">
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="registro" value="actualizar">
              <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
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
