@extends('layouts.app')

@section('custom_css')

@endsection

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>{{ $sub_title }}</h4>
          </div>
          <div class="card author-box card-primary">
            <div class="card-body">
            <div class="author-box-details">
              <div class="author-box-description">
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Nama</label>
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->nama) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Alamat</label>
                  <label for="" class="col-form-label col-10">: {{ $item->alamat }}</label>
                </div>
              <div class="w-100 d-sm-none"></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('custom_js')
@endsection