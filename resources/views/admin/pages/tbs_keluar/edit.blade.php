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
          <div class="card-body">
            {!! Form::model($item,['route' => [$url['update'],$item->id], 'method' => 'PUT']) !!}
              @include($form)
              <div class="card-footer text-right">
                <button class="btn btn-info mr-1" id="hitung" type="button">Hitung</button>
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