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
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1>Shopping Cart</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Cart section start-->
        <div
            class="cart-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="assets/images/product/product-1.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Cable Restorer</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="assets/images/product/product-2.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Die Grinder</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="assets/images/product/product-3.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Orange Decker drill</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-right">
                                            <h4 style="line-height: 45px;">Tổng:</h4>
                                        </td>
                                        <td class="text-center">
                                            <h4 style="line-height: 45px;">$200.000</h4>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-summary-button">
                                                <a style="color: #fff;" class="btn" href="checkout.php">Checkout</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!--Cart section end-->

        <!--Brand section start-->
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