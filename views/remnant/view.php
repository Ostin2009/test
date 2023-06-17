<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\YiiAsset;

/** @var yii\web\View $this */
/** @var app\models\Remnant $model */
/** @var app\models\forms\Remnant $searchModel */
/** @var array $colors */
/** @var array $sizes */

$this->title = $model->shoes->model;
$this->params['breadcrumbs'][] = ['label' => 'Remnants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);

$controllerId = Yii::$app->controller->id;

?>
<div class="remnant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_viewSearch', compact('model', 'searchModel', 'sizes', 'colors')); ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'shoes.model',
            'shoes.color',
            'size',
            'count',
            'shoes.price',
        ],
    ]) ?>

</div>
