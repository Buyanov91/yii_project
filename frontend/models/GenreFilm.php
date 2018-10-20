<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genre_film".
 *
 * @property int $id
 * @property int $film_id
 * @property int $genre_id
 */
class GenreFilm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre_film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_id', 'genre_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'film_id' => 'Film ID',
            'genre_id' => 'Genre ID',
        ];
    }
}
