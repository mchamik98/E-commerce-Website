<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");
?>
        
    <!--Bootstrap carousel-->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"> 
            <div class="carousel-item active" style="background-image: url(/jpg/slider1.jpg);">
                <div class="container">
                        <div class="carousel-text">
                        <span>View our amazing deals</span>
                        <strong>Check out our latest arrivals</strong>
                        <a href="shop.php" class="carousel-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(/jpg/slider2.jpg);">
                <div class="container">
                    <div class="carousel-text">
                        <span>Highest gaming performance</span>
                        <strong>The latest gaming equipment only with us</strong>
                        <a href="shop.php" class="carousel-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(/jpg/slider3.jpg);">
                <div class="container">
                    <div class="carousel-text">
                        <span>Gamers dream</span>
                        <strong>Shop the best gaming accesories</strong>
                        <a href="shop.php" class="carousel-btn">Shop Now</a>
                    </div>
                </div>
            </div>        
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="sr-only">Next</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </a>
    </div>

    <!--Bootstrap product slider-->
    <div class="featuredProducts">

        <div class="text-container">
            <h2 class="text-center">Featured Products</h2>
        </div>
        
        <div id="carouselProductSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer1.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/acer1.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer3.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/acer3.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/logitech1.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>  
                    <div class="col-2"><img class="d-block w-100" src="/jpg/acer4.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>    
                </div>
                
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-2"><img class="d-block w-100" src="/jpg/acer2.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer5.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer4.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer1.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/acer5.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>
                    <div class="col-2"><img class="d-block w-100" src="/jpg/razer2.jpg" alt="First slide">
                        <div class="newProduct-details">
                            <span class="Newp-name">Razer headset</span>
                            <span class="p-price">£22.00</span>
                            <button class="p-button">Add to basket</button>
                        </div>
                    </div>

                    
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselProductSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselProductSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
    </div>

    <!--New arrivals-->
    <div class="new-arrival">
        <div class="new-arrival-cont">
            <div class="text-container">
                <h2 class="text-center">New arrivals</h2>
            </div>
            <!--Products-->
            <div class="product-container">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer4.jpg"/>
                    </div>
                    <div class="newProduct-details">
                        <a href="#" class="Newp-name">Acer chair</a>
                        <span class="p-price">£99.00</span>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/razer3.jpg"/>
                    </div>
                    <div class="newProduct-details">
                        <a href="#" class="Newp-name">Acer chair</a>
                        <span class="p-price">£99.00</span>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/logitech1.jpg"/>
                    </div>
                    <div class="newProduct-details">
                        <a href="#" class="Newp-name">Acer chair</a>
                        <span class="p-price">£99.00</span>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-img">
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="jpg/acer5.jpg"/>
                    </div>
                    <div class="newProduct-details">
                        <a href="#" class="Newp-name">Acer chair</a>
                        <span class="p-price">£99.00</span>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="banner-text-container">
            <div class="banner-text">
                <span>Limited offer</span>
                <strong>Get 30% off<br/>with promo code</strong>
            </div>
        </div>
    </div>

      <!--services-->
      <div class="services">
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Free Shipping</span>
            <p>Free Shipping for all UK order</p>
        </div>
        
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We support 24h a day</p>
        </div>
        
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>
    </div>

    <?php
        outputFooter("Home");
    ?>
    
   