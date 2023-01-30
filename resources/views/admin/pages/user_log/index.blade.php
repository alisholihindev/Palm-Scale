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
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-md table-lg table-xl table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>
                    <th scope="col">Log</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item->user->name }}</td>
                      <td>{{ $item->menu }}</td>
                      <td>{{  $item->action }}</td>
                      <td>{!! $item->log !!}</td>
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

