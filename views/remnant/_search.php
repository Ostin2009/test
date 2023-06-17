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

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($searchModel, 'model')
                ->dropDownList([
                    'Клёвые' => 'Клёвые',
                    'Модные' => 'Модные',
                    'Странные' => 'Странные',
                    'Весёлые' => 'Весёлые',
                    'Понтовые' => 'Понтовые',
                ], [
                    'onchange'=>'this.form.submit()',
                    'prompt' => 'Все модели',
                    ]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($searchModel, 'color')
                ->dropDownList($colors, ['onchange'=>'this.form.submit()', 'prompt' => 'Все цвета',]) ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($searchModel, 'size')
                ->dropDownList($sizes, ['onchange'=>'this.form.submit()', 'prompt' => 'Все размеры',]) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
