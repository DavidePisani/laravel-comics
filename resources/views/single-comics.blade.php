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

<section class="bg-grey">
    <div class="product-info">
        <div class="product-info-cont">
            <h3>Talent</h3>
            <div class="talent-description">
                <div class="col-small">
                  <span class="secondary-color">Art By:</span>       
                </div>
                <div class="col-big">
                  @foreach ( $comics['artists']  as $talent)
                    <span class="primary-color">{{$talent}}</span>
                    @if(!$loop->last), @endif
                  @endforeach
                </div>
            </div>

            <div class="talent-description">
                <div class="col-small">
                  <span class="secondary-color">Written By:</span>       
                </div>
                <div class="col-big">
                  @foreach ( $comics['writers']  as $talent)
                    <span class="primary-color">{{$talent}}</span>
                    @if(!$loop->last), @endif
                  @endforeach
                </div>
            </div>
        </div>
    
        <div class="spec-info-cont">
            <h3>Specs</h3>
            <div class="talent-description">
                <div class="col-small">
                    <span class="secondary-color">Series :</span>
                </div>
                <div class="col-big">
                    <span class="primary-color">{{$comics['series']}}</span>
                </div>
            </div>

            <div class="talent-description">
                <div class="col-small">
                    <span class="secondary-color">U.S. Price:</span>
                </div>
                <div class="col-big">
                    <span>{{$comics['price']}}</span>
                </div>
            </div>

            <div class="talent-description">
                <div class="col-small">
                    <span class="secondary-color">On Sale Date:</span>
                </div>
                <div class="col-big">
                    <span>{{$comics['sale_date']}}</span>
                </div>
            </div>
            
    
        </div>

    </div>
    



</section>
    
@endsection