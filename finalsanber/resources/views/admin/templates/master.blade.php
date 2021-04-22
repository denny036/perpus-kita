<!DOCTYPE html>
<html lang="en">

@include('admin.templates.partials.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('admin.templates.partials.navbar')

  @include('admin.templates.partials.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('titles')
          </div>
        </div>
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">
                  @yield('item-active')
              </li>
            </ol>
          </div><!-- /.col --> --}}

  <!-- /.content-wrapper -->
    @include('admin.templates.partials.footer')

</div>
<!-- ./wrapper -->

    @include('admin.templates.partials.scripts')

</body>
</html>
