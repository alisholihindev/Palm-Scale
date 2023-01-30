<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>STISLA - LOGIN</title>

  @include('layouts.header')

</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{{ asset('admin_assets/img/logo.png') }}" alt="logo" width="60%" class="shadow-light mb-5 mt-2">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1"value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password">
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>


              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

            </form>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="admin_assets/img/unsplash/login-bg.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                {{-- <h1 class="mb-2 display-4 font-weight-bold">Selamat Pagi</h1>
                <h5 class="font-weight-normal text-muted-transparent">Kalimantan Timur, Indonesia</h5> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layouts.footer')

  <!-- Page Specific JS File -->
</body>
</html>
