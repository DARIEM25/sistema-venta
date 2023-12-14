
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                <img src="<?= base_url();?>public/Dashboard/images/faces/face29.png" alt="image">
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                <?= session('nombre'); ?> <?= session('apellido'); ?>
                </p>
                <p class="sidebar-designation">
                <?= session('type'); ?>
                </p>
              </div>
            </div>
            <div class="nav-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Escribe para buscar..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                </div>
              </div>
            </div>
            <p class="sidebar-menu-title">Menú de guión</p>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Productos'); ?>">
              <i class="typcn typcn-briefcase menu-icon"></i>
              <span class="menu-title">Productos</span>

              

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Pedidos'); ?>">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Pedidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Categorias'); ?>">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Categorias</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Proveedores'); ?>">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Dventas'); ?>">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Detalle Venta</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Pventas'); ?>">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Registrar Venta</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin/Rventas'); ?>">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Empleados</span>
            </a>
          </li>
        </ul>
        
      </nav>