<?php

namespace app\models;

use Yii;

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
            'id' => 'ID',
            'shoes_id' => 'Shoes ID',
            'size' => 'Size',
            'count' => 'Count',
        ];
    }
}
