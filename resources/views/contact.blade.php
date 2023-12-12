@extends('layouts.app')

@section('content')

<div class="container contact">

   <h1 class="heading" data-aos="zoom-out">contact us</h1>

   <section>

      <div class="row">

         <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.831388881709!2d44.7774496!3d41.7237905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d9f87aa5cb%3A0xa58cba22c87492d3!2sYour+Location!5e0!3m2!1sen!2sus!4v1551378252149" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="flip-left"></iframe>

            <form action="{{ route('contact.store') }}" method="post" data-aos="flip-right">
               @csrf
               <h3>get in touch</h3>
               <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
               <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
               <input type="number" name="phonenumber" required maxlength="9" min="0" max="9999999999" placeholder="enter your number" class="box">
               <textarea name="message" class="box" required maxlength="1000" cols="30" rows="10"></textarea>
               <input type="submit" value="send message" name="send" class="btn">
            </form>
      </div>

      <div class="grid">

         <div class="box" data-aos="fade-up">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <a href="tel:574001795">+574-001-795</a>
            <a href="tel:599074930">+599-074-930</a>
         </div>

         <div class="box" data-aos="fade-up">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <a href="mailto:shaburishviliirakli@gmail.com">shaburishviliirakli@gmail.com</a>
            <a href="mailto:gugavaluka4@gmail.com">gugavaluka4@gmail.com</a>
         </div>

         <div class="box" data-aos="fade-up">
            <i class="fas fa-map-marker-alt"></i>
            <h3>office address</h3>
            <a href="#">Georgian Technical University</a>
         </div>

      </div>

   </section>

</div>

@endsection