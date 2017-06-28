@extends('backend.layouts.layout_backend_main')
@section('content')

    <style>
        #div_underconstruct {
            position:absolute;
            color:#fff;
            top:50%;
            left:55%;
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }

    </style>
    <div id="div_underconstruct"><img height="670" src="{{asset('backend/images/maintenance.png')}}"></div>

@stop

@push('scripts')



@endpush