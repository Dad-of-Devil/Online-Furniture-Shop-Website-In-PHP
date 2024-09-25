<?php


if(isset($_SESSION["email"])){
    if($_SESSION["email"]==""){
        header("LOCATION:http://localhost/html/login.php");
    }
}else{
    header("LOCATION:http://localhost/html/login.php");

}
?>