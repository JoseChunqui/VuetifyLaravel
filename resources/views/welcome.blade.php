<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stack('css')
  </head>
  <body>
    <div id="app" class="">
      @php
        $var = "variable-php";
        $text = "Hola mundazo";
      @endphp
      <vue-nabvar ch-var={{ $var }}>
        <div class="">
          <vue-list-contact></vue-list-contact>
        </div>
        <span>{{$text}}</span>
        @yield('content')
      </vue-nabvar>
    </div>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    @stack('js')
  </body>
</html>
