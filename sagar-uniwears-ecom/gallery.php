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
                            <h1 class="section-title white-color">Gallery</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
   <!-- Gallery area start -->
    <div class="ltn__gallery-area mb-50">
        <div class="container">
            <div class="row">
            <div class=" row ">
                  <?php
    $sql ="select * from gallery";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $image = $row['image'];
    
    ?>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="<?=$site?>admin/uploads/gallery/<?php echo $image;?>" data-rel="lightcase:myCollection">
                                 <img class="lightbox-enabled" src="<?=$site?>admin/uploads/gallery/<?php echo $image;?>" data-imgsrc="<?=$site?>admin/uploads/gallery/<?php echo $image;?>">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
    }
    ?>
                
                
             
                 </div>     
            </div>

        </div>
    </div>
    <!-- Gallery area end -->
</div>
   
  <?php include('footer.php')?>
</body>
</html>

