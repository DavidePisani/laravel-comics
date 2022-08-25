@extends('layout.app')
@section('page-title')
COMICS
@endsection

@section('main_content')
<section class="product-component">
    <div class="img-box">
        <div class="comic-cover">
          <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
            <span class="comic-desc">
            COMICS BOOK
            </span>
          <div class="gallery">
            <span>VIEW GALLERY</span>
          </div>
        </div>   
    </div>

    <div class="product-description">
        <div class="descpition-section">
          <h1>{{$comics['title']}}</h1>
          <div class="availability">
            <div class="price">
              <span class="us-price">U.S. Price: <span>{{ $comics['price'] }}</span></span>
              <span>AVAILABLE</span>
            </div>
            <div class="aviability-box">
              <span>Check Availability</span>
              <i class="fa-solid fa-caret-down"></i>
            </div>
          </div>

            <p class="comics-description">
                {{ $comics['description'] }}
            </p>
        </div>

        <div class="apply-now">
            <h4>Advertisement</h4>
            <img src="{{asset('../img/adv.jpg')}}" alt="apply_now">
        </div>
    </div>
</section>
    
@endsection