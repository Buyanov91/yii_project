<?php

use yii\db\Migration;

/**
 * Class m181021_125737_length_title
 */
class m181021_125737_length_title extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('films', 'length_title', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181021_125737_length_title cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181021_125737_length_title cannot be reverted.\n";

        return false;
    }
    */
}
