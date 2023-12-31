<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin();?>
    
    <?= $form->field($model, 'category_id')->dropDownList(
        $categories,
        [
            'prompt' => 'Select Category',
            'class' => 'form-control', 
        ]
    ); ?>

    <?=$form->field($model, 'e_name')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'a_name')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'icon')->fileInput(['class' => 'form-control custom-file-input', 'id' => 'formFile'])?>
    <?php
if ($model->icon !== null) {
    echo "<div style='width: 100%; text-align: center; margin: 20px 0px;'>" . Html::img(Yii::getAlias('@web') . $model->icon, ['alt' => 'Icon', 'class' => 'img-thumbnail', 'style' => 'width:60px;height:60px;']) . "</div>";
}
?>
    <?=$form->field($model, 'price')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'warranty')->textInput(['maxlength' => true])?>

    <div class="form-group d-flex justify-content-end">
        <?=Html::submitButton('Save', ['class' => 'btn btn-danger'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
