<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/19/2017
 * Time: 5:12 AM
 */

namespace App\Repositories;


interface IBaseRepository
{
    public function save(array $attributes);

    public function update($id , array $attributes);

    public function delete($id);

    public function findById($id);

    public function findAll();

}