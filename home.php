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
        <title>Figuras D' Arte - Home Page</title>
        <link rel="stylesheet" type="text/css" href="css/user_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>

        <!--- Slider section start--->
        <div class="slider-container">
            <div class="slider">
                <div class="slideBox active">
                    <div class="textBox">
                        <h1>Law.ay sng tnn nga wallpaper na kita ko<br>Placeholder ni dnay</h1>
                        <a href="menu.php" class="btn">Shop Now!</a>
                    </div>
                    <div class="imgBox">
                        <img src="image/slider.jpg">
                    </div>
                </div>
                <div class="slideBox">
                    <div class="textBox">
                        <h1>Artworks</h1>
                        <a href="menu.php" class="btn">Shop Now!</a>
                    </div>
                    <div class="imgBox">
                        <img src="image/slider0.jpg">
                    </div>
                </div>
            </div>
            <ul class="controls">
                <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
                <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
            </ul>
        </div>
        <!--- Slider section end--->
        <div class="service">
            <div class="box-container">
                <!-- service item box -->
                 <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services.png" class="img1">
                            <img src="image/services1.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Delivery</h4>
                        <span>100% secure</span>
                    </div>
                </div>
                <!-- service item box-->
                <!-- service item box -->
                <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services2.png" class="img1">
                            <img src="image/services3.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Payment</h4>
                        <span>100% secure</span>
                    </div>
                </div>
                <!-- service item box-->
                 <!-- service item box -->
                 <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services4.png" class="img1">
                            <img src="image/services5.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Support</h4>
                        <span>24/7</span>
                    </div>
                </div>
                <!-- service item box-->
                 <!-- service item box -->
                 <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services6.png" class="img1">
                            <img src="image/services7.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Returns</h4>
                        <span>24/7</span>
                    </div>
                </div>
                <!-- service item box-->
                 <!-- service item box -->
                 <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services2.png" class="img1">
                            <img src="image/services3.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Gifts</h4>
                        <span>100% secure</span>
                    </div>
                </div>
                <!-- service item box-->
                <!-- service item box -->
                <div class="box">
                    <div class="icon">
                        <div class="icon-box">
                            <img src="image/services.png" class="img1">
                            <img src="image/services1.png" class="img2">
                        </div>
                    </div>
                    <div class="detail">
                        <h4>Deliver</h4>
                        <span>100% secure</span>
                    </div>
                </div>
                <!-- service item box-->
            </div>
        </div>
        <!--- Slider section end--->
        <!--- Categories section start--->
        <div class="categories">
            <div class="heading">
                <h1>Categories Features</h1>
                <img src="image/separator-img.png">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/categories.jpg">
                    <a href="menu.php" class="btn">Accessories</a>
                </div>
                <div class="box">
                    <img src="image/categories.jpg">
                    <a href="menu.php" class="btn">Paintings</a>
                </div>
                <div class="box">
                    <img src="image/categories.jpg">
                    <a href="menu.php" class="btn">Prints</a>
                </div>
                <div class="box">
                    <img src="image/categories.jpg">
                    <a href="menu.php" class="btn">Merchandise</a>
                </div>
            </div>
        </div>
        <!--- Categories section end--->
        <img src="image/menu-banner.jpg" class="menu-banner">
        <div class="taste">
            <div class="heading">
                <h1>Buy 1 Get 1</h1>
                <img src="image/separator-img.png">
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/logo.png">
                    <div class="detail">
                        <h2>Natural</h2>
                        <h1>Vanilla</h1>
                    </div>
                </div>
                <div class="box">
                    <img src="image/logo.png">
                    <div class="detail">
                        <h2>Natural</h2>
                        <h1>Vanilla</h1>
                    </div>
                </div>
                <div class="box">
                    <img src="image/logo.png">
                    <div class="detail">
                        <h2>Natural</h2>
                        <h1>Vanilla</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--- Categories section end--->
        <!--- Container section starts--->
        <div class="ice-container">
            <div class="overlay"></div>
            <div class="detail">
                <h1>I loooove art wow</h1>
                <p>blabalbalbalbalbalba</p>
                <a href="menu.php" class="btn">Shop Now</a>
            </div>
        </div>
        <!--- Container section end--->
        <!--- Categories section start--->
        <div class="taste2">
            <div class="t-banner">
                <div class="overlay"></div>
                <div class="detail">
                    <h1>Find what you want</h1>
                    <p>asdasdasdas</p>
                    <a href="menu.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                    <img src="image/logo.png">
                    <div class="box-details fadeIn-bottom">
                        <h1>Paintings</h1>
                        <p>dmkslmdfksmdf</p>
                        <a href="menu.php" class="btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--- Categories section end--->
        <!--- Flavor section starts--->
        <div class="flavor">
            <div class="box-container">
                <img src="image/logo.png">
                <div class="detail">
                    <h1>Hot Dealssss</h1>
                    <p>clearance imnida</p>
                    <a href="menu.php" class="btn">Shop now</a>
                </div>
            </div>
        </div>
        <!--- Flavor section end--->
        <!--- Usage section starts--->
        <div class="usage">
            <div class="heading">
                <h1>How it works</h1>
                <img src="image/separator-img.png">
            </div>
            <div class="row">
                <div class="box-container">
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                </div>
                <img src="image/slider.jpg" class="divider">
                <div class="box-container">
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="image/logo.png">
                        <div class="detail">
                            <h3>draw your stuff</h3>
                            <p>smdfsmdfsdfsdfs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- Usage section end--->
        <!--- Pride section starts--->
        <div class="pride">
            <div class="detail">
                <h1>We Pride Ourselves on</h1>
                <p>nsdkfjsnjfnsdsdjfbdvkdjfnndf</p>
                <a href="menu.php" class="btn">Shop Now</a>
            </div>
        </div>
        <!--- Pride section end--->
        <?php include 'components/footer.php'; ?>
        <script src="js/user_script.js"></script>
    </body>
</html>