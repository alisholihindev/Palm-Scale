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
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Login Terakhir</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->roles->First()->name }}</td>
                      <td>{{ $item->last_login }}</td>
                      <td>
                        {!! Form::open(['route' => [$url['destroy'], $item->id], 'method' => 'DELETE', 'class' => 'delete']) !!}
                          <div class="dropdown d-inline mr-2">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Options
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route($url['show'], $item->id) }}">Lihat</a>
                              <a class="dropdown-item" href="{{ route($url['edit'], $item->id) }}">Edit</a>
                              @if ($item->id != auth()->user()->id)
                                <a class="dropdown-item deleteBtn" href="#">Hapus</a>
                              @endif
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

