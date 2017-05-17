<?php

namespace App\Repositories;

/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/16/2017
 * Time: 9:56 PM
 */
class BaseRepository
{
    protected $model;


    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */

    public function getNew(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }


}