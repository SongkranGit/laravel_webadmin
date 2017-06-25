<?php

namespace App\Repositories;
use App\Models\Setting;
use App\Repositories\ISettingRepository as ISettingRepository;

/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/10/2017
 * Time: 2:29 PM
 */
class SettingRepository extends AbstractRepository implements ISettingRepository
{

    function __construct( Setting $setting)
    {
        $this->model = $setting;
    }

}