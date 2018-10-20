<?php

use yii\db\Migration;

/**
 * Class m181020_101329_drop_column_id
 */
class m181020_101329_drop_column_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('genre_film', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181020_101329_drop_column_id cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181020_101329_drop_column_id cannot be reverted.\n";

        return false;
    }
    */
}
