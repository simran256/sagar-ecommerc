<?php
include("conn.php");

 
 $header1=mysqli_query($conn,"select * from cms_menu where page_url='home'");
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
   
    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 text-color-white bg-image" data-bg="img/slider1.png">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                      
                                        <h6 class="slide-sub-title animated"> 100% genuine Products</h6>
                                        <h1 class="slide-title animated">Welcome to <br>SAGAR UNIWEARS</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1 text-uppercase">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="slide-item-img">
                                    <img src="img/slider/23.png" alt="#">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 text-color-white bg-image" data-bg="img/slider2.png">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title animated"> 100% genuine Products</h6>
                                        <h1 class="slide-title animated ">Welcome to <br>SAGAR UNIWEARS</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1 text-uppercase">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="slide-item-img slide-img-left">
                                    <img src="img/slider/21.png" alt="#">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

       <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-50 pb-40" data-bg="img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color">Top Categories</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                 <?php
                    $categories_query = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id = '0' AND status = '1' ");
                    
                    while ($category = mysqli_fetch_assoc($categories_query)) {
                        $category_name = $category['ct_pd_name'];
                        $category_url = $category['ct_pd_url'];
                          $category_id = $category['id'];
                        $image = explode(",", $category['cat_pd_image']);
                        
                    
                    $sub_category_count_query = mysqli_query($conn, "SELECT COUNT(*) as sub_category_count FROM cat_prod WHERE sub_category_id = '$category_id' AND status = '1'");
                    $sub_category_count = mysqli_fetch_assoc($sub_category_count_query)['sub_category_count'];
                    ?>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        
                        <div class="ltn__category-item-img">
                            <a href="<?=$site?>products.php?category=<?=$category_url?>">
                                <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?=$image[0]; ?>" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="<?=$site?>products.php?category=<?=$category_url?>"><?php echo $category_name; ?></a></h5>
                            <h6>(<?php echo $sub_category_count; ?> items)</h6>
                        </div>
                    </div>
                </div>
                <!--<div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca2.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">School Tie</a></h5>-->
                <!--            <h6>(11 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca3.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">School Socks</a></h5>-->
                <!--            <h6>(15 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca4.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">I'd Card Lanyard</a></h5>-->
                <!--            <h6>(15 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca5.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">Buckle</a></h5>-->
                <!--            <h6>(7 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca6.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">Medal Badges</a></h5>-->
                <!--            <h6>(8 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- <div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca7.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">Stockings</a></h5>-->
                <!--            <h6>(8 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- <div class="col-12">-->
                <!--    <div class="ltn__category-item ltn__category-item-3 text-center">-->
                <!--        <div class="ltn__category-item-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/ca8.jpg" alt="Image">-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <div class="ltn__category-item-name">-->
                <!--            <h5><a href="#">Cycling Shorts</a></h5>-->
                <!--            <h6>(5 item)</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
  <div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Our Products</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">
                        <?php
                        // Fetch main categories
                        $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                        $res = mysqli_query($conn, $sql);
                        $activeClass = 'active show'; // Track active class for the first tab

                        while ($row = mysqli_fetch_assoc($res)) {
                            $category_name = htmlspecialchars($row['ct_pd_name']); // Escape output
                            $category_id = $row['id'];
                        ?>
                            <a class="<?php echo $activeClass; ?>" data-bs-toggle="tab" href="#liton_tab_<?php echo $category_id; ?>">
                                <?php echo $category_name; ?>
                            </a>
                        <?php
                            $activeClass = ''; // Reset active class after the first tab
                        }
                        ?>
                    </div>
                </div>

                <div class="tab-content">
                    <?php
                    // Reset active class for the first tab pane
                    $activeClass = 'active show';

                    // Re-fetch categories to create corresponding tab content
                    $res = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($res)) {
                        $category_id = $row['id'];
                    ?>
                        <div class="tab-pane fade <?php echo $activeClass; ?>" id="liton_tab_<?php echo $category_id; ?>">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row">
                                    <?php
                                    // Query to get products based on the category ID
                                    $sub_cat = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$category_id' AND status = '1'";
                                    $res2 = mysqli_query($conn, $sub_cat);

                                    if (mysqli_num_rows($res2) > 0) {
                                        while ($product_row = mysqli_fetch_assoc($res2)) {
                                            $sub_cat_pro = htmlspecialchars($product_row['ct_pd_name']); // Escape output
                                            $product_url = htmlspecialchars($product_row['ct_pd_url']); // Escape output
                                            $product_price = htmlspecialchars($product_row['cat_pd_price']); // Assuming you have this field
                                            $product_old_price = htmlspecialchars($product_row['cat_pd_mrp']); // Assuming you have this field
                                            $product_images = explode(",", $product_row['cat_pd_image']);
                                    ?>
                                            <!-- ltn__product-item -->
                                            <div class="col-lg-3">
                                                <div class="ltn__product-item ltn__product-item-3 text-center">
                                                    <div class="product-img">
                                                        <a href="<?= $site ?>product-details/<?= $product_url ?>"><img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" alt="<?php echo $sub_cat_pro; ?>"></a>
                                                        <div class="product-badge">
                                                            <ul>
                                                                <li class="sale-badge">19%</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-hover-action">
                                                            <ul>
                                                                <li>
                                                                    <a href="<?= $site ?>product-details/<?= $product_url ?>" title="Add to Cart">
                                                                        <i class="fas fa-shopping-cart p-3"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?= $site ?>product-details/<?= $product_url ?>" title="Wishlist">
                                                                        <i class="far fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h2 class="product-title"><a href="<?= $site ?>product-details/<?= $product_url ?>"><?php echo $sub_cat_pro; ?></a></h2>
                                                        <div class="product-price">
                                                            <span><i class="fas fa-rupee-sign"></i><?php echo $product_price; ?></span>
                                                            <del><i class="fas fa-rupee-sign"></i><?php echo $product_old_price; ?></del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "<p class='text-center'>No products found under this category.</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        $activeClass = ''; // Reset active class after the first tab pane
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- PRODUCT TAB AREA END -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
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

    <!-- PRODUCT AREA START (product-item-3) -->
    <div class="ltn__product-area ltn__product-gutter pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                <!-- ltn__product-item -->
                
                <?php
    // Query to get products based on category
    $sub_cat = "SELECT * FROM `cat_prod` WHERE sub_category_id != '0' AND status = '1' LIMIT 8";
    $res2 = mysqli_query($conn, $sub_cat);

    // Loop through each product
    while ($product_row = mysqli_fetch_assoc($res2)) {
        $sub_cat_pro = htmlspecialchars($product_row['ct_pd_name']); // Escape output
        $product_url = htmlspecialchars($product_row['ct_pd_url']); // Escape output
        $product_price = htmlspecialchars($product_row['cat_pd_price']); // Assuming you have this field
        $product_old_price = htmlspecialchars($product_row['cat_pd_mrp']); // Assuming you have this field
        $product_images = explode(",", $product_row['cat_pd_image']);
    ?>      
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-left">
                        <div class="product-img">
                            <a href="<?= $site ?>product-details/<?= $product_url ?>"><img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" alt="image"></a>
                           
                            <div class="product-hover-action">
                                <ul>
                                  
                                    <li>
                                        <a href="<?= $site ?>product-details/<?= $product_url ?>" title="Add to Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $site ?>product-details/<?= $product_url ?>" title="Wishlist">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="<?= $site ?>product-details/<?= $product_url ?>"> <?php echo $sub_cat_pro; ?></a></h2>
                            <div class="product-price">
                                <span><i class="fas fa-rupee-sign"></i><?php echo $product_price; ?></span>
                                <del><i class="fas fa-rupee-sign"></i><?php echo $product_price; ?></del>
                            </div>
                        </div>
                    </div>
                </div>
             <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->
    
    
    
    
    
    
    
    
  
    <!-- TESTIMONIAL AREA START (testimonial-4) -->
    <div class="ltn__testimonial-area section-bg-1 pt-50 pb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Testimonials</h6>
                        <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                <?php
                $sql ="SELECT * FROM `daysdata` WHERE `status`='1'";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res)){
                    $image  =$row['image'];
                    $desc  =$row['description'];
                    $name  =$row['name'];
                    $post  =$row['designation'];
                      $product_images =  $row['image']; 
                
                ?>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="<?= $site ?>admin/uploads/service/<?= $product_images; ?>" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p><?=$desc?></p>
                            <h4><?=$name?></h4>
                            <h6><?=$post?></h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
              
              <?php
              }
              ?>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->




  <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                      <i class="fas fa-cubes"></i>
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Curated Products</h4>
                                        <p>Provide Curated Products for
                                            all product over $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>24X7 Support</h4>
                                        <p>We ensure the product quality
                                            that is our main goal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                       <i class="fas fa-users"></i>
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Customers Satisfaction</h4>
                                        <p>Return product within 3 days
                                            for any product you buy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                       <i class="fas fa-truck"></i>
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Free home delivery</h4>
                                        <p>We ensure the product quality
                                            that you can trust easily</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

</div>
   
  <?php include('footer.php')?>
</body>
</html>

