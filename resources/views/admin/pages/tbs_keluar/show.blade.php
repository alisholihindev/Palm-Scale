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
                  <label for="" class="col-form-label col-2">Tanggal</label>
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->tanggal) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Jam</label>
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->jam) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Sopir</label>
                  <label for="" class="col-form-label col-10">: {{ $item->sopir->nama }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">No Kendaraan</label>
                  <label for="" class="col-form-label col-10">: {{ $item->sopir->no_plat }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Tara</label>
                  <label for="" class="col-form-label col-10">: {{ $item->tara }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Gross</label>
                  <label for="" class="col-form-label col-10">: {{ $item->gross }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Netto</label>
                  <label for="" class="col-form-label col-10">: {{ $item->netto }}</label>
                </div>
              <div class="w-100">
                <div class="card-footer text-right">
                  <a class="btn btn-info mr-1" id="hitung" href="{{route('admin.tbskeluar.cetak', $item->id)}}" target="_blank"> <i class="fa fa-print"></i> Cetak Surat Jalan</a>
                </div>
              </div>
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