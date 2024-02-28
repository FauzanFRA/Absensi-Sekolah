<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/CN.png')}}" alt="Logo SMK CN" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Absensi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->username}}</a>
        </div>
      </div>
{{-- Sidebar --}}
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
    <a href="/dashboard" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>Beranda</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="data-guru" class="nav-link {{Request::is('data-guru') ? 'active' : ''}}">
    <i class="nav-icon fas fa-chalkboard-teacher"></i>
    <p>Data Guru</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-user-graduate"></i>
    <p>Data Siswa</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>Data Mata Pelajaran</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="data-kelas" class="nav-link">
    <i class="nav-icon fas fa-chalkboard"></i>
    <p>Data Kelas</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-users"></i>
    <p>Data User</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    <p>Logout</p>
    </a>
    </li>
    </ul>
    </nav>
        </div>
        <!-- /.sidebar -->
    </aside>
