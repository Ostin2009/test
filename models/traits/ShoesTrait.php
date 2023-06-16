<?php

namespace app\models\traits;

use app\models\Shoes;
use yii\db\ActiveQuery;

trait ShoesTrait
{
    /**
     * @return ActiveQuery
     */
    public function getShoes(): ActiveQuery
    {
        return $this->hasOne(Shoes::class, ['id' => 'shoes_id']);
    }
}