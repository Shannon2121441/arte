<?php
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Figuras D' Arte - About Us Page</title>
        <link rel="stylesheet" type="text/css" href="css/user_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>
        <div class="banner">
            <div class="detail">
                <h1>about us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                <span><a href="home.php">Home</a><i class="bx bx-right-arrow-alt"></i>About Us</span>
            </div>
        </div>
        <div class="artist">
            <div class="box-container">
                <div class="box">
                    <div class="heading">
                        <span>Shannon Po</span>
                        <h1>Coder</h1>
                        <img src="image/separator-img.png">
                    </div>
                    <p>Shannon is very close to ending her life :D</p>
                    <div class="flex-btn">
                        <a href="" class="btn">Explore Our Merch</a>
                        <a href="menu.php" class="btn">Visit Our Shop</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/kamiyo.png" class="img">
                </div>
            </div>
        </div>
        <!--- Artist story section start--->
        <div class="story">
            <div class="heading">
                <h1>Our Story</h1>
                <img src="image/separator-img.png">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Suspendisse nisi et dolor
            ornare pellentesque. Nullam porttitor, <br> odio id facilisis dapibus, mauris dolor rhoncus
            elit, ultricies nulla eros at dui. <br> In suscipit leo sagittis aliquam. Integer tristique
            tempus urna. <br>et pharetra dui urna volutpat elit odio at.</p>
            <a href="menu.php" class="btn">Our Services</a>
        </div>
        <div class="container">
            <div class="box-container">
                <div class="img-box">
                    <img src="image/about.png">
                </div>
                <div class="box">
                    <div class="heading">
                        <h1>Taking Visual Arts To New Heights</h1>
                        <img src="image/separator-img.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet elementum
                    ante. Sed mattis sapien vel vestibulum lacinia. Class aptent taciti sociosqu ad
                    litora torquent per conubia nostra, per inceptos himenaeos. Fusce a fermentum leo.
                    Integer sem nulla, pretium vel purus vel, venenatis vehicula turpis.</p>
                    <a href="" class="btn">learn more</a>
                </div>
            </div>
        </div>
        <!--- Artist story section end--->
        <!--- Team section start--->
        <div class="team">
            <div class="heading">
                <span>Our Team</span>
                <h1>Quality and Passion</h1>
                <img src="image/separator-img.png" alt="">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/shannon.jpg" class="img">
                    <div class="content">
                        <img src="image/shape.png" alt="" class="shap">
                        <h2>Shannon Po</h2>
                        <p>bebegurl nga lumaki sa farm (Holder of the single brain cell)</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/clarissa.jpg" class="img">
                    <div class="content">
                        <img src="image/shape.png" alt="" class="shap">
                        <h2>Clarissa Magdadaro</h2>
                        <p>Pinaka cute nga bebegurl nga student assistant</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/gian.jpg" class="img">
                    <div class="content">
                        <img src="image/shape.png" alt="" class="shap">
                        <h2>Giannah Trafanco</h2>
                        <p>bebegurl with too much autistic rizz</p>
                    </div>
                </div>
            </div>
        </div>
        <!--- Team section end--->
        <!--- Standards section start--->
        <div class="standards">
            <div class="detail">
                <div class="heading">
                    <h1>Our Standards</h1>
                    <img src="image/separator-img.png">
                </div>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
                <p>afdfsdsdgs</p>
                <i class="bx bxs-heart"></i>
            </div>
        </div>
        <!--- Standards section end--->
        <!--- Testimonial section start--->
        <div class="testimonial">
            <div class="detail">
                <div class="heading">
                    <h1>Testimonials</h1>
                    <img src="image/separator-img.png">
                </div>
                <div class="testimonial-container">
                    <div class="slide-row" id="slide">
                        <div class="slide-col">
                            <div class="user-text">
                                <p>dsdfsjndfsdfs</p>
                                <h2>Kamiyo</h2>
                                <p>Author</p>
                            </div>
                            <div class="user-img">
                                <img src="image/shannon.jpg">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>dsdfsjndfsdfs</p>
                                <h2>Kamiyo</h2>
                                <p>Author</p>
                            </div>
                            <div class="user-img">
                                <img src="image/shannon.jpg">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>dsdfsjndfsdfs</p>
                                <h2>Kamiyo</h2>
                                <p>Author</p>
                            </div>
                            <div class="user-img">
                                <img src="image/shannon.jpg">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <p>dsdfsjndfsdfs</p>
                                <h2>Kamiyo</h2>
                                <p>Author</p>
                            </div>
                            <div class="user-img">
                                <img src="image/shannon.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="indicator">
                    <span class="btn1 active"></span>
                    <span class="btn1"></span>
                    <span class="btn1"></span>
                    <span class="btn1"></span>
                </div>
            </div>
        </div>
        <!--- Testimonial section end--->
        <!--- Mission section start--->
        <div class="mission">
            <div class="box-container">
                <div class="box">
                    <div class="heading">
                        <h1>Our Mission</h1>
                        <img src="image/separator-img.png"> <!--mission.jpg-->
                    </div>
                    <div class="detail">
                        <div class="img-box">
                            <img src="image/separator-img.png">
                        </div>  
                        <div>
                            <h2>sjhbfgfsd</h2>
                            <p>alfsdjfnsjd</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="img-box">
                            <img src="image/separator-img.png">
                        </div>  
                        <div>
                            <h2>sjhbfgfsd</h2>
                            <p>alfsdjfnsjd</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="img-box">
                            <img src="image/separator-img.png">
                        </div>  
                        <div>
                            <h2>sjhbfgfsd</h2>
                            <p>alfsdjfnsjd</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <img src="image/form.png" alt="" class="img">
                </div>
            </div>
        </div>
        <!--- Mission section end--->
        





        <?php include 'components/footer.php'; ?>
        <script src="js/user_script.js"></script>
    </body>
</html>