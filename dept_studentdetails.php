<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w32.css">
<link rel="stylesheet" href="w3-theme-black.css">
<style>
body {margin:0;}

.leftbox {
    float: left;
    background-color: red;
    width: 15%;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}



.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.workbox {
    float: right;
    background-color: green;
    width: 67%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}



.mainbox {
    float: right;
    background-color: green;
    width: 70%;
    border: 5px solid blue;
    padding: 2px;
    
    margin-right: 6px; 
    box-shadow: 5px 6px 7px;
    padding-left: 1px;
    padding-right: 1px;
}





</style>
</head>

<body>
<!-- Top navigation bar-->
<div class="topnav">
  <a href="departmenthomepage.php">Home</a>
  <a href="dept_postwork.php">Post Work</a>
  <a href="dept_approvework.php">Approve Work</a>
  <a href="dept_approvehours.php">Approve Hours</a>
  <a class="active" href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h1>View Students</h1>
</div>
<?php

$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "seproject";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Name,Email,ContactNumber,ContactPerson FROM Department where Name='CSED'";
$result = $conn->query($sql);
      
        
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='w3-col m3'>";
    echo "<div class='w3-card w3-round w3-white'>";
    echo "<div class='w3-container'>";
    echo "<h4 class='w3-center'> " .$row["Name"]. "</h4>";
    echo "<p class='w3-center'><img src='avatar3.png' class='w3-circle' style='height:90px;width:90px' alt='Avatar'></p>";
    echo '<hr>';
    echo "<p align='center'>Contact Person: " .$row["ContactPerson"]. "</p>";
    echo "<p align='center'>Contact No: " .$row["ContactNumber"]. "</p>";
    
    echo "<p align='center'>Email:" .$row["Email"]. "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

//echo '</div>';
$sql = "SELECT name,rollno,hoursworked,contactno,email FROM Student";
//echo '<div class="mainbox">';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '<div class="mainbox">';
    while($row = $result->fetch_assoc()){
      // echo "<br><br>";
         
echo '<div class="w3-col m3">';
echo '<div class="w3-card w3-round w3-white">';
echo '<div class="w3-container">';
echo "<h4 class='w3-center'>".$row["name"].  "</h4>";
echo "<p class='w3-center'><img src='avatar3.png' class='w3-circle' style='height:75px;width:75px' alt='Avatar'></p>";
//echo "<hr>";

echo "<p align='center'>RollNo:".$row["rollno"]. " </p>";
echo "<p align='center'>Hours Worked:".$row["hoursworked"]. "</p>";
echo "<p align='center'>Contact No:".$row["contactno"]. "</p>";
echo "<p align='center'>Email:<br>".$row["email"]."</p>";
echo '</div>';
echo '</div>';
echo '</div>';
//echo '<br>';
//echo '<br>';

 }
echo '</div>';
} else {
    echo "RECORD NOT FOUND";
    exit;
}


    
$conn->close();




?>

</body>
</html>
