<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;


$this->title = 'Edit your Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card shadow-lg border-light">
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="myTab2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab2" href="<?= Url::to('/cms/default/user-profile') ?>" role="tab" aria-selected="true">
                    <i class="bi bi-person"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab2" href="<?= Url::to('/cms/default/change-password') ?>" role="tab" aria-selected="false">
                    <i class="bi bi-lock"></i> Change Password
                </a>
            </li>
        </ul>
        <div class="tab-content tab-bordered" id="myTab3Content">
            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                <?php $form = ActiveForm::begin(); ?>
                <div class="card-header bg-light">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Enter email address'])->label('Email Address') ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => 'Enter Username'])->label('Username') ?>
                        </div>
                    </div>
              
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save"></i> Save Changes
                    </button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>