<?php 
    // session_start();
    session_destroy();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Toidicodedao</title>
    <!-- Favicon-->
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="public/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="public/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="public/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Toidi<b>CodeDao</b></a>
            <small>Login page</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="?mod=news&act=login">
                    <div class="msg">Sign in</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="username" placeholder="Username - Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="#">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
     <script src="public/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
     <script src="public/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
     <script src="public/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
     <script src="public/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
     <script src="public/js/admin.js"></script>
     <script src="public/js/pages/examples/sign-in.js"></script>
</body>

</html>