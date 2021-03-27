<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<table border = "1">
<tr>
    
    <td>Name</td>
    <td>Email</td>
</tr>
<td>{{$LoggedUser['name']}}</td>
<td>{{$LoggedUser['email']}}</td>
<td><a href="logout">Logout</a></td>

</body>
</html>