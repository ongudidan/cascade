<?php

namespace app\modules\cms\controllers;

use app\components\IdGenerator;
use app\components\Upload;
use app\models\About;
use app\models\Background;
use app\models\Careers;
use app\models\Contact;
use app\models\EmailSetting;
use app\models\General;
use app\models\HelpDesk;
use app\models\Mission;
use app\models\Vision;
use app\models\WhyUs;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class SiteSettingsController extends \yii\web\Controller
{
    public $layout = 'CmsLayout';

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['about-form', 'contact-form', 'careers-form', 'why-us-form', 'help-desk-form','general-form', 'index'],
                    'rules' => [
                        [
                            'actions' => ['about-form', 'contact-form', 'careers-form', 'why-us-form', 'help-desk-form','general-form', 'index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        // 'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAboutForm()
    {

        // Fetch or create About model
        $model = About::find()->one() ?? new About();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedFile = Upload::upload($model, 'imageFile', 'banner_image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'About saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the About. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('about-form', [
            'model' => $model,
        ]);
    }

    public function actionEmailSettingForm()
    {

        // Fetch or create Email Setting model
        $model = EmailSetting::find()->one() ?? new EmailSetting();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Email setings  saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Email settings. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('email-setting-form', [
            'model' => $model,
        ]);
    }

    public function actionContactForm()
    {

        // Fetch or create Contact model
        $model = Contact::find()->one() ?? new Contact();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedFile = Upload::upload($model, 'imageFile', 'banner_image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Contact saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Contact. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('contact-form', [
            'model' => $model,
        ]);
    }


    public function actionCareersForm()
    {

        // Fetch or create Careers model
        $model = Careers::find()->one() ?? new Careers();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                // $uploadedFile = Upload::upload($model, 'banner_image', 'banner_image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Careers saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Careers. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('careers-form', [
            'model' => $model,
        ]);
    }

    public function actionWhyUsForm()
    {

        // Fetch or create why-us model
        $model = WhyUs::find()->one() ?? new WhyUs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedFile = Upload::upload($model, 'imageFile', 'image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'why-us saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the why-us. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('why-us-form', [
            'model' => $model,
        ]);
    }

    public function actionHelpDeskForm()
    {

        // Fetch or create help-desk model
        $model = HelpDesk::find()->one() ?? new HelpDesk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedFile = Upload::upload($model, 'imageFile', 'image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'help-desk saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the help-desk. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('help-desk-form', [
            'model' => $model,
        ]);
    }

    public function actionGeneralForm()
    {

        // Fetch or create General model
        $model = General::find()->one() ?? new General();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedLogo = Upload::upload($model, 'logoFile', 'logo');
                $uploadedFavicon = Upload::upload($model, 'faviconFile', 'favicon');
                $uploadedHomeBanner = Upload::upload($model, 'bannerFile', 'home_banner');


                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'General saved successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the General. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('general-form', [
            'model' => $model,
        ]);
    }
}
