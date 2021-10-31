<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hr";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab task 3</title>
</head>
<body>
<table border="1px solid black" style="width:100%">
  <tr>
    <th>Employee_Id</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Phone_Number</th>
    <th>Hire_Date</th>
    <th>Job_Id</th>
    <th>Salary</th>
    <th>Commission_pct</th>
    <th>Manager_id</th>
    <th>Department_id</th>
  </tr>
       <?php

                $sql = "SELECT * FROM employees";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<td>".$row["Employee_Id"]."</td>";
                        echo "<td>".$row["First_Name"]."</td>";
                        echo "<td>".$row["Last_Name"]."</td>";
                        echo "<td>".$row["Email"]."</td>";
                        echo "<td>".$row["Phone_Number"]."</td>";
                        echo "<td>".$row["Hire_Date"]."</td>";
                        echo "<td>".$row["Job_Id"]."</td>";
                        echo "<td>".$row["Salary"]."</td>";
                        echo "<td>".$row["Commission_pct"]."</td>";
                        echo "<td>".$row["Manager_id"]."</td>";
                        echo "<td>".$row["Department_id"]."</td>";
                        echo "<td><a href='https://localhost/sec-3/Database/detail.php?Employee_Id=".$row["Employee_Id"]."'>Detail</a></td>";
                        echo "</tr>";
                    }
                } else {
                echo "0 results";
                }
                mysqli_close($conn);

        ?>
</table>
</body>
</html>
