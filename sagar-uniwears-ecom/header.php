<?php
include("conn.php");
?>
   <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
    
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black sticky-active-into-mobile  ltn__logo-right-menu-option plr--9---">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="<?=$site?>index.php"><img src="<?=$site?>img/logo.png" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                       <li><a href="<?=$site?>index.php">Home</a></li>
                                         <?php
   $sql ="SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'LIMIT 4";
    $res =mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
                $category_name = $row['ct_pd_name'];
                $category_id = $row['id'];
                
    ?>
   
                                        <li class="menu-icon"><a href="#"><?php echo $category_name;?></a>
                                            <ul>
                                                  <?php
            $sub_cat ="SELECT * FROM `cat_prod` WHERE sub_category_id = '$category_id'  AND status = '1'";
             $res2 =mysqli_query($conn,$sub_cat);
             while($row=mysqli_fetch_assoc($res2)){
                 $sub_cat_pro = $row['ct_pd_name'];
                  $product_url = $row['ct_pd_url'];  
             
             ?>
                                                <li><a href="<?=$site?>product-details/<?= $product_url ?>" > <?php echo $sub_cat_pro;?></a></li>
                                              <?php
             }
             ?>
                                            </ul>
                                        </li>
                                        <?php
    }
    ?>
                                          <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                                          <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="#" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <?php if (isset($_SESSION['user_id'])): //if user logged in ?>
                                        <li><a href="<?=$site?>my-account.php">My Account</a></li>
                                        <li><a href="<?=$site?>logout.php">Log out</a></li>
                                        
                                         <?php else:      // user logged out ?>
                                         
                                        <li><a href="<?=$site?>login.php">Sign in</a></li>
                                        <li><a href="<?=$site?>register.php">Register</a></li>
                                       <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                        <div class="mini-cart-icon">
                            <a href="<?=$site?>cart.php" class="ltn__utilize-toggle">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div>
                        <!-- mini-cart -->
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
   

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.php"><img src="img/mobile-logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="<?=$site?>index.php">Home</a>  </li>
                    <?php
$sql ="SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $category_name = $row['ct_pd_name'];
    $category_id = $row['id'];
?>
                  <li><a href="#"><?php echo $category_name;?></a>
                                            <ul class="sub-menu">
                                                 <?php
            $sub_cat = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$category_id' AND status = '1' LIMIT 5";
            $res2 = mysqli_query($conn, $sub_cat);
            while ($row = mysqli_fetch_assoc($res2)) {
                $sub_cat_pro = $row['ct_pd_name'];
                 $product_url = $row['ct_pd_url'];  
                 
                 ?>
                                                <li><a href="<?=$site?>product-details/<?= $product_url ?>" > <?php echo $sub_cat_pro;?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                      
                                    
                                      
                                    <?php 
                                    }
                                    ?>
                 
                    <li><a href="<?=$site?>about-us.php">About us</a></li>
                    <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                     <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
                     
                </ul>
            </div>
           
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->
