<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/front-end/img/black-logo.png" rel="icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url(); ?>"><b>ReCar</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Please enter your username and password !</p>
            
            <form action="<?=base_url('auth/register');?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Fullname" name="fullname"
                        value="<?=set_value('fullname');?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <small class="text-red"><?=form_error('fullname');?></small>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp"
                        value="<?=set_value('telp');?>">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    <small class="text-red"><?=form_error('email');?></small>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username"
                        value="<?=set_value('username');?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <small class="text-red"><?=form_error('username');?></small>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password1">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <small class="text-red"><?=form_error('password1');?></small>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Confirm password" name="password2">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat mb-5">Register</button>
            </form>

            <!-- <a href="#">I forgot my password ?</a><br> -->
            Already account ?<a href="<?=base_url('auth');?>" class="text-center"> Login here</a>
            <br>
            <a href="<?=base_url();?>">Back to website</a><br>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>



</html>
