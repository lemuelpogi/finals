<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artist".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property string $country
 *
 * @property Producers[] $producers
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age', 'country'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['country'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducers()
    {
        return $this->hasMany(Producers::className(), ['artist_id' => 'id']);
    }
}
