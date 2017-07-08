<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Promotion;
use App\Repositories\IPromotionRepository;
use App\Repositories\ISettingRepository;
use Illuminate\Http\Request;

class PromotionController extends FrontendBaseController
{

    /**
     * @var IPromotionRepository
     */
    private $promotionRepository;

    function __construct(ISettingRepository $settingRepository , IPromotionRepository $promotionRepository)
    {
        parent::__construct($settingRepository);
        $this->settingRepository = $settingRepository;
        $this->promotionRepository = $promotionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions =  Promotion::paginate(5);

        return view('frontend.promotion' , compact('promotions'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promotion = null;
        if($id != null){
           $promotion = $this->promotionRepository->findById($id);
        }
        return view('frontend.promotion_detail' , compact('promotion'));
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


}
