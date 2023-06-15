<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shoes".
 *
 * @property int|null $id
 * @property string|null $model
 * @property string|null $color
 * @property float|null $price
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['price'], 'number'],
            [['model', 'color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'color' => 'Color',
            'price' => 'Price',
        ];
    }
}
