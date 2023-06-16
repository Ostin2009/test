<?php

namespace app\models;

use Yii;
use app\models\traits\RemnantTrait;
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
    use RemnantTrait;

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
            'id' => 'Артикул',
            'model' => 'Модель',
            'color' => 'Цвет',
            'price' => 'Цена',
            'size' => 'Размер',
            'count' => 'Остаток',
        ];
    }
}
