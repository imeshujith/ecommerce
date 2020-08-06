<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Ogani Template" />
        <meta name="keywords" content="Ogani, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Sampath Super Tradings</title>

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
            rel="stylesheet"
        />

        <!-- Css Styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" />
        <link
            rel="stylesheet"
            href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"
            type="text/css"
        />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/elegant-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" type="text/css" />
        <link
            rel="stylesheet"
            href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css"
            type="text/css"
        />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" />
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="#"><img src="<?php echo base_url(); ?>assets/img/image.png" alt="" /></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>website/cart"
                            ><i class="fa fa-shopping-cart"></i>
                            <span>3</span></a
                        >
                    </li>
                </ul>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>website/shop">Shop</a></li>
                    <li><a href="<?php echo base_url(); ?>website/cart">Cart</a></li>
                    <li><a href="<?php echo base_url(); ?>website/contact">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                    <li>Free Shipping for all Order of $99</li>
                </ul>
            </div>
        </div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="#"
                                ><img src="<?php echo base_url(); ?>assets/img/image.png" alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>website/shop">Shop</a></li>
                                <li><a href="<?php echo base_url(); ?>website/cart">Cart</a></li>
                                <li><a href="<?php echo base_url(); ?>website/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>website/cart"
                                        ><i class="fa fa-shopping-cart"></i>
                                        <span>3</span></a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All categories</span>
                            </div>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+65 11.188.888</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hero__item set-bg"
                            data-setbg="<?php echo base_url(); ?>assets/img/hero/banner.jpg"
                        >
                            <div class="hero__text">
                                <span>FRUIT FRESH</span>
                                <h2>Vegetable <br />100% Organic</h2>
                                <p>Delivery Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->