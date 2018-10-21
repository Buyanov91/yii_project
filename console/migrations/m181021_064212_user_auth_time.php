<?php

use yii\db\Migration;

/**
 * Class m181021_064212_user_auth_time
 */
class m181021_064212_user_auth_time extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'auth_time', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181021_064212_user_auth_time cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181021_064212_user_auth_time cannot be reverted.\n";

        return false;
    }
    */
}
