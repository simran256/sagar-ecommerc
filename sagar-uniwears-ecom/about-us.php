<?php include("conn.php");

 $header1=mysqli_query($conn,"select * from cms_menu where page_url='about'");
$header=mysqli_fetch_assoc($header1);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $header['page_title']?></title>
    <meta name="author" content="<?php echo $theme['company_name']?>">
    <meta name="description" content="<?php echo $header['message']?>">
    <link rel="canonical" href="<?php echo $header['page_keyword']?>" >
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
                            <h1 class="section-title white-color">About Us</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
  <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="img/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Know More About Us</h6>
                            <h1 class="section-title">Welcome to  Sagar Uniwears</h1>
                            
                        </div>
                       
                      <p>At Sagar Uniwears, we are dedicated to crafting high-quality school uniforms that blend comfort, durability, and style. With a deep understanding of the importance of school attire in shaping a student's identity, we strive to provide uniforms that reflect both tradition and modernity.</p>
                            <p>Our commitment to excellence ensures that every piece is made with precision, using premium fabrics and innovative designs tailored to meet the specific needs of each school. Whether it's ensuring comfort for long school days or providing a professional and cohesive look, we take pride in being a trusted partner for schools across the region.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  any question you have  //</h6>
                            <h1 class="section-title white-color">+91-9871967167</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:9871967167" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            <a href="#" class="btn btn-transparent btn-effect-4 white-color">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="img/call-image.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- CALL TO ACTION END -->

</div>
   
  <?php include('footer.php')?>
</body>
</html>

