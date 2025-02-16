<?php

use yii\helpers\Url;

$id = Yii::$app->request->get('id');

$this->title = $service->title;

$this->params['meta_description'] = $service->meta_description ?? '';
$this->params['meta_keywords'] = $service->meta_keywords ?? '';



?>
<div class="page-title">
    <div class="container">
        <div class="padding-tb-120px">
            <h1><?= $service->title ?? '' ?></h1>
            <ol class="breadcrumb">
                <li><a href="<?= Url::to('/') ?>">Home</a></li>
                <li class="active"><?= $service->title ?? '' ?></li>
            </ol>
        </div>
    </div>
</div>


<div class="padding-tb-100px">
    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                <div class="service-slider-img margin-bottom-30px">
                    <ul class="slider-1">
                        <li><img src="/web/uploads/<?= $service->image ?>" alt=""></li>


                        <!-- <li><img src="/web/frontend/assets/img/service_1.jpg" alt=""></li>
                        <li><img src="/web/frontend/assets/img/service_2.jpg" alt=""></li>
                        <li><img src="/web/frontend/assets/img/service_3.jpg" alt=""></li> -->
                    </ul>
                </div>

                <p><?= $service->description ?? '' ?>
                </p>

                <!-- 
                <div id="accordion" class="nile-accordion margin-top-30px sm-mb-45px">
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
                </div> -->



            </div>

            <div class="col-lg-3">

                <div class="background-main-color margin-bottom-40px">
                    <div class="services-list">
                        <ul>

                            <?php foreach ($serviceModel as $service) { ?>
                                <li class="<?= $id === $service->id ? 'active' : '' ?>"><a href="<?= Url::to(['service-view', 'id' => $service->id]) ?>"><?= $service->title ?? '' ?></a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>




                <div class="background-white margin-bottom-40px">
                    <div class="nile-widget contact-widget">
                        <div class="padding-30px">
                            <div class="margin-bottom-60px">
                                <h2 class="title">Location</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                    <div class="text">
                                        <span class="title-in">Location :</span> <br>
                                        <span class="font-weight-500 text-uppercase"><?= $contactModel->address ?? '' ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="call_center">
                                <h2 class="title">Call Center</h2>
                                <div class="contact-info opacity-9">
                                    <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                    <div class="text">
                                        <span class="title-in">Call Us :</span><br>
                                        <span class="font-weight-500 text-uppercase"><?= $contactModel->phone1 ?? '' ?></span>
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

