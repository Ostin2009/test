<?php

namespace app\controllers;

use app\models\Remnant;
use app\models\forms\Remnant as RemnantSearch;
use app\models\Shoes;
use yii\db\Query;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RemnantController implements the CRUD actions for Remnant model.
 */
class RemnantController extends Controller
{
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
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Remnant models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $params = $this->request->queryParams;

        $searchModel = new RemnantSearch();
        $query = $searchModel->search($params);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $sizes = (new Query())->select('size')->from($query)->groupBy('size')->column();
        $sizes = array_combine($sizes, $sizes);

        $shoesIds = (new Query())->select('shoes_id')->from($query)->groupBy('shoes_id')->column();

        $colors = Shoes::find()->select('color')->where(['IN', 'id', $shoesIds])->groupBy('color')->column();
        $colors = array_combine($colors, $colors);

        return $this->render('index', compact('searchModel', 'dataProvider', 'sizes', 'colors'));
    }

    /**
     * Displays a single Remnant model.
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
     * Finds the Remnant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Remnant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Remnant::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
