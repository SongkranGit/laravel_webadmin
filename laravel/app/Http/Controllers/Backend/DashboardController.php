<?php
namespace App\Http\Controllers\Backend;
/**
 * Created by PhpStorm.
 * User: BERM-NOTEBOOK
 * Date: 5/17/2017
 * Time: 3:15 AM
 */

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view('backend.dashboard');
    }
}