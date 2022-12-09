<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>


	<link rel="stylesheet" type="text/css" href="bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="bootstrapjs1.js"></script>
  <script type="text/javascript" src="bootstrapjs2.js"></script>
  <script type="text/javascript" src="bootstrapjs3.js"></script>
<style type="text/css">
  /* latin-ext */
@font-face {
  font-family: 'Staatliches';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://fonts.gstatic.com/s/staatliches/v11/HI_OiY8KO6hCsQSoAPmtMYeVvpCNOw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Staatliches';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://fonts.gstatic.com/s/staatliches/v11/HI_OiY8KO6hCsQSoAPmtMYebvpA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

       .blink {
                animation: blinker 1s linear infinite;
               
             
            }
            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

.wrapper{
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.wrapper .wrapper__video{
  object-fit: cover;
  width: 100%;
  height: 100%;
}


video {
  min-width: 100%;
  min-height: 100vh;
  z-index: 1;
}


.marquee {
/*   overflow: hidden; */
}

.marquee-content {
  display: flex;
  animation: scrolling 10s linear infinite;
}

.marquee-item {
  flex: 0 0 16vw;
  margin: 0 1vw;
/*   flex: 0 0 20vw; */
/*   margin: 0 2vw; */
}

.marquee-item img {
  display: block;
  width: 100%;
/*   padding: 0 20px; */
}

@keyframes scrolling {
  0% { transform: translateX(0); }
  100% { transform: translatex(-144vw); }
}

  
</style>

</head>

<body style="background-image: url('');background-repeat: no-repeat;background-size:cover ;">


  <?php include 'header.php'; ?>
</section>



	<header>
    <script type="text/javascript">
      $('.carousel').carousel({
  interval: 2000
})
    </script>
		
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item " >
      <img class="d-block w-100" src="img/slide2.webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
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

	</header>
	<br>
<section style="margin-bottom: ">
  <marquee  direction = "right"   scrollamount="12" style="background-color: black;color: yellow;font-family: Staatliches,sans-serif;font-weight: 800;
    font-size: 4rem;"><p class="blink" >  A taste you’ll remember - We’re hot and spicy… literally! - Burgers! Because no great story started with salad -</p>
  </marquee>
</section>

	<p class="menu">MENU</p>

<div class="container">
<div class="row">
  <div class="col-6 col-md-4">
    <a href="pizza.php" class="item " style="color: black;"> 
     <div class="card1">
   <div class="card1-img">
    </div>
    <div class="card1-content">
      <h1 class="size item_h">PIZZA</h1>
    
      
      <p class="hide font_p">Veggies is one of the most fun and easy dinners to make at home with just a few key tips you can create a restaurant-quality crust, and treat yourself to the best homemade pizza that’s completely customizable to your taste.</p>
     
      

    </div>
  </div></a>
</div>
<div class="col-6 col-md-4">

  <a href="burger.php" class="item" style="color: black;"> 
     <div class="card1">
    <div class="card1-img" style="background-image:url('img/card-7.jpg');">
    </div>
    <div class="card1-content">
      <h1 class="size item_h">BURGER</h1>
      
      
      <p class="hide font_p">
Shortened in length, the term Burger is used to describe a popular sandwich made from ground meats that are formed into a patty, cooked, and placed between two halves of a bun.</p>
     
      

    </div>
  </div></a>
</div>


<div class="col-6 col-md-4">


     <a href="sandwich.php" class="item" style="color: black;"> 
     <div class="card1">
    <div class="card1-img " style="background-image:url('img/sandwich.jpg');">
    </div>
    <div class="card1-content">
      <h1 class="size item_h">SANDWICH</h1>
      
      
      <p class="hide font_p">

The filling gives the sandwich its name. Fillings could include meat, poultry, fish, eggs, cheese, vegetables. Salami, cooked roast chicken, ox tongue, sliced cucumber and tomato are all popular fillings.</p>
           

    </div>
  </div>
</a>
</div>
</div>

<br>


<div class="row">

  <div class="col-6 col-md-4">
      <a href="shawarma.php" class="item" style="color: black;"> 
     <div class="card1">
    <div class="card1-img" style="background-image:url('img/shawarma.jpg');">
    </div>
    <div class="card1-content">
      <h1 class="size item_h" style="margin-top:11px">SHAWARMA</h1>
     
      
      <p class="hide font_p">
Shawarma  is a popular Middle Eastern dish that originated in the Ottoman Empire, consisting of meat cut into thin slices, stacked in a cone-like shape, and roasted on a slowly-turning vertical rotisserie or spit..</p>
      
    </div>
  </div></a>
</div>


<div class="col-6 col-md-4">
       <a href="beverages.php" class="item" style="color: black;"> 
     <div class="card1">
    <div class="card1-img" style="background-image:url('img/card-5.jpg');">
    </div>
    <div class="card1-content">
      <h1 class="size item_h" style="margin-top: 13px;">BEVERAGES</h1>
  
      
      <p class="hide font_p">
Electricity is actually made up of extremely tiny particles called electrons, that you cannot see with the naked eye unless you have been drinking.</p>
    
      

    </div>
  </div></a>
</div>

<div class="col-6 col-md-4">
      <a href="toppings.php" class="item" style="color: black;"> 
     <div class="card1">
    <div class="card1-img " style="background-image:url('img/card-8.jpg');">
    </div>
    <div class="card1-content">
      <h1 class="size item_h" style="margin-top: 9px;">CHOICE OF TOPPINGS</h1> 
      
      <p class="hide font_p">
Happiness is life served up with a scoop of acceptance, a topping of tolerance and sprinkles of hope, although chocolate sprinkles also work.
</p>
</div>
</div>
</a>
</div>
</div>


</div>
<section style="margin-bottom: -7px;">
  <marquee scrollamount="12"style="background-color: yellow;color: black;font-family: Staatliches,sans-serif;font-weight: 800;
    font-size: 4rem;"><p class="blink" >
    Hundreds of flavors under one roof - Food that makes you say wow - A pinch of passion in every dish -</p>
  </marquee>
</section>

<section class="ftco-section ftco-services" style="background-image:url('img/food.png');    color: #5c3d03;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
            <h2 class="mb-4 black" style="font-size: 25px;text-decoration: underline;">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading black">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading black" >Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading black">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </section>

<span></span>

<section style="margin-bottom: -4rem;">
  <video class="fullscreen" src="https://static.videezy.com/system/resources/previews/000/034/378/original/P1160395_4.mp4" playsinline autoplay muted loop>
  </video> 
</section>

</marquee>
<footer>
     <?php include 'footer.php'; ?>
 
</footer>





</body>
</html>