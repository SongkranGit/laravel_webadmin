<?php

namespace App\Repositories;
use App\Helpers\DateTimeHelper;


/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/16/2017
 * Time: 9:56 PM
 */
class BaseRepository implements IBaseRepository
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

    public function getNew(array $attributes = [])
    {
        return $this->model->newInstance($attributes);
    }

    public function save(array $attributes = [])
    {
        $this->model = $this->getNew($attributes);
        $this->model->save();
    }

    public function update($id , array $attributes = [])
    {
        $this->model->find($id)->update($attributes);
    }

    public function delete($id)
    {
        $this->model->findOrFail($id)->delete();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function findAll()
    {
        return $this->model->all();
    }
}