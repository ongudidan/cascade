<?php

/** @var yii\web\View $this */

$this->title = 'Clearing, Forwarding, Cargo, Logistics, cfs, shipping, import cars, cars online, transport,storage,container, terminal';
?>
<!-- <div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div> -->


<div>

 
<?= $this->render('home/_slider',['generalModel'=> $generalModel] ) ?>

   
    <!-- END REVOLUTION SLIDER -->



    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="/web/frontend/assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Who We Are ?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris</div>
                    <a href="#" class="nile-bottom sm">Read More</a>


                    <div id="accordion" class="nile-accordion margin-top-80px sm-mb-45px">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-block btn-link active" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i
                                            class="fa fa-info-circle"></i> Why us ?</button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-block btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i
                                            class="fa fa-truck"></i> Explore our Facilities</button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-block btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"><i class="fa fa-plane"></i> Warehousing
                                        Solution</button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#"><img src="/web/frontend/assets/img/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <div class="cart-service background-main-color">
                                <div class="icon"><img src="/web/frontend/assets/icons/service-light-2.png" alt=""></div>
                                <h2>Air Freight</h2>
                                <hr>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="cart-service background-main-color">
                                <div class="icon"><img src="/web/frontend/assets/icons/service-light-3.png" alt=""></div>
                                <h2>Air Freight</h2>
                                <hr>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#"><img src="/web/frontend/assets/img/cart-1.jpg" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============= //About Us =============-->



    <div class="call-action ba-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 padding-tb-15px">
                    <h2>Unbeatable Trucking and Transport Services</h2>
                    <div class="text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 sm-mb-45px">
                            <a href="#" class="action-bottom layout-1">
                                <img src="/web/frontend/assets/icons/small-icon-1.png" alt="">
                                <h4>Tell Friend</h4>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 sm-mb-45px">
                            <a href="#" class="action-bottom layout-1">
                                <img src="/web/frontend/assets/icons/small-icon-2.png" alt="">
                                <h4>Read More</h4>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <a href="#" class="action-bottom layout-1">
                                <img src="/web/frontend/assets/icons/small-icon-3.png" alt="">
                                <h4>Contact Us</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section padding-tb-100px section-ba-1">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">Our Service</div>
                        <div class="des">In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue,
                            eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur
                            bibendum. </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="/web/frontend/assets/icons/service-dark-1.png" alt=""></div>
                        <a href="#" class="title h2">Cargo Transportation</a>
                        <div class="des">Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="/web/frontend/assets/icons/service-dark-2.png" alt=""></div>
                        <a href="#" class="title h2">Air Freight</a>
                        <div class="des">Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="/web/frontend/assets/icons/service-dark-3.png" alt=""></div>
                        <a href="#" class="title h2">Ocean Freight</a>
                        <div class="des">Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon"><img src="/web/frontend/assets/icons/service-dark-4.png" alt=""></div>
                        <a href="#" class="title h2">Packaging & Storage</a>
                        <div class="des">Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.</div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <a href="#" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
            </div>

        </div>
    </div>


    <div class="section padding-tb-100px section-ba-2">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-money"></i></div>
                        <div class="h2">Our Pricing</div>
                        <div class="des">In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue,
                            eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur
                            bibendum. </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <!-- item -->
                <div class="col-lg-3 col-md-6">
                    <div class="price-table">
                        <div class="title main-color">BASIC</div>
                        <div class="price"><span>$</span>199</div>
                        <div class="per-mile">PER MILE</div>
                        <ul class="elements">
                            <li>4000 kg load</li>
                            <li>425 kg / pallet </li>
                            <li>Warehousing</li>
                            <li>Free Packaging </li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="padding-25px">
                            <a href="#" class="nile-bottom sm-block">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- // end item -->

                <!-- item -->
                <div class="col-lg-3 col-md-6">
                    <div class="price-table">
                        <div class="title main-color">BASIC</div>
                        <div class="price"><span>$</span>213</div>
                        <div class="per-mile">PER MILE</div>
                        <ul class="elements">
                            <li>4000 kg load</li>
                            <li>425 kg / pallet </li>
                            <li>Warehousing</li>
                            <li>Free Packaging </li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="padding-25px">
                            <a href="#" class="nile-bottom sm-block">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- // end item -->




                <!-- item -->
                <div class="col-lg-3 col-md-6">
                    <div class="price-table active">
                        <div class="title main-color">BASIC</div>
                        <div class="price"><span>$</span>813</div>
                        <div class="per-mile">PER MILE</div>
                        <ul class="elements">
                            <li>4000 kg load</li>
                            <li>425 kg / pallet </li>
                            <li>Warehousing</li>
                            <li>Free Packaging </li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="padding-25px">
                            <a href="#" class="nile-bottom sm-block">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- // end item -->



                <!-- item -->
                <div class="col-lg-3 col-md-6">
                    <div class="price-table">
                        <div class="title main-color">BASIC</div>
                        <div class="price"><span>$</span>650</div>
                        <div class="per-mile">PER MILE</div>
                        <ul class="elements">
                            <li>4000 kg load</li>
                            <li>425 kg / pallet </li>
                            <li>Warehousing</li>
                            <li>Free Packaging </li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="padding-25px">
                            <a href="#" class="nile-bottom sm-block">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <!-- // end item -->

            </div>

        </div>
    </div>

</div>