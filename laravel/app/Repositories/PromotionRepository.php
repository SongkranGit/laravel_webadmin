<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/25/2017
 * Time: 9:18 AM
 */

namespace App\Repositories;


use App\Models\Promotion;

class PromotionRepository extends AbstractRepository implements IPromotionRepository
{

    public function __construct(Promotion $promotion)
    {
        $this->model = $promotion;
    }

}