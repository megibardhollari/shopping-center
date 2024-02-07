<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Clothes $model */
?>


<?php
use yii\widgets\DetailView;
$this->registerCssFile('@web/css/clothes/update.css');
?>

<div class="clothes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
