<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clothes".
 *
 * @property int $id
 * @property string $description
 * @property int $price
 * @property string $img
 */
class Clothes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clothes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'description', 'price', 'img'], 'required'],
            [['id', 'price'], 'integer'],
            [['img'], 'string'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'price' => 'Price',
            'img' => 'Img',
        ];
    }
}
