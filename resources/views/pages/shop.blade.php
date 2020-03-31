@extends('layouts.app')

@section('title','Shopping')

@section('content')
<div class="container mt-5">

  
<!--Section: Content-->
<section class="dark-grey-text text-center">
  
  <!-- Section heading -->
  <h3 class="font-weight-bold mb-4 pb-2" style="text-transform:uppercase">what we can sell you</h3>
  <!-- Section description -->
  <hr width="20%"/>
  <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam.</p>

    <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    @foreach($cars as $car)

    <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
      <!-- Card -->
      <div class="card align-items-center">
        <!-- Card image -->
        <div class="view overlay">
          <img src="{{$car->car_image}}" class="card-img-top"
            alt="">
          <a href="/view/{{$car->id}}/item">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card image -->
        <!-- Card content -->
        <div class="card-body text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h6>{{$car->car_model}}</h6>
          </a>
          <h5 class="mb-3">
            <strong>
              <a href="" class="dark-grey-text">{{$car->car_name}}
              </a>
            </strong>
          </h5>
          <p class="grey-text">
              {{$car->car_desc}}
          </p>
          <h5 class="font-weight-bold blue-text mb-0">
            <strong><span>&#8369;</span> {{$car->car_price}}</strong>
          </h5>
         
        </div>
        <form style="width:100%" action="{{ route('user.addtocart') }}" method="post">
        @csrf
        <input hidden value="{{ Auth::user()->email }}" name="user"/>
        <input hidden value="{{ $car->car_name }}" name="cart_prod" type="text">
        <input hidden value="{{ $car->car_price }}" name="cart_prod_price"/>
        <button type="submit" style="width:70%" class="btn btn-md btn-info">
            Add to cart
        </button>
        </form>
        <!-- Card content -->
      </div>
      <!-- Card -->
    </div>
    
    @endforeach
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Content-->


</div>
@endsection('content')