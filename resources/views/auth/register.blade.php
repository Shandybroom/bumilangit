<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="/image/favicon.ico">
  <title>BumiLangit | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminLTE/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition">
<div class="login-box">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">Welcome to</h4>
    <h1 class="login-box-msg">Bumi Langit MCU</h1>
    <hr>
    <h4><strong>Register New Member</strong></h4>
    <br>
    <form action="/registersave" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group has-feedback {{$errors->has('name') ? 'has-error' : ''}}">
        <input name="name" type="name" class="form-control" placeholder="Name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback {{$errors->has('email') ? 'has-error' : ''}}">
        <input name="email" type="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : ''}}">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Re-type Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
      <label for="avatar">Your Avatar :</label>
        <input id='avatar' name='avatar' type="file">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/adminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
 
</script>
</body>
</html>

<style>
body {
        background-image: url("/image/background.jpg");
        background-color: #cccccc;
    }
</style>
