<?php

/** @var yii\web\View $this */

use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->params['meta_description'] = $generalModel->meta_description ?? '';
$this->params['meta_keywords'] = $generalModel->meta_keywords ?? '';

$this->title = 'Cascadeswift EA agency LTD';
?>

<div>


    <?= $this->render('home/_slider', ['generalModel' => $generalModel]) ?>


    <!-- END REVOLUTION SLIDER -->

    <!-- <div class="background-white">
        <div class="service-section-2 container">
            <div class="row">
                <?php foreach ($serviceModel as $service) { ?>
                    <div class="col-md-4">
                        <div class="service layout-2 sm-mb-25px">
                            <div class="clearfix">
                                <div class="icon"><img src="/web/uploads/<?= $service->icon ?? '' ?>" alt=""></div>
                                <a href="<?= Url::to(['/site/service-view', 'id' => $service->id]) ?>" class="title"><?= $service->title ?? '' ?></a>
                            </div>
                            <div class="dis clearfix">
                                <?= isset($service->description) ? StringHelper::truncateWords($service->description, 20, '...') : '' ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-md-4">
                    <div class="service layout-2 sm-mb-25px">
                        <div class="clearfix">
                            <div class="icon"><img src="/web/frontend/assets/icons/service-light-2.png" alt=""></div>
                            <a href="#" class="title">Air Freight</a>
                        </div>
                        <div class="dis clearfix">
                            Chances are unless you are very lucky you will.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service layout-2">
                        <div class="clearfix">
                            <div class="icon"><img src="/web/frontend/assets/icons/service-light-3.png" alt=""></div>
                            <a href="#" class="title">Ocean Freight</a>
                        </div>
                        <div class="dis clearfix">
                            Chances are unless you are very lucky you will.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--============= About Us =============-->
    <div class="nile-about-section">
        <div class="container">
            <div class="row pb-5"> <!-- Added padding-bottom -->
                <div class="col-lg-6 sm-mb-45px">
                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="/web/frontend/assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Who We Are ?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <?= isset($aboutModel->description) ? StringHelper::truncateWords($aboutModel->description, 100, '...') : '' ?>
                    </div>
                    <a href="<?= Url::to('/site/about') ?>" class="nile-bottom sm">Read More</a>
                </div>
                <div class="col-lg-6">
                    <img src="/web/uploads/<?= $aboutModel->banner_image ?? '' ?>" alt="">
                </div>
            </div>

            <div class="row pb-5"> <!-- Added padding-bottom -->
                <div class="col-lg-6">
                    <img src="/web/uploads/<?= $whyUsModel->image ?? '' ?>" alt="">
                </div>
                <div class="col-lg-6 sm-mb-45px">
                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="/web/frontend/assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Why Us?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <?= $whyUsModel->description ?? '' ?>
                    </div>
                </div>
            </div>

            <div class="row pb-5"> <!-- Added padding-bottom -->
                <div class="col-lg-6 sm-mb-45px">
                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="/web/frontend/assets/icons/title-icon-1.png" alt=""></div>
                        <h2 class="title-text">Help Desk</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        <?= $helpDeskModel->description ?? '' ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/web/uploads/<?= $helpDeskModel->image ?? '' ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--============= //About Us =============-->


    <div class="section padding-tb-100px section-ba-1">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-truck"></i></div>
                        <div class="h2">Our Service</div>

                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <?php foreach ($serviceModel as $service) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-icon-box">
                            <div class="icon"><img src="/web/uploads/<?= $service->icon ?? '' ?>" alt=""></div>
                            <a href="<?= Url::to(['/site/service-view', 'id' => $service->id]) ?>" class="title h2">
                                <?= strip_tags($service->title ?? '') ?>
                            </a>
                            <div class="des">
                                <?= isset($service->description) ? StringHelper::truncateWords(strip_tags($service->description), 20, '...') : '' ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>

</div>