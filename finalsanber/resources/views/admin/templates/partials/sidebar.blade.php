<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/logo.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpus<span class="font-weight-bold">Kita</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/logo-admin.svg') }}" class="img-circle bg-white elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('admin.author.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Kelola Author</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.book.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Kelola Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.borrow.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Data Peminjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Kelola Member</p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
