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
    <style>
        .nice-select.open, .nice-select:active, .nice-select:focus{
            display:none !important;
        }
        div:where(.swal2-container) .swal2-select {
    min-width: 50%;
    max-width: 100%;
    padding: .375em .625em;
    background: rgba(0, 0, 0, 0);
    color: inherit;
    font-size: 1.125em;
    display: none !important;
}
    </style>
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
                            <h1 class="section-title white-color">Contact us</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
 
    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>Email Address</h3>
                        <p>sagar.uniwears@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>Phone Number</h3>
                        <p>+91-9871967167</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>Office Address</h3>
                        <p>441-b Ist Floor Katra Nabi Bux, Niwar Wali Gali, Chappal Market, Sadar Bazaar, Sadar Bazaar, New Delhi, Delhi 110006</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->
    
    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Get A Quote</h4>
                        <form id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="input-item  ltn__custom-icon">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message"></textarea>
                            </div>
                            
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" name="submit">Submit</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.076382330245!2d77.2117685755017!3d28.6574315256511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd6f00000001%3A0x431ac44b6d1a33bb!2sschool%20tie%20and%20belt%20manufacturer!5e0!3m2!1sen!2sin!4v1729060774806!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <!-- GOOGLE MAP AREA END -->
   
</div>
   
  <?php include('footer.php')?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
include("conn.php");

if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $number = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Check if email is valid
    if ($email === false) {
        echo "<script>alert('Invalid email address')</script>";
        exit;
    }
    
     ob_start(); 
    include 'emailTemplate.php'; 
     $message2 = ob_get_clean(); 
     
    $to = "developer.web2techsolutions@gmail.com";
    $subject = $subject;
    $body = "<html><body>";
    $body .= "<h2>Enquiry From: " . $name . "</h2>";
    $body .= "<p><strong>Name:</strong> " . $name . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $body .= "<p><strong>Number:</strong> " . $number . "</p>";
    $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    $body .= "<p><strong>Message:</strong> " . $message . "</p>";
    $body .= $message2; // This will append the content of emailTemplate.php
    $body .= "</body></html>";
    
    $headers = "From: no-reply@sagaruniwears.com\r\n" .
                       "Reply-To: no-reply@sagaruniwears.com\r\n" .
                       "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n";

    
    if (mail($to, $subject, $body, $headers)) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Data Sent Successfully",
                      
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "contact-us.php";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Error!",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
            
}
?>



    <!--// $sql = "INSERT INTO `tbl_contact`(`name`, `email`, `phone`, `subject`, `message`) -->
    <!--// VALUES ('$name','$email','$number','$subject','$message')";-->
    <!--// $res = mysqli_query($conn,$sql);-->
    <!--// if($res){-->
    <!--//     echo "<script>alert('data submitted successfully')</script>";-->
    <!--// }-->
    <!--// else{-->
    <!--//     echo "<script>alert('error in submitting data')</script>";-->
    <!--// }-->
