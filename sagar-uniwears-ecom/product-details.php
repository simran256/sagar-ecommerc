<?php
include('conn.php');


 $header1=mysqli_query($conn,"select * from cms_menu where page_url='services'");
$header=mysqli_fetch_assoc($header1);


// Get the URL alias from the GET request
$url = mysqli_real_escape_string($conn, $_GET['alias']);

// Query to get the subcategory based on the `ct_pd_url`
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
} 
// Fetch products under the specified subcategory using `sub_category_id`
$sub_cat_query = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$subcategory_id' AND status = '1'";
$sub_cat_result = mysqli_query($conn, $sub_cat_query);



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
    <link rel="shortcut icon" href="<?=$site?>img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=$site?>css/font-icons.css">
    <link rel="stylesheet" href="<?=$site?>css/plugins.css">
    <link rel="stylesheet" href="<?=$site?>css/style.css">
    <link rel="stylesheet" href="<?=$site?>css/responsive.css">
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
                            <h1 class="section-title white-color"><?php echo $subcategory_name; ?></h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?=$site?>index.php">Home</a></li>
                                <li><a href="#"><?php echo $subcategory_name; ?></a></li>
                                <?php while ($row = mysqli_fetch_assoc($sub_cat_result)) {
                        $sub_cat_pro = $row['ct_pd_name']; ?>
                                <li><?php echo $sub_cat_pro; ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
  <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                            <a href="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" data-rel="lightcase:myCollection">
                                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[1]; ?>" data-rel="lightcase:myCollection">
                                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[1]; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[2]; ?>" data-rel="lightcase:myCollection">
                                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[2]; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[3]; ?>" data-rel="lightcase:myCollection">
                                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[3]; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[4]; ?>" data-rel="lightcase:myCollection">
                                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[4]; ?>" alt="Image">
                                            </a>
                                        </div>
                                       
                                     
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <div class="single-small-img">
                                            <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[1]; ?>" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[2]; ?>" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[3]; ?>" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[4]; ?>" alt="Image">
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                  
                                    <h3><?php echo $subcategory_name; ?></h3>
                                   <div class="product-price">
                                                    <span><i class="fas fa-rupee-sign"></i><?php echo $price;?></span>
                                                    <del><i class="fas fa-rupee-sign"></i><?php echo $mrp; ?></del>
                                                </div>
                                    <p><?php echo $long_desc; ?> </p>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Categories:</strong> 
                                                <span>
                                                    <a href="#"><?php echo $subcategory_name; ?></a>
                                                   
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <form action="<?=$site?>cart.php" method="post">
                                                      <input type="hidden" name="product_id" value="<?= $subcategory_id ?>">
                                                        <input type="hidden" name="product_name" value="<?=  $subcategory_name ?>">
                                                        <input type="hidden" name="product_price" value="<?=  $price ?>">
                                                        <input type="hidden" name="product_image" value="<?= $product_images[0] ?>">
                                                    <button type="submit" class="theme-btn-1 btn btn-effect-1" name="add_to_cart">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-3">
                                        <ul>
                                            <li>
                                                <form action="" method="post">
                                                   
                                                   <button type="submit" style="background: none; border: none; padding: 0;">
                                                        <a href="" class="" title="Wishlist">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                         </button>
                                                         </form>
                                            </li>
                                         
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li>Share:</li>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="ltn__safe-checkout">
                                        <h5>Guaranteed Safe Checkout</h5>
                                        <img src="<?=$site?>img/icons/payment-4.png" alt="Payment Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab Start -->
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                               
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    
                                    <p><?php echo $long_desc; ?></p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- Shop Tab End -->
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->
   
</div>
       <!-- FOOTER AREA END -->
 <script src="<?=$site?>js/plugins.js"></script>
    <script src="<?=$site?>js/main.js"></script>
  <?php include('footer.php')?>
  
</body>
</html>

