<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'Travel in Georgia')</title>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('mainpage/css/style.css') }}">
</head>
<body>

   <header class="header" data-aos="fade-down">
      <section class="flex">
         <a href="{{ route('home') }}" class="logo">Travel in Georgia</a>
         <nav class="navbar">
            <a href="{{ route('home') }}">home</a>
            <a href="{{ route('about') }}">about</a>
            <a href="{{ route('tours') }}">tours</a>
            <a href="{{ route('destinations') }}">destinations</a>
            <a href="{{ route('contact') }}">contact</a>
            <a href="{{ route('login') }}">login</a>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
      </section>
   </header>

   @yield('content')

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script src="{{ asset('mainpage/js/script.js') }}"></script>

</body>
</html>