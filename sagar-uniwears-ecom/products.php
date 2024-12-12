<?php 
include "conn.php";

// Display errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
  $header1=mysqli_query($conn,"select * from cms_menu where page_url='services'");
$header=mysqli_fetch_assoc($header1);
// Get the category slug from the URL
$category_slug = isset($_GET['category']) ? $_GET['category'] : '';

if (empty($category_slug)) {
    echo "Category not specified.";
    exit;
}

// Fetch the category details based on the slug
$sql = "SELECT * FROM cat_prod WHERE ct_pd_url = '$category_slug' AND status = '1' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $subcategory = mysqli_fetch_assoc($result);
    $subcategory_id = $subcategory['id']; 
    $subcategory_name = $subcategory['ct_pd_name'];
} 
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
                            <h1 class="section-title white-color"><?= $subcategory_name ?></h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?=$site?>index.php">Home</a></li>
                                <li><?= $subcategory_name ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
 <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ">
                                    <!-- ltn__product-item -->
                                    
            <?php
            $sql_products = "SELECT * FROM cat_prod WHERE sub_category_id = '$subcategory_id' AND status = '1'";
            $products_result = mysqli_query($conn, $sql_products);

            if (mysqli_num_rows($products_result) > 0) {
                while ($product = mysqli_fetch_assoc($products_result)) {
                    $product_name = $product['ct_pd_name'];
                    $product_images = explode(",", $product['cat_pd_image']); // Split image filenames
                    $product_url = $product['ct_pd_url'];
                    $price = $product['cat_pd_price'];
                    $mrp =$product['cat_pd_mrp'];
            ?>
                                    
                                    <div class="col-lg-3">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="<?= $site ?>product-details/<?= $product_url ?>">
                                                    <img src="<?= $site ?>/admin/uploads/product/cat_pd_image/<?= $product_images[0] ?>" alt="#">
                                                    </a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                       
                                                        <li>
                                                            <a href="#" title="Add to Cart" >
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" >
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                              
                                                <h2 class="product-title">
                                                    <a href="<?= $site ?>product-details/<?= $product_url ?>"><?= $product_name ?></a>
                                                </h2>
                                                <div class="product-price">
                                                    <span><i class="fas fa-rupee-sign"></i><?php echo $price;?></span>
                                                    <del><i class="fas fa-rupee-sign"></i><?php echo $mrp; ?></del>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                   <?php
                }
            } else {
            ?>
            <div class="col-12 text-center">
                <h4>Item Not Found</h4>
                <img src="<?= $site ?>assets/img/3973481.jpg" alt="Item Not Found" style="max-width: 300px;">
                <p>Sorry, no products found in this category.</p>
            </div>
            <?php
            }
            ?>
                                 
                                </div>
                            </div>
                        </div>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->
  
    
  
   
</div>
   
  <?php include('footer.php')?>
</body>
</html>

