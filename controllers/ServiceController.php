<?php

namespace app\controllers;

use app\models\Service;
use app\models\ServiceCategory;
use app\models\ServiceSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * @inheritDoc
     */
    public $layout = '/admin';

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['index'], // Action(s) to apply the rule to
                            'allow' => true, // Allow or deny access
                            'roles' => ['@'], // Require authenticated users
                        ],
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
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
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
        $categories = ArrayHelper::map(ServiceCategory::find()->all(), 'id', 'a_name');

        if ($this->request->isPost) {
            $model->load($this->request->post());

            // Call a separate method to handle file upload
            $this->handleFileUpload($model);

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'categories' => $categories,
        ]);
    }

/**
 * Handles file upload for the Service model.
 * @param Service $model the model to handle file upload for
 */
    private function handleFileUpload(Service $model)
    {
        $icon = UploadedFile::getInstance($model, 'icon');

        if ($icon && $model->validate()) {
            $filePath = Yii::$app->basePath . '/web/uploads/services-images/' . $model->id . '-' . $icon->name . '.' . $icon->extension;

            if (!is_dir(Yii::$app->basePath . '/web/uploads/services-images')) {
                mkdir(Yii::$app->basePath . '/web/uploads/services-images', 0777, true);
            }

            $icon->saveAs($filePath);
            $model->icon = Url::base(true) . '/uploads/services-images/' . $model->id . '-' . $icon->name . '.' . $icon->extension;
        }
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $categories = ArrayHelper::map(ServiceCategory::find()->all(), 'id', 'a_name');
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $model->load($this->request->post());

            // Call a separate method to handle file upload
            $this->handleFileUpload($model);

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'categories' => $categories,
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
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

    /*
HANDLERS FUNCTIONS
 */
}
