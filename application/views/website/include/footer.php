    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-3 col-sm-6 col-xs-12 column m-btmx50">
                        <div class="footer-widget about-widget">
                            <div class="logo"><a href="index.php">
                                    <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" class="img-responsive" style="height:10rem;">
                                </a></div>
                            <div class="text">
                                <p style="text-align:justify;"><?php echo $company['about_company']; ?></p>
                            </div>
                            <div class="social-links-two clearfix">
                                <?php if (!empty($company['facebook'])) : ?> <li><a href="<?php echo $company['facebook']; ?> "><i class="fa fa-facebook" aria-hidden="true"></i></a></li> <?php endif; ?>
                                <?php if (!empty($company['instagram'])) : ?> <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['tweeter'])) : ?> <li><a href="<?php echo $company['tweeter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['linkedln'])) : ?> <li><a href="<?php echo $company['linkedln']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['whatsapp'])) : ?> <li><a href="https://wa.me/<?php echo $company['whatsapp']; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li><?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6 col-xs-12 column"></div>
                    <!--Footer Column-->
                    <div class="col-lg-2 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <h2>Quick Links</h2>
                        <div class="footer-widget links-widget">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Causes</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Mission</a></li>
                            </ul>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <div class="footer-widget news-widget">
                            <h2>Latest News</h2>

                            <!--News Post-->
                            <div class="news-post">
                                <div class="icon"></div>
                                <div class="news-content">
                                    <figure class="image-thumb"><img src="<?php echo base_url(); ?>media/website_assets/images/blog/s1.jpg" alt=""></figure><a href="#">Home & Feed for hungry people It's urgent</a>
                                </div>
                                <div class="time">July 2, 2014</div>
                            </div>

                            <!--News Post-->
                            <div class="news-post">
                                <div class="icon"></div>
                                <div class="news-content">
                                    <figure class="image-thumb"><img src="<?php echo base_url(); ?>media/website_assets/images/blog/s2.jpg" alt=""></figure><a href="#">Home & Feed for hungry people It's urgent</a>
                                </div>
                                <div class="time">July 2, 2014</div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <div class="footer-widget contact-widget">
                            <h2>Contact Form</h2>
                            <ul class="contact-info">
                                <li><span class="icon fa fa-map-marker"></span> Khaira Road, Opposite Punjab National Bank, Jamui</li>
                                <li><span class="icon fa fa-phone"></span>+91 9430598940</li>
                                <li><span class="icon fa fa-envelope-o"></span>ashapayalfoundation@gmail.com</li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">&copy; 2020 Asha Payal Foundation All Rights Reserved. &copy; Designed by <a href="javaScript:void(0);">Camwel Solution</a> </div>
            </div>
        </div>

    </footer>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".page-wrapper"><span class="fa fa-long-arrow-up"></span></div>


    <!--Donate Popup-->
    <div class="modal fade pop-box" id="donate-popup" tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--Donation Section-->
                <section class="donation-section">
                    <div class="donation-form-outer">
                        <form method="post" action="javaScript:void(0);">

                           

                            <br>

                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>How Much Would you like to Donate?</h4>

                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">First Name <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="First Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Last Name <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Email <span class="required">*</span></div>
                                        <input type="email" name="name" value="" placeholder="Email" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Phone <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Phone" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Address 1 <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Address 1" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Address 2 <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Address 2" required>
                                    </div>

                                </div>
                            </div>

                            <br>

                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>Payment Information</h4>

                                <div class="payment-option-logo"><img class="img-responsive" src="<?php echo base_url(); ?>media/website_assets/images/resource/payment-logos.png" alt=""></div>
                                <br>
                                
                                   <div class="field-label">Add Payment Screenshot  <span class="required">*</span></div>
                                    <div class="form-group col-lg-12 col-md-6 col-xs-12"style="padding:1rem;border: 1px solid #d2d2d2;width:100%;">
                                        <input type="file" name="name" value="" placeholder="Address 2" required>
                                    </div>
                            </div>

                            <div class="text-left"><button type="submit" class="theme-btn btn-style-two">Donate Now</button></div>

                        </form>
                    </div>
                </section>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->