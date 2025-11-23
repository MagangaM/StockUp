@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome</p>
<hr>

<div class="row">

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="{{ url('admin/branches') }}" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="{{ url('img/supermarket.gif') }}"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Branches</b></span>
                <span class="info-box-number">{{ $total_branches }} Branches</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="{{ url('admin/categories') }}" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="{{ url('img/list.gif') }}"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Categories</b></span>
                <span class="info-box-number">{{ $total_categories }} Categories</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="{{ url('admin/products') }}" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="{{ url('img/responsive.gif') }}"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Products</b></span>
                <span class="info-box-number">{{ $total_products }} Products</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

    <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <a href="{{ url('admin/suppliers') }}" class="info-box-icon">
                <span class="info-box-icon bg-warning">
                <img src="{{ url('img/pickup-truck.gif') }}"  alt="">
                </span>
              </a>

              <div class="info-box-content">
                <span class="info-box-text"><b>Suppliers</b></span>
                <span class="info-box-number">{{ $total_suppliers }} Suppliers</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
    </div>

</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop