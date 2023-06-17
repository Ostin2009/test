<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Remnant $model */
/** @var app\models\forms\Remnant $searchModel */
/** @var yii\widgets\ActiveForm $form */
/** @var array $colors */
/** @var array $sizes */
?>

<div class="remnant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['view', 'id' => $model->id],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($searchModel, 'color')->dropDownList($colors, ['onchange'=>'this.form.submit()']) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($searchModel, 'size')->dropDownList($sizes, ['onchange'=>'this.form.submit()']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
