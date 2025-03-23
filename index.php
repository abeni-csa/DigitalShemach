<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
 h1 {
  font-size: 70px;
  font-weight: 600;
  background-image: linear-gradient(to left,#06c700, #000000);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  text-align: center;
}

</style>
</head>
<body>

<h1>Digital Shemach</h1>

<?php

$con = mysqli_connect("localhost", "root", "", "DigitalShemacDataBase");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT cardID, UserName, Zeyit, Sukar, UsedDate FROM Information");

echo "<table id=\"customers\">
          <thead>
            <tr>
              <th>Card ID</th>
              <th>Name</th>
              <th>Oil</th>
              <th>Sugar</th>
              <th>Date</th>
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


</body>
</html>
