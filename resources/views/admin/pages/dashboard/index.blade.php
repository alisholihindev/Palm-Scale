@extends('layouts.app')

@section('custom_css')

@endsection

@section('content')

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-truck"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>TBS Masuk</h4>
            </div>
            <div class="card-body">
              1
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa-truck"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>TBS Keluar</h4>
            </div>
            <div class="card-body">
              2
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pembeli</h4>
            </div>
            <div class="card-body">
              3
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Petani</h4>
            </div>
            <div class="card-body">
              4
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('custom_js')

@endsection

