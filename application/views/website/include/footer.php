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

                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h3>How Much Would you like to Donate?</h3>

                                <div class="row clearfix">
                                    <div class="form-group col-lg-7 col-md-12 col-xs-12 clearfix">

                                        <div class="radio-select">
                                            <input type="radio" name="sel-amount" id="amount-1">
                                            <label for="amount-1">$10</label>
                                        </div>

                                        <div class="radio-select">
                                            <input type="radio" name="sel-amount" id="amount-2" checked>
                                            <label for="amount-2">$25</label>
                                        </div>

                                        <div class="radio-select">
                                            <input type="radio" name="sel-amount" id="amount-3">
                                            <label for="amount-3">$50</label>
                                        </div>

                                        <div class="radio-select">
                                            <input type="radio" name="sel-amount" id="amount-4">
                                            <label for="amount-4">$100</label>
                                        </div>

                                        <div class="radio-select">
                                            <input type="radio" name="sel-amount" id="amount-5">
                                            <label for="amount-5">$150</label>
                                        </div>

                                    </div>

                                    <div class="form-group other-amount col-lg-5 col-md-8 col-xs-12 padd-top-10">

                                        <input type="text" name="other-amount" value="" placeholder="Or Other Amount">

                                    </div>

                                </div>
                            </div>

                            <br>

                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>Billing Information</h4>

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

                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Card Number <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Card Number" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Card Holder Name <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Card Holder Name" required>
                                    </div>



                                    <div class="form-group col-lg-3 col-md-3 col-xs-12">
                                        <div class="field-label">Expire Date <span class="required">*</span></div>
                                        <select>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-3 col-xs-12">
                                        <div class="field-label">&nbsp;</div>
                                        <select>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Security Code (CVC) <span class="required">*</span></div>
                                        <input type="text" name="name" value="" placeholder="Security Code" required>
                                    </div>

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