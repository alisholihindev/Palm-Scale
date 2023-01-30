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
                  <label for="" class="col-form-label col-2">harga</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->harga, 0, ',', '.') }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Potongan</label>
                  <label for="" class="col-form-label col-10">: {{ $item->potongan }}%</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Gross</label>
                  <label for="" class="col-form-label col-10">: {{ $item->gross }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Tara</label>
                  <label for="" class="col-form-label col-10">: {{ $item->tara }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Netto 1</label>
                  <label for="" class="col-form-label col-10">: {{ $item->netto_1 }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Netto 2</label>
                  <label for="" class="col-form-label col-10">: {{ $item->netto_2 }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Total Biaya</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->total_biaya, 0, ',', '.') }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Biaya Bongkar</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->biaya_bongkar, 0, ',', '.') }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Total Akhir</label>
                  <label for="" class="col-form-label col-10">: Rp {{ number_format($item->total_akhir, 0, ',', '.') }}</label>
                </div>
              <div class="w-100">
                <div class="card-footer text-right">
                  <a class="btn btn-info mr-1" id="hitung" href="{{route('admin.tbsmasuk.cetak', $item->id)}}" target="_blank"> <i class="fa fa-print"></i> Cetak Nota</a>
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