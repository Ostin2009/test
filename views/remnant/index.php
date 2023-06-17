<?php

use app\models\Remnant;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\forms\Remnant $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var array $colors */
/** @var array $sizes */

$this->title = 'Категория ботинки';
?>
<div class="remnant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_search', compact('searchModel', 'sizes', 'colors')); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return
                Html::a(
                    Html::encode($model->shoes->model  . ', цвет: ' . $model->shoes->color . ', размер: ' . $model->size),
                    ['view', 'id' => $model->id]
                );
        },
    ]) ?>


</div>
