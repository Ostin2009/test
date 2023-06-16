<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\forms\Remnant $searchModel */
/** @var yii\widgets\ActiveForm $form */
/** @var array $colors */
/** @var array $sizes */
?>

<div class="remnant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($searchModel, 'model')
        ->dropDownList([
            'Клёвые'=>'Клёвые',
            'Модные'=>'Модные',
            'Странные'=>'Странные',
            'Весёлые'=>'Весёлые',
            'Понтовые'=>'Понтовые'
        ], [
            'prompt' => '',
        ]) ?>

    <?= $form->field($searchModel, 'color')
        ->dropDownList($colors, [
            'prompt' => '',
        ]) ?>

    <?= $form->field($searchModel, 'size')
        ->dropDownList($sizes, [
            'prompt' => '',
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
