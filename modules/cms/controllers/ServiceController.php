<?php

namespace app\modules\cms\controllers;

use app\components\IdGenerator;
use app\components\Upload;
use app\models\Service;
use app\modules\cms\models\ServiceSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    public $layout = 'CmsLayout';

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
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
     * Lists all Service models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
     * @param string $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Service();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $uploadedFile = Upload::upload($model, 'imageFile', 'image');
                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Service created successfully.');

                    return $this->redirect(['index', 'id' => $model->id]);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Service. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {

            $uploadedFile = Upload::upload($model, 'imageFile', 'image');

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Service updated successfully.');

                return $this->redirect(['index', 'id' => $model->id]);
            } else {
                // Capture model errors and set a flash message
                $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                Yii::$app->session->setFlash('error', 'Failed to save the Service. Errors: <br>' . $errors);
            }
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     Yii::$app->session->setFlash('success', 'Service deleted successfully.');

    //     return $this->redirect(['index']);
    // }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        // Check if a image exists and delete it
        if ($model->image) {
            $uploadsDir = Yii::getAlias('@webroot/web/uploads');
            $filePath = $uploadsDir . '/' . $model->image;
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file
            }
        }

        $model->delete();
        Yii::$app->session->setFlash('success', 'Service deleted successfully.');

        return $this->redirect(['index']);
    }


    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id ID
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
