<?php

namespace App\Repositories;


use App\Repositories\IUserRepository as IUserRepository;
use App\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;


/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/16/2017
 * Time: 10:08 AM
 */
class UserRepository extends BaseRepository implements IUserRepository
{


    function __construct( User $user)
    {
        $this->model = $user;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById()
    {
        // TODO: Implement getById() method.
    }

    public function currentUser()
    {
        // TODO: Implement currentUser() method.
        return Auth::user();
    }


}