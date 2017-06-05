<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    private $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('admin');
    }

    public function index()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/login')
                ->withErrors($validator)
                ->withInput();
        } else {

            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended('admin/home');
            } else {
                return redirect('admin/login')->withErrors(['password' => 'Email or Password is not correct']);
            }
        }

    }

    public function showLoginForm()
    {
        $user = Auth::user();
        if ($user != null && $user->name != '') {
            return redirect('admin/home');
        } else {
            return view('backend.auth.login');
        }
    }

    public function logout(Request $request)
    {
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('admin/login');
    }


}
