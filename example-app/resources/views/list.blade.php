<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="list" method="get">
<table border = "1">
<tr>
    <td>id</td>
    <td>Member_name</td>
    <td>Email</td>
    <td>Address</td>
    <td colspan="2">Action</td>
</tr>
@foreach($data as $user)
<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['member_name']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['address']}}</td>
    <td><a href={{"update/".$user->id}}>Update</a></td>
    <td><a href={{"delete/".$user->id}}>Delete</a></td>
</tr>
@endforeach
</form>
</table>
</body>
</html>


