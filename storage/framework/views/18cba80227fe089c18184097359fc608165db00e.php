<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="resources/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="resources/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.bundle"/>
    <link type="text/css" rel="stylesheet" href="resources/js/bootstrap.js.map"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<style>
    .display-2{
        color: green;
    }

    .serviceClean h1{
        color: green;
    }

    .subView{
        color: green;
    }

    .headingServices{
        text-align: center
    }
</style>

<body>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navigation','data' => []]); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="Slider" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner slider-image-control">
                    <div class="carousel-item active">
                        <img src="images/cl1.jpg" height="600" width="100%" alt="Digital voting">

                        <div class="carousel-caption">
                            <marquee scrollamount=10 behavior="alternate" class="serviceClean">
                                <h1>Cleaning Services</h1>
                            </marquee>

                            <button type="button" onclick="window.location='<?php echo e(url("user_login")); ?>'" class="btn btn-outline-light btn-lg bg-success"> USER LOGIN</button>
                            <h1 class="display-2">Cleaning Services Company</h1>
                            <h3 class="subView">Shallow men believe in luck; wise and strong men in the cause and effect </h3>
                            <a href="instruction.php"><button type="button" class="btn btn-outline-light btn-lg bg-success">VIEW DEMO</button></a>
                            <a href="<?php echo e('user_register'); ?>"><button type="button" class="btn btn-outline-light btn-lg bg-success">USER SIGN UP!!</button></a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/cl1.jpg" height="600" width="100%" alt="Digital Voting">
                        <div class="carousel-caption">
                            <h1 class="display-2">Cleaning Services Company</h1>
                            <h3>Shallow men believe in luck; wise and strong men in the cause and effect</h3>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/cl3.jpg" height="600" width="100%" alt="Digital Voting">
                        <div class="carousel-caption">
                            <h1 class="display-2">Cleaning Services Company</h1>
                            <h3>Shallow men believe in luck; wise and strong men in the cause and effect</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#Slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#Slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <!---End Image Slider---->

        <div class="container-fluid text-center">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="subView">Professional cleaning company</h1>
                <p> It is also a straight representation of your lifestyle.</p>
                <hr class="hidden-sm hidden-md hidden-lg">
                <div class="row">

                    <div class="col-sm-4 pont-img"></div>

                    <div class="col-sm-4 pont-img">
                        <h3 class="subView">Reliable customer service</h3>
                        <p>We employ our exclusive Detail-Clean technique to make sure that your home always
                            meet the extreme standard of hygiene. Our staffs follow different
                            approaches to confirm that our customers are always pleased and can presume
                            a reliably clean and beautiful room.</p>
                    </div>
                    <div class="col-sm-4 pont-img"></div>
                </div>
            </div>
        </div>

        
        <div class="container">
            <h2 class="headingServices"><b>Services</b></h2>
            <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="/images/s1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"> Room Cleaning </h5>
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-primary">More...</a>
                    </div>
                  </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img src="/images/s2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Bathroom Cleaning</h5>
                      <p class="card-text"> </p>
                      <a href="#" class="btn btn-primary">More...</a>
                    </div>
                  </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img src="/images/s3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kitchen Cleaning</h5>
                    <p class="card-text"> </p>
                    <a href="#" class="btn btn-primary">More...</a>
                  </div>
                </div>
              </div>

          </div>
        </div>
<br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> Curtains Cleaning</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-primary">More...</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Carpet Cleaning</h5>
                          <p class="card-text"> </p>
                          <a href="#" class="btn btn-primary">More...</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s6.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Laundry</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">More...</a>
                      </div>
                    </div>
                  </div>
    
              </div>
            </div>

            <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">SEPTIC TANK Cleaning</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-primary">More...</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Sofa Cleaning</h5>
                          <p class="card-text"> </p>
                          <a href="#" class="btn btn-primary">More...</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/images/s10.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Water Tank Cleaning</h5>
                        <p class="card-text"> </p>
                        <a href="#" class="btn btn-primary">More...</a>
                      </div>
                    </div>
                  </div>
    
              </div>
            </div>
        <hr>
<!-- ***** Contact Us Area Start ***** -->
<div class="container-fluid jumbotron ">
    <div class="row">
        <div class="col-md-6">
            <section class="footer-contact-area section_padding_100 clearfix" id="contact">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2 class="subView">Get in touch with us!</h2>
                    <div class="line-shape"></div>
                </div>
                <div class="footer-text">
                    <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                </div>
                <div class="address-text">
                    <p><span>Address:</span> XYZ</p>
                </div>
                <div class="phone-text">
                    <p><span>Phone:</span> ABC</p>
                </div>
                <div class="email-text">
                    <p><span>Email:</span> XYZ</p>
                </div>
        </div>
        <div class="col-md-6">
            <!-- Form Start-->
            <div class="contact_from">
                <form action="../Controller/Contact_Controller.php" method="POST">
                    <h1 class="subView">Contact Us</h1>
                    <!-- Message Input Area Start -->
                    <div class="contact_input_area">
                        <div class="row">
                            <!-- Single Input Area Start -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" onClick="clearform();" required>
                                </div>
                            </div>
                            <!-- Single Input Area Start -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" onClick="clearform();" required>
                                </div>
                            </div>
                            <!-- Single Input Area Start -->
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" onClick="clearform();" required></textarea>
                                </div>
                            </div>
                            <!-- Single Input Area Start -->
                            <div class="col-12">
                                <div class="button3D"><a><button type="submit" name="Send" class="btn btn-outline-light btn-lg bg-primary">Send Now</button></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Message Input Area End -->
                </form>
            </div>
            </section>
        </div>
    </div>
</div>

<div class="col-sm-4 pont-img"></div>

        <!-- ***** Contact Us Area End ***** -->
    
        <!-- ***** Footer Area Start ***** -->
        <container  class="container-fluid jumbotron"  >
            <footer class="footer-social-icon text-center section_padding_70 clearfix">
                <a href="#" class="btn-top to_top" style="display: block;">
                    Top
                    <i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                <!-- footer logo -->
                <div class="footer-text">
                    <h2 class="subView">Cleaning Services Company</h2>
                </div>
                <hr class="hidden-sm hidden-md hidden-lg">
                <!-- social icon-->
                <div class="footer-social-icon">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.google.com"><i class="fab fa-google"></i></a>
                </div>
                <div class="footer-menu">
                    <nav>
                        <a href="about.php">About</a>
                        <a href="#">Terms &amp; Conditions</a>
                        <a href="#">Privacy Policy</a>
                        <a href="contact.php">Contact</a>
                    </nav>
                </div>
                <!-- Foooter Text-->
                <div class="copyright-text">
                    <p>Copyright ©2021</p>
                </div>
            </footer>
            <container/>
            <!-- ***** Footer Area Start ***** -->

</body>
</html>
<?php /**PATH D:\laravel\cleaning_service\resources\views/index.blade.php ENDPATH**/ ?>