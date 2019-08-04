<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
            <a href="<?=base_url('empresas/painel')?>">
              <i class="fa fa-dashboard"></i>
              <span>Painel</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Produtos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
                <a href="<?=base_url('empresas/produtos')?>">
                    <i class="fa fa-circle-o"></i>
                    Produtos</a></li>
            <li>
                <a href="<?=base_url('empresas/produtos/categorias')?>">
                    <i class="fa fa-circle-o"></i>
                    Categorias</a></li>
            <li>
                <a href="<?=base_url('empresas/combos')?>">
                    <i class="fa fa-circle-o"></i>
                    Combos</a></li>
            <!-- <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li> -->
          </ul>
        </li>

        <li>
            <a href="<?=base_url('empresas/logout')?>">
              <i class="fa fa-sign-out"></i>
              <span>Sair</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>