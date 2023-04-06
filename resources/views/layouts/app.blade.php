<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
   <div id="app">
      @yield('content')
   </div>
</body>
@yield('scripts')
<script src="https://kit.fontawesome.com/7e14f8359f.js" crossorigin="anonymous"></script>
</html>