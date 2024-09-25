<!DOCTYPE html>
<?php include("coonection.php")?>

<?php
$categories="";
$show="select * from add_category";
$result=$conn->query($show);
while($row=$result->fetch()){
  
    $imgshow=$row["img_upload"];
    $categories=$categories."
    
    <div class='col-lg-3 col-sm-6'>
    <div class='icon_1'><img src='data/items/og/".$imgshow."></div>
    <h2 class='furnitures_text'>".$row["cat_name"]."</h2>
    <p class='dummy_text'>There are many variations of passages of Lorem Ipsum available, but the</p>
    <div class='read_bt_main'>
       <div class='read_bt'><a href='#'>Read More</a></div>
    </div>
 </div>
    
    
    
    ";
}
?>
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
      <title>Services</title>
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
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <?php include("navbar.php");?>
                  
                  <form class="form-inline my-2 my-lg-0">
                     <h1 class="call_text">Call Us : +01 1234567890</h1>
                  </form>
                  <div class="search_icon">
                     <ul>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <li><a href="login.php">LOGIN</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"> Categories</h1>
            <p class="many_taital">There are many variations of passages of Lorem Ipsum </p>
            <div class="services_section2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h2 class="furnitures_text">Dining Table Set</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="shop.php?dining=dining">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h2 class="furnitures_text">Sofas and Armchairs</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="shop.php?sofas=sofas">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h2 class="furnitures_text">Bed</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="shop.php?bed=bed">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/icon-4.png"></div>
                     <h2 class="furnitures_text">Tables and Chairs</h2>
                     <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="shop.php?table=table">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="fooer_logo"><img src="images/footer-logo.png"></div>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">LET US HELP YOU</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">INFORMATION</h1>
                  <p class="footer_lorem_text1">About Us<br>
                     Careers<br>
                     Sell on shopee<br>
                     Press & News<br>
                     Competitions<br>
                     Terms & Conditions
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">OUR Design</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
            </div>
            
         </div>
      </div>
      <!--  footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            </ul>
         </div>
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
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
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>