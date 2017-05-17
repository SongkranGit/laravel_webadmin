<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\IUserRepository as IUserRepository;


class HomeController extends Controller
{
    /**
     * @var IUserRepository
     */
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Auth::user();
        $user = $this->userRepository->currentUser();
        return view('home');
    }
}
