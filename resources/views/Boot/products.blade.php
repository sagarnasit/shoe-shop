@extends('Boot.master')
@section('title')
    <titel>Products</titel>
@stop

@section('body')
    <section class="cart-content paira-animation-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center margin-bottom-40">
                    <div class="page-header">
                        <h1 class="text-uppercase">Products</h1>
                        <hr>
                    </div>
                </div>
                <div class="col-md-12 margin-bottom-40">

                    <div class="cart-item-list">

    @foreach($product as $p)
           <ul class="list-unstyled">
            <li>
                <div class="col-md-4 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">
                    <img class="img-responsive" src="{{url('images',$p->images->image)}}" alt="">
                </div>
                <div class="col-md-8 margin-top-20">
                    <h4 class="margin-top-20 margin-bottom-20"><span class="money font-size-16 color-scheme-3"> {{ $p->product->product_name}}</span></h4>
                    <h4  class="margin-bottom-20"><span class="money font-bold">Rs. {{$p->price}}</span></h4>

                </div>
            </li>

        </ul>

    @endforeach

  </section>



@endsection