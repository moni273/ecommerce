@extends('frontend.layouts.master')
@section('content')
<div class="shop">
    <div class="shop__filter">
        <div class="shop__filter--selectionbox">
            <p class="shop__filter--heading">
                Sort by:
            </p>
            <select name="sortby" id="sortby" class="shop__filter--selectbox">
                <option value="Popular">Popular</option>
                <option value="Popular">New</option>
                <option value="Popular">Random</option>
            </select>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search products.." title="Type in a name">


        <div class="shop__filter--filterbox">
            <div class="shop__filter--filterboxcontainer colorbox">

                <div class="shop__filter--filter color" style="background-color: rgb(45, 135, 70);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(0, 0, 0);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(34, 34, 219);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(25, 107, 25);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(155, 155, 155);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(255, 0, 255);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(32, 68, 118);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(207, 124, 16);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(178, 234, 220);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(240, 176, 187);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(124, 81, 175);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(213, 18, 18);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(191, 174, 143);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(235, 239, 109);"></div>
                <div class="shop__filter--filter color" style="background-color: rgb(18, 35, 11);"></div>

            </div>
        </div>

    </div>
    <div class="shop__products" id="myUL">
        <div class="shop__products--productscontainer">
            @foreach($products as $key => $value)
            <a href="agastiya.html" class="product shop__products--product">
                <div class="product__imagebox">
                    <img src="{{asset('images/'.$value->image)}}" alt="" class="product__imagebox--image">
                </div>
                <div class="product__details">
                    <p class="product__details--category">{{$value->category_name}}</p>
                    <p class="product__details--name">{{$value->name}}</p>
                    <p class="product__details--price">${{$value->price}}</p>
                </div>
            </a>
            @endforeach
        </div>                
    </div>
</div>
@endsection