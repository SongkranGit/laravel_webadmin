<!doctype html>
<html lang="{{ config('app.locale') }}">
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/simpleline-icons/simple-line-icons.css')}}" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/et-linefont/etlinefont.css')}}">

    <!-- animations -->
    <link href="{{asset('frontend/js/animations/css/animations.min.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="{{asset('frontend/css/responsive-leyouts.css')}}" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="{{asset('frontend/css/shortcodes.css')}}" type="text/css" />

    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "{{asset('frontend/js/style-switcher/color-switcher.css')}}" />

    <!-- mega menu -->
    <link href="{{asset('frontend/js/mainmenu/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/mainmenu/demo.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/mainmenu/menu.css')}}" rel="stylesheet">

</head>

<body>

<div class="site_wrapper">

    <div class="content_fullwidth less2">
        <div class="container">

            <div class="logregform">

                <div class="title">

                    <h3>Account Login</h3>

                    <p>Not member yet? &nbsp;<a href="register.html">Sign Up.</a></p>

                </div>

                <div class="feildcont">

                    <form role="form">

                        <label><i class="fa fa-user"></i> Username / Email</label>
                        <input type="text">

                        <label><i class="fa fa-lock"></i> Password</label>
                        <input type="password">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                            </label>
                            <label>Remember Me</label>
                            <label><a href="#"><strong>Forgot Password?</strong></a></label>
                        </div>

                        <button type="button" class="fbut">Login Now!</button>

                    </form>

                </div>

            </div>

        </div>
    </div><!-- end content area -->

    <div class="clearfix margin_top12"></div>


</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->

<script type="text/javascript" src="{{asset('frontend/js/universal/jquery.js')}}"></script>
<script src="{{asset('frontend/js/style-switcher/styleselector.js')}}"></script>
<script src="{{asset('frontend/js/animations/js/animations.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/mainmenu/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/mainmenu/customeUI.js')}}"></script>
<script src="{{asset('frontend/js/masterslider/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/js/masterslider/masterslider.min.js')}}"></script>

</body>
</html>
