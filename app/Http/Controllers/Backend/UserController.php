<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\IRoleRepository as IRoleRepository;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IUserRepository as IUserRepository;
use Yajra\Datatables\Facades\Datatables;
use App\User;

class UserController extends Controller
{

    /**
     * @var IUserRepository
     */
    private $userRepository;
    /**
     * @var IRoleRepository
     */
    private $roleRepository;

    function __construct(IUserRepository $userRepository , IRoleRepository $roleRepository)
    {
        $this->middleware('admin');

        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->findAll();
        return view('backend.user.index' , compact('users' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleRepository->findAll();
        return view('backend.user.create', compact('roles' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'password'   => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('admin/user/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $input = $request->all();
            $input['password'] = md5($request->password);
            $this->userRepository->save($input);
            return response()->redirectTo('admin/user');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = $this->roleRepository->findAll();
        $user = $this->userRepository->findById($id);
        $role_selected = $user->roles()->find($id);
        return view('backend.user.edit' , compact('roles' , 'user' , 'role_selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return redirect('admin/user/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }else{
            $input = $request->except(['password']);
            $this->userRepository->update($id , $input);
            return response()->redirectTo('admin/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        $result = array('success' => true, 'messages' => array());

        return response()->json($result);
    }

    public function loadUsersDataTable(){
        return Datatables::of(User::query())->make(true);
    }

    public function rules()
    {
        return [
            'name'       => 'required',
            'email'      => 'required|email'
        ];
    }
}
