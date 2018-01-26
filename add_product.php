<!DOCTYPE html>
<html>
<head>
<title>Add Product Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div style="text-align:center" >
  <h1>Add Product</h1>
  <br><br>
  <form action="submit_product.php" method="post">
    Name of Product : <input type="text" name="productname" autofocus><br><br>
    Description : <textarea name="description" rows="3" cols="50"></textarea><br><br>
    <input type="submit" value="Submit Product">
  </form>
<br>
  <form method="get" action="/rating/add_review.php">
    <button type="submit">Add Reviews</button>
  </form>
<br>
  <form method="get" action="/rating/">
    <button type="submit">Existing Reviews</button>
  </form>
</div>

</body>
</html>
