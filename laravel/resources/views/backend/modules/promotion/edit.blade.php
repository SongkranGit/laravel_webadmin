@extends('backend.layouts.layout_backend_main')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>เพิมโปรโมชั่น </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <form data-toggle="validator" role="form"  method="POST" enctype="multipart/form-data" action="{{route('promotion.update' , $promotion->id)}}"  class="form-horizontal form-label-left">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">

                        @if(count($errors))
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <br/>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อโปรโมชั่น <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="{{$promotion->name}}" class="form-control col-md-7 col-xs-12" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">รูปโปรโมชั่น <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="file_upload" name="file_upload" class="form-control col-md-7 col-xs-12" >
                                <span class="text-danger">{{ $errors->first('file_upload') }}</span>
                                <div class="help-block with-errors">{{ $errors->first('file') }}</div>
                                <div id="div_image"></div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ข้อมูลแบบย่อ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="description" id="description" class="form-control" rows="3">{{$promotion->description}}</textarea>
                                <div class="help-block with-errors">{{ $errors->first('description') }}</div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ข้อมูลรายละเอียด <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="detail" id="detail" class="form-control" rows="5">{{$promotion->detail}}</textarea>
                                <div class="help-block with-errors">{{ $errors->first('detail') }}</div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">สถานะ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="is_active">
                                    <option value="0" {{$promotion->is_active != null && $promotion->is_active == 0 ? 'selected': '' }}>ใช้งาน</option>
                                    <option value="1" {{$promotion->is_active != null && $promotion->is_active == 1 ? 'selected': '' }}>ไม่ใช้งาน</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Save</button>
                                <a href="{{url('admin/promotion')}}" class="btn btn-danger"><i class="fa fa-refresh"></i> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')
<link href="{{asset('backend/vendors/jquery-filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('backend/vendors/jquery-filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet">
<script src="{{asset('backend/vendors/jquery-filer/js/jquery.filer.min.js?v=1.0.5')}}"></script>

<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>

<script>

    CKEDITOR.replace('detail');

    $(document).ready(function () {

        initFileInput();

        showImageOnEditForm();
    })

    function showImageOnEditForm() {
        var image = '<div class="jFiler-items jFiler-row">\
                          <ul class="jFiler-items-list jFiler-items-grid">\
                               <li class="jFiler-item">\
                                <div class="jFiler-item-container">\
                                    <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb" style="width:100%">\
                                            <img src="{{asset($promotion->image_name)}}">\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>\
                      </ul>\
                   </div>';

        $('#div_image').append(image);
        $("input:file").change(function () {
            $('#div_image').hide();
        });
    }

    function initFileInput() {
        $('#file_upload').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            extensions: ['jpg', 'jpeg', 'png'],
            changeInput: true,
            showThumbs: true,
            captions: {button: 'เลือกไฟล์', feedback: ''},
            addMore: false,

        });
    }

</script>

@endpush