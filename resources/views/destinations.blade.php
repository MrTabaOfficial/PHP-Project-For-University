@extends('layouts.app')

@section('content')

<div class="container destinations">

   <h1 class="heading" data-aos="zoom-out">destinations</h1>

   <section class="grid">

      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-1.jpg') }}" alt="">
         <h3><span>Ajara</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-2.jpg') }}" alt="">
         <h3><span>Samegrelo</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-3.jpg') }}" alt="">
         <h3><span>Racha</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-4.jpg') }}" alt="">
         <h3><span>Kakheti</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-5.jpg') }}" alt="">
         <h3><span>Svaneti</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-6.jpg') }}" alt="">
         <h3><span>Imereti</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-7.jpg') }}" alt="">
         <h3><span>Qvemo-Qartli</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-8.jpg') }}" alt="">
         <h3><span>Shida-Qartli</span></h3>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="{{ asset('mainpage/images/destination-9.jpg') }}" alt="">
         <h3><span>Mcxeta-Mtianeti</span></h3>
      </div>

   </section>

</div>

@endsection