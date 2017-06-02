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
                        <form data-toggle="validator" role="form" method="POST" action="{{route('user.store')}}" class="form-horizontal form-label-left">
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
                                            <input type="text" name="website_name" class="form-control col-md-7 col-xs-12" required>
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
                                                   class="form-control col-md-7 col-xs-12" required>
                                            <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">เบอร์โทร <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="phone" type="text" name="phone" class="form-control col-md-7 col-xs-12" required>
                                            <div class="help-block with-errors">{{ $errors->first('phone') }}</div>
                                        </div>
                                    </div>
                                        <div class="item form-group">
                                            <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">มือถือ <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="mobile" type="text" name="mobile" class="form-control col-md-7 col-xs-12" required>
                                                <div class="help-block with-errors">{{ $errors->first('mobile') }}</div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">ที่อยู่ <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <textarea name="address" id="body" class="form-control" rows="5"></textarea>
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
                                            <input type="text" name="facebook_link" class="form-control col-md-7 col-xs-12" required>
                                            <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                                            <div class="help-block with-errors">{{ $errors->first('facebook_link') }}</div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ลิงค์ twitter
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="twitter_link" class="form-control col-md-7 col-xs-12" required>
                                            <div class="help-block with-errors">{{ $errors->first('twitter_link') }}</div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">ลิงค์ Instargram </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="phone" type="text" name="phone" class="form-control col-md-7 col-xs-12" required>

                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">Line Id </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="line_id" type="text" name="line_id" class="form-control col-md-7 col-xs-12" required>

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

                                            <textarea name="address" id="body" class="form-control" rows="5"></textarea>
                                            <div class="help-block with-errors">{{ $errors->first('address') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> บันทึก</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-refresh"></i> ยกเลิก</button>
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
@stop