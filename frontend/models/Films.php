<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property int $year
 * @property int $director_id
 */
class Films extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                 'value' => date('d.m.Y H:i'),
            ],
        ];
    }

    public function getDirector()
    {
        return $this->hasOne(Directors::className(), ['id' => 'director_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'year'], 'required'],
            [['year', 'director_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'year' => 'Год',
            'director_id' => 'Режиссер',
            'author' => 'Автор',
            'created_at' => 'Добавленно',
            'updated_at' => 'Редактированно',
        ];
    }
}
