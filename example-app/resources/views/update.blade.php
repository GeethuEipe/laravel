<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
{{$data}}
<h1> UPDATION </h1>
<form action="/update_action" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
<input type ="text" name="member_name" placeholder="username" value="{{$data->member_name}}"></br>
<input type ="text" name="email" placeholder="email" value="{{$data->email}}"></br>
<input type="text" name="address" placeholder="address" value="{{$data->address}}"></br>
<input type="submit" value="submit">

</form>
</body>
</html>