<?php

namespace App\Http\Controllers\Backend;
use App\Models\Promotion;
use App\Repositories\IPromotionRepository as IPromotionRepository;
use App\Repositories\IUserRepository as IUserRepository;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Validator;
use Yajra\Datatables\Facades\Datatables;

class PromotionController extends BaseAdminController
{

    /**
     * @var IPromotionRepository
     */
    private $promotionRepository;

    function __construct(IUserRepository $userRepository , IPromotionRepository $promotionRepository)
    {
        parent::__construct($userRepository);

        $this->promotionRepository = $promotionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.modules.promotion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.promotion.create');
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
            'description'      => 'required',
            'is_active' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('promotion.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $input = $request->all();
            $input['created_by'] = $this->userRepository->currentUser()->id;
            $input['image_name'] = $this->uploadImage($request);
            $this->promotionRepository->save($input);
            return redirect()->route('promotion.create');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->promotionRepository->delete($id);
        $result = array('success' => true, 'messages' => array());
        return response()->json($result);
    }

    private function uploadImage(Request $request){
        //directory
        $directory_file_upload = config('app.upload_promotion');
        $file = $request->file('file_upload'); // as array files
        $image =  $file[0];
        if(!File::exists($image->getRealPath())) {
            File::makeDirectory($directory_file_upload , 0777, true, true);
        }

        $filename = strtolower(
            //pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)
            'promotion'
            .'-'
            .time()
            .'.'
            .$image->getClientOriginalExtension()
        );

        $file_path = $directory_file_upload.$filename;

        $img = Image::make($image->getRealPath());
        $img->resize(1170, 520);
        $img->save($file_path);
        $img->destroy();

        return $file_path;

    }

    public function loadPromotionsDataTable(){
      //  return Datatables::of(Promotion::query())->make(true);
        return Datatables::of(
            DB::select('select p.id , p.name , p.description , p.created_at , p.is_active , p.image_name , u.name as created_by  
                        from promotions p 
                        LEFT JOIN users u on u.id = p.created_by')
        )->make(true);
    }
}
