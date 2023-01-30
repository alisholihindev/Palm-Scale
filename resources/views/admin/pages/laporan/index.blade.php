@extends('layouts.app')

@section('custom_css')

@endsection

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12 col-xs-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>{{ $title }}</h4>
            
          </div>
          <div class="card-body">
            {!! Form::open(['route' => 'admin.laporan.cetak', 'method' => 'POST']) !!}
                <div class="form-group">
                    <label for="">Rentang Tanggal</label>
                    {!! Form::text('rentang_tanggal', null, ['class' => 'form-control daterange-cus','required']) !!}
                </div>
                <div class="form-group">
                    <label for="">Jenis Laporan</label>
                    {!! Form::select('jenis_laporan', ['tbs_masuk' => 'Tbs Masuk', 'tbs_keluar' => 'Tbs Keluar'], null, ['class' => 'form-control select2','required','placeholder' => 'Jenis Laporan']) !!}
                </div>
                <div class="form-group">
                    <label for="">Jenis File</label>
                    {!! Form::select('jenis_file', ['pdf' => 'PDF', 'excel' => 'Excel'], null, ['class' => 'form-control select2','required', 'placeholder' => 'Jenis File']) !!}
                </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1 btn-submit" type="submit">Submit</button>
              </div>
            {!! Form::close() !!}
          </div>
          <div class="card-footer bg-whitesmoke">
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('custom_js')

@endsection

