<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<form method="get" action="check">
<div>
  @if(Session::get('sucess'))
  <div class="alert alert-sucess">
  {{Session::get('sucess')}}
  </div>
  @endif
  <div>
  @if(Session::get('fail'))
  <div class="alert alert-sucess">
  {{Session::get('fail')}}
  </div>
  @endif
@csrf

 <h1>Login form</h1>
 <div class="container">
    <div class="row mt-5">
    <div class="col-4 py-5">
 <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
    @error('email'){{$message}}@enderror
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    @error('password'){{$message}}@enderror
  </div>
<input type=submit value="Login">
<a href="userreg">Register</a>
</div>  
</body>
</html>