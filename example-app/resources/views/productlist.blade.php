<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form>
<table border = "1">
<tr>
    <td>id</td>
    <td>Product_name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td colspan="2">Action</td>
</tr>
@foreach($data as $user)
<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['product_name']}}</td>
    <td>{{$user['price']}}</td>
    <td>{{$user['quantity']}}</td>
    <td><a href={{"update/".$user->id}}>Update</a></td>
    <td><a href={{"delete/".$user->id}}>Delete</a></td>
</tr>
@endforeach
</form>
</table>
</body>
</html>