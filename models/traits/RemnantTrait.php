<?php

namespace app\models\traits;

use app\models\Remnant;
use yii\db\ActiveQuery;

trait RemnantTrait
{
    /**
     * @return ActiveQuery
     */
    public function getRemnant(): ActiveQuery
    {
        return $this->hasMany(Remnant::class, ['shoes_id' => 'id']);
    }
}