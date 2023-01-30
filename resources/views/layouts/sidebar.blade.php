{{-- route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') --}}
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand" style="margin-top: 25px; margin-bottom: 50px;">
      <a href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') }}">
        <img width="60%" src="{{ asset('admin_assets/img/logo.png') }}">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">TAP</a>
    </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Beranda</li>
        <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') }}"><i class="fas fa-fire"></i><span>Beranda</span></a></li>
        
        <li class="menu-header">Main Menu</li>
        <li>
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-truck"></i> <span>TBS</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.tbs-masuk.index') }}">TBS Masuk</a></li>
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.tbs-keluar.index') }}">TBS Keluar</a></li>
            </ul>
            <a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.nota-penimbangan-tbs.index') }}"><i class="fa fa-file"></i> <span>Nota Penimbangan TBS</span></a>
        </li>

        <li class="menu-header">Laporan</li>
        <li>
            <a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.laporan.index') }}"><i class="fa fa-file-alt"></i> <span>Laporan</span></a>
        </li>

        <li class="menu-header">Master Data</li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.profil-perusahaan.index') }}"><i class="fas fa-building"></i> <span>Profil Perusahaan</span></a>
        <a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.perusahaan-mitra.index') }}"><i class="fas fa-address-book"></i> <span>Data Perusahaan Mitra</span></a>
        <a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.sopir.index') }}"><i class="fas fa-bus"></i> <span>Data Sopir</span></a>
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User Management</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.user.index') }}">User</a></li>
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.user-log.index') }}">User Log</a></li>
            </ul>
        </li>
      </ul>
  </aside>
</div>
