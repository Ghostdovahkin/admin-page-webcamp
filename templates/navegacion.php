<aside class="main-sidebar">
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de aplicacion</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span> Eventos</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-evento.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="crear-evento.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book" area-hidden="true"></i>
            <span>Categoria Eventos</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-categorias.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="crear-categoria.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle" area-hidden="true"></i>
            <span>Invitados</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-invitados.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="crear-invitado.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-card" area-hidden="true"></i>
            <span>Registrados</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-registrados.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="crear-registro.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
        <?php if($_SESSION['nivel'] == 1): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" area-hidden="true"></i>
            <span>Administradores</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="crear-admin.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
<?php endif; ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments" area-hidden="true"></i>
            <span>Testimoniales</span>
          
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver todos</a></li>
            <li><a href="#S"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
            
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>