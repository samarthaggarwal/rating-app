<!DOCTYPE html>
<html>
<head>
<title>Reviews Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div style="text-align:center" >
  <h1>List of Products</h1>
  <br><br>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "abc";
  $dbname = "db1";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM products";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

      echo  "<table align=\"center\" style=\"width:100% text-align:center\">
      <tr>
      <th>Name of Product</th>
      <th>Description</th>
      <th>Average User Rating</th>
      </tr>";
      while($row = $result->fetch_assoc()) {
        // echo "product name : " . $row["product_name"]. " - Description: " . $row["description"]."<br>";
      echo "<tr><td>".$row["product_name"]."</td>
        <td>".$row["description"]."</td>
        <td></td>
        </tr>";
      }
     echo "</table>";
  } else {
     echo "0 results";
  }
  $conn->close();
  ?>

  <!-- <h1>Add Review</h1>
  <br><br>
  <form action="submit_review.php" method="post">
    Name of Product : <input type="text" name="productname" autofocus><br><br>
    Rating (between 0 to 10) : <input type="number" name="rating" step="0.01" min="0" max="10.1" autocomplete="off"><br><br>
    Comment : <textarea name="comment" rows="5" cols="50"></textarea><br><br>
    <input type="submit" value="Submit Review">
  </form> -->
<br>
  <form method="get" action="/rating/add_product.php">
    <button type="submit">Add Product</button>
  </form>
<br>
  <form method="get" action="/rating/add_review.php">
    <button type="submit">Add Review</button>
  </form>
</div>

</body>
</html>
