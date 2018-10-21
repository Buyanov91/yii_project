<?php

use yii\db\Migration;

/**
 * Class m181021_115314_add_columns_films
 */
class m181021_115314_add_columns_films extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('films', 'author', $this->string());
        $this->addColumn('films', 'created_at', $this->string());
        $this->addColumn('films', 'updated_at', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181021_115314_add_columns_films cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181021_115314_add_columns_films cannot be reverted.\n";

        return false;
    }
    */
}
