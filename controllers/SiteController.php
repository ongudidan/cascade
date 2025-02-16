<?php

namespace app\controllers;

use app\models\About;
use app\models\Careers;
use app\models\Contact;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\General;
use app\models\HelpDesk;
use app\models\Service;
use app\models\WhyUs;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $generalModel = General::find()->one();
        $aboutModel = About::find()->one();

        $contactModel = Contact::find()->one();
        $whyUsModel = WhyUs::find()->one();
        $helpDeskModel = HelpDesk::find()->one();

        $serviceModel = Service::find()->all();


        return $this->render('index',[
            'generalModel'=> $generalModel,
            'contactModel' => $contactModel,
            'serviceModel' => $serviceModel,
            'whyUsModel' => $whyUsModel,
            'helpDeskModel' => $helpDeskModel,
            'aboutModel' => $aboutModel,
        ]);
    }

    public function actionServiceView($id)
    {
        $contactModel = Contact::find()->one();
        $service = Service::findOne($id);

        $serviceModel = Service::find()->all();


        return $this->render('service-view', [
            'service' => $service,
            'serviceModel' => $serviceModel,
            'contactModel' => $contactModel,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();

        $contactModel = Contact::find()->one();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'contactModel' => $contactModel,

        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $aboutModel = About::find()->one();

        return $this->render('about',[
            'aboutModel'=> $aboutModel,
        ]);
    }

    /**
     * Displays careers page.
     *
     * @return string
     */
    public function actionCareers()
    {
        $careersModel = Careers::find()->one();

        return $this->render('careers', [
            'careersModel' => $careersModel,
        ]);
    }
}
