<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchFilm */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фильмы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить фильм', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <h4>
        Сайт посетили <b><?=$count?></b> раз(а).
    </h4>

    <?php if (!Yii::$app->user->isGuest) : ?>
    <h4>
        Время последней авторизации <b><?=Yii::$app->user->identity->auth_time?></b>.
    </h4>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'year',
            'director_id',
            'length_title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
