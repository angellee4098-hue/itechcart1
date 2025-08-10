<!-- connect file -->
<?php

include("includes/db.connection.php");
session_start();

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>All Models</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="best_sellers.php">Best Sellers</a></li>
                           <li><a href="new_releases.php">New Releases</a></li>
                           <li><a href="all_models.php">All Models</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
        
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="home.php">Home</a>
                     <a href="new_releases.php">New Releases</a>
                     <a href="best_sellers.php">Best Sellers</a>
                     <a href="all_models.php">All Models</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="new_releases.php">New Releases</a>
                        <a class="dropdown-item" href="best_sellers.php">Best Sellers</a>
                        <a class="dropdown-item" href="all_models.php">All Models</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #000000; border-color:#000000 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                     <ul>
                     <li><a href="cart.php">
                     <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #050005;"></i>
                     <span class="padding_10" style="color: black;">Cart</span></a>
                        </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
                              <span class="padding_10" style="color: black; ">User</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">All Models</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone Xr (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱15,500</span></p>
                                 <div class="jewellery_img"><img src="images/iphonexr.jpg"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm16').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm16" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="16">
    <input type="hidden" name="product_name" value="Iphone Xr (128GB)">
    <input type="hidden" name="product_price" value="15,500">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone X (64 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱11,500</span></p>
                                 <div class="jewellery_img"><img src="images/iphonex.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm17').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm17" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="17">
    <input type="hidden" name="product_name" value="Iphone X (64GB)">
    <input type="hidden" name="product_price" value="11,500">
</form>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone Xs Max (64 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱12,990</span></p>
                                 <img src="images/iphonexsmax.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm18').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm18" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="18">
    <input type="hidden" name="product_name" value="Iphone Xs Max (64GB)">
    <input type="hidden" name="product_price" value="12,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 8 Plus (64 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱7,500</span></p>
                                 <div class="jewellery_img"><img src="images/iphone8plus.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm19').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm19" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="19">
    <input type="hidden" name="product_name" value="Iphone 8 Plus (64GB)">
    <input type="hidden" name="product_price" value="7,500">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 7 Plus (64 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱6,500</span></p>
                                 <div class="jewellery_img"><img src="images/iphone7plus.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm20').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm20" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="20">
    <input type="hidden" name="product_name" value="Iphone 7 Plus (64GB)">
    <input type="hidden" name="product_price" value="6,500">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 8 (64 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱5,000</span></p>
                                 <img src="images/iphone8.webp" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm21').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm21" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="21">
    <input type="hidden" name="product_name" value="Iphone 8 (64GB)">
    <input type="hidden" name="product_price" value="5,000">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16 (512 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱63,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm22').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm22" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="22">
    <input type="hidden" name="product_name" value="Iphone 16 (512GB)">
    <input type="hidden" name="product_price" value="63,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 (128GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱47,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm23').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm23" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="23">
    <input type="hidden" name="product_name" value="Iphone 15 (128GB)">
    <input type="hidden" name="product_price" value="47,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro Max (1TB) </h4>
                                 <p class="price_text">Price  <span style="color: #262626;"> ₱108,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15pm.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm24').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm24" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="24">
    <input type="hidden" name="product_name" value="Iphone 15 Pro Max (1TB)">
    <input type="hidden" name="product_price" value="108,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16 Pro (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱76,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16pro (2).png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm25').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm25" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="25">
    <input type="hidden" name="product_name" value="Iphone 16 Pro (128 GB)">
    <input type="hidden" name="product_price" value="76,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 16e (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱37,490</span></p>
                                 <div class="tshirt_img"><img src="images/iphone16e.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm26').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm26" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="26">
    <input type="hidden" name="product_name" value="Iphone 16e (128 GB)">
    <input type="hidden" name="product_price" value="37,490">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro (256 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;"> ₱59,990</span></p>
                                 <div class="tshirt_img"><img src="images/iphone15pro.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm27').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm27" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="27">
    <input type="hidden" name="product_name" value="Iphone 15 Pro (256 GB)">
    <input type="hidden" name="product_price" value="59,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Pro Max (1TB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱108,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone15pm.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm28').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm28" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="28">
    <input type="hidden" name="product_name" value="Iphone 15 Pro Max (1TB)">
    <input type="hidden" name="product_price" value="108,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 13 (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱37,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone13.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm29').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm29" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="29">
    <input type="hidden" name="product_name" value="Iphone 13 (128GB)">
    <input type="hidden" name="product_price" value="37,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 11 (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱24,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone11.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm30').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm30" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="30">
    <input type="hidden" name="product_name" value="Iphone 11 (128GB)">
    <input type="hidden" name="product_price" value="24,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 14 (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱52,990.00</span></p>
                                 <img src="images/iphone 14.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm31').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm31" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="31">
    <input type="hidden" name="product_name" value="Iphone 14 (256GB)">
    <input type="hidden" name="product_price" value="52,990.00">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 12 Pro Max (128 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱70,990</span></p>
                                 <img src="images/iphone12pm.webp" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm32').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm32" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="32">
    <input type="hidden" name="product_name" value="Iphone 12 Pro Max (128GB)">
    <input type="hidden" name="product_price" value="70,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 Plus (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱66,990</span></p>
                                 <img src="images/iphone15plus.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm33').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm33" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="33">
    <input type="hidden" name="product_name" value="Iphone 15 Plus (256GB)">
    <input type="hidden" name="product_price" value="66,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 13 Pro Max (256 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱58,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone13promax.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm34').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm34" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="34">
    <input type="hidden" name="product_name" value="Iphone 13 Pro Max (256GB)">
    <input type="hidden" name="product_price" value="58,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 12 (128 GB)</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">₱34,990</span></p>
                                  <img src="images/iphone12.png" style="width: 400px; height: 400px; object-fit: contain;">
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm35').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm35" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="35">
    <input type="hidden" name="product_name" value="Iphone 12 (128GB)">
    <input type="hidden" name="product_price" value="34,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 12 Mini (128GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱25,000</span></p>
                                 <div class="electronic_img"><img src="images/iphone12mini.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm36').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm36" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="36">
    <input type="hidden" name="product_name" value="Iphone 12 Mini (128GB)">
    <input type="hidden" name="product_price" value="25,000">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
      <!-- jewellery  section end -->
      <!-- footer section start -->
            <div class="location_main">Help Phone Number : <a href="#">09912948281</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2025 All Rights Reserved.<a href="https://html.design"></a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>