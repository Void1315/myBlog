
<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('css/login/goolfont.css')}}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('css/default/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/login/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/login/modernizr-2.6.2.min.js')}}"></script>

    </head>
    <body class="style-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <!-- Start Sign In Form -->
                    <form action="{{url('login')}}" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
                        <h2>该登陆了</h2>
                        <div class="form-group">
                            <label for="username" class="sr-only">登录邮箱</label>
                            <input type="email" class="form-control" id="email" placeholder="登录邮箱" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">登录密码</label>
                            <input type="password" class="form-control" id="password" placeholder="登录密码" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="remember"><input type="checkbox" id="remember"> 记住我 </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign In" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- jQuery -->
    <script src="{{asset('js/default/jquery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/default/bootstrap.min.js')}}"></script>
    <!-- Placeholder -->
    <script src="{{asset('js/login/jquery.placeholder.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/login/jquery.waypoints.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('js/login/main.js')}}"></script>
    </body>
</html>

