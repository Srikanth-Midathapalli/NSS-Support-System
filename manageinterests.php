
<!DOCTYPE HTML>
<html>
<head>
<title>
MANAGE INTERESTS
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
    border: 3px solid black;
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

.container

{

width:1200px;

height:1100px;

border:2px groove black;

margin-left: 500px; 
}

.tempLeft

{

width:500px;

height:0px;

float:center;

border:2px solid red;

padding-left: 80px;

padding-right: 40px;

}

.tempRight

{

width:500px;

height:0px;

float:right;

border:2px solid blue;

padding-left: 100px;
    
padding-right: 60px;

}

</style>
</head>


<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a href="studenthomepage.php">Home</a>
  <a href="suggestedwork.php">Suggested Works</a>
  <a href="viewworkstatus.php">Work Status</a>
  <a href="offeredworks.php">Offered Works</a>
  <a class="active" href="manageinterests.php">Manage Interests</a>
  <a href="student_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h1>Manage Interests</h1>
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

if (isset($_POST['RPAINTING'])) {
    $sql5 = "UPDATE StudentInterests set I1=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RBOOKS'])) {
    $sql5 = "UPDATE StudentInterests set I2=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RCLEANING'])) {
    $sql5 = "UPDATE StudentInterests set I3=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RGARDENING'])) {
    $sql5 = "UPDATE StudentInterests set I4=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RTEACHING'])) {
    $sql5 = "UPDATE StudentInterests set I5=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RCODING'])) {
    $sql5 = "UPDATE StudentInterests set I6=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RDESIGNING'])) {
    $sql5 = "UPDATE StudentInterests set I7=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RHARDWARE'])) {
    $sql5 = "UPDATE StudentInterests set I8=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RNGO'])) {
    $sql5 = "UPDATE StudentInterests set I9=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RORGANISING'])) {
    $sql5 = "UPDATE StudentInterests set I10=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RCOUNSELLING'])) {
    $sql5 = "UPDATE StudentInterests set I11=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RMENTORING'])) {
    $sql5 = "UPDATE StudentInterests set I12=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RSPORTS'])) {
    $sql5 = "UPDATE StudentInterests set I13=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RRENOVATION'])) {
    $sql5 = "UPDATE StudentInterests set I14=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RDONATING'])) {
    $sql5 = "UPDATE StudentInterests set I15=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RHEALTH'])) {
    $sql5 = "UPDATE StudentInterests set I16=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RMANAGEMENT'])) {
    $sql5 = "UPDATE StudentInterests set I17=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RRECYCLING'])) {
    $sql5 = "UPDATE StudentInterests set I18=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RSURVEYING'])) {
    $sql5 = "UPDATE StudentInterests set I19=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['RMANUAL'])) {
    $sql5 = "UPDATE StudentInterests set I20=0 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

//Add buttons part


if (isset($_POST['APAINTING'])) {
    $sql5 = "UPDATE StudentInterests set I1=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ABOOKS'])) {
    $sql5 = "UPDATE StudentInterests set I2=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ACLEANING'])) {
    $sql5 = "UPDATE StudentInterests set I3=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AGARDENING'])) {
    $sql5 = "UPDATE StudentInterests set I4=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ATEACHING'])) {
    $sql5 = "UPDATE StudentInterests set I5=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ACODING'])) {
    $sql5 = "UPDATE StudentInterests set I6=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ADESIGNING'])) {
    $sql5 = "UPDATE StudentInterests set I7=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AHARDWARE'])) {
    $sql5 = "UPDATE StudentInterests set I8=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ANGO'])) {
    $sql5 = "UPDATE StudentInterests set I9=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AORGANISING'])) {
    $sql5 = "UPDATE StudentInterests set I10=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ACOUNSELLING'])) {
    $sql5 = "UPDATE StudentInterests set I11=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AMENTORING'])) {
    $sql5 = "UPDATE StudentInterests set I12=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ASPORTS'])) {
    $sql5 = "UPDATE StudentInterests set I13=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ARENOVATION'])) {
    $sql5 = "UPDATE StudentInterests set I14=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ADONATING'])) {
    $sql5 = "UPDATE StudentInterests set I15=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AHEALTH'])) {
    $sql5 = "UPDATE StudentInterests set I16=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AMANAGEMENT'])) {
    $sql5 = "UPDATE StudentInterests set I17=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ARECYCLING'])) {
    $sql5 = "UPDATE StudentInterests set I18=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['ASURVEYING'])) {
    $sql5 = "UPDATE StudentInterests set I19=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
}

if (isset($_POST['AMANUAL'])) {
    $sql5 = "UPDATE StudentInterests set I20=1 WHERE RollNo='B150878CS'";
    $result5 = $conn->query($sql5);
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

?>

<!-- REMOVE INTERESTS PART-->

<?php

$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "seproject";

// Create $connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM StudentInterests WHERE RollNo='B150878CS' ";
$result = $conn->query($sql);
      

        
          
            
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='container'>";
    echo "<div class='tempLeft'>";
    
    echo "<p><h2>Remove Interests</H2></p>";
    echo "<div class='btn-group'>";
    if ($row["I1"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RPAINTING" value="RPAINTING" class="button"> PAINTING </button>
    </form>
    <?php
    }
    if ($row["I2"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RBOOKS" value="RBOOKS" class="button"> BOOKS </button>
    </form>
    <?php
    }
    if ($row["I3"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RCLEANING" value="RCLEANING" class="button"> CLEANING </button>
    </form>
    <?php
    }
    if ($row["I4"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RGARDENING" value="RGARDENING" class="button"> GARDENING </button>
    </form>
    <?php    

    }
    if ($row["I5"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RTEACHING" value="RTEACHING" class="button"> TEACHING </button>
    </form>
    <?php
    }
    
    if ($row["I6"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RCODING" value="RCODING" class="button"> CODING </button>
    </form>
    <?php
    }
    if ($row["I7"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RDESIGNING" value="RDESIGNING" class="button"> DESIGNING </button>
    </form>
    <?php
    }
    if ($row["I8"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RHARDWARE" value="RHARDWARE" class="button"> HARDWARE </button>
    </form>
    <?php
    }
    if ($row["I9"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RNGO" value="RNGO" class="button"> NGO WORK </button>
    </form>
    <?php
    }
    if ($row["I10"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RORGANISING" value="RORGANISING" class="button"> ORGANISING </button>
    </form>
    <?php
    }
    if ($row["I11"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RCOUNSELLING" value="RCOUNSELLING" class="button"> COUNSELLING </button>
    </form>
    <?php
    }
    if ($row["I12"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RMENTORING" value="RMENTORING" class="button"> MENTORING </button>
    </form>
    <?php
    }

    if ($row["I13"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RSPORTS" value="RSPORTS" class="button"> SPORTS </button>
    </form>
    <?php
    }
    if ($row["I14"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RRENOVATION" value="RRENOVATION" class="button"> RENOVATION </button>
    </form>
    <?php
    }
    if ($row["I15"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RDONATING" value="RDONATING" class="button"> DONATING BLOOD </button>
    </form>
    <?php
    }
    if ($row["I16"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RHEALTH" value="RHEALTH" class="button"> HEALTH & FITNESS </button>
    </form>
    <?php
    }
    if ($row["I17"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RMANAGEMENT" value="RMANAGEMENT" class="button"> MANAGEMENT </button>
    </form>
    <?php
    }
    if ($row["I18"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RRECYCLING" value="RRECYCLING" class="button"> RECYCLING </button>
    </form>
    <?php
    }
    if ($row["I19"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RSURVEYING" value="RSURVEYING" class="button"> SURVEYING </button>
    </form>
    <?php
    }
    if ($row["I20"]==1){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="RMANUAL" value="RMANUAL" class="button"> MANUAL WORK </button>
    </form>
    <?php
    }
    
    
    
    

}
echo "</div>";
echo "</div>";
}
$conn->close();



?>

<!-- ADD INTERESTS PART-->

<?php

$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "seproject";

// Create $connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM StudentInterests WHERE RollNo='B150878CS' ";
$result = $conn->query($sql);
      

        
          
            
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='tempRight'>";
    
    echo "<p><h2>Add Interests</H2></p>";
    echo "<div class='btn-group1'>";
    if ($row["I1"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="APAINTING" value="APAINTING" class="button"> PAINTING </button>
    </form>
    <?php
    }
    if ($row["I2"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ABOOKS" value="ABOOKS" class="button"> BOOKS </button>
    </form>
    <?php
    }
    if ($row["I3"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ACLEANING" value="ACLEANING" class="button"> CLEANING </button>
    </form>
    <?php
    }
    if ($row["I4"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AGARDENING" value="AGARDENING" class="button"> GARDENING </button>
    </form>
    <?php    

    }
    if ($row["I5"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ATEACHING" value="ATEACHING" class="button"> TEACHING </button>
    </form>
    <?php
    }
    
    if ($row["I6"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ACODING" value="ACODING" class="button"> CODING </button>
    </form>
    <?php
    }
    if ($row["I7"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ADESIGNING" value="ADESIGNING" class="button"> DESIGNING </button>
    </form>
    <?php
    }
    if ($row["I8"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AHARDWARE" value="AHARDWARE" class="button"> HARDWARE </button>
    </form>
    <?php
    }
    if ($row["I9"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ANGO" value="ANGO" class="button"> NGO WORK </button>
    </form>
    <?php
    }
    if ($row["I10"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AORGANISING" value="AORGANISING" class="button"> ORGANISING </button>
    </form>
    <?php
    }
    if ($row["I11"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ACOUNSELLING" value="ACOUNSELLING" class="button"> COUNSELLING </button>
    </form>
    <?php
    }
    if ($row["I12"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AMENTORING" value="AMENTORING" class="button"> MENTORING </button>
    </form>
    <?php
    }

    if ($row["I13"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ASPORTS" value="ASPORTS" class="button"> SPORTS </button>
    </form>
    <?php
    }
    if ($row["I14"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ARENOVATION" value="ARENOVATION" class="button"> RENOVATION </button>
    </form>
    <?php
    }
    if ($row["I15"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ADONATING" value="ADONATING" class="button"> DONATING BLOOD </button>
    </form>
    <?php
    }
    if ($row["I16"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AHEALTH" value="AHEALTH" class="button"> HEALTH & FITNESS </button>
    </form>
    <?php
    }
    if ($row["I17"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AMANAGEMENT" value="AMANAGEMENT" class="button"> MANAGEMENT </button>
    </form>
    <?php
    }
    if ($row["I18"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ARECYCLING" value="ARECYCLING" class="button"> RECYCLING </button>
    </form>
    <?php
    }
    if ($row["I19"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="ASURVEYING" value="ASURVEYING" class="button"> SURVEYING </button>
    </form>
    <?php
    }
    if ($row["I20"]==0){
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="AMANUAL" value="AMANUAL" class="button"> MANUAL WORK </button>
    </form>
    <?php
    }
    
    
    
    

}
echo "</div>";
echo "</div>";
echo "</div>";

}
$conn->close();



?>


</body>
</html>


 

