<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/16/2017
 * Time: 10:05 AM
 */
interface IUserRepository extends IBaseRepository
{
    public function currentUser();

}