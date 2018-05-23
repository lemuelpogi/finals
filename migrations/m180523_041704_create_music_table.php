<?php

use yii\db\Migration;

/**
 * Handles the creation of table `music`.
 */
class m180523_041704_create_music_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('music', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'year' => $this->integer(4)->notNUll(),
            'genre' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('music');
    }
}
