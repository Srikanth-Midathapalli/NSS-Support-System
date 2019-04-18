<!DOCTYPE HTML>
<html>
<head>
<title>
WORK STATUS
</title>

<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">

<style>
body {margin:0;}

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
    width: 60%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}

.mainbox {
    float: right;
    background-color: green;
    width: 30%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 650px; 
    box-shadow: 5px 6px 7px;
    padding-left: 120px;
    padding-right: 80px;
}

.mainbox2 {
    float: right;
    background-color: green;
    width: 25%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 40px; 
    box-shadow: 5px 6px 7px;
    padding-left: 120px;
    padding-right: 80px;
}


.leftbox {
    float: left;
    background-color: red;
    width: 15%;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}

.btn-group .button {
    background-color: red; /* Green */
    border: 3px solid green;
    color: white;
    padding: 7px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 300px;
    display: block;
}

.btn-group .button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
    background-color: #3e8e41;
}

.btn-group1 .button {
    background-color: blue; /* Green */
    border: 3px solid green;
    color: white;
    padding: 7px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 300px;
    display: block;
}

.btn-group1 .button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

.btn-group1 .button:hover {
    background-color: #3e8e41;
}


.button:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

</style>
</head>

<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a href="studenthomepage.php">Home</a>
  <a href="suggestedwork.php">Suggested Works</a>
  <a class="active" href="viewworkstatus.php">Work Status</a>
  <a href="offeredworks.php">Offered Works</a>
  <a href="manageinterests.php">Manage Interests</a>
  <a href="student_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h2>View Work Status</h2>
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

$sql = "SELECT name,rollno,hoursworked,contactno,email FROM Student where rollno='B150878CS'";
$result = $conn->query($sql);
      
        
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='w3-col m3'>";
    echo "<div class='w3-card w3-round w3-white'>";
    echo "<div class='w3-container'>";
    echo "<h4 class='w3-center'> " .$row["name"]. "</h4>";
    echo "<p class='w3-center'><img src='avatar3.png' class='w3-circle' style='height:106px;width:106px' alt='Avatar'></p>";
    echo '<hr>';
    echo "<p>Roll No: " .$row["rollno"]. "</p>";
    echo "<p>Hours Worked: " .$row["hoursworked"]. " Hours</p>";
    echo "<p>Contact No: " .$row["contactno"]. "</p>";
    echo "<p>Email: " .$row["email"]. "</p>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}


$sql = "SELECT * FROM StudentInterests WHERE RollNo='B150878CS' ";
$result = $conn->query($sql);
      

        
          
            
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='w3-card w3-round w3-white w3-hide-small'>";
    echo "<div class='w3-container'>";
    echo "<p>Interests</p>";
    echo "<p>";
    if ($row["I1"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I1'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I2"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I2'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I3"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I3'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I4"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I4'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I5"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I5'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    
    if ($row["I6"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I6'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I7"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I7'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I8"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I8'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I9"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I9'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I10"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I10'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I11"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I11'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I12"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I12'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I13"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I13'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I14"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I14'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I15"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I15'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I16"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I16'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I17"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I17'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I18"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I18'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I19"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I19'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    if ($row["I20"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I20'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<span class='w3-tag w3-small w3-theme-d5'>" .$row3["NameOfInterest"]. "</span><br>";
    }
    echo "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<br><br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}




$sql = "SELECT WP.WorkID,Status,Name,WP.DeptName,Description,Duration FROM WorkProgressInfo WP,Work W where rollno='B150878CS' AND WP.WorkID=W.WorkID" ;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    echo '<div class="workbox">';
    echo "<center><H2> " .$row["Name"]. "</H2><br>";
    echo "<U><font size=5>" .$row["DeptName"]. " DEPARTMENT</font></U><br>";
    echo "<p><font size=5> " .$row["Description"]. "</font></p><br>";
    echo "<font size=5>Duration: " .$row["Duration"]. " Hours</font><br>";
    echo "<p><font size=5>Status: <font size=5 color='yellow'>" .$row["Status"]. "</font></font></p><br>";
    echo '</div>';
    echo "<br><br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}

 
$conn->close();




?>

</body>
</html>
