<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directors".
 *
 * @property int $id
 * @property string $name
 */
class Directors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'directors';
    }

    public function getFilms()
    {
        return $this->hasMany(Films::className(), ['director_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
