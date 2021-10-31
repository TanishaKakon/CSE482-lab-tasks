<?php
  $emplpoyeeId = "";
  if (isset($_GET["Employee_Id"])) {
    $emplpoyeeId = $_GET["Employee_Id"];
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hr";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM employees WHERE Employee_Id=".$emplpoyeeId;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  echo "Name:".$row["First_Name"]." ".$row["Last_Name"];
 ?>
