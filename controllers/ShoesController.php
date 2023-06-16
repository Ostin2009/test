<?php

namespace app\controllers;

use \Yii;

class ShoesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Shoes();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('index', compact('model'));
    }

}
