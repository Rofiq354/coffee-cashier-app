<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">
          <i class="icon-grid menu-icon "></i>
          <span class="menu-title">About</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/category">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/jenis">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Jenis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/menu">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/stock">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Stok</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/meja">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Meja</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pelanggan">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Pelanggan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pemesanan">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Pemesanan</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-secound" aria-expanded="true" aria-controls="ui-secound">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Pemesanan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="ui-secound" style="">
          <ul class="nav flex-column sub-menu">
            @foreach ($jenis as $j)
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
                  <span class="menu-title">{{ $j->nama }}</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse show" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li>halo</li>
                    <li>halo</li>
                    <li>halo</li>
                  </ul>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/karyawan">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Karyawan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produk_titipan">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Produk Titipan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Data Produk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/absensi">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Absensi Karyawan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">User Pages</span>
          {{-- <i class="menu-arrow"></i> --}}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
</nav>