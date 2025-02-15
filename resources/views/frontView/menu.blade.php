<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>

  <!-- Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="cartModalLabel"><i class="fa-solid fa-cart-shopping icon-link-hover"
              id="cart"><span class="fs-6"> YOUR CART LIST </span></i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container row" id="cartModel">
          </div>
        </div>
        <div class="modal-footer">
          <a href="cart.html" class="btn btn-secondary rounded-2 checkoutBtn">
            Proceed to checkout
          </a>
          <button type="button" class="btn btn-secondary rounded-2 closeBtn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Wishlist Modal -->
  <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="wishlistModalLabel"><i class="fa-solid fa-heart icon-link-hover"
              id="wishlist"><span class="fs-6"> YOUR WISHLIST </span></i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container row" id="wishListModal">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded-2 closeBtn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <div class="menu-layout container-fluid">
    <div class="row menu-container">
      <div class="menu-nav col-lg-3 col-sm-12">
        <div class="d-flex flex-column align-items-center">
          <!-- Logo and Menu Section -->
          <div class="d-flex w-100 align-items-center justify-content-between">
            <!-- Logo Section -->
            <div class="text-center utensil logo-menu mx-auto">
              <i class="fa-solid fa-utensils mt-4 fa-bounce"></i>
            </div>
          
            <!-- Collapsible Button for Small Screens -->
            <button class="btn btn-primary d-lg-none mb-3 menuBar" type="button" data-bs-toggle="collapse" data-bs-target="#v-pills-collapse"
              aria-expanded="false" aria-controls="v-pills-collapse">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
          
        
          <!-- Navigation Section -->
          <div class="nav flex-column nav-pills w-100" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <!-- Collapsing content on small screens and visible on large screens -->
            <div class="collapse d-lg-block" id="v-pills-collapse">
              <!-- Home Item -->
              <div class="nav-logo-item d-flex align-items-center mb-3" style="justify-content: flex-start;">
                <i class="fa-solid fa-house me-2 ic-bg-home"></i>
                <a href="index.html" class="nav-link ps-0 text-start" id="v-pills-home-tab" role="tab" aria-controls="v-pills-home" aria-selected="false">
                  Home
                </a>
              </div>
        
              <!-- Meals Item -->
              <div class="nav-logo-item d-flex align-items-center mb-3" style="justify-content: flex-start;">
                <i class="fa-solid fa-bacon me-2 ic-bg ic-bg-meals"></i>
                <a href="#" class="nav-link left-nav ps-0 text-start" id="v-pills-meals-tab" role="tab" aria-controls="v-pills-meals" aria-selected="false">
                  Meals
                </a>
              </div>
        
              <!-- Cart Item -->
              <div class="nav-logo-item d-flex align-items-center mb-3" style="justify-content: flex-start;">
                <i class="fa-solid fa-cart-shopping me-2 icon-link-hover" id="cart"></i>
                <a href="#" class="nav-link ps-0 text-start" id="v-pills-cart-tab" data-bs-toggle="modal" data-bs-target="#cartModal"
                  aria-controls="v-pills-cart" aria-selected="true" onclick="viewCart(productArray)">
                  Cart
                </a>
              </div>
        
              <!-- Wishlist Item -->
              <div class="nav-logo-item d-flex align-items-center mb-3" style="justify-content: flex-start;">
                <i class="fa-solid fa-heart me-2"></i>
                <a href="#" class="nav-link ps-0 text-start" id="v-pills-wishlist-tab" data-bs-toggle="modal" data-bs-target="#wishlistModal"
                  aria-controls="v-pills-wishlist" aria-selected="true" onclick="viewWishList()">
                  Wishlist
                </a>
              </div>
        
              <!-- Photo Section -->
              <div class="photo-section text-center mt-4">
                <p class="mt-2">Fastest Delivery.</p>
              </div>
            </div>
          </div>
        </div>
        


      </div>


      <div class="menu-content col-lg-9 col-sm-12 my-5">
        <div class="search-cart row">
          <nav class="navbar bg-body-tertiary col-9">
            <div class="container-fluid">
              <form class="d-flex" role="search" onsubmit="event.preventDefault(); searchMealByName();">
                <input class="form-control me-2" type="search" id="searchInput" placeholder="Search"
                  aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            <!-- Toast Message -->
            <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050;">
              <div id="cartToast" class="toast align-items-center text-white bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                  <div class="toast-body d-flex align-items-center">
                    <p class="mb-0 me-2">Item added to cart!</p>
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                  </div>
                  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
                </div>
              </div>
            </div>

          </nav>
          <div class="cart col-3 bg-body-tertiary d-flex align-items-center justify-content-evenly">
            <!-- Wishlist Button  -->
            <button class="cart-btn bg-transparent border-0 position-relative" data-bs-toggle="modal"
              data-bs-target="#wishlistModal" aria-label="View Wishlist" onclick="viewWishList(wishlistItems)">
              <i class="fa-solid fa-heart wishlist-icon bg-body-tertiary position-relative"></i>
              <span id="wishlistNo"
                class="position-absolute fs-6 top-50 start-100 translate-middle badge rounded-pill bg-warning">
                0
              </span>
            </button>

            <!-- Cart Button  -->
            <button class="cart-btn bg-transparent border-0 position-relative" data-bs-toggle="modal"
              data-bs-target="#cartModal" aria-label="View Cart" onclick="viewCart(productArray)">
              <i class="fa-solid fa-cart-shopping cart-icon bg-body-tertiary position-relative"></i>
              <span id="cartNo"
                class="position-absolute fs-6 top-50 start-100 translate-middle badge rounded-pill bg-warning">
                0
              </span>
            </button>

          </div>
        </div>


        <div class="items  pb-3">
          <div class="all-items container-fluid col-12 d-flex justify-content-evenly gap-2 flex-wrap row h-100">
            <div class="card p-0  col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body  p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-mug-hot"></i>


              </div>
            </div>
            <div class="card p-0  col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body  p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-sharp-duotone fa-solid fa-fish"></i>

              </div>
            </div>
            <div class="card p-0  col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-pizza-slice"></i>

              </div>
            </div>
            <div class="card p-0  col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-ice-cream"></i>

              </div>
            </div>
            <div class="card p-0  col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-drumstick-bite"></i>

              </div>
            </div>
            <div class="card p-0 col-sm-4 col-lg-2" style="width: 7rem; height: 7rem;">
              <div class="card-body p-0 d-flex flex-column align-items-center justify-content-center">
                <i class="fa-solid fa-burger"></i>

              </div>
            </div>

          </div>

        </div>

        <!-- menu -->
        <div class="food col-lg-10 col-sm-9 row  d-flex justify-content-center align-items-center m-auto pt-3"
          id="mealElement">

          <div id="loading" class="text-center d-none mt-3">
            <div class="spinner-grow text-light" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2 connection">No Internet Connection. Please check your network.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>