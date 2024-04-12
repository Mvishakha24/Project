<?php
// process_login.php
if(isset($_POST[email])){
   $server = "localhost";
   $username = "root";
   $password = "";

    //Database Connection
   $con = mysqli_connect($server, $username, $password);

   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
   }

   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "INSERT INTO `login` (`username`, `password`, `dt`) VALUES ('$name','$password',current_timestamp());";

   if($con->query($sql) == true){
        $insert = true;
   }
   else{
        echo "ERROR: $sql <br> $con->error";
   }
   $con->close();
}

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtm">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


    <!-- header section starts -->
    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i>read&own</a>

            <form uiactions="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="index.html">home</a>
                <a href="#feature">feature</a>
                <a href="#arrivals">arrivals</a>
                <a href="review.html">reviews</a>
                <a href="contact.html">contact</a>
                <a href="membership.html">Membership</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->
    <!-- bottom navbar -->

    <nav class="bottom-navbar">
        <a href="index.html" class="fas fa-home"></a>
        <a href="#feature" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="review.html" class="fas fa-comments"></a>
        <a href="contact.html" class="fas fa-blogs"></a>
        <a href="membership.html" class="fas fa-blogs"></a>></a>
    </nav>

    <!-- login form -->

    
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
    
        <form id="login-form" action="process_login.php" method="POST">
            <h3>sign in</h3>
            <span>username</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="email">
            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">Click Here</a></p>
            <p>don't have an account' ? <a href="#">Create One</a></p>
        </form>
    
        <div id="error-message" style="color: red; display: none;">
            Please fill out all the fields in the form.
        </div>
    
    </div>