<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
{{$data}}
<h1> UPDATION </h1>
<form action="/productupdate" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
<input type ="text" name="product_name" placeholder="productname" value="{{$data->product_name}}"></br>
<input type ="text" name="price" placeholder="price" value="{{$data->price}}"></br>
<input type="text" name="quantity" placeholder="quantity" value="{{$data->quantity}}"></br>
<input type="submit" value="submit">
</form>
</body>
</html>