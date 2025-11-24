<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Pro Laravel Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">

  @stack('plugin-styles')

  <!-- Common CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @stack('style')
</head>
<body data-base-url="{{ url('/') }}">

  <div class="container-scroller" id="app">
    @include('admin.layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('admin.layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('admin.layout.footer')
      </div>
    </div>
  </div>

  <!-- Base JS -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

  @stack('plugin-scripts')

  <!-- Common JS -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>

  @stack('custom-scripts')
</body>
</html>


{{-- <!DOCTYPE html>
<html>
<head>
  <title>Star Admin Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  {!! Html::style('css/app.css') !!}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  {!! Html::script('js/app.js') !!}
  {!! Html::script('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  {!! Html::script('assets/js/off-canvas.js') !!}
  {!! Html::script('assets/js/hoverable-collapse.js') !!}
  {!! Html::script('assets/js/misc.js') !!}
  {!! Html::script('assets/js/settings.js') !!}
  {!! Html::script('assets/js/todolist.js') !!}
  <!-- end common js -->

  @stack('custom-scripts')
</body>
</html> --}}