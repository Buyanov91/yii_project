<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDirector */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Режиссеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Вывсти режиссеров у которых есть минимум два фильма', ['show'], ['class' => 'btn btn-warning']) ?>
    </p>
    <p>
        <?= Html::a('Добавить режиссера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
