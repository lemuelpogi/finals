<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producers".
 *
 * @property int $id
 * @property int $music_id
 * @property int $artist_id
 * @property string $producer_name
 * @property string $company
 *
 * @property Artist $artist
 * @property Music $music
 */
class Producers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['music_id', 'artist_id', 'producer_name', 'company'], 'required'],
            [['music_id', 'artist_id'], 'integer'],
            [['producer_name', 'company'], 'string', 'max' => 100],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'id']],
            [['music_id'], 'exist', 'skipOnError' => true, 'targetClass' => Music::className(), 'targetAttribute' => ['music_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'music_id' => 'Music ID',
            'artist_id' => 'Artist ID',
            'producer_name' => 'Producer Name',
            'company' => 'Company',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artist::className(), ['id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusic()
    {
        return $this->hasOne(Music::className(), ['id' => 'music_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
