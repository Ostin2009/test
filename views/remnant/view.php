<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Remnant $model */

$this->title = $model->shoes->model;
$this->params['breadcrumbs'][] = ['label' => 'Remnants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="remnant-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
