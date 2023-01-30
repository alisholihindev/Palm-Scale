@extends('layouts.app')

@section('custom_css')

@endsection

@section('content')

  <div class="section-body">
    <div class="row">
      <div class="col-12 col-xs-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>{{ $sub_title }}</h4>
            <div class="float-right" style="margin-left: auto;">
              <a href="{{ route($url['create']) }}" class="btn btn-primary" style="border-radius: .25rem;">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-md table-lg table-xl table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Surat Jalan</th>
                    <th scope="col">Perusahaan Mitra (Pembeli)</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Netto</th>
                    <th scope="col">Pendapatan</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item->tgl }}</td>
                      <td>{{ $item->tbsKeluar->no_surat_jalan }}</td>
                      <td>{{ $item->perusahaanMitra->nama }}</td>
                      <td>{{ $item->harga }}</td>
                      <td>{{ $item->netto }}</td>
                      <td>Rp {{ number_format($item->pendapatan, 0, ',', '.') }}</td>
                      <td>
                        {!! Form::open(['route' => [$url['destroy'], $item->id], 'method' => 'DELETE', 'class' => 'delete']) !!}
                          <div class="dropdown d-inline mr-2">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Options
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route($url['show'], $item->id) }}">Lihat</a>
                              <a class="dropdown-item" href="{{ route($url['edit'], $item->id) }}">Edit</a>
                              <a class="dropdown-item deleteBtn" href="#">Hapus</a>
                            </div>
                          </div>
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="float-right">
                {!! $items->links('vendor.pagination.bootstrap-4'); !!}
            </div>
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

