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
@endsection