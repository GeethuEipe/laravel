<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="productinsert" method="get">
@csrf
<h1>Product Details<h1>
<input type ="text" name="product_name" placeholder="productname"></br>
<input type ="text" name="price" placeholder="price"></br>
<input type="text" name="quantity" placeholder="quantity"></br>
<input type="submit" value="submit">
</form>
</body>
</html>