<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      @if (auth()->user()->role == 'admin')

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Menu Utama
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/supplier" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Supplier</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jenis" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Jenis</p>
            </a>
          </li>

        </ul>
      </li>
      @endif

      <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
          <p>
            Transaksi
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/barang_masuk" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Barang Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang_keluar" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Barang Keluar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="/logout" class="nav-link" id="logoutLink">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>

    </ul>
  </nav>


