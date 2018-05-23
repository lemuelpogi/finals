<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "music".
 *
 * @property int $id
 * @property string $title
 * @property int $year
 * @property string $genre
 *
 * @property Producers[] $producers
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'year', 'genre'], 'required'],
            [['year'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['genre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'genre' => 'Genre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducers()
    {
        return $this->hasMany(Producers::className(), ['music_id' => 'id']);
    }
}
