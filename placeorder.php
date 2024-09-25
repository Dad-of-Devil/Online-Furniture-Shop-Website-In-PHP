<!DOCTYPE html>
<?php include("coonection.php")?>


<?php
session_start();
$email_id="";
if(isset($_SESSION["email"])==""){
include("logincheck.php");
}
else{

    $email_id=$_SESSION["email"];
    echo $email_id;
    $id="";
    if(isset($_GET["id"])){
       $id=$_GET["id"];
    }
    $viewCategories="";
    $imgshow="";
    $product_name="";
    $product_rate="";
            
    $show="select * from tbl_add_product where id=".$id;
    $result=$conn->query($show);
    while($row=$result->fetch()){
      
        $imgshow=$row["back_pic"];
        $product_name=$row["product_name"];
        $product_rate=$row["product_price"];
        
    
        $viewCategories=$viewCategories."
        
        <div class='col-md-6'>
                         <div class='container_main'>
                            <img src='data/items/og/".$imgshow."' alt='Avatar' class='image'>
                          
                         </div>
                         <h3 class='temper_text'> ".$row["product_name"]."</h3>
                         <p class='dololr_text'> ".$row["product_desc"]." </p>
                         <p class='dololr_text'> ".$row["product_price"]." </p>
    
                         <br/>
                         <br/>
                      </div>
        
        
        
        ";
    }
        if(isset($_POST["purchase"])){
                $uploadimg=$_POST["uploadimg"];
                $name=$_POST["name"];
                $email_ids=$_POST["email_id"];
                $mobileno=$_POST["mobileno"];
                $address=$_POST["address"];
                $city=$_POST["city"];
                $state=$_POST["state"];
                $district=$_POST["district"];
                $pincode=$_POST["pincode"];
                $product_names=$_POST["product_name"];
                $product_rates=$_POST["product_rate"];
    
                $insert="INSERT INTO `tbl_booking` (`uploadimg`,`name`, `emailid`, `mobileno`, `address`, `city`, `state`, `district`, `pincode`, `product_name`, `product_rate`) VALUES
                 ('".$uploadimg."','".$name."','".$email_ids."','".$mobileno."','".$address."','".$city."','".$state."','".$district."','".$pincode."','".$product_names."','".$product_rates."')";
                $conn->query($insert);
                echo "<script>
                alert('Order Placed Successfully');
                window.location.href='http://localhost/html/userdashboard.php';
    
                </script>";
            }
    

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
    <title>Built Better</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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

    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="row">

            <div class="col-md-6">
                <h1> Your Selected Product</h1>
                <?php echo $viewCategories;?>
            </div>
            <div class="col-md-6">
                <h1> Place Your Order</h1>

                <form action="placeorder.php?id=<?php echo $id;?>" method="POST">

                    <div class="form-group">
                        <label for="inputAddress">Name</label>
                        <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Enter Name"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Mobile No..</label>
                        <input type="text" class="form-control" id="inputAddress" name="mobileno"
                            placeholder="Enter Mobile" required>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address"
                            placeholder="Enter Address" required>
                    </div>
                    <div class="form-row">

                    <div class="form-group col-md-6">
                            <label for="inputState">Email Id</label>
                            <input type="text" class="form-control" id="inputAddress" value="<?php echo $email_id;?>"
                        name="email_id" placeholder="Enter Name" required>
                        </div>
                    </div>
                        
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" placeholder="enter City" id="inputCity" name="city"
                                required>
                        </div>

                        
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="enter state"
                                name="state" required>

                        </div>
                        
                        
                    

                        <div class="form-group col-md-4">
                            <label for="inputState">District</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="enter District"
                                name="district" required>

                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Pincode</label>
                            <input type="text" class="form-control" id="inputZip" name="pincode" required>
                        </div>

                    </div>
                    <br />
                    <input type="hidden" class="form-control" id="inputAddress" value="<?php echo $product_name;?>"
                        name="product_name" placeholder="Enter Name" required>
                        
                    <input type="text" class="form-control" id="inputAddress" value="<?php echo $imgshow;?>"
                        name="uploadimg" placeholder="Enter Name" required>
                    <input type="text" class="form-control" id="inputAddress" value="<?php echo $product_rate;?>"
                        name="product_rate" placeholder="Enter Name" required>
                        
                   
                    <button type="submit" name="purchase" class="btn btn-primary">Place Your order</button>
                </form>

            </div>
        </div>

    </div>
    <br />
    <br />
    <br />

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
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
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
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a></p>
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
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>