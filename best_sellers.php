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
      <title>Best Sellers</title>
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
      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Best Sellers</h1>
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm7').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm7" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="7">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm8').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm8" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="8">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm9').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm9" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="9">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm13').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm13" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="13">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm14').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm14" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="14">
    <input type="hidden" name="product_name" value="Iphone 12 PRO MAX (128GB)">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm15').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm15" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="15">
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
                                 <h4 class="shirt_text">Iphone 16 (512 GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱63,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone16.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm10').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm10" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="10">
    <input type="hidden" name="product_name" value="Iphone 16 (512GB)">
    <input type="hidden" name="product_price" value="63,990">
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
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm11').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm11" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="11">
    <input type="hidden" name="product_name" value="Iphone 12 (128GB)">
    <input type="hidden" name="product_price" value="34,990">
</form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Iphone 15 (128GB)</h4>
                                 <p class="price_text"> Price  <span style="color: #262626;">₱47,990</span></p>
                                 <div class="electronic_img"><img src="images/iphone15.webp"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="buy_bt" style="text-align: right;">
                                    <span style="cursor:pointer; color:#f26522; font-weight:bold;" onclick="document.getElementById('cartForm12').submit();">
        Add to Cart
    </span>
</div>

<form id="cartForm12" action="add_to_cart.php" method="POST" style="display:none;">
    <input type="hidden" name="product_id" value="12">
    <input type="hidden" name="product_name" value="Iphone 15 (128GB)">
    <input type="hidden" name="product_price" value="47,990">
</form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
      <!-- electronic section end -->
      <!-- footer section start -->
               
            </div>
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