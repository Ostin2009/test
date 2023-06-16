<?php

namespace app\models\traits;

use app\models\Remnant;
use app\models\Shoes;
use yii\db\ActiveQuery;

trait RemnantTrait
{
    /**
     * @return ActiveQuery
     */
    public function getShoes(): ActiveQuery
    {
        return $this->hasOne(Shoes::class, ['id' => 'shoes_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getRemnant(): ActiveQuery
    {
        return $this->hasMany(Remnant::class, ['shoes_id' => 'id']);
    }
}