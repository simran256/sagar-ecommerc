 <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-1 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="<?=$site?>img/logo-main.jpg" alt="Logo">
                                </div>
                            </div>
                            <p>At Sagar Uniwears, we are dedicated to crafting high-quality school uniforms that blend comfort, durability, and style. </p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>441-b Ist Floor Katra Nabi Bux, Niwar Wali Gali, Chappal Market, Sadar Bazaar, Sadar Bazaar, New Delhi, Delhi 110006</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+91-9871967167">+91-9871967167</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:sagar.uniwears@gmail.com">sagar.uniwears@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?=$site?>about-us.php">About us</a></li>
                                    <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                                    <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Categories</h4>
                            <div class="footer-menu">
                                <ul>
                                     <?php
                    $sql ="SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($res)) {
                        $category_name = $row['ct_pd_name'];
                        $category_id = $row['id'];
                                         $product_url = $row['ct_pd_url'];  
                    
                    ?>
                                   <li><a href="<?php echo $site ?>products.php?category=<?php echo $product_url; ?>"><?php echo $category_name;?></a></li> 
                                <?php
                    }
                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?=$site?>register.php">Register</a></li>
                                    <li><a href="<?=$site?>wishlist.php">Wish List</a></li>
                                    <li><a href="<?=$site?>login.php">Login</a></li>
                                    <li><a href="<?=$site?>my-account.php">My account</a></li>
                                  
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <div id="mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group">
                                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email*">
                                            </div>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dde0a42ff09e8d43cad40dc82_72d274d15d" tabindex="-1" value=""></div>
                                            <div class="clear">
                                                <div class="btn-wrapper">
                                                    <button class="theme-btn-1 btn"  type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"><i class="fas fa-location-arrow"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h5 class="mt-30">We Accept</h5>
                            <img src="img/icons/payment-4.png" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p class="text-center">@ <span class="current-year"></span> Sagar Uniwears.  All Rights Reserved!  Design by <a href="#">WEB2TECH SOLUTIONS</a></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
 <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>