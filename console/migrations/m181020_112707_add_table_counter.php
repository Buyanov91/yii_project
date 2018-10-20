<?php

use yii\db\Migration;

/**
 * Class m181020_112707_add_table_counter
 */
class m181020_112707_add_table_counter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('counter', [
            'id' => $this->primaryKey(),
            'count' => $this->integer(),
            'date' => $this->string(),
        ]);

        $this->insert('counter', [
            'count' => '0',
            'date' => '0',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181020_112707_add_table_counter cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181020_112707_add_table_counter cannot be reverted.\n";

        return false;
    }
    */
}
