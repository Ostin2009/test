<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Remnant $model */
/** @var ActiveForm $form */
?>
<div class="remnantsFilter">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'shoes_id') ?>
        <?= $form->field($model, 'size') ?>
        <?= $form->field($model, 'count') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- remnantsFilter -->
