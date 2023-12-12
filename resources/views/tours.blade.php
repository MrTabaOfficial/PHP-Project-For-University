@extends('layouts.app')

@section('content')

<div class="container tours">

   <h1 class="heading" data-aos="zoom-out">popular places</h1>

   <section class="grid">

      <div class="box" data-aos="fade-up">
         <div class="price"><i class="fas fa-dollar-sign"></i><span>1299</span></div>
         <img src="{{ asset('mainpage/images/tour-img-1.jpg') }}" class="image" alt="">
         <h3 class="name">Tobavarchkhili</h3>
         <p class="address">Samegrelo zemo-svaneti, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

      <div class="box" data-aos="fade-up">
         <p class="price"><i class="fas fa-dollar-sign"></i><span>1999</span></p>
         <img src="{{ asset('mainpage/images/tour-img-2.jpg') }}" alt="" class="image">
         <h3 class="name">Batumi</h3>
         <p class="address">Batumi, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

      <div class="box" data-aos="fade-up">
         <p class="price"><i class="fas fa-dollar-sign"></i><span>3000</span></p>
         <img src="{{ asset('mainpage/images/tour-img-3.jpg') }}" alt="" class="image">
         <h3 class="name">Mestia</h3>
         <p class="address">Svaneti, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

      <div class="box" data-aos="fade-up">
         <p class="price"><i class="fas fa-dollar-sign"></i><span>1203</span></p>
         <img src="{{ asset('mainpage/images/tour-img-4.jpg') }}" alt="" class="image">
         <h3 class="name">ilia lake</h3>
         <p class="address">Kakheti, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

      <div class="box" data-aos="fade-up">
         <p class="price"><i class="fas fa-dollar-sign"></i><span>1999</span></p>
         <img src="{{ asset('mainpage/images/tour-img-5.jpg') }}" alt="" class="image">
         <h3 class="name">Yazbegi</h3>
         <p class="address">mcxeta-mtianeti, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

      <div class="box" data-aos="fade-up">
         <p class="price"><i class="fas fa-dollar-sign"></i><span>1000</span></p>
         <img src="{{ asset('mainpage/images/tour-img-6.jpg') }}" alt="" class="image">
         <h3 class="name">Shovi</h3>
         <p class="address">Racha, Georgia</p>
         <a href="#" class="btn">send enquiry</a>
      </div>

   </section>

</div>

@endsection