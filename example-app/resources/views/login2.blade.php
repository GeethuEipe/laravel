<html>
<head>
<title></title>
</head>
<style>
body{ 
    padding:16px;
}
div{

    width:300px;
    height:300px;

}
</style>
<body>
<form method="post" action="loginform">
@csrf

 <h1>Login form</h1>
 <div>
Username:<input type="text" name="user"></br></br>
Password:<input type="password" name="password"></br></br>
<input type=submit value="login">
</div>
</body>
</html>