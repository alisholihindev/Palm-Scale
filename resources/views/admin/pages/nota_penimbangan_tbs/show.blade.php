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
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->tgl) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">No Surat Jalan</label>
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->tbsKeluar->no_surat_jalan) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Perusahaan Mitra (Pembeli)</label>
                  <label for="" class="col-form-label col-10">: {{ $item->perusahaanMitra->nama }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">harga</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->harga, 0, ',', '.') }}</label>
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
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Total Pendapatan</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->pendapatan, 0, ',', '.') }}</label>
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