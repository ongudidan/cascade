<?php

namespace app\modules\cms\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `cms` module
 */
class DefaultController extends Controller
{
    public $layout = 'CmsLayout';

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['index'],
                    'rules' => [
                        [
                            'actions' => ['index'],
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
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



    public function actionUserProfile()
    {
        // Ensure the user is authenticated
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']); // Redirect to login page if not logged in
        }

        // Load the logged-in user's model
        $model = Yii::$app->user->identity;

        // Check if the form is submitted
        if ($this->request->isPost && $model->load($this->request->post())) {
            // Validate and save
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'User information saved successfully.');
                return $this->redirect(['user-profile']);
            }
            // If validation fails, errors will display in the form fields automatically
        }

        // Render the form with the loaded model
        return $this->render('user-profile', [
            'model' => $model,
        ]);
    }


    public function actionChangePassword()
    {
        $model = Yii::$app->user->identity; // Get the currently logged-in user
        $model->scenario = 'changePassword'; // Set scenario for validation rules

        if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
            Yii::$app->session->setFlash('success', 'Password changed successfully.');
            return $this->redirect(['default/user-profile']);
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }
}
