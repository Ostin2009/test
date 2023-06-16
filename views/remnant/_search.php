<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\forms\Remnant $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="remnant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'model')
        ->dropDownList($model->getRotatorAutoFormFilter(), [
            'prompt' => '',
        ]) ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'size') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
