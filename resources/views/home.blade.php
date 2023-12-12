@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('mainpage/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body style="overflow: hidden;">

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
    </section>
</header>

<div class="container home" data-aos="zoom-out">
    <section class="flex" data-aos="zoom-in" data-aos-delay="600">
        <form action="" method="post">
            <h3>search your tour</h3>
            <p>where to</p>
            <input type="text" name="location" required maxlength="50" placeholder="enter tour location" class="box">
            <p>when to</p>
            <input type="date" name="date" class="box" required>
            <p>how many</p>
            <input type="number" name="guests" min="1" max="10" maxlength="2" placeholder="number of guests" required class="box">
            <input type="submit" value="search tour" name="search" class="btn">
        </form>
    </section>
</div>
@stack('scripts')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('mainpage/js/script.js') }}"></script>

</body>
</html>

@endsection