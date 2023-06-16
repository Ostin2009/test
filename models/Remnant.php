<?php

namespace app\models;

use app\models\traits\ShoesTrait;

/**
 * This is the model class for table "remnant".
 *
 * @property int|null $id
 * @property int|null $shoes_id
 * @property int|null $size
 * @property int|null $count
 */
class Remnant extends \yii\db\ActiveRecord
{
    use ShoesTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'remnant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shoes_id', 'size', 'count'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Артикул',
            'shoes_id' => 'Shoes ID',
            'size' => 'Размер',
            'count' => 'Остаток',
            'model' => 'Модель',
            'color' => 'Цвет'
        ];
    }
}
