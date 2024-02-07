<?php

use app\models\Clothes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ClothesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clothes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clothes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clothes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description',
            'price',
            'img:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clothes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); 
    
    
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // other columns
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                            'title' => Yii::t('yii', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                        ]);
                    },
                ],
            ],
        ],
    ]);
    
    
    if (Yii::$app->session->hasFlash('success')) {
        echo '<div class="alert alert-success">' . Yii::$app->session->getFlash('success') . '</div>';
    }
    if (Yii::$app->session->hasFlash('error')) {
        echo '<div class="alert alert-danger">' . Yii::$app->session->getFlash('error') . '</div>';
    }
    
    
    ?>





</div>
