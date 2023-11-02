<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Digital Shemach</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <center><h2 class="mb-5">Digital Shemach Dashboard</h2></center>
      <div class="table-responsive">

<?php

$con = mysqli_connect("localhost", "root", "", "DigitalShemacDataBase");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT cardID, UserName, Zeyit, Sukar, UsedDate FROM Information");

echo "<table class=\"table table-striped custom-table\">
          <thead>
            <tr>
              <th scope=\"col\">Card ID</th>
              <th scope=\"col\">Name</th>
              <th scope=\"col\">Oil</th>
              <th scope=\"col\">Sugar</th>
              <th scope=\"col\">Date</th>
            </tr>
          </thead>";
echo "<tbody>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr scope=\"row\">";
    echo "<td>" . $row['cardID'] . "</td>";
    echo "<td>" . $row['UserName'] . "</td>";
    echo "<td>" . $row['Zeyit'] . "</td>";
    echo "<td>" . $row['Sukar'] . "</td>";
    echo "<td>" . $row['UsedDate'] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

mysqli_close($con);

?>



    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
 <?php
/*
-- Create the table
CREATE TABLE Information (
  id INT PRIMARY KEY AUTO_INCREMENT,
  cardID CHAR(6),
  UserName VARCHAR(255),
  Zeyit VARCHAR(255),
  Sukar VARCHAR(255),
  UsedDate DATE
);

-- Insert sample data
INSERT INTO Information (cardID, UserName, Zeyit, Sukar, UsedDate)
VALUES
  (CONV(FLOOR(RAND() * 16777215), 10, 16), 'John Doe', 'Sample Zeyit 1', 'Sample Sukar 1', '2021-10-01'),
  (CONV(FLOOR(RAND() * 16777215), 10, 16), 'Jane Smith', 'Sample Zeyit 2', 'Sample Sukar 2', '2021-10-02'),
  (CONV(FLOOR(RAND() * 16777215), 10, 16), 'Alice Johnson', 'Sample Zeyit 3', 'Sample Sukar 3', '2021-10-03');

*/
 ?>