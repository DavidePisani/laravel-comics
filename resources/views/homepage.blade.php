@extends('layout.app')
@section('main_content')
<section class="comics-list">
    <div class="container">

        <div class="series">
            CURRENT SERIES
        </div>

        <div class="products-list">
            @foreach ($comics_array as $comics)
                <div class="product-card">
                    <img src="{{$comics['thumb']}}" alt="">
                    <h3>{{$comics['title']}}</h3>
                </div>
            @endforeach
           
        </div>

        <div class="more">
           <a href="#">LOAD MORE</a> 
        </div>
    </div>
</section>
    
<section class="merch">
    <div class="container-merch">
        <span>
            <img src={{asset('img/buy-comics-digital-comics.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-merchandise.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-subscriptions.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-comics-shop-locator.png')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>

        <span>
            <img src={{asset('img/buy-dc-power-visa.svg')}} alt="Dc logo">

            <a href="#">DIGITAL COMICS</a>
        </span>
    </div>
</section>
@endsection