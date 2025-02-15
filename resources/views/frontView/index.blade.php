@extends('layout.content')
<!DOCTYPE html>
<html lang="en">


@section('mainContent')
<body class="body" id="#home">


  <div class="intro container-fluid">
    <section class="info text-center text-lg-start">
      <div class="intro-cont container-fluid p-4">
        <div class="row align-items-center intro-body">
          <div class="col-lg-6 intro-body-left">
            <h2 class="fw-bold my-3">Welcome to Dine In Restaurant</h2>
           
          </div>
          <div class="col-lg-6 text-center right-home">
            <img src="{{ asset('front/imgs/dish.jpg') }}" alt="Dish Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>


 
  <div class="services mb-3">
    <div class="service-title col-12 my-3">
      <h3 class="d-flex  align-items-center justify-content-center">Discover Our &nbsp <span
          class="Categ">Categories</span></h3>
    </div>
    <div class="meals container-fluid col-12 d-flex justify-content-evenly gap-2 flex-wrap mt-4 row h-100">
      <div class="card p-0 col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-solid fa-mug-saucer" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2">
            <p>Hot and Cold Drinks</p>
          </div>
        </div>
      </div>
      <div class="card p-0  col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body  p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-sharp-duotone fa-solid fa-fish" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2">
            <p>Seafood</p>
          </div>
        </div>
      </div>
      <div class="card p-0  col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-solid fa-pizza-slice" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2">
            <p>Pizza</p> <!-- Text below the icon -->
          </div>
        </div>
      </div>
      <div class="card p-0  col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-solid fa-ice-cream" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2">
            <p>Dessert</p> <!-- Text below the icon -->
          </div>
        </div>
      </div>
      <div class="card p-0  col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-solid fa-drumstick-bite" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2">
            <p>
            <div class="card-text text-white text-center mt-2">
              <p>Lunch</p> <!-- Text below the icon -->
            </div>
            </p> 
          </div>
        </div>
      </div>
      <div class="card p-0 col-sm-4 col-lg-2" style="width: 10rem; height: 10rem;">
        <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
          <i class="fa-solid fa-burger" style="color: #c08216;"></i>
          <div class="card-text text-white text-center mt-2 d-flex flex-column align-items-center">
            <p>Burger and Fast Food</p> <!-- Text below the icon -->
          </div>
        </div>
      </div>

    </div>
  </div>
 
  <div class="contact" id="app">
    <section class="info text-center text-lg-start">
      <div class="info-cont container-fluid p-4">
        <div class="row align-items-center info-body">
          <div class="col-lg-6">
            <h1 class="my-3">Dine With Us</h1>
            <h2 class="fw-bold my-3">Faster on Mobile</h2>
            <p>
              The Restaurant is a cozy and vibrant destination where culinary artistry meets a welcoming atmosphere.
              Offering a diverse menu of freshly prepared dishes, from hearty meals to delightful beverages.
            </p>
            <div class="apps row">
              <a href="https://www.apple.com/app-store/" target="_blank" class="col-lg-6 col-sm-6">
                  <img src="https://xtratheme.com/elementor/supermarket/wp-content/uploads/sites/106/2023/05/btn2.png"
                      alt="App Store" class="img-fluid">
              </a>
              <a href="https://play.google.com/store" target="_blank" class="col-lg-6 col-sm-6">
                  <img src="https://xtratheme.com/elementor/supermarket/wp-content/uploads/sites/106/2023/05/btn-1.png"
                      alt="Google Play" class="img-fluid">
              </a>
          </div>
          
          </div>
          <div class="col-lg-6 text-center">
            <img src="{{ asset('front/imgs/mobiles.png') }}" alt="Mobile Apps" class="phones">
          </div>
        </div>
      </div>
    </section>
  </div>
 
  <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>
@endsection


</html>