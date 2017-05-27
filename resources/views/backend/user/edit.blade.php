@extends('backend.layouts.layout_backend_main')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แก้ไขผู้ใช้งาน </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>

                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <form data-toggle="validator" role="form" method="POST" action="{{route('user.update' , $user->id)}}" class="form-horizontal form-label-left">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อ-สกุล <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name"  class="form-control col-md-7 col-xs-12" value="{{$user->name}}" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อีเมล์ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email"  value="{{$user->email}}" class="form-control col-md-7 col-xs-12"  required>
                                <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password"  type="text" name="password" class="form-control col-md-7 col-xs-12" >
                                <div class="help-block with-errors">{{ $errors->first('password') }}</div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">สิทธิ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="role">
                                    @if(isset($roles))
                                        @foreach($roles as $role)
                                            <option {{ $role_selected != null && $role_selected->id == $role->id ? 'selected' :''}} value="{{$role->id}}">
                                                {{$role->name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">สถานะ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="role">
                                    <option value="0">Active</option>
                                    <option value="1">InActive</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> บันทึก</button>
                                <a href="{{url('admin/user')}}" class="btn btn-danger"><i class="fa fa-refresh"></i> ยกเลิก</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')



@endpush