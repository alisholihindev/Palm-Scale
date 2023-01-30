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
            <div class="author-box-left">
              <img alt="image" src="{{ asset('admin_assets/img/avatar/avatar-1.png') }}" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
            </div>
            <div class="author-box-details">
              <div class="author-box-description">
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Nama</label>
                  <label for="" class="col-form-label col-10">: {{ ucfirst($item->name) }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Email</label>
                  <label for="" class="col-form-label col-10">: {{ $item->email }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Role</label>
                  <label for="" class="col-form-label col-10">: {{ $item->roles->first()->name }}</label>
                </div>
                <div class="form-group row">
                  <label for="" class="col-form-label col-2">Login Terakhir</label>
                  <label for="" class="col-form-label col-10">: {{ $item->last_login }}</label>
                </div>
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