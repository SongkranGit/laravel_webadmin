@extends('backend.layouts.layout_backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ข้อมูลเว็บไซด์</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    @if($form_action != null && $form_action == 'create')
                        <form data-toggle="validator" role="form" method="POST" action="{{route('setting.store')}}" class="form-horizontal form-label-left">
                    @elseif(isset($setting))
                        <form data-toggle="validator" role="form" method="POST" action="{{route('setting.update', $setting->id )}}" class="form-horizontal form-label-left">
                        <input type="hidden" name="_method" value="PUT">
                    @endif

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span><i class="fa fa-gear"></i> ข้อมูลทั่วไป</span>
                            </div>
                            <div class="panel-body">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อเว็บไซด์ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="website_name" class="form-control col-md-7 col-xs-12" value="{{ $setting->website_name }}" required>
                                        <span class="text-danger">{{ $errors->first('website_name') }}</span>
                                        <div class="help-block with-errors">{{ $errors->first('website_name') }}</div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">อีเมล์ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email"
                                               pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"
                                               class="form-control col-md-7 col-xs-12" required value="{{ $setting->email }}">
                                        <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">เบอร์โทร <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="phone" type="text" name="phone" class="form-control col-md-7 col-xs-12" value="{{ $setting->phone }}" required>
                                        <div class="help-block with-errors">{{ $errors->first('phone') }}</div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">มือถือ <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="mobile" type="text" name="mobile" class="form-control col-md-7 col-xs-12" required value="{{ $setting->mobile }}">
                                        <div class="help-block with-errors">{{ $errors->first('mobile') }}</div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">ที่อยู่ <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea name="address" id="address" class="form-control" rows="5" required>{{ $setting->address }}</textarea>
                                        <div class="help-block with-errors">{{ $errors->first('address') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span><i class="fa fa-gear"></i> Social Network</span>
                            </div>
                            <div class="panel-body">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ลิงค์ facebook
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="facebook_link" class="form-control col-md-7 col-xs-12" value="{{ $setting->facebook_link }}" >
                                        <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                                        <div class="help-block with-errors">{{ $errors->first('facebook_link') }}</div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ลิงค์ twitter
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="twitter_link" class="form-control col-md-7 col-xs-12" value="{{ $setting->twitter_link }}">
                                        <div class="help-block with-errors">{{ $errors->first('twitter_link') }}</div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="instagram_link" class="control-label col-md-3 col-sm-3 col-xs-12">ลิงค์ Instargram </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="instagram_link" type="text" name="instagram_link" value="{{ $setting->instagram_link }}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="line_id" class="control-label col-md-3 col-sm-3 col-xs-12">Line Id </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="line_id" type="text" name="line_id" value="{{ $setting->line_id }}"class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span><i class="fa fa-gear"></i> ข้อความประกาศ</span>
                            </div>
                            <div class="panel-body">
                                <div class="item form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">ข้อความ </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="vision" id="vision" class="form-control" rows="5">{{$setting->vision}}</textarea>
                                        <div class="help-block with-errors">{{ $errors->first('vision') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 ">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-refresh"></i> ยกเลิก</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')
<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>

<script>

    //CKEDITOR.replace('address', {
    //    toolbar: [
    //        { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
    //        [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
    //        '/',																					// Line break - next group will be placed in new line.
    //        { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
    //    ]
    //});

    CKEDITOR.replace('vision');



</script>


@endpush