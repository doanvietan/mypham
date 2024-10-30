<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <?php
        require "menu.php";
        ?>
        <!--slider section start-->
        <div class="hero-section section position-relative">
            <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="shop.php">shop now</a>
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-9.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--Hero Content start-->
                                <div class="hero-content-2 color-2">
                                    <h2>view our</h2>
                                    <h1>Women's hair</h1>
                                    <h3>Products now</h3>
                                    <a href="shop.php">shop now</a>
                                </div>
                                <!--Hero Content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->
            </div>
        </div>
        <!--slider section end-->

        <!-- Feature Section Start -->
        <div class="feature-section section pt-100 pt-md-75 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa-truck fa"></i>
                            </div>
                            <div class="content">
                                <h2>Free shipping worldwide</h2>
                                <p>On order over $200</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30">
                            <div class="icon">
                                <i class="fa fa-undo"></i>
                            </div>
                            <div class="content">
                                <h2>30 days free return</h2>
                                <p>Money back guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Single Faeture Start -->
                        <div class="single-feature feature-style-2 mb-30 br-0">
                            <div class="icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content">
                                <h2>Member safe shopping</h2>
                                <p>Safe shopping guarantee</p>
                            </div>
                        </div>
                        <!-- Single Faeture End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!--Product section start-->
        <div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product-tab-menu mb-40 mb-xs-20">
                            <ul class="nav">
                                <li><a class="active" data-toggle="tab" href="#products"> New Products</a></li>
                                <li><a data-toggle="tab" href="#onsale"> OnSale</a></li>
                                <li><a data-toggle="tab" href="#featureproducts"> Feature Products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="products">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'mypham');
                                $sqlNewProduct = 'Select * from Products where new_product = 1';
                                $resultNewProduct = mysqli_query($conn, $sqlNewProduct);
                                displayProduct($resultNewProduct);
                                function displayProduct($result)
                                { ?>
                                <div class="row tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 1,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <div class="col-12">
                                                <!-- Single Product Start -->
                                                <div class="single-product mb-30">
                                                    <div class="product-img">
                                                        <a href="single-product.php">
                                                            <img src="./assets/images/product/<?php echo $row['image']; ?>" alt="">
                                                        </a>
                                                        <span class="descount-sticker">-10%</span>
                                                        <span class="sticker">New</span>
                                                        <div class="product-action d-flex justify-content-between">
                                                            <a class="product-btn" href="#">Add to Cart</a>
                                                            <ul class="d-flex">
                                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                                        title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="single-product.php"><?php echo $row['product_name']; ?></a></h3>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h4 class="price"><span class="new">€<?php echo $row['new_price']; ?>.00</span>
                                                            <span class="old">€<?php echo $row['old_price']; ?>.00</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                ?>

                            </div>
                            <div class="tab-pane fade" id="onsale">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'mypham');
                                $sqlOnSale = 'Select * from Products where on_sale = 1';
                                $resultOnSale = mysqli_query($conn, $sqlOnSale);
                                displayProduct($resultOnSale);
                                ?>
                            </div>
                            <div class="tab-pane fade" id="featureproducts">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'mypham');
                                $sqlFeature = 'Select * from Products where feature_product = 1';
                                $resultFeature = mysqli_query($conn, $sqlFeature);
                                displayProduct($resultFeature)
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end-->

        <!--Banner section start-->
        <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-1.png" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-2.png" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="#">
                                <img src="assets/images/banner/h1-banner-3.png" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section end-->

        <!--List Product section start-->
        <div
            class="list-section section pt-60 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Top rated </h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <?php
                                    $sqlTopRated1 = "Select * from Products";
                                    $resultTopRated1 = mysqli_query($conn, $sqlTopRated1);
                                    listProduct($resultTopRated1);
                                    function listProduct($result)
                                    {
                                        $i = 1;
                                    ?>
                                        <div class="list-product-group">
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>

                                                <!-- Single List Product Start -->
                                                <div class="single-list-product">
                                                    <div class="product-image">
                                                        <a href="single-product.php"><img
                                                                src="./assets/images/product/<?php echo $row['image']; ?>" alt=""></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="single-product.php"><?php echo $row['product_name']; ?></a></h3>
                                                        <h4 class="price"><span class="new">€<?php echo $row['new_price']; ?>.00</span><span
                                                                class="old">€<?php echo $row['old_price']; ?>.00</span></h4>
                                                    </div>
                                                </div>
                                                <!-- Single List Product End -->
                                            <?php
                                                if ($i == 3) {
                                                    break;
                                                }
                                                $i += 1;
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    $sqlTopRated2 = "Select * from Products where product_id > 3";
                                    $resultTopRated2 = mysqli_query($conn, $sqlTopRated2);
                                    listProduct($resultTopRated2);
                                    $sqlTopRated3 = "Select * from Products where product_id > 6";
                                    $resultTopRated3 = mysqli_query($conn, $sqlTopRated3);
                                    listProduct($resultTopRated3);

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>On-sale</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <?php
                                    $sqlOnSale1 = "Select * from Products";
                                    $resultOnSale1 = mysqli_query($conn, $sqlOnSale1);
                                    listProduct($resultOnSale1);
                                    $sqlOnSale2 = "Select * from Products where product_id > 3";
                                    $resultOnSale2 = mysqli_query($conn, $sqlOnSale2);
                                    listProduct($resultOnSale2);
                                    $sqlOnSale3 = "Select * from Products where product_id > 6";
                                    $resultOnSale3 = mysqli_query($conn, $sqlOnSale3);
                                    listProduct($resultOnSale3);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Trending items</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <?php
                                    $sqlTrending1 = "Select * from Products";
                                    $resultTrending1 = mysqli_query($conn, $sqlTrending1);
                                    listProduct($resultTrending1);
                                    $sqlTrending2 = "Select * from Products where product_id > 3";
                                    $resultTreding2 = mysqli_query($conn, $sqlTrending2);
                                    listProduct($resultTreding2);
                                    $sqlTrending3 = "Select * from Products where product_id > 6";
                                    $resultTreding3 = mysqli_query($conn, $sqlTrending3);
                                    listProduct($resultTreding3);
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--List Product section end-->
        <?php
        require "footer.php";
        ?>
    </div>
</body>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>