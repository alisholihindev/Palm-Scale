<div class="card">
  <div class="card-header">
    <h3>{{ $title }}</h3>
    @if (isset($url) && array_key_exists('index', $url))
      <div class="float-right" style="margin-left: auto;">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="border-radius: .25rem;">
          <i class="fa fa-search"></i> Pencarian
        </button>
      </div>
    @endif
  </div>
  @include('layouts.filter')
</div>