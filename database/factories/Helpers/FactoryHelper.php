<?php

namespace Database\Factories\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactoryHelper
{
    /**
     * @param string | HasFactory $model
    */
    public static function getRandomModelId(string $model)
    {
        $count = $model::query()->count();
        if ($count == 0) {
            return $model::factory()->create()->id;
        } else {
            return rand(1, $count);
        }
    }
}
