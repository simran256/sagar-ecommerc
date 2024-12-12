<?php
include("conn.php");
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM `registered_users` WHERE `username`='$username' AND `password`='$pass'";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user_id'] = $row['id'];
        // Check if cart exists before login and preserve it
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $_SESSION['cart_before_login'] = $_SESSION['cart'];
        }

        // Regenerate session ID for security, ensuring the cart is preserved
        session_regenerate_id(true);

        // Restore the cart after regenerating the session ID
        if (isset($_SESSION['cart_before_login'])) {
            $_SESSION['cart'] = $_SESSION['cart_before_login'];
            unset($_SESSION['cart_before_login']); // Remove the temporary cart variable
        }

        // Redirect to the desired page after login
        header("Location: cart.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sagar Uniwears</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<div class="body-wrapper">
 <?php include('header.php')?>
   
   <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="section-title white-color">Login</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                              
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- LOGIN AREA START -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Sign In <br>To  Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="" class="ltn__form-box contact-form-box" method="post">
                            <input type="text" name="username" placeholder="Username*">
                            <input type="password" name="password" placeholder="Password*">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit" name="submit">SIGN IN</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                        <h4>DON'T HAVE AN ACCOUNT?</h4>
                        <p>Add items to your wishlistget personalised recommendations <br>
                            check out more quickly track your orders register</p>
                        <div class="btn-wrapper">
                            <a href="register.php" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

</div>
   
  <?php include('footer.php')?>
</body>
</html>

