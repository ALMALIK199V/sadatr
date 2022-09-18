<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/almalik5.css" rel="stylesheet">

   
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script type="" src="js/jquery.js"></script>     

</head><!--/head-->

<body>

		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						                                     <div class="logo2">
						                                                	<a href="index.html"><img src="img/logo.jpg" alt="">
															             </a>
						                                     	
						                                     </div>
                     </div>
			     <div class="col-sm-6">										 
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle asd1" data-toggle="dropdown">
									Language
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">English</a></li>
									<li><a href="#">Arabic</a></li>
								</ul>
							</div>
                    		
                          	<div class="btn-group">
                          		<button type="button" class="btn btn-default dropdown-toggle asd" data-toggle="dropdown">
                          			DOLLAR
                          			<span class="caret"></span>
                          		</button>
                          		<ul class="dropdown-menu">
                          			<li><a href="#">US Dollar</a></li>
                          			<li><a href="#">IQD</a></li>
                          		</ul>
                          	</div>
						</div>
					
                  </div>	
			                                	<div class="col-sm-8">
			                                		<div class="shop-menu pull-right">
			                                			<ul class="nav navbar-nav">
			                                				<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
			                                				<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
			                                				<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
			                                				<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
			                                				<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
			                                			</ul>
			                                		</div>
			                                  </div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->











	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">

						
						<div class="carousel-inner">
							
						<?php include "qoery8.php" ?>
						  <?php add_drive();?>

							

							
						</div>
						

					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->






    <?php include "qoery6.php" ?>




<div class="swiper-container">
    <div class="swiper-wrapper">
 
        
        
      <?php get_cat33();?>
      

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>












<script type="text/javascript" src="js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      pagination: '.swiper-pagination',
        paginationClickable: true,   
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
      loop: true, 

      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 180,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      autoplay: {
        delay: 2000,
       },
    });

$(function asd() {
   loop:false;
});
$(function asd2() {
   loop:true;
});

</script>

















	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>الاصناف</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						      <?php include "catogrt.php" ?>
						        <?php get_asnaf();?>

						</div><!--/category-products-->
					

                             <div class="up-adds">
								<a href=""><img src="imgee/ads2.jpg" alt=""></a>
								<a class="aa" href="">قسم المطبخ</a>
							 </div>
						
						<div class="shipping text-center"><!--shipping-->
						<div class="container">
                                    <div class="window">
                                      <div class="slider">
                                        <a href="" class="a-inter"></a>
									   <img src="imgee/adds1.jpeg" alt="" class="image">
                                       <img src="imgee/adds2.jpeg" alt="" class="image">
                                       <img src="imgee/adds3.jpeg" alt="" class="image">
                                       <img src="imgee/adds4.jpeg" alt="" class="image">
                                       <img src="imgee/adds5.jpeg" alt="" class="image">
                                       <img src="imgee/adds6.jpeg" alt="" class="image">
									   <img src="imgee/adds7.jpeg" alt="" class="image">
                                       <img src="imgee/adds8.jpeg" alt="" class="image">
                                       <img src="imgee/adds9.jpeg" alt="" class="image">
                                       
                                      </div>
                                    </div>
                                  </div>
								  <a class="aaa" href="">قسم الأجهزة الكهربائية</a>
						</div><!--/shipping-->
<style>
.up-adds{
	width: 300px;
	height: 300px;
	margin-left: 10px;
	cursor: pointer;
	overflow:hidden;
	position: relative;
	border-radius: 15px;
	padding: 0;
}
.up-adds:hover img{
    transform: scale(1.5);
}
.category-products {
    margin-bottom: 15px;
    padding-bottom: 0px;
    padding-top: px;
}
.up-adds img{
	width: 100%;
	height: 100%;
	transition:transform 2s ;
}
.up-adds .aa ,.aaa{
	position: absolute;
	z-index: 9999999;
	top:0%;
	left:70%;
	color:#000;
	background-color: rgb(217, 255, 0);
	width:100px;
	text-align: center;
	box-sizing: border-box;
	border-radius: 0px;
	font-size: 14px;
	height: 24px;
}
.aaa{
	width: 130px;
	left:57.8%;
	top:0.1%;
	border-radius: 0px;
}
.a-inter{
	position: absolute;
	z-index: 9999999;
	width: 100%;
	height: 100%;
}
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.container {
   padding: 0;
   margin: 0;
}
.shipping{

  width: 300px;
  height:390px;
  background-color: #ffffff;
  border-radius: 20px;
  margin-left:10px ;
  box-shadow: 0 0 20px 10px #6511112f, 0 0 10px 5px #66191917;
  margin-bottom: 0px;
  padding-top:6px ;
}
.window {
  height: 100%;
  width: 100%;
  overflow: hidden;
  position: relative;
  margin-top:50px ;
  background-color: #ffffff;
  margin-left: 20px;
}

.slider {
  height: 100%;
  width: 400%;
  display: flex;

}
.slider a{


}
.slider img{
	width: 100%;
	height: 100%;
}
.image {
  position: relative;
  flex: 0 0 20%;
  max-width: 20%;
  animation: slide 20s infinite ease-in-out;
  background-color: #ffffff;
}

.slider:hover .image {
  animation-play-state: paused;
}

@keyframes slide {
  0% {
    left: 0;
  }
  20% {
    left: -20%;
  }
  40% {
    left: -40%;
  }
  60% {
    left: -60%;
  }
  80% {
    left: -80%;
  }
  100% {
    left: -100%;
  }
}
</style>						
					
					</div>
				</div>
					
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					
						<h2 class="title text-center">المنتجات المميزة</h2>
						<div class="card-actions">


					                  <?php include "qoery7.php" ?> 
									       

					                            <?php momez();?>
										
											
						 
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
	


					</div>
			</div>
		</div>
	</section>


				






<div id="container">
<h2 class="section-titele">عناصر مختارة</h2>
	<span class="line"></span>
  <div id="slider">
    <div id="slide">
    <?php include "qoery9.php" ?>
                <?php add_mohtara();?>
      </div>

    </div>
    <div id="placer">
      <div id="next-button" class="nav-button">
		<button>NEXT&nbsp<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
      </div>
      <div id="previous-button" class="nav-button">
		<button><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbspPREVIOUS</button>
      </div>
      <div>
      </div>
    </div>
<script>

containerWidth = document.getElementById("container").clientWidth;
nextButton = document.getElementById("next-button");
previousButton = document.getElementById("previous-button");
slide = document.getElementById("slide");

firstCardLeftMargin = 10;
cardWidthAndRightMargin = 100 + 10;
totalWidth = slide.clientWidth;

const transformSlide = (val) => {
  slide.style.transform = `translate(${val}px,0px)`;
};

const getCurrentPosition = () => {
  const stringValue = slide.style.transform;
  const transformValue = stringValue.substring(
    stringValue.indexOf("(") + 1,
    stringValue.lastIndexOf("p")
  );
  return transformValue ? parseInt(transformValue) : 0;
};

const getNextPosition = () => {
  //take current position of the slide
  const currentPosition = getCurrentPosition();
  //last visibile pixel
  const lastVisiblePixel = containerWidth + -1 * currentPosition;
  //use the last visible pixel to calculate which card was fully-visible.
  //This will return a float whose floor will indicate the last fully-visible card.
  //We will show the next card as the first card after sliding
  const lastFullyVisibleCard = Math.floor(
    (lastVisiblePixel - firstCardLeftMargin) / cardWidthAndRightMargin
  );
  //Calculate the distance from slideStart to the lastVisibleCard's end
  const distanceToNextCard =
    lastFullyVisibleCard * cardWidthAndRightMargin + firstCardLeftMargin;
  if (distanceToNextCard + containerWidth > totalWidth) {
    return totalWidth - containerWidth + firstCardLeftMargin;
  }
  return distanceToNextCard - 10;
};

const getPreviousPosition = () => {
  const currentPosition = getCurrentPosition(); //take current position
  //getting first partially visible card. This will be the last card shown when the button is clicked.
  const firstPartiallyVisibleCard = Math.floor(
    (-1 * currentPosition - firstCardLeftMargin) / cardWidthAndRightMargin
  );
  //get distance to card end from slide start
  const distanceToCardEndFromSlideStart =
    firstPartiallyVisibleCard * cardWidthAndRightMargin + firstCardLeftMargin;
  //translateX distance would be total distance - containerwidth
  const distanceNeeded = distanceToCardEndFromSlideStart - containerWidth;
  //return calculateDistance only if it is positive
  if (distanceNeeded > 0) {
    return -distanceNeeded;
  }
  //if needed distance < 0 i.e. card end is closer to start than container width means that this scroll would overshoot the left edge.
  //return 0 and return the slide to it's initial position
  return 0;
};

nextButton.addEventListener("click", (event) => {
  transformSlide(-getNextPosition());
});

previousButton.addEventListener("click", (event) => {
  transformSlide(getPreviousPosition());
});

</script>












<script type="text/javascript" src="js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container2', {
      effect: 'coverflow',
      grabCursor: true,
      pagination: '.swiper-pagination',
        paginationClickable: true,   

      loop: true, 

      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 120,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination2',
      },
      autoplay: {
        delay: 2500,
       },
    });

$(function asd() {
   loop:false;
});
$(function asd2() {
   loop:true;
});

</script>










					
					

	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>