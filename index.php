<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assests/imgs/favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="index.js">
    <title>Moda|Shop till you drop</title>
    
</head>
<body>


    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo"src="assests/imgs/logo.png" alt="Logo"></a> 
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
               <a href="insert.php"><i class="fa-solid fa-bag-shopping" style="font-size: 30px;"></i></a>
               <a href="admin_page.php"><i class="fa-solid fa-user" style="font-size: 30px;"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      <!--Home-->
      <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> For This Season</h1>
            <p>Moda offers the best products for the most affordable prices</p>
            <button class="black-btn">Shop Now</button>
        </div>
      </section>


      <!--Brand-->
      <section id="brand" class="container">
        <h1>BRANDS</h1>
        <div class="row">
            <img src="assests/imgs/burberry.svg" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assests/imgs/UA.jpeg" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assests/imgs/chanel.jpeg" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assests/imgs/Christian-Dior.webp" class="img-fluid col-lg-3 col-md-6 col-sm-12">
        </div>
      </section>


      <!--New-->
      <section id="new" class="w-100">
        <h1>HOT DEALS</h1>
        <div class="row p-0 m-0">
            <!--One-->
            <div class="one col-lg-4 col-md-12 col-sm-12">
                <img src="assests/imgs/1.jpeg" class="img-fluid">
                <div class="details">
                    <h2>Extreamely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--Two-->
            <div class="one col-lg-4 col-md-12 col-sm-12">
                <img src="assests/imgs/2.jpeg" class="img-fluid">
                <div class="details">
                    <h2>Comfy Jackets</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!--Three-->
            <div class="one col-lg-4 col-md-12 col-sm-12">
                <img src="assests/imgs/3.jpeg" class="img-fluid">
                <div class="details">
                    <h2>50% OFF Watches</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
      </section>


      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Featured Products</h3>
            <hr>
            <p>Check out our new products</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assests/imgs/p1.jpeg" class="img-fluid mb-3">
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">$199.80</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assests/imgs/p2.jpeg" class="img-fluid mb-3">
              <h5 class="p-name">Padded Bag</h5>
              <h4 class="p-price">$240.60</h4>
              <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assests/imgs/p3.jpeg" class="img-fluid mb-3">
            <h5 class="p-name">High Waisted Wide Jeans</h5>
            <h4 class="p-price">$150.40</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assests/imgs/p4.jpeg" class="img-fluid mb-3">
          <h5 class="p-name">Grey Suit</h5>
          <h4 class="p-price">$450.20</h4>
          <button class="buy-btn">Buy Now</button>
      </div>
        </div>
          
        </div>
      </section>


      <!--Clothes-->
      <section id="clothes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses and Coats</h3>
            <hr>
            <p>Check out our collection</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assests/imgs/c1.jpeg" class="img-fluid mb-3">
                <h5 class="p-name">Blazer Dress</h5>
                <h4 class="p-price">$120.99</h4>
                <button class="buy-btn"><a href="single_product.html">Buy Now</a></button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assests/imgs/c3.jpeg" class="img-fluid mb-3">
              <h5 class="p-name">Check Trench Coat</h5>
              <h4 class="p-price">$200.60</h4>
              <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assests/imgs/c2.jpeg" class="img-fluid mb-3">
            <h5 class="p-name">Satin Party Dress</h5>
            <h4 class="p-price">$180.40</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assests/imgs/c4.jpeg" class="img-fluid mb-3">
          <h5 class="p-name">Men's Trench Coat</h5>
          <h4 class="p-price">$260.20</h4>
          <button class="buy-btn">Buy Now</button>
      </div>
        </div>
          
        </div>
      </section>


      <!--Watches-->
      <section id="watches" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Watches</h3>
            <hr>
            <p>Check out our collection</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assests/imgs/w1.jpeg" class="img-fluid mb-3">
                <h5 class="p-name">Apple watch</h5>
                <h4 class="p-price">$210.99</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assests/imgs/w2.jpeg" class="img-fluid mb-3">
              <h5 class="p-name">Rosefield Ladies Watch</h5>
              <h4 class="p-price">$210.60</h4>
              <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assests/imgs/w3.jpeg" class="img-fluid mb-3">
            <h5 class="p-name">GShock Men's Watch</h5>
            <h4 class="p-price">$250.40</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assests/imgs/w4.jpeg" class="img-fluid mb-3">
          <h5 class="p-name">FitBit Versa 2</h5>
          <h4 class="p-price">$200.20</h4>
          <button class="buy-btn">Buy Now</button>
      </div>
        </div>
          
        </div>
      </section>


      <!--Shoes-->
      <section id="shoes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Shoes</h3>
            <hr>
            <p>Check out our collection</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assests/imgs/s1.jpeg" class="img-fluid mb-3">
                <h5 class="p-name">Air Jordans 1</h5>
                <h4 class="p-price">$165.99</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assests/imgs/s2.jpeg" class="img-fluid mb-3">
              <h5 class="p-name"> Nike Air Max 3</h5>
              <h4 class="p-price">$130.60</h4>
              <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img src="assests/imgs/s3.jpeg" class="img-fluid mb-3">
            <h5 class="p-name">Black Jordans 3</h5>
            <h4 class="p-price">$120.40</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assests/imgs/s4.jpeg" class="img-fluid mb-3">
          <h5 class="p-name">Adidas Mens Shoes</h5>
          <h4 class="p-price">$180.20</h4>
          <button class="buy-btn">Buy Now</button>
      </div>
        </div>

          
        </div>
      </section>
      <section class="product" id="menu">

<h2 class="product-category">Explore more</h2>
<button class="pre-btn"><img src="/images/left.png" alt=""></button>
<button class="nxt-btn"><img src="/images/right.png" alt=""></button>

<div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">20% Off</span>
            <img src="assests/imgs/c1.jpeg" alt="" class="product-thumb">
            <button class="card-btn">Order Now</button>
        </div>
        <div class="product-info">
            <h2 class="product-name">Indie Skirt</h2>
           
            <span class="price">$400</span>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">10% Off</span>
            <img src="assests/imgs/p1.jpeg" alt="" class="product-thumb">
            <button class="card-btn">Order Now</button>
        </div>
        <div class="product-info">
            <h2 class="product-name">Nike Airslice</h2>
            <p class="product-desc">
                Perfect slice, Perfect price.
            </p>
            <span class="price">$230</span>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">8% Off</span>
            <img src="assests/imgs/p3.jpeg" alt="" class="product-thumb">
            <button class="card-btn">Order Now</button>
        </div>
        <div class="product-info">
            <h2 class="product-name">Bell Bottoms</h2>
            <p class="product-desc">
             we got it for you.
            </p>
            <span class="price">$320 </span>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">30% Off</span>
            <img src="assests/imgs/p4.jpeg" alt="" class="product-thumb">
            <button class="card-btn">Order Now</button>
        </div>
        <div class="product-info">
            <h2 class="product-name">Goggles</h2>
            <p class="product-desc">
            Don't worry we got you.
            </p>
            <span class="price">$90 </span>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">13% Off</span>
            <img src="assests/imgs/r3.jpeg" alt="" class="product-thumb">
            <button class="card-btn">Order Now</button>
        </div>
        <div class="product-info">
            <h2 class="product-name">Sky red Suit</h2>
            <p class="product-desc">
                The aroma.
            </p>
            <span class="price">$130 </span>
        </div>
    </div>

  
    
</div>


</section>

      

      <!--Footer-->
      <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
             <h3 class="font-weight-bold mb-4 ">Moda</h3>
             <p>We sell quality products at affordable prices</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="mb-4 font-weight-bold ">Featured</h5>
              <p><a href="#" class="text-white" style="text-decoration: none;">MEN</a></p>
              <p><a href="#" class="text-white" style="text-decoration: none;">WOMEN</a></p>
              <p><a href="#" class="text-white" style="text-decoration: none;">KIDS</a></p>
              <p><a href="#" class="text-white" style="text-decoration: none;">NEW ARRIVALS</a></p>
              <p><a href="#" class="text-white" style="text-decoration: none;">SALE</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="mb-4 font-weight-bold">Contact Us</h5>
              <p> <i class="fa-solid fa-location-dot mr-3"></i>  15, Park Street, New York City</p>
              <p><i class="fa-solid fa-phone mr-3"></i> 987123450</p>
              <p><i class="fa-solid fa-envelope mr-3"></i> moda@gmail.com</p>
            </div>
          </div>
          <hr class="mb-4">
          <div class="row allign items-center">
            <div class="col-md-7 col-lg-7" id="footer-btm">
              <p> Copyright &copy;2023 All rights reverved by:
                <a href="#" style="text-decoration: none;">
                  <strong>Moda</strong>
                </a>
              </p>
            </div>
            <div class="col-md-5 col-lg-4">
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-facebook fa-lg"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-twitter fa-lg"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-youtube fa-lg"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
         
      
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>