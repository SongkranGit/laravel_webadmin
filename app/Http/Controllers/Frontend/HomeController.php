<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\FrontendBaseController;
use App\Repositories\ISettingRepository;

class HomeController extends FrontendBaseController
{

    /**
     * Create a new controller instance.
     *
     * @param ISettingRepository $settingRepository
     */
    public function __construct( ISettingRepository $settingRepository)
    {
        parent::__construct($settingRepository);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home' );
    }
}
