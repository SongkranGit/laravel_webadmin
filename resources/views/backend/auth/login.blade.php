@extends('backend.layouts.layout_login')

@section('content')
    <div class="logregform">

        <div class="title">
            <h3>Account Login</h3>
        </div>

        <div class="feildcont">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email"><i class="fa fa-user"></i> E-Mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label><i class="fa fa-lock"></i> Password</label>
                    <input type="password" name="password" required  >
                </div>
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
                <div class="form-group pull-right">
                    <button type="submit" class="fbut">Login</button>
                </div>

            </form>

        </div>

    </div>

@endsection
