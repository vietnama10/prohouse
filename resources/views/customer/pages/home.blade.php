@extends ('customer.master.master')
@section('title', 'Apartment, Villa, Office for rent in Ho Chi Minh')

@section('Main')
   <!-- slide -->
    <div class="slide-wrapper">
      <div id="home-slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./public/images/slides/slide-1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./public/images/slides/slide-2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./public/images/slides/slide-3.jpeg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!--/slide -->
    
    <!-- main page -->
    <!-- main page -->
    <div class="home-main-wrapper">
      <div id="home-main" class="container">
        <!-- blocks show property -->
        <div id="top-properties" class="row block">
          <h2>Top Properties</h2>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <span class="see-more"><a href="#">See more...</a></span>
        </div>
        <!-- blocks show property -->
        <div id="for-rent" class="row block">
          <h2>For rent</h2>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <span class="see-more"><a href="#">See more...</a></span>
        </div>
        <!-- blocks show property -->
        <div id="for-sale" class="row block">
          <h2>For sale</h2>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
            <div class="col-sm product-box rounded">
              <h3>House's name will be here</h3>
              <figure class="row">
                <div class="col">
                  <img src="./public/images/products/product-demo.jpeg" class="img-fluid">
                </div>
                <div class="col">
                  <p class="price rounded-right">Price: 100$</p>
                  <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ...</p>
                  <span class="see-more"><a href="#">More details</a></span>
                </div>
              </figure>
              <div class=" row product-properties">
                <span class="col">Area</span>
                <span class="col">Bedroom</span>
                <span class="col">Bathroom</span>
                <span class="col">Garages</span>
              </div>
            </div>
          </div>
          <span class="see-more"><a href="#">See more...</a></span>
        </div>
        <!-- features -->
        <div id="features" class="row block">
          <div class="col-sm">
            <a href="#" class="feature-icon"><i class="fas fa-users fa-3x"></i></a>
            <h5>about us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut</p>
            <a href="#" class="btn btn-dark">read more</a>
          </div>
          <div class="col-sm">
            <a href="#" class="feature-icon"><i class="fas fa-map-marker fa-3x"></i></a>
            <h5>contact us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut</p>
            <a href="#" class="btn btn-dark">read more</a>
          </div>
          <div class="col-sm">
            <a href="#" class="feature-icon"><i class="fas fa-search fa-3x"></i></a>
            <h5>recruitment</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut</p>
            <a href="#" class="btn btn-dark">read more</a>
          </div>
        </div>
      </div>
    </div>
    <!--/main page -->
    <!--/main page -->
@endsection