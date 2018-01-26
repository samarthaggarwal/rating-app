<!DOCTYPE html>
<html>
<head>
<title>Add Review Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div style="text-align:center" >
  <h1>Add Review</h1>
  <br><br>
  <form action="submit_review.php" method="post">
    Name of Product : <input type="text" name="productname" autofocus><br><br>
    Rating (between 0 to 10) : <input type="number" name="rating" step="0.01" min="0" max="10.1" autocomplete="off"><br><br>
    Comment : <textarea name="comment" rows="5" cols="50"></textarea><br><br>
    <input type="submit" value="Submit Review">
  </form>
<br>
  <form method="get" action="/rating/add_product.php">
    <button type="submit">Add Product</button>
  </form>
<br>
  <form method="get" action="/rating/view_reviews.php">
    <button type="submit">Existing Reviews</button>
  </form>
</div>

</body>
</html>
