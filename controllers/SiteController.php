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
use app\models\EmailSetting;
use app\models\General;
use app\models\HelpDesk;
use app\models\PasswordResetRequestForm;
use app\models\ResendVerificationEmailForm;
use app\models\ResetPasswordForm;
use app\models\Service;
use app\models\WhyUs;
use InvalidArgumentException;
use yii\web\BadRequestHttpException;

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
                    // 'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    // public function actions()
    // {
    //     return [
    //         'error' => [
    //             'class' => 'yii\web\ErrorAction',
    //         ],
    //         'captcha' => [
    //             'class' => 'yii\captcha\CaptchaAction',
    //             'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
    //         ],
    //     ];
    // }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'LoginLayout', // Specify your custom layout file
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


        return $this->render('index', [
            'generalModel' => $generalModel,
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
    // public function actionLogin()
    // {
    //     $this->layout = 'LoginLayout';

    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     }

    //     $model->password = '';
    //     return $this->render('login', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionLogin()
    {
        $this->layout = 'LoginLayout';

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/cms/default/index']); // Redirect to CMs module
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/cms/default/index']); // Redirect after login success
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
    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();

    //     return $this->goHome();
    // }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/login']); // Redirect to login page
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
        $emailSettingModel = EmailSetting::find()->one();

        Yii::$app->params['adminEmail'];

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            // Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->session->setFlash('success', 'Contact form submitted successfully.');


            // return $this->refresh();
            return $this->redirect(['/site/contact']); // Redirect to login page

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

        return $this->render('about', [
            'aboutModel' => $aboutModel,
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


    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $this->layout = 'LoginLayout';

        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                // return $this->goHome();
                return $this->redirect(['site/login']); // Redirect to login page

            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        $this->layout = 'LoginLayout';

        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            // return $this->goHome();
            return $this->redirect(['site/login']); // Redirect to login page

        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $this->layout = 'LoginLayout';

        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                // return $this->goHome();
                return $this->redirect(['site/login']); // Redirect to login page

            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
