@extends('Boot.master')

@section('title')
    <title>Home</title>
@stop

@section('body')
    <section class="main-slider">
        <!--=================== Camera Slider ===================-->
        <div class="paira-camera-slider paira-animation-container">
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-1.jpg">
                <div class="slider-con">
                    <h1 class=" text-uppercase paira-animation" data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">So<span class="font-color-orange">me</span></h1>
                    <h3 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange">Foot</span>Wear</h3>
                    <h3 class="paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.9s">Collection</h3>
                    <a class="btn btn-success text-uppercase paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.11s" href="#">Collect now</a>
                </div>
            </div>
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-2.jpg">
                <div class="slider-con1">
                    <h1 class="text-uppercase paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">Game</h1>
                    <h2 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange"> Shoe</span> For all</h2>
                    <h2 class="paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.9s">Collection</h2>
                    <a class="btn btn-success text-uppercase paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.11s" href="#">Collect now</a>
                </div>
            </div>
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-3.jpg">
                <div class="slider-con">
                    <h1 class=" text-uppercase paira-animation" data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">Running</h1>
                    <h3 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange">With</span> Footwear</h3>
                    <a class="btn btn-success paira-animation text-uppercase" data-paira-animation="fadeInUp" data-paira-animation-delay="0.9s" href="#">Collect now</a>
                </div>
            </div>
        </div>
    </section>
    <!--=================== Top Selling Product Section ===================-->
    <section class="top-seller text-center padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1 class="text-uppercase">Best Seller</h1>
                        <hr>
                    </div>
                </div>
                <div class="product-seller">
                    <div class="paira-related-product related-product">
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-1.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive">
                                </a>
                            </div>
                            <div class="product-price">
                                <del><span class="money font-color-orange margin-right-10">$170.00</span></del>
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                                <ul id="paira-countdown" class="countdown list-inline margin-clear padding-clear margin-top-50">
                                    <li class="dash weeks_dash">
                                        <div class="digit countdown-first-digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Weeks</span>
                                    </li>
                                    <li class="dash days_dash">
                                        <div class="digit countdown-first-digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">days</span>
                                    </li>
                                    <li class="dash hours_dash">
                                        <div class="digit countdown-first-digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">hours</span>
                                    </li>
                                    <li class="dash minutes_dash">
                                        <div class="digit countdown-first-digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">minutes</span>
                                    </li>
                                    <li class="dash seconds_dash">
                                        <div class="digit countdown-first-digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">seconds</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-2.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-2.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-2.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-2.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-btn">
                        <button class="paira-related-product-left pull-left paira-animation"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.3s"><a><img src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-pre.png" alt="" class="paira-product-image img-responsive"></a></button>
                        <button class="paira-related-product-right pull-right paira-animation"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.3s"><a><img src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-next.png" alt="" class="paira-product-image img-responsive"></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================== Big Banner Section ===================-->
    <section class="banner-big">
        <div class="container">
            <div class="banner-big-con text-center">
                <h4>DEAL OF THE DAY</h4>
                <h5 class="font-italic">Fashion on Sale Only Today</h5>
                <div class="banner-price margin-bottom-10">
                    <del><span class="money font-color-orange margin-right-10">$170.00</span></del>
                    <span class="money">$120.00</span>
                </div>
                <ul id="paira-countdown1" class="countdown list-inline margin-clear padding-clear margin-bottom-20">
                    <li class="dash weeks_dash">
                        <div class="digit countdown-first-digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title">Weeks</span>
                    </li>
                    <li class="dash days_dash">
                        <div class="digit countdown-first-digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title">days</span>
                    </li>
                    <li class="dash hours_dash">
                        <div class="digit countdown-first-digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title">hours</span>
                    </li>
                    <li class="dash minutes_dash">
                        <div class="digit countdown-first-digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title">minutes</span>
                    </li>
                    <li class="dash seconds_dash">
                        <div class="digit countdown-first-digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title">seconds</span>
                    </li>
                </ul>
                <a class="btn btn-success text-uppercase">Shop now</a>
            </div>
        </div>
    </section>
    <!--=================== Recent Product Section ===================-->
    <section class="recent-product text-center padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1 class="text-uppercase">Recent Products</h1>
                        <hr>
                    </div>
                </div>
                <div class="product-widget">
                    <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-100 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-3.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i> Add to cart</a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-100 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-4.jpg" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-price">
                                <span class="money">$120.00</span>
                            </div>
                            <div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>
                            <h4 class="color-scheme-3"> Converse Technical Shoe</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="#" class=" text-uppercase color-scheme-3"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i> Add to cart</a></li>
                                        <li><a href="#" class="paira-quick-view quick-view color-scheme-3"><i class="fa fa-eye fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-heart-o fa-2x"></i></a></li>
                                        <li><a href="#" class="color-scheme-3"><i class="fa fa-retweet fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================== Brand Logo Section ===================-->
    <section class="brand margin-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="paira-brand">
                        <ul class="list-inline">
                            <li><a href="#" class="text-uppercase color-scheme-3"><i class="fa  fa-shield font-color-orange margin-right-10 fa-5x pull-left"></i><p class="font-size-50 pull-left">saka</p></a></li>
                            <li><a href="#" class="text-uppercase color-scheme-3"><i class="fa  fa-sun-o font-color-orange fa-5x margin-right-10 pull-left"></i><p class="font-size-50 pull-left">yana</p></a></li>
                            <li><a href="#" class="text-uppercase color-scheme-3"><i class="fa  fa-apple font-color-orange fa-5x margin-right-10 pull-left"></i><p class="font-size-50 pull-left">zaha</p></a></li>
                            <li><a href="#" class="text-uppercase color-scheme-3"><i class="fa  fa-lightbulb-o font-color-orange fa-5x margin-right-10 pull-left"></i><p class="font-size-50 pull-left">zaka</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================== Recent Product Section ===================-->
    <section class="category text-center margin-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">
                    <div class="paira-product product position category-content">
                        <div class="col-md-8">
                            <div class="position">
                                <a href="#"><img src="assets/images/category/themetidy-paira-framework-boot-responsive-html-template-category-1.jpg" alt="" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-hover text-uppercase">
                                <a href="collection.html" class="btn btn-success text-uppercase position">Shop The collection</a>
                            </div>
                        </div>
                        <div class="col-md-4 background-or text-center">
                            <h4 class="text-uppercase font-bold font-color-white padding-top-45">Concerese</h4>
                            <h1 class="font-bold">10</h1>
                            <h4 class="text-uppercase">Products</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">
                    <div class="position paira-product product category-content1">
                        <div class="col-md-4 background-or1">
                            <h4 class="text-uppercase font-bold font-color-white padding-top-45">Concerese</h4>
                            <h1 class="font-bold">10</h1>
                            <h4 class="text-uppercase">Products</h4>
                        </div>
                        <div class="col-md-8">
                            <div class="position">
                                <a href="#"><img src="assets/images/category/themetidy-paira-framework-boot-responsive-html-template-category-2.jpg" alt="" class="paira-product-image img-responsive"></a>
                            </div>
                            <div class="product-hover text-uppercase">
                                <a href="collection.html" class="btn btn-success text-uppercase position">Shop The collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stop