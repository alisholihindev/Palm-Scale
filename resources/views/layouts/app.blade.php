<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title }} &mdash; TAP</title>

  {{-- Header --}}
  @include('layouts.header')

  {{-- Custom CSS --}}
  @yield('custom_css')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">

      {{-- Navbar --}}
      @include('layouts.navbar')

      {{-- Sidebar --}}
      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">

        <section class="section">

          {{-- Title --}}
          @include('layouts.title')

          {{-- Flash message --}}
          @include('layouts.flash')

          {{-- Main Content --}}
          @yield('content')

        </section>

      </div>

      {{-- First Footer --}}
      @include('layouts.first_footer')

    </div>
  </div>

  {{-- Second Footer --}}
  @include('layouts.footer')

  {{-- sweet alert --}}
  @include('layouts.sweet')

  {{-- sweet alert delete --}}
  @include('layouts.sweet_delete')

  {{-- Custom JS --}}
  @yield('custom_js')

</body>
</html>
