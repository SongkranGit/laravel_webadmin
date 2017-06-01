@extends('backend.layouts.layout_backend_main')
@section('content')
   <p>&nbsp;</p>
    <section class="content">
        <form id="form_settings_general" role="form" class="form-horizontal">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span><i class="fa fa-gear"></i> </span>
                </div>
                <div class="panel-body">
                    <div class="row col-md-12">
                        <div class="form-group required ">
                            <label for="website_name" class="col-md-2  control-label">ชื่อเว็บไซด์</label>
                            <div class="col-md-8">
                                <input type="text" id="website_name" name="website_name" class="form-control" placeholder="ชื่อเว็บไซด์"
                                       value="<?php echo isset($row["website_name"]) ? $row["website_name"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-md-2" for="website_short_name">ชื่อเว็บไซด์แบบย่อ</label>
                            <div class="col-md-8">
                                <input type="text" id="website_short_name" name="website_short_name" class="form-control"
                                       placeholder=""
                                       value="<?php echo isset($row["website_short_name"]) ? $row["website_short_name"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-md-2" for="email">อีเมล์</label>
                            <div class="col-md-8">
                                <input type="text" id="email" name="email" class="form-control"
                                       placeholder=""
                                       value="<?php echo isset($row["email"]) ? $row["email"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="phone">เบอร์โทรศัพท์</label>
                            <div class="col-md-8">
                                <input type="text" id="phone" name="phone" class="form-control"
                                       placeholder="เบอร์โทรศัพท์"
                                       value="<?php echo isset($row["phone"]) ? $row["phone"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="phone">เบอร์มือถือ</label>
                            <div class="col-md-8">
                                <input type="text" id="mobile" name="mobile" class="form-control"
                                       placeholder="เบอร์มือถือ"
                                       value="<?php echo isset($row["mobile"]) ? $row["mobile"] : "" ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2"></label>
                            <div class="col-md-8">
                                <ul class="nav nav-tabs">
                                    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab">Thai</a></li>
                                    <li role="presentation"><a href="#tab2" data-toggle="tab">English</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <br>
                                        <textarea name="address_th" id="body" class="form-control"
                                                  rows="5"><?= (isset($row["address_th"]) ? $row["address_th"] : "") ?></textarea>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <br>
                                        <textarea name="address_en" id="body" class="form-control"
                                                  rows="5"><?= (isset($row["address_en"]) ? $row["address_en"] : "") ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span><i class="fa fa-gear"></i> </span>
                </div>
                <div class="panel-body">
                    <div class="row col-md-12">
                        <div class="form-group">
                            <label for="facebook_link" class="col-md-2  control-label">Facebook</label>
                            <div class="col-md-8">
                                <input type="text" id="facebook_link" name="facebook_link" class="form-control"
                                       value="<?php echo isset($row["facebook_link"]) ? $row["facebook_link"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="twitter_link">Twitter</label>
                            <div class="col-md-8">
                                <input type="text" id="twitter_link" name="twitter_link" class="form-control"
                                       value="<?php echo isset($row["twitter_link"]) ? $row["twitter_link"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="instargram_link">Instagram</label>
                            <div class="col-md-8">
                                <input type="text" id="instagram_link" name="instagram_link" class="form-control"
                                       value="<?php echo isset($row["instagram_link"]) ? $row["instagram_link"] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="line_id">Line Id</label>
                            <div class="col-md-8">
                                <input type="text" id="line_id" name="line_id" class="form-control"
                                       value="<?php echo isset($row["line_id"]) ? $row["line_id"] : "" ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span><i class="fa fa-gear"></i> ></span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="facebook_link" class="col-md-2  control-label"></label>
                        <div class="col-md-8">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active"><a href="#tab_vision_1" data-toggle="tab">Thai</a></li>
                                <li role="presentation"><a href="#tab_vision_2" data-toggle="tab">English</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_vision_1">
                                    <br>
                                    <textarea name="vision_th" id="vision_th" class="form-control"
                                              rows="3"><?= (isset($row["vision_th"]) ? $row["vision_th"] : "") ?></textarea>
                                </div>
                                <div class="tab-pane fade" id="tab_vision_2">
                                    <br>
                                    <textarea name="vision_en" id="vision_en" class="form-control"
                                              rows="3"><?= (isset($row["vision_en"]) ? $row["vision_en"] : "") ?></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="box-footer clearfix no-border" style="background: none">
                <div class="pull-right">

                </div>
            </div>
        </form>
    </section>
@stop