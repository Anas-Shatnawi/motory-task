<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'e_name',
            'a_name',
            [
                'attribute' => 'icon',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web') . $model->icon, ['alt' => 'Icon', 'class' => 'img-thumbnail' ,'style'=>'width:60px;height:60px;']);
                },
            ],
            'price',
            'warranty',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
