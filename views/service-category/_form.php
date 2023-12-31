<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ServiceCategory $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="service-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'e_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
