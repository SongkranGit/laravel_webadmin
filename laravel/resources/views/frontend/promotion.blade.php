@extends('frontend.layouts.app')
@section('content')


    <div class="content_fullwidth less2">
        <div class="container">

            <div class="content_left">


                @if(isset($promotions))

                    @foreach($promotions as $promotion)

                        <div class="blog_post">
                            <div class="blog_postcontent">
                                <div class="image_frame"><a href="#"><img src="{{url($promotion->image_name)}}" alt="" /></a></div>
                                <h3><a href="blog-post.html">{{$promotion->name}}</a></h3>
                                <ul class="post_meta_links">
                                    <li><a href="#" class="date">27 May 2015</a></li>
                                    <li class="post_by"><i>by:</i> <a href="#">Adam Harrison</a></li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="margin_top1"></div>
                                <p>{{$promotion->description}} <a href={{url('promotion/show/'.$promotion->id)}}>read more...</a></p>
                            </div>
                        </div><!-- /# end post -->

                        <div class="clearfix divider_line9"></div>

                    @endforeach

                @endif

                <div>

                    <div class="pagination">
                        <b>Page {{$promotions->currentPage()}} of {{$promotions->lastPage()}}</b>
                        {{ $promotions->links('vendor.pagination.custom') }}

                    </div><!-- /# end pagination -->

                </div>


            </div><!-- end content left side -->


            <!-- right sidebar starts -->
            <div class="right_sidebar">

                <div class="sidebar_widget">

                    <div class="sidebar_title"><h4>Site Categories</h4></div>
                    <ul class="arrows_list1">
                        <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i> Social Media</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i> Online Gaming</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i> Entertainment</a></li>
                    </ul>

                </div><!-- end section -->

                <div class="margin_top4"></div>
                <div class="clearfix"></div>

                <div class="sidebar_widget">

                    <div id="tabs">

                        <div class="tab_container">
                            <div id="tab1" class="tab_content">

                                <ul class="recent_posts_list">
                                    <li>
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Publishing packag esanse web page editos</a>
                                        <i>May 13, 2015</i>
                                    </li>
                                    <li>
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Sublishing packag esanse web page editos</a>
                                        <i>May 12, 2015</i>
                                    </li>
                                    <li class="last">
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Mublishing packag esanse web page editos</a>
                                        <i>May 11, 2015</i>
                                    </li>
                                </ul>

                            </div><!-- end popular posts -->

                            <div id="tab2" class="tab_content">
                                <ul class="recent_posts_list">

                                    <li>
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Various versions has evolved over the years</a>
                                        <i>May 18, 2015</i>
                                    </li>
                                    <li>
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Rarious versions has evolve over the years</a>
                                        <i>May 17, 2015</i>
                                    </li>
                                    <li class="last">
                                        <span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
                                        <a href="#">Marious versions has evolven over the years</a>
                                        <i>May 16, 2015</i>
                                    </li>
                                </ul>

                            </div><!-- end popular articles -->


                        </div>

                    </div>

                </div><!-- end section -->

                <div class="clearfix margin_top4"></div>

                <div class="clientsays_widget">

                    <div class="sidebar_title"><h4>Happy Client Say's</h4></div>

                    <img src="http://placehold.it/50x50" alt="" />
                    <strong>- Michle Siminson</strong><p>Lorem Ipsum passage, and going through the cites of the word here classical literature passage discovere there undou btable source looks reasonable the generated charac eristic words.</p>

                </div><!-- end section -->

                <div class="clearfix margin_top4"></div>

                <div class="sidebar_widget">

                    <div class="sidebar_title"><h4>Text Widget</h4></div>
                    <p>Going to use a passage of lorem lpsum you need to be sure there anything embarrassin hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend the repeat predefined chunks as thenecessary making this the first true generator.</p>

                </div><!-- end section -->

                <div class="clearfix margin_top4"></div>


            </div><!-- end right sidebar -->


        </div>
    </div><!-- end content area -->



    {{--<div class="clearfix margin_top12"></div>--}}

@endsection