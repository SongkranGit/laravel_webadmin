<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Repositories\IUserRepository;

/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/25/2017
 * Time: 2:18 PM
 */
abstract class BaseAdminController extends  Controller{


    /**
     * @var IUserRepository
     */
    protected $userRepository;

    function __construct(IUserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
    }




}