<?php

use yii\db\Migration;

/**
 * Class m181007_085416_first
 */
class m181007_085416_first extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute(file_get_contents(__DIR__ . '/dump.sql'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181007_085416_first cannot be reverted.\n";

        return false;
    }

}
