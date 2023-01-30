@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
                <li class="">{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    </div>
@endif