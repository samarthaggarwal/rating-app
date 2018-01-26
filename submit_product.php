<?php
  $servername = "localhost";
  $username = "root";
  $password = "abc";
  $dbname = "db1";

  $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
    die("Connection to database failed : ".$conn->error);
  }
  else {
    echo "connected to database ".$dbname;
  }

  $name=$_POST["productname"];
  $description=$_POST["description"];
  $description=testinputdata($description);
  $sql="insert into products (product_name, description) values (\"$name\",\"$description\")";
  //echo "</br>".$sql."</br>";

  if($conn->query($sql)===true){
    echo "<br>successful query<br>".$sql;
  }
  else {
    echo "<br>error in entering data to db :<br>".$conn->error;
  }

$newURL="add_product.php";
header('Location: '.$newURL);
die();

  function testinputdata($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }

  $conn->close();
?>
