<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/21/2017
 * Time: 3:44 AM
 */

namespace App\Repositories;

use App\Role;
use App\Repositories\IRoleRepository as IRoleRepository;

class RoleRepository extends BaseRepository implements IRoleRepository
{

    function __construct( Role $role)
    {
        $this->model = $role;
    }



}