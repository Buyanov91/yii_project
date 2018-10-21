<?php
return [
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\User',
            'loginUrl' => ['/site/login'],
            'on afterLogin' => function() {
                Yii::$app->user->identity->updateAttributes(['auth_time' => date('d.m.Y H:i')]);
            }
        ],

    ],
];
