<?php

namespace app\models;

use Yii;
use yii\web\Cookie;

/**
 * This is the model class for table "counter".
 *
 * @property int $count
 * @property string $date
 */
class Counter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'counter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'count' => 'Count',
            'date' => 'Date',
        ];
    }

    public function setCount()
    {
        $cookies = Yii::$app->request->cookies;
        $count = self::findOne(1);
        $today = date("d.m.Y");

        $visitCount = $count->count;

        if (!($cookies->has('visit'))) {

            if ($count->date !== $today) {
                $count->count = 1;
                $count->date = $today;
                $count->save();
            } else {
                $count->count++;
                $count->save();
                $visitCount = $count->count++;
            }
            Yii::$app->response->cookies->add(new Cookie([
                'name' => 'visit',
                'value' => 'true',
                'expire' => time() + 60*60*24,
            ]));
        }

        return $visitCount;
    }
}
