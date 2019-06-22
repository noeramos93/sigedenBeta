<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url()?>static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url()?>static/css/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url()?>static/css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url()?>static/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <?php
    if($this->session->flashdata('error')){
?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo $this->session->flashdata('error');?></strong>
    </div>
<?php
  }
?>
    <div id="particles-js"></div>

    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">SIGEDEN</a>
            <small>Login sistema SIGEDEN</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?=base_url()?>index.php/Login/userdo" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
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
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-blue">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>static/js/core/jquery.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>static/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>static/js/core/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?=base_url()?>static/js/core/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?=base_url()?>static/js/core/admin.js"></script>
    <!-- particles  -->
    <script src="<?=base_url()?>static/js/core/particles.js"></script>
    <script src="<?=base_url()?>static/js/core/particulas.js"></script>
    

</body>

</html>