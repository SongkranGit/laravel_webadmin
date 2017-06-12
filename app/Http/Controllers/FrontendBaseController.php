<?php
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 6/11/2017
 * Time: 12:49 AM
 */

namespace App\Http\Controllers;


use App\Repositories\ISettingRepository;
use Auth;
use View;

class FrontendBaseController extends Controller
{

    /**
     * @var ISettingRepository
     */
    protected $settingRepository;


    function __construct(ISettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;

        $this->loadSetting();
    }


    public function loadSetting()
    {
        $setting  = $this->settingRepository->findById(1);
        View::share('website_info', $setting);
    }

}