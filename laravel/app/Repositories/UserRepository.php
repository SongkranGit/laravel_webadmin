<?php

namespace App\Repositories;


use App\Repositories\IUserRepository as IUserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;


/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/16/2017
 * Time: 10:08 AM
 */
class UserRepository extends AbstractRepository implements IUserRepository
{

    function __construct( User $user)
    {
        $this->model = $user;
    }

    public function currentUser()
    {
        return Auth::user();
    }




}