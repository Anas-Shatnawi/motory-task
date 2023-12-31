<?php

use app\models\ServiceCategory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServiceCategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Service Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-category-index">

    <div class="admin-header">
        <h1><?= Html::encode($this->title) ?></h1>
    
        <p>
            <?= Html::a('Create Service Category', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view-custom'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'e_name',
            'a_name',
            'created_at',
            'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ServiceCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
