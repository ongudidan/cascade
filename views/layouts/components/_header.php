<?php

use app\models\Contact;
use app\models\General;
use app\models\Service;
use yii\helpers\Url;

$contactModel = Contact::find()->one();
$generalModel = General::find()->one();
$services = Service::find()->all();

?>
<header class="background-white">
    <div id="fixed-header-dark" class="header-output fixed-header">
        <div class="header-output">
            <div class="container header-in">


                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <a id="logo" href="<?= Url::to('/') ?>" class="d-inline-block margin-tb-15px"><img
                                    src="/web/uploads/<?= $generalModel->logo ?? '' ?>" alt=""></a>
                            <a class="mobile-toggle padding-15px background-second-color border-radius-3"
                                href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="col-lg-7 col-md-12 position-inherit">
                            <ul id="menu-main"
                                class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                <li><a class="active" href="<?= Url::to('/') ?>">Home</a>

                                </li>

                                <li class="has-dropdown"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <?php foreach ($services as $service) { ?>
                                            <li><a href="<?= Url::to(['service-view', 'id' => $service->id]) ?>"><?= $service->title ?? '' ?></a></li>
                                        <?php } ?>

                                    </ul>
                                </li>
                                <li><a href="<?= Url::to('/site/careers') ?>">Careers</a>

                                </li>
                                <li><a href="<?= Url::to('/site/about') ?>">About Us</a>

                                </li>

                                <li><a href="<?= Url::to('/site/contact') ?>">Contacts</a>

                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
    function initMobileToggle() {
        $(".mobile-toggle").off("click").on("click", function(e) {
            e.preventDefault();
            $("#menu-main").toggleClass("menu-open");
        });
    }

    // Run the function on page load
    $(document).ready(function() {
        initMobileToggle();
    });

    // Reinitialize after PJAX update
    $(document).on("pjax:end", function() {
        initMobileToggle();
    });
</script>