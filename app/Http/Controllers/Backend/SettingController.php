<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Repositories\ISettingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Sodium\compare;
use Validator;

class SettingController extends Controller
{

    private $rules = [
        'website_name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'phone' => 'required',
    ];

    /**
     * @var ISettingRepository
     */
    private $settingRepository;

    function __construct(ISettingRepository $settingRepository)
    {
        $this->middleware('admin');
        $this->settingRepository = $settingRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = $this->settingRepository->findById(1);
        if ($setting == null){
            $form_action = 'create';
            $setting = new Setting();
        }
        else{
            $form_action = 'update';
        }

        return view('backend.modules.setting.entry', compact('form_action', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form_action = 'create';
        return view('backend..modules.setting.entry', compact('form_action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return redirect('admin/setting/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $input = $request->all();
            $this->settingRepository->save($input);
            return response()->redirectTo('admin/setting/edit');
        }
        //dump($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form_action = 'update';
        $setting = $this->settingRepository->findById(1);
        return view('backend.modules.setting.entry', compact('form_action' , 'setting') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return redirect()->route('setting.edit', ['id' => 1])
                ->withErrors($validator)
                ->withInput();
        } else {
            $input = $request->all();
            $this->settingRepository->update(1, $input);
            return redirect()->route('setting.edit', ['id' => 1]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
