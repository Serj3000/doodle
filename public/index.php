<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

//define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

//$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

// $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// $response = $kernel->handle(
//     $request = Illuminate\Http\Request::capture()
// );

// $response->send();

// $kernel->terminate($request, $response);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Foode - Food Blog HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/logo.png" alt="">
            <div class="foode-preloader">
                <span></span>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="foode-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="foodeNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive-blog.html">Archive Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about-us.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Catagories</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                                <li><a href="#">- Fastfood</a></li>
                                                <li><a href="#">- Salad</a></li>
                                                <li><a href="#">- Soup</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                                <li><a href="#">- Fastfood</a></li>
                                                <li><a href="#">- Salad</a></li>
                                                <li><a href="#">- Soup</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                                <li><a href="#">- Fastfood</a></li>
                                                <li><a href="#">- Salad</a></li>
                                                <li><a href="#">- Soup</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                                <li><a href="#">- Fastfood</a></li>
                                                <li><a href="#">- Salad</a></li>
                                                <li><a href="#">- Soup</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/2.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / 35 Comments</p>
                    <a href="#" class="post-title">
                        <h4>Fried Pizzas on parchment paper with basil.</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/3.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / Foody</p>
                    <a href="#" class="post-title">
                        <h4>Quick Vegan Enchiladas with Sweet Potato Sauce</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/4.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>aug 8, 2018 / health</p>
                    <a href="#" class="post-title">
                        <h4>Eleven Slushie Cocktails I Bookmarked</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/5.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / drinks</p>
                    <a href="#" class="post-title">
                        <h4>Homemade Strawberry Almond Milk</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/6.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / foody</p>
                    <a href="#" class="post-title">
                        <h4>Kitchen Sink Sunflower Salad in a bow.</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/2.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / 35 Comments</p>
                    <a href="#" class="post-title">
                        <h4>Fried Pizzas on parchment paper with basil.</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/3.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / Foody</p>
                    <a href="#" class="post-title">
                        <h4>Quick Vegan Enchiladas with Sweet Potato Sauce</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/4.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>aug 8, 2018 / health</p>
                    <a href="#" class="post-title">
                        <h4>Eleven Slushie Cocktails I Bookmarked</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/5.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / drinks</p>
                    <a href="#" class="post-title">
                        <h4>Homemade Strawberry Almond Milk</h4>
                    </a>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/blog-img/6.jpg);"></div>
                <!-- Post Content -->
                <div class="hero-slides-content">
                    <p>MAY 8, 2018 / foody</p>
                    <a href="#" class="post-title">
                        <h4>Kitchen Sink Sunflower Salad in a bow.</h4>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Featured Post Area -->
                <div class="col-12">
                    <div class="featured-post-area">
                        <div id="featured-post-slides" class="carousel slide d-flex flex-wrap" data-ride="carousel">

                            <div class="carousel-inner">

                                <div class="carousel-item active bg-img" style="background-image: url(img/blog-img/7.jpg)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2>A Closer Look At Our Front Porch Items From Lowe’s</h2>
                                        </a>
                                    </div>
                                </div>

                                <div class="carousel-item bg-img" style="background-image: url(img/blog-img/6.jpg)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2>12 Beautiful Vegan Panna Cottas</h2>
                                        </a>
                                    </div>
                                </div>

                                <div class="carousel-item bg-img" style="background-image: url(img/blog-img/2.jpg)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2>Quick Vegan Enchiladas with Sweet Potato Sauce</h2>
                                        </a>
                                    </div>
                                </div>

                                <div class="carousel-item bg-img" style="background-image: url(img/blog-img/3.jpg)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2>Instant Pot Mushroom Stroganoff with Vodka</h2>
                                        </a>
                                    </div>
                                </div>

                                <div class="carousel-item bg-img" style="background-image: url(img/blog-img/5.jpg)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2>The Most Popular Recipe Last Month</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#featured-post-slides" data-slide-to="0" class="active">
                                    <h2>01</h2>
                                    <a href="#" class="post-title">
                                        <h5>A Closer Look At Our Front Porch Items From Lowe’s</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="1">
                                    <h2>02</h2>
                                    <a href="#" class="post-title">
                                        <h5>12 Beautiful Vegan Panna Cottas</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="2">
                                    <h2>03</h2>
                                    <a href="#" class="post-title">
                                        <h5>Quick Vegan Enchiladas with Sweet Potato Sauce</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="3">
                                    <h2>04</h2>
                                    <a href="#" class="post-title">
                                        <h5>Instant Pot Mushroom Stroganoff with Vodka</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="4">
                                    <h2>05</h2>
                                    <a href="#" class="post-title">
                                        <h5>The Most Popular Recipe Last Month</h5>
                                    </a>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/8.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 8, 2018 / foody</p>
                                <a href="#" class="post-title">
                                    <h4>Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/9.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 12, 2018 / drinks</p>
                                <a href="#" class="post-title">
                                    <h4>Grain-Free Sweet &amp; Savory Activated Walnut Granola</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/10.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 15, 2018 / Coffee</p>
                                <a href="#" class="post-title">
                                    <h4>Self-Care Interview Series: Gabrielle Russomagno</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/11.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 20, 2018 / foody</p>
                                <a href="#" class="post-title">
                                    <h4>Green Skillet Pizza with Asparagus and Pesto</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/12.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 28, 2018 / health</p>
                                <a href="#" class="post-title">
                                    <h4>Green Skillet Pizza with Asparagus and Pesto</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
                        </div>

                    </div>

                    <!-- Pager -->
                    <ol class="foode-pager mt-50">
                        <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                        <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    </ol>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>About Me</h6>
                            </div>
                            <!-- Thumbnail -->
                            <div class="about-thumbnail">
                                <img src="img/blog-img/about-me.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="widget-content text-center">
                                <img src="img/core-img/signature.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Subscribe &amp; Follow</h6>
                            </div>
                            <!-- Widget Social Info -->
                            <div class="widget-social-info text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Latest Posts</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Weeknight Ponzu Pasta</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>The Most Popular Recipe Last Month</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>A Really Good Chana Masala</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp4.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Spicy Instant Pot Taco Soup</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp5.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Lime Leaf Miso Soup</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Adds -->
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Newsletter</h6>
                            </div>
                            <!-- Content -->
                            <div class="newsletter-content">
                                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                                <form action="#" method="post">
                                    <input type="email" name="email" class="form-control" placeholder="Your email">
                                    <button><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Unique</a></li>
                                <li><a href="#">Template</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">Wordpress Template</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">Idea</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Follow Us On Instagram</h2>
                        <span>@foodeblog</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="instagram-slides owl-carousel">
                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta1.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta2.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta3.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta4.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta5.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="img/blog-img/insta6.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info d-flex align-items-center justify-content-between">
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
