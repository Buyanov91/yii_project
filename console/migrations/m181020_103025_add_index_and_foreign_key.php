<?php

use yii\db\Migration;

/**
 * Class m181020_103025_add_index_and_foreign_key
 */
class m181020_103025_add_index_and_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-film_id',
            'genre_film',
            'film_id'
        );
        $this->createIndex(
            'idx-genre_id',
            'genre_film',
            'genre_id'
        );
        $this->addForeignKey(
            'fk-genre_film-film_id',
            'genre_film',
            'film_id',
            'films',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-genre_film-genre_id',
            'genre_film',
            'genre_id',
            'genres',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181020_103025_add_index_and_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181020_103025_add_index_and_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
