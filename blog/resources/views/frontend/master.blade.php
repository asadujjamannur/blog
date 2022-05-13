<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Woomart Responsive  HTML5 Template</title>
        <meta name="description" content="Woomart Responsive  HTML5 Template " />
        <meta name="keywords" content="business,corporate, creative, woocommerach, design, gallery, minimal, modern, landing page, cv, designer, freelancer, html, one page, personal, portfolio, programmer, responsive, vcard, one page" />
        <meta name="author" content="zainiklab" />

        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="{{asset('frontend/images/favicon.png')}}">
        <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png" type="image/x-icon')}}">
        <!-- fonts file -->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- css file  -->
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        <script src="{{asset('frontend/js/modernizr-3.11.2.min.js')}}"></script>
    </head>

    <body class="body-class">
        <!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
        <header class="header-area header-v6">
            <!-- top bar area start here  -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center text-md-left">
                            <div class="topbar-left">
                                <ul class="social-meida">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 text-center text-md-right">
                            <div class="topbar-right ">
                                <ul>
                                    <li class="account dropdown">
                                        <a href="#"> <i class="user-icon fas fa-user-circle"></i> Account <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="reset-password.html">Reset Password</a></li>
                                            <li><a href="#">profile</a></li>
                                            <li><a href="#">notifications</a></li>
                                            <li><a href="#">settings</a></li>
                                            <li><a href="#">log out</a></li>
                                        </ul>
                                    </li>
                                    <li class="currancy dropdown">
                                        <a href="#">USD <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">INR</a></li>
                                            <li><a href="#">BTD</a></li>
                                        </ul>
                                    </li>
                                    <li class="language dropdown">
                                        <a href="#">English <i class="angle-down fa fa-angle-down"></i></a>
                                        <ul class="dropdon-itme">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Dautch</a></li>
                                            <li><a href="#">Hindi</a></li>
                                            <li><a href="#">Bangla</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top bar area end here  -->
            <!-- header-middle-aera star here   -->
            <div class="header-middle-area">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6 order-0 order-lg-1">
                            <div class="brand-area">
                                <a href="index.html"><img src="{{asset('frontend/images/logo1.png')}}" alt="Woomart" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6  order-2 order-lg-2">
                            <div class="search-area">
                                <form action="#">
                                    <div class="search-wrap">
                                        <select class="niceselect selct-area search-item">
                                            <option data-display="Product Categories">Product Categories</option>
                                            <option value="1">Product Categories</option>
                                            <option value="2">Wooman's Categories</option>
                                            <option value="3">Man's Categories</option>
                                            <option value="4">Home Categories</option>
                                        </select>
                                        <div class="form-group search-item m-0">
                                            <input type="text" class="search-input" id="search" name="%s" placeholder="Search Product..." />
                                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 order-1 order-lg-3">
                            <div class="middle-right">
                                <ul>
                                    <li>
                                        <a href="wishlist.html"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart-empty-side-view"></i>
                                        </a>
                                        <span class="card-amount">My Cart - $0.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-aera star here   -->
            <!-- header bottom area  start here  -->
            <div class="header-botom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="categories-list">
                                <ul class="catagory">
                                    <li>
                                        <a href="#">All Categories <i class="fa fa-angle-down"></i></a>
                                        <ul class="catagory-items">
                                            <li><a href="#">Baby Cloth</a></li>
                                            <li><a href="#">Man Clothing</a></li>
                                            <li><a href="#">Girls Clothing</a></li>
                                            <li><a href="#">Electronics</a></li>
                                            <li><a href="#">Man Watches</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <a id="menu-bars" class="text-right d-block d-md-none" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-lg-9 col-md-9 text-left text-md-right">
                            <nav class="main-menu-area">
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu-items">
                                            <li><a href="index.html">home v1</a></li>
                                            <li><a href="index2.html">home v2</a></li>
                                            <li><a href="index3.html">home v3</a></li>
                                            <li><a href="index4.html">home v4</a></li>
                                            <li><a href="index5.html">home v5</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-itms position-static">
                                        <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu row">
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Men Fashion</a></li>
                                                    <li><a href="#">Shirt</a></li>
                                                    <li><a href="#">T- Shirt</a></li>
                                                    <li><a href="#">Pant</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Trowser</a></li>
                                                </ul>                                                                                            
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Women Fashion</a></li>
                                                    <li><a href="#">Shirt</a></li>
                                                    <li><a href="#">T- Shirt</a></li>
                                                    <li><a href="#">Pant</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Trowser</a></li>
                                                </ul>                                                                                            
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Electronics</a></li>
                                                    <li><a href="#">Shirt</a></li>
                                                    <li><a href="#">T- Shirt</a></li>
                                                    <li><a href="#">Pant</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Trowser</a></li>
                                                </ul>                                                                                            
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Mobile & Laptops</a></li>
                                                    <li><a href="#">Shirt</a></li>
                                                    <li><a href="#">T- Shirt</a></li>
                                                    <li><a href="#">Pant</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Trowser</a></li>
                                                </ul>                                                                                            
                                            </li>
                                            <li class="col-12 brad-logo-area">
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo1.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo2.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo3.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo4.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo5.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo6.png" alt="clients_logo')}}" /></a></div>
                                                <div><a href="#"><img src="{{asset('frontend/images/brands/clients_logo7.png" alt="clients_logo')}}" /></a></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu-items">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="single-shop.html">shop details</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">blog details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="order-track.html">order track</a></li>
                                            <li><a href="sign-in.html">sign in</a></li>
                                            <li><a href="sign-up.html">sign up</a></li>
                                            <li><a href="reset-password.html">reset password</a></li>
                                            <li><a href="terms-conditions.html">terms conditions</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom area  end here  -->
        </header>
        <!-- header area end here  -->
        <!-- mobile-header-area start here  -->
        <div class="mobile-header-area">
            <div class="mobile-header-top">
                <ul class="social-meida">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="mobile-header-bottom">
                <div class="menu-bar">
                    <a href="#" class="menu-bars">
                        <span class="bar-line"></span>
                        <span class="menu-text">menu</span>
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html"><img src="{{asset('frontend/images/logo1.png')}}" alt="woomart" /></a>
                </div>
                <div class="icon-bar">
                    <a class="search-open" href="#"><i class="fa fa-search"></i></a>
                    <a class="cart" href="cart.html"><i class="fas fa-shopping-cart"></i> <span class="cart-number">0</span> </a>
                </div>
            </div>
            <div class="mobile-search-area">
                <div class="mobile-search-form">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile-search" name="%s" placeholder="Search Product...">
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- mobile-header-area end here  -->
        <!-- offcanvase menu area start here  -->
        <div class="panel-backdrop "></div>
        <div class="offcanvase-manu-area ">
            <nav class="mobile-menu">
				<ul>
                    <li>
                        <a href="#">Home </a>
                        <ul class="submenu-items">
                            <li><a href="index.html">home v1</a></li>
                            <li><a href="index2.html">home v2</a></li>
                            <li><a href="index3.html">home v3</a></li>
                            <li><a href="index4.html">home v4</a></li>
                            <li><a href="index5.html">home v5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                        <ul class="mega-menu-items">
                            <li>
                                <h4 class="megamenu-title">Men Fashion</h4>
                                <a href="#">Shirt</a>
                                <a href="#">T- Shirt</a>
                                <a href="#">Pant</a>
                                <a href="#">Jeans</a>
                                <a href="#">Trowser</a>
                            </li>
                            <li>
                                <h4 class="megamenu-title">Women Fashion</h4>
                                <a href="#">Shirt</a>
                                <a href="#">Shirt</a>
                                <a href="#">T- Shirt</a>
                                <a href="#">Pant</a>
                                <a href="#">Jeans</a>
                                <a href="#">Trowser</a>
                            </li>
                            <li>
                                <h4 class="megamenu-title">Electronics</h4>
                                <a href="#">Shirt</a>
                                <a href="#">T- Shirt</a>
                                <a href="#">Pant</a>
                                <a href="#">Jeans</a>
                                <a href="#">Trowser</a>
                            </li>
                            <li>
                                <h4 class="megamenu-title">Mobile & Laptops</h4>
                                <a href="#">Shirt</a>
                                <a href="#">T- Shirt</a>
                                <a href="#">Pant</a>
                                <a href="#">Jeans</a>
                                <a href="#">Trowser</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="submenu-items">
                            <li><a href="about.html">about</a></li>
                            <li><a href="shop.html">shop</a></li>
                            <li><a href="single-shop.html">shop details</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="single-blog.html">blog details</a></li>
                            <li><a href="contact.html">contact</a></li>
                            <li><a href="cart.html">cart</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="order-track.html">order track</a></li>
                            <li><a href="sign-in.html">sign in</a></li>
                            <li><a href="sign-up.html">sign up</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="terms-conditions.html">terms conditions</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="404.html">404 page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog </a>
                    </li>
                    <li>
                        <a href="contact.html">Contact </a>
                    </li>
                    <li>
                        <a href="wishlist.html"><i class="far fa-heart"></i> Wishlist</a>
                    </li>
                    <li>
                        <a href="sign-up.html"><i class="far fa-user"></i> Login / Register</a>
                    </li>
                </ul>
            </nav>
            <div class="catagory-area">
                <h3 class="catagory-title">Categories</h3>
                <ul class="catagory-list">
                    <li><a href="#"> <i class="fas fa-chair"></i> Furniture</a></li>
                    <li><a href="#"> <i class="far fa-lightbulb"></i> Lighting</a></li>
                    <li><a href="#"> <i class="fas fa-shopping-basket"></i> Accessories</a></li>
                    <li><a href="#"> <i class="far fa-clock"></i> Clocks</a></li>
                    <li><a href="#"> <i class="fas fa-cookie"></i> Cooking</a></li>
                    <li><a href="#"> <i class="fas fa-plug"></i> Electronics</a></li>
                    <li><a href="#"> <i class="fas fa-tshirt"></i> Fashion</a></li>
                </ul>
            </div>
        </div>
        <!-- offcanvase menu area end here  -->
        
        <div class="blog-page pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-wrap">
                            <h2 class="section-title mb-5">Our Latest Blog</h2>
                            <div class="row m-b-30">
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/1.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/2.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/3.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/4.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/5.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area mt-50">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-page d-flex align-items-center justify-content-between">
                                        <div class="page-count">
                                            <span>Page</span>
                                            <input class="page-number" type="text" value="2" />
                                            <span>of 30</span>
                                        </div>
                                        <ul class="page-controls">
                                            <li class="control-btn"><a href="#"><i class="fas fa-caret-left"></i> Prev</a></li>
                                            <li class="control-btn"><a href="#">Next <i class="fas fa-caret-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-area">
                            <div class="single-widget search-widget ">
                                <div class="widget-title text-center">
                                    <h3>Search Post</h3>
                                </div>
                                <div class="search-form widget-wrap">
                                    <form>
                                        <div class="form-group mb-0">
                                          <input type="text" class="form-control" id="search2" name="search" placeholder="search here..." />
                                          <button type="submit" class="search-icon fas fa-search"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="single-widget recent-post-widget ">
                                <div class="widget-title text-center">
                                    <h3>Recent Blog</h3>
                                </div>
                                <div class="recent-post-list widget-wrap">
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget add-banner-widget ">
                                <div class="widget-title text-center">
                                    <h3>Girls Collections</h3>
                                </div>
                                <img src="{{asset('frontend/images/watch.jpg')}}" alt="iamge" />
                            </div>
                            <div class="single-widget recent-post-widget ">
                                <div class="widget-title text-center">
                                    <h3>Popular Blog</h3>
                                </div>
                                <div class="recent-post-list widget-wrap">
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('frontend/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer area start here  -->
        <footer class="footer-area-v2 ">
            <div class="widget-area ">
                <div class="container">
                    <div class="feature-lsit">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-shopping-basket"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Shopping Cart</h4>
                                              <span>Step 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-money-check-alt"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Payment</h4>
                                              <span>Step 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-truck"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Delivery</h4>
                                              <span>Step 3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-clipboard-check"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Confirmation</h4>
                                              <span>Step 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-wrap">
                        <div class="row m-b-30">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget text-widget">
                                    <div class="footer-brand">
                                        <a href="index.html"><img src="{{asset('frontend/images/white-logo2.png')}}" alt="woomart" /></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum uismod</p>
                                    <ul class="social-media-widget">
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget footer-menu">
                                    <h3 class="widget-title">Quick Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Catergory</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget contact-widget">
                                    <h3 class="widget-title">Contact us</h3>
                                    <ul class="address-list">
                                        <li>354 King Street, Melbourne Victoria 5467 Australia</li>
                                        <li>(0321) 645-798-021</li>
                                        <li>yoursite.com</li>
                                        <li>info@mail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget newsletter-widget">
                                    <h3 class="widget-title">Newsletter</h3>
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="subscribe" name="subscribe" placeholder="Subscribe Newsletter" />
                                            </div>
                                            <button type="submit" class="btn-style-two">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright-area text-center text-md-left">
                                    <p class="copyright-text">&copy; Copyright 2020 <a href="#">ZainikLab</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer-bottom-menu text-center text-md-right">
                                    <ul>
                                        <li><a href="#">Terms & Conditions </a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end here  -->
        
        
        
        
        <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
