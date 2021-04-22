@extends('admin.templates.master')

@section('content')
    <h1 class="text-dark text-center font-weight-bold">Selamat datang {{ auth()->user()->name }} di <span class="text-primary"> Aplikasi PerpusKita!</span></h1>

    <div class="row">
        <div class="col-lg-3 col-6">
            <img src="{{ asset('assets/images/undraw-1.svg') }}"  class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-6">
            <img src="{{ asset('assets/images/undraw-2.svg') }}"  class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 col-6">
            <img src="{{ asset('assets/images/undraw-3.svg') }}"  class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 col-6">
            <img src="{{ asset('assets/images/undraw-4.svg') }}" " alt="">
        </div>
    </div>
@endsection

