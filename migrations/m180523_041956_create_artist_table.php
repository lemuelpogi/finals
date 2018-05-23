<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artist`.
 */
class m180523_041956_create_artist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('artist', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'age' => $this->integer(2)->notNull(),
            'country' => $this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('artist');
    }
}
