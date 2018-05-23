<?php

use yii\db\Migration;

/**
 * Handles the creation of table `producers`.
 */
class m180523_042004_create_producers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('producers', [
            'id' => $this->primaryKey(),
            'music_id' => $this->integer()->notNull(),
            'artist_id' => $this->integer()->notNull(),
            'producer_name' => $this->string(100)->notNull(),
            'company' => $this->string(100)->notNull()
        ]);
        $this->addForeignKey(
            'fk-producers-music',
            'producers', 'music_id',
            'music','id'
        );

        $this->createIndex(
            'idx-producers-music_id',
            'producers', 'music_id'
        );
        $this->addForeignKey(
            'fk-producers-artist',
            'producers', 'artist_id',
            'artist', 'id'
        );
        $this->createIndex(
            'idx-producers-artist_id',
            'producers', 'artist_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-producers-music', 'producers');
        $this->dropForeignKey('fk-producers-artist', 'producers');
        $this->dropIndex('idx-producers-music_id', 'producers');
        $this->dropIndex('idx-producers-artist_id', 'producers');
        $this->dropTable('producers');
    }
}
