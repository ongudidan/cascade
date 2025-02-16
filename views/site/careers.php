<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;

$this->params['meta_description'] = $careersModel->meta_description ?? '';
$this->params['meta_keywords'] = $careersModel->meta_keywords ?? '';
?>

<div class="page-title">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>Careers</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Careers</li>
            </ol>
        </div>
    </div>
</div>


<!--============= Careers =============-->
<div class="nile-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sm-mb-45px">

                <div class="section-title-right text-main-color clearfix">
                    <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                    <h2 class="title-text">Careers at Cascades Swift</h2>
                </div>
                <div class="about-text margin-tb-25px">
                    <?= $careersModel->description ?? '' ?>
                </div>

            </div>
            <div class="col-lg-6">
                <img src="assets/img/about-1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--============= //Careers =============-->

