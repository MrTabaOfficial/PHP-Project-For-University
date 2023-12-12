@extends('layouts.app')

@section('content')
<div class="container about">

    <h1 class="heading" data-aos="zoom-out">about us</h1>

    <section>

        <div class="details">
            <div class="box" data-aos="zoom-in">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptate accusantium repellat aliquam esse odit commodi est cumque perferendis rem veritatis minus aliquid delectus eligendi.</p>
                <a href="{{ route('contact') }}" class="btn">contact us</a>
            </div>
        </div>

        <div class="grid">

            <div class="box" data-aos="fade-up">
                <img src="{{ asset('mainpage/images/about-img-1.svg') }}" alt="">
                <h3>easy bookings</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="{{ asset('mainpage/images/about-img-2.svg') }}" alt="">
                <h3>travel world</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="{{ asset('mainpage/images/about-img-3.svg') }}" alt="">
                <h3>enjoy tours</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sed blanditiis.</p>
            </div>

        </div>

    </section>

</div>

<div class="container reviews">

    <h1 class="heading" data-aos="zoom-out">client's reviews</h1>

    <section class="grid">

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-1.jpg">
            <h3>Mikheil</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-2.jpg" alt="">
            <h3>Bidzina</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-3.jpg" alt="">
            <h3>Irakli</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-4.jpg" alt="">
            <h3>Irakli</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-5.jpg" alt="">
            <h3>Nikanor</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="mainpage/images/pic-6.jpg" alt="">
            <h3>Irma</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde illo distinctio repellendus delectus dicta modi iure, quod numquam nesciunt aspernatur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </section>

</div>
@endsection