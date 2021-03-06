<!doctype html>
<html class="no-js" lang="en">
<?php
	session_start();
    include('handler/customersession.php');
    include('partials/head.php');
?><body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">


        <!-- Start Header Style -->
        <?php
            include('partials/header.php');
        ?> 
         <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                
                                <div class="accordion__title">
                                    Address Information
                                </div>
                                <div class="accordion__body">
                                        <div class="bilinfo">
                                            <form action="handler/orderhandler.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address" placeholder="Street Address - Apartment/Block/House (optional)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="City/State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="pin" placeholder="Post code/ zip">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="email" name="email" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="mobile" name="phone" placeholder="Phone number">
                                                        </div>
                                                    </div>
                                                    <?php 
								$total=0;
							    if (isset($_SESSION['cart'])) {            
								foreach ($_SESSION['cart'] as $key => $value) {            
                                $total=$total+$value['item_price']*$value['quantity'];
							?>
                                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                                    <?php }
							                        } ?>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <button class="fv-btn" type="submit" name="placeorder">Place Order
                                                        </button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                  <div class="accordion__title">
                                        payment information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Check/ Money Order</a>
                                            </div>
                                            <div class="single-method">
                                                <a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                                <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>Cash On Delavery</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                            <!--php connection code here-->
                            <?php 
								$total=0;
							    if (isset($_SESSION['cart'])) {            
								foreach ($_SESSION['cart'] as $key => $value) {            
                                $total=$total+$value['item_price']*$value['quantity'];
							?>    
                            <div class="single-item">
                                <div class="single-item__content">
                                        <a><?php echo $value['item_name'] ?></a>
                                </div>                                           
                            </div>   
                            <?php }
							} ?>
                        </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price">??? <?php echo $total ?>/-</span>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <?php
            include('partials/footer.php');
        ?>
    </div>
     <!-- jquery latest version -->
     <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>