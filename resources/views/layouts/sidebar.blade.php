<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="backend/index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Haur Galur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-user"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-user-pen"></i>
                  <p>Operator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="nav-icon fa-solid fa-user-shield"></i>
                  <p>Inspector</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Step 1</li>
          <li class="nav-item">
            <a href="../kanban.html" class="nav-link">
              <i class="nav-icon fa-solid fa-map-location"></i>
              <p>
                Pengenalan Tempat
              </p>
            </a>
          </li>
          <li class="nav-header">Step 2</li>
          <li class="nav-item">
            <a href="../kanban.html" class="nav-link">
              <i class="nav-icon fa-solid fa-place-of-worship"></i>
              <p>
                Identitas Lembaga
              </p>
            </a>
          </li>
          <li class="nav-header">Step 3</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-handshake-angle"></i>
              <p>
                PSKS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-solid fa-person-dots-from-line nav-icon "></i>
                  <p>Dunia Usaha yang Melakukan Kesejahteraan Sosial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-solid fa-people-group nav-icon"></i>
                  <p>Karang Taruna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-solid fa-people-roof nav-icon"></i>
                  <p>Keluarga Pioneer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-shelter nav-icon"></i>
                  <p>Lembaga Kesejahteraan Sosial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-arrow-up-from-line nav-icon"></i>
                  <p>Lembaga Konsultasi Kesejahteraan Keluarga (LK3)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                    <i class="far fa-solid fa-person-chalkboard nav-icon"></i>
                  <p>Pekerja Sosial Masyarakat (PSM)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-walking-luggage nav-icon"></i>
                  <p>Pekerja Sosial Profesional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-military-pointing nav-icon"></i>
                  <p>Penyuluh Sosial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-digging nav-icon"></i>
                  <p>Taruna Siaga Bencana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-people-carry-box nav-icon"></i>
                  <p>Tenaga Kesejahteraan Sosial Kecamatan (TKSK)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-solid fa-person-hiking nav-icon"></i>
                  <p>Wahana Kesejahteraan Sosial Berbasis Masyarakat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                    <i class="far fa-solid fa-person-breastfeeding nav-icon"></i>
                  <p>Wanita Pemimpin Kesejahteraan Sosial (WPKS)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-hand-holding-medical"></i>
              <p>
                PMKS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="backend/iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-header">Settings</li>
          @role('admin')
          <li class="nav-item">
            <a href="{{ route('adminroles.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Roles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('adminpermissions.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Permissions</p>
            </a>
          </li>
          @endrole
          <li class="nav-item">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon far fa-solid fa-person-booth"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
