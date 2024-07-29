<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $seo['page_title']; ?></title>
    <link rel="icon" href="<?php echo base_url() . "uploads/logo/" . $logo['favicon']; ?>" type="image/x-icon" />
    <?php include_once("include/css.php") ?>
    <meta name="description" content="<?php echo $seo['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $seo['meta_keywords']; ?>">

    <script>
        <?php echo $links['google_analytics']; ?>
    </script>
    <script>
        <?php echo $links['google_console']; ?>
    </script>

    <style>
        .btn-join{background: linear-gradient(to right, #fdc830, #f37335); color:white; padding:15px 22px 12px 22px; color:white;border-radius:2.5rem;margin-top:9rem;}
        .btn-join:hover{background: linear-gradient(to right, #fe8c00, #f83600);}
        .mission-man{border:2px dotted red;padding: 1.6rem;border-radius:22px 0px;}
        .mission-man:hover{background: linear-gradient(to right, #ffe259, #ffa751);border-radius:0px 32px;}
        body{
            overflow-x: hidden;
        }
        .banner-2 {
            left: 30rem;
            position: absolute;
            top: -7rem;
            height: 18rem;
            z-index: 1;
        }
        .banner-1 {
            left: 73rem;
            position: absolute;
            top: 0rem;
            height: 33rem;
            animation: move 2.5s linear infinite;
        }
        @keyframes move {
            0% {
                transform: translate(-15px, 0px);
            }
            50% {
                transform: translate(0px, -15px);
            }
            100% {
                transform: translate(-15px, 0px);
            }
        }
    </style>
      <style>
    .docAmiImg{position: relative; overflow: hidden;margin: 0 auto; cursor:pointer; height: 522px;border-bottom: 0px;}
    .docAmiImg{
 
  transition: 0.5s all ease-in-out;
}
    .docAmiImg:hover {transform: scale(1.2);}
  </style>
</head>

<body>
    <?php include_once("include/header.php") ?>

    <!--====================banner section  started==================================================== -->
<section style="position: relative;">
<?php if ($menu_p['banner'] != 0 && $banner) : ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="position: relative; margin-top:-8px;" >
    <div class="carousel-inner">
        <?php $a = 0;
        if (Count($banner)) : ?>
            <?php foreach ($banner as $b => $ban) : ?>
                <?php if ($a == 0) : ?>
                    <div class="carousel-item active" >
                        <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="...">

                        <?php if ($ban['banner_text']) : ?>
                            <div class="carousel-caption d-none d-md-block  " style="text-align: left; top:30% ">
                                <p style="margin-top: 10%;">
                                    <?php echo $ban['banner_text'] ?>
                                    <span>
                                        <a class="btn btn-danger" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                            <?php echo $ban['button_text']; ?>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php $a++;
                else : ?>
                    <div class="carousel-item">
                        <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="...">

                        <?php if ($ban['banner_text']) : ?>
                            <div class="carousel-caption d-none d-md-block " style="text-align: left;top:30%">
                                <p style="margin-top: 10%;">
                                    <?php echo $ban['banner_text'] ?>
                                    <span>
                                        <a class="btn btn-danger" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                            <?php echo $ban['button_text']; ?></a>
                                    </span>
                                </p>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php $a++;
                endif; ?>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<?php endif; ?>
</section>

<!--====================banner section  end==================================================== --> 

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="position: absolute; top:250px; left:162px;">
                <p><img src="<?php echo base_url();?>uploads/faq-1.png" alt="" class="banner-1"></p>
                <h1 class="wow zoomInLeft" style="color:#0be8ad;position:absolute;z-index:901;margin-left:-2rem;font-family: 'Roboto Slab', serif;"><b>Welcome To </h1><br><br><br>
                <h1><span style="color:#ab1b00;position:absolute;left:-2rem;top:-4rem;z-index:901;"class="wow tada"><b> Asha Payal Foundation</b></span>
                <p class="wow zoomInRight" style="font-size:1.5rem;position:absolute;left:-2rem;top:2rem;font-family:'Raleway', sans-serif;z-index:901;font-weight:600;">The Asha Payal Foundation supports the poor by <br>offering food, clothing, education, and healthcare,<br> aiming to uplift communities and create sustaina<br>ble development for a brighter, more equitable <br>future.</p>
                </h1>
                <!-- <p class="ani_l" style="position: absolute; color:#00375a; left:242px;z-index:901;"><b>ARYAMAN Group of Institutions is an educational conglomerate that is committed to providing high-quality</b><br> -->

                <p class="wow tada"><a href="" class="btn-join" style="color:white; padding:12px 22px 12px 22px; position: absolute; color:white; top:66px; left:502px;border:3px solid #ea9909;">DONATE NOW</a></p>
                <p class="wow tada"><a href="" class="btn-join" style="color:white; padding:12px 22px 12px 22px; position: absolute; color:white; top:66px; left:355px;border:3px solid #ea9909;">JOIN WITH US</a></p>
            </div>
        </div>
    </div>

 
<!-- +++++++++++++++++++++++++++++++++++++++++ About Section  Start +++++++++++++++++++++++++++++++++++++++  -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
    <h2 style="text-align:center;" class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s"><b>Message</b><img src="<?//php echo base_url();?>assets/img/hand_icon.png" alt="" style="margin-top:-20px;"></h2>

            </div>
        </div>
    </div> -->

        <!--====================about us section start==================================================== -->
<section class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".30s"style="margin-top:5rem;">
<div class="container">
    <div class="row">
    <?php if ($menu_p['about'] != 0 && !empty($about)) : ?>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
               
                <div class="col-lg-6" style="text-align:justify; margin-top:-10px; margin-bottom:-80px;font-weight:normal;">
                    <h2 style="margin-top:1rem;"><b>Welcome To <span style="color:#ff5c0b;">Asha Payal</span> Foundation</b></h2>
                    <h4 class="display-5 fw-bold lh-1 mb-3"style="margin-top:1rem;"><b><?php echo $about['about_header']; ?></b></h4>
                    <p class="lead"><?php echo $about['about_text']; ?></p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <?php if ($about['button_url'] != 0) : ?>
                            <a href="<?php echo $about['button_url'] ?>">
                                <button style="background-color:<?php echo $about['button_color']; ?> !important;">
                                    <?php echo $about['button_text']; ?>

                                </button>
                            </a>
                        <?php endif; ?>
                    </div><br>
                    <p> ttttt</p>
                    <p class="wow tada"><a href="" class="btn-join" style="color:white;padding:12px 22px 12px 22px;color:white;border:3px solid #ea9909;">JOIN WITH US</a></p>

                </div>
                <div class="col-md-1"> </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" class="d-block mx-lg-auto img-fluid " alt="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" width="700"  loading="lazy" style="height:38rem;width:100%;">
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
</div>
</section>

 <!--====================about us section end==================================================== -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->


<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  -->

  <!--Intro Section-->
  <section class="subscribe-intro">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-9 col-sm-12 col-xs-12">
                        <h2>Subcribe for Newsletter</h2>
                        There are many variations of passages of Lorem Ipsum available but the majority have
                    </div>
                    <!--Column-->
                    <div class="column col-md-3 col-sm-12 col-xs-12">
                        <div class="text-right padd-top-20">
                            <a href="#" class="theme-btn btn-style-one">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!--Mission Section start -->
         <section class="main-features sec-padding61">
            <div class="auto-container">

                <div class="sec-title text-center">
                    <h2>Our <span class="normal-font theme_color">Mission</span></h2>
                    <div class="text">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text </div>
                </div>

                <div class="row clearfix">
                

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-illumination"></span></div>
                            </div>
                            <h3>Charity For Education</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-arrows-3"></span></div>
                            </div>
                            <h3>Feed for hungry child</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-nature-1"></span></div>
                            </div>
                            <h3>Home for homeless</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-summer-3"></span></div>
                            </div>
                            <h3>Clean water for people</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-technology-13"></span></div>
                            </div>
                            <h3>Charity For Education</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-summer"></span></div>
                            </div>
                            <h3>Feed for hungry child</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-nature-11"></span></div>
                            </div>
                            <h3>Home for homeless</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei purto dolor timeam mea </div>
                        </article>
                    </div>

                    <!--Default Icon Column-->
                    <div class="default-icon-column col-lg-3 col-md-6 col-xs-12">
                        <article class="inner-box text-center mission-man">
                            <div class="icon-box center">
                                <div class="icon"><span class="flaticon-dog"></span></div>
                            </div>
                            <h3>Clean water for people</h3>
                            <div class="text">Lorem ipsum dolor sit amet et siu amet amet audiam copiosaei mei  </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <!--Mission Section end -->

            <!--Testimonials-->
            <section class="testimonials-section bg-color-f5">
            <div class="auto-container">

                <div class="sec-title text-center">
                    <h2 class="black_color">Testi<span class="normal-font theme_color">Monials</span></h2>
                    <div class="text black_color">Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text </div>
                </div>

                <!--Slider-->
                <div class="testimonials-slider testimonials-carousel">

                    <!--Slide-->
                    <article class="slide-item">

                        <div class="info-box">
                            <figure class="image-box"><img src="<?php echo base_url();?>media/website_assets/images/resource/testi-image-1.jpg" alt=""></figure>
                            <h3>Mark Pine</h3>
                            <p class="designation">Rome, Italy</p>
                        </div>

                        <div class="slide-text">
                            <p>“But I must explain to you the how all this mistaken idea of thealorem qco denouncing pleasure”</p>
                        </div>
                    </article>

                    <!--Slide-->
                    <article class="slide-item">

                        <div class="info-box">
                            <figure class="image-box"><img src="<?php echo base_url();?>media/website_assets/images/resource/testi-image-2.jpg" alt=""></figure>
                            <h3>Mark Pine</h3>
                            <p class="designation">Rome, Italy</p>
                        </div>

                        <div class="slide-text">
                            <p>“But I must explain to you the how all this mistaken idea of thealorem qco denouncing pleasure”</p>
                        </div>
                    </article>

                    <!--Slide-->
                    <article class="slide-item">

                        <div class="info-box">
                            <figure class="image-box"><img src="<?php echo base_url();?>media/website_assets/images/resource/testi-image-3.jpg" alt=""></figure>
                            <h3>Mark Pine</h3>
                            <p class="designation">Rome, Italy</p>
                        </div>

                        <div class="slide-text">
                            <p>“But I must explain to you the how all this mistaken idea of thealorem qco denouncing pleasure”</p>
                        </div>
                    </article>


                </div>

            </div>
        </section>

        
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  -->

    <!--====================summernote1 section start==================================================== -->
    <?php if ($menu_p['sumernote1'] != 0 && !empty($summernote1)) : ?>
        <div class="container" style="margin-top:75px; margin-bottom:55px;">
            <div class="text-justify"><?php echo $summernote1['content']; ?></div>
        </div>
    <?php endif; ?>
    <!--====================summernote1 section end==================================================== -->

    
    

    <!--====================summernote section start==================================================== -->
    <?php if ($menu_p['sumernote'] != 0 && !empty($summernote)) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- <h3 style="text-align:center; background-color:#b6e0ff; margin-top:66px; padding:10px; color:#155992;"><b>Welcome to Raj Aryan Nursing & Paramedical College</b></h1> -->
                <div class="text-justify"style="background-color:#e9fffe;"><?php echo $summernote['content']; ?></div>
               
                </div>


    <!--====================news section start==================================================== -->
<div class="col-md-4" style=" margin-top:56px; padding:10px;">
<?php if ($menu_p['news'] != 0 && !empty($news)) : ?>
    <h3 style="text-align:center;  padding:10px; color:rgb(194 34 30);background: linear-gradient(to right, #ffba75, #f9cc9e);"><b>Today News</b></h1>
        
     <div class="" style="padding:45px;  background-color:#e9fffe; margin-top:-22px; height:277px;">
           <!-- <h2 class="text-center"></h2> -->
           <marquee behavior="slow" direction="up">
            <?php foreach ($news as $news) : ?>

                <p><?php echo $news['news']; ?></p>
            <?php endforeach; ?>
        </marquee>
     </div>
    
<?php endif; ?>
</div>
    <!--====================news section end==================================================== -->

            </div>
        </div>
    <?php endif; ?>
    <!--====================summernote section end==================================================== -->
    
    <!--====================summernote2 section start==================================================== -->
<section style="margin-top:44px;">
<?php if ($menu_p['sumernote2'] != 0 && !empty($summernote2)) : ?>
        <div class="container">
            <div class="text-justify"><?php echo $summernote2['content']; ?></div>
        </div>
    <?php endif; ?>
</section>
    <!--====================summernote2 section end==================================================== -->


    <section class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".30s" style="background-color: rgb(233 255 254); box-shadow: 5px 5px 5px grey; margin-bottom:180px;">
   
         <!--====================hero section start==================================================== -->
    <?php if ($menu_p['hero_section'] != 0 && !empty($hero)) : ?>
        <div class="container my-5">
            <?php foreach ($hero as $hero) : ?>

                <div class="row my-2 py-2">
                    <?php if ($hero['header']) : ?>
                        <div class="col-md-12">
                            <h3 class="text-center"><?php echo $hero['header']; ?></h3>
                        </div>
                    <?php endif; ?>




                    <?php if ($hero['text'] != '' && $hero['image'] != '') : ?>
                        <div class="col-md-7">
                            <?php echo $hero['text'] ?>
                        </div>
                        <div class="col-md-5">
                            <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="border-radius:50%; margin-top:-32px; width:100%; margin-bottom:-152px; border:8px solid #5184bf; box-shadow: 10px 10px 5px lightblue inset;">
                        </div>
                    <?php endif; ?>

                  



                    <?php if ($hero['text'] != '' && $hero['image'] == '') : ?>
                        
                        <div class="col-md-12">
                            <?php echo $hero['text'] ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($hero['text'] == '' && $hero['image'] != '') : ?>
                        <div class="col-md-12">
                            <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="width: 100%;">

                        </div>
                    <?php endif; ?>


                </div>
            <?php endforeach; ?>



        </div>
    <?php endif; ?>
    </section>
    
    <!--=================== Hero section end==================================================== -->

       

    <!--====================services section start==================================================== -->
<section style="margin-top:55px; margin-bottom:0px; margin-left: 100px;">
<?php if ($menu_p['services'] != 0 && !empty($service)) : ?>
        <div class="container">

            <div class="row">
          
                
                <h1 class="text-center" style=" padding:3px; color:#00375a;">Our Services</h1>
                <?php foreach ($service as $s => $ser) : ?>
                    <div class="col-md-4 docAmiImg" >
                        <div class="card" style="width: 18rem;border:2px dotted #19cbc3;padding:0.6rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $ser['image'] ?>" class="card-img-top" alt="..." >
                            <div class="card-body">
                                <h3 class="card-text" style="text-align:center; color:#00375a; "><?php echo $ser['heading']; ?></h3>

                                <p class="card-text" style="text-align:justify;"><?php echo $ser['content']; ?></p>
                                <?php if ($ser['button_url'] != 0) : ?>
                                    <a href="<?php echo $ser['button_url'] ?>">
                                        <button style="background-color:<?php echo $ser['button_color']; ?> !important;">
                                            <?php echo $ser['button_text']; ?>

                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
      </div>
    <?php endif; ?>
</section>

    <!--====================services section end==================================================== -->



    <!--====================testimonial section start==================================================== -->
<section style="margin-bottom:-100px; margin-top:44px;">
<?php if ($menu_p['testimonial'] != 0 && !empty($testimonial)) : ?>
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="color:#00375a;">Testimonial</h1>
                <?php foreach ($testimonial as $s => $tes) : ?>
                    <div class="col-md-4 docAmiImg" style="margin-top:44px;">
                        <div class="card" style="width:18rem;border:2px dotted #19cbc3;padding:0.6rem;margin-left:2.6rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $tes['image'] ?>" class="card-img-top" alt="...">
                            <!-- <div class="card-body">
                                <h3>title</h3>
                                <p class="card-text"><?php //echo $tes['content']; ?></p>
                                <a href="javaScript:void(0);" class="btn btn-primary">Go somewhere</a>
                            </div> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>

    <!--====================testimonial section end==================================================== -->


    



    <!--====================Gallery Section start==================================================== -->
    <?php if ($menu_p['gallery'] != 0) : ?>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Gallery</h1>

                <?php foreach ($gallery as $gallery) : ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/gallery/" . $gallery['image'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    <?php endif; ?>

    <!--====================Gallery Section end==================================================== -->




    <!--====================contact section start==================================================== -->
    <?php

    $contact1 = explode(",", $contact['contact_number']);
    $email1 = explode(",", $contact['email']);

    ?>
    <?php if ($menu_p['contact'] != 0 && !empty($company)) : ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Address</h3>
                    <h3><?php echo $company['company_name']; ?></h3>
                    <p><?php echo $company['company_address']; ?></p>


                    <?php foreach ($contact1 as  $contact1) : ?>
                        <p class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></p>
                    <?php endforeach; ?>

                    <?php foreach ($email1 as  $email1) : ?>
                        <p class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></p>
                    <?php endforeach; ?>


                </div>
                <div class="col-md-6">
                    <h3> Contact Us</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, culpa?</p>
                    <form class="contact_form" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="write name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label><br>
                            <textarea name="address" class="form-control" id="" cols="70" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Message</label><br>
                            <textarea name="message" class="form-control" id="" cols="70" rows="5"></textarea>
                        </div>
                        <div class="mb-3">

                            <input type="submit" name="submit" class="form-control btn btn-danger">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!--====================contact section end==================================================== -->


    <!--====================career  section start==================================================== -->
    <?php

    $contact1 = explode(",", $contact['contact_number']);
    $email1 = explode(",", $contact['email']);

    ?>
    <?php if ($menu_p['career'] != 0 && !empty($company)) : ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Address</h3>
                    <h3><?php echo $company['company_name']; ?></h3>
                    <p><?php echo $company['company_address']; ?></p>


                    <?php foreach ($contact1 as  $contact1) : ?>
                        <p class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></p>
                    <?php endforeach; ?>

                    <?php foreach ($email1 as  $email1) : ?>
                        <p class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></p>
                    <?php endforeach; ?>


                </div>
                <div class="col-md-6">
                    <h3> Career</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, culpa?</p>
                    <form class="contact_form" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="write name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Hiegest Education</label>
                            <select name="education" class="form-control" required>
                                <option value="Select One">Select One</option>
                                <option value="Matric">Matric</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Post Graduate">Post Graduate</option>
                                <option value="B.Tech">B.Tech</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Passing Years</label>
                            <input type="text" name="Passing_year" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Experianced</label>
                            <select name="experienced" class="form-control" required>
                                <option value="Select One">Select One</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experianced Year</label>
                            <input type="text" name="experience_no_of_year" class="form-control" placeholder=" no of years">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Job Profile</label>
                            <select name="jop_profile" class="form-control" required>
                                <option value="Matric">Select One</option>
                                <option value="Devloper">Devloper</option>
                                <option value="Marketing Executive">Marketing Executive</option>
                                <option value="Seo Executive">Seo Executive</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Hr">Hr</option>
                            </select>
                        </div>
                        <div class="mb-3">

                            <input type="submit" name="submit" class="form-control btn btn-danger">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!--====================career section end==================================================== -->







    <!--====================map section start==================================================== -->
    <?php if ($menu_p['map'] != 0 && !empty($company)) : ?>
        <div class="container">
            <iframe src="https://www.google.com/maps?q=<?php echo $company['company_address']; ?>&amp;output=embed" width="100%" height="200px;"></iframe>
        </div>
    <?php endif; ?>

    <!--====================map section end==================================================== -->










    <?php include_once("include/footer.php") ?>
    <?php include_once("include/js.php") ?>
    <script>
        <?php echo $links['livechat']; ?>
    </script>

    <script src="<?php echo base_url() . 'media/js/website/index.js' ?>"> </script>

</body>

</html>