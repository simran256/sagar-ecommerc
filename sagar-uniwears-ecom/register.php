<?php

include("conn.php");

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
                            <h1 class="section-title white-color">Register</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                              
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Register <br>Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-login-inner">
                        <form action="" class="ltn__form-box contact-form-box" method="post">
                            
                            <input type="text" name="fname" placeholder="First Name">
                            <input type="text" name="lname" placeholder="Last Name">
                            <input type="email" name="email" placeholder="Email*">
                            <input type="text" name="username" placeholder="Username*">
                            <input type="password" name="password" placeholder="Password*">
                            <input type="password" name="cpassword" placeholder="Confirm Password*">
                           
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                By clicking "create account", I consent to the privacy policy.
                            </label>
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit" name="submit">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <div class="go-to-btn mt-50">
                                <a href="<?=$site?>login.php">ALREADY HAVE AN ACCOUNT ?</a> <a href="<?=$site?>login.php">SIGN IN</a>
                            </div>
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
<?php

if(isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['cpassword'];
    
    if($password==$cpass){
        $sql ="INSERT INTO `registered_users`(`fname`, `lname`, `email`, `username`, `password`) 
        VALUES ('$fname','$lname','$email','$username','$password')";
        $res =mysqli_query($conn,$sql);
        

        
        if($res){
           
            header('location: login.php');
        }
        
    }
    else{
        echo "<script>alert('confirm password and password did not match ')</script>";
    }
    
    
    
    
    
    
}

?>
