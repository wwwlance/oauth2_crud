<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'Laravel Application')</title>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <div id="app">
       @include('partials.navbar')
       <main class="py-4">
           @yield('content')
       </main>
   </div>
   <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>