<!DOCTYPE HTML>
<html>
<head>
<title>
OFFERED WORKS
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
  <a href="viewworkstatus.php">Work Status</a>
  <a class="active" href="offeredworks.php">Offered Works</a>
  <a href="manageinterests.php">Manage Interests</a>
  <a href="student_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h2>Offered Works</h2>
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

if (isset($_POST['reject'])) {
    $ID = $_POST['workid'];
    $stmt = $conn->prepare("DELETE FROM PrivateWork WHERE RollNo='B150878CS' AND WorkID=".$ID."");
    $stmt->execute();
    $stmt->close();
    echo "ALL THE BEST FOR FUTURE ENDEAVOURS";
}

if (isset($_POST['submit'])) {
    $ID = $_POST['workid'];

    $stmt = $conn->prepare("DELETE FROM PrivateWork WHERE RollNo='B150878CS' AND WorkID=".$ID."");
    $stmt->execute();
    $stmt->close();

    $sql5 = "SELECT DeptName FROM Work WHERE WorkID =".$ID."";
    $result5 = $conn->query($sql5);
    $row5 = $result5->fetch_assoc();
    $deptname = $row5["DeptName"];
    $rollno = "B150878CS";
    $status = "ONGOING";

    $stmt = $conn->prepare("INSERT INTO WorkProgressInfo (WorkID, RollNo, DeptName, Status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $ID, $rollno, $deptname, $status);
    $stmt->execute();
    $stmt->close();
    echo "YOU CAN START YOUR WORK NOW";
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




$sql = "SELECT WorkID FROM PrivateWork where RollNo='B150878CS'" ;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){

    $sql2 = "SELECT Name,DeptName,Description,Duration,DeadlineToApply FROM Work WHERE WorkID=" .$row["WorkID"]. "";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    
    $deadline = $row2["DeadlineToApply"];
    $todays_date = date("Y-m-d");

    $today = strtotime($todays_date);
    $expiration_date = strtotime($deadline);

    if ($expiration_date < $today) {
     continue; 
    }

    echo '<div class="workbox">';
    echo "<center><H2> " .$row2["Name"]. "</H2><br>";
    echo "<font size=5><U>" .$row2["DeptName"]. " DEPARTMENT</U></font><br>";
    echo "<p><font size=5> " .$row2["Description"]. "</font></p><br>";
    echo "<font size=5>Duration: " .$row2["Duration"]. " hours</font><br>";
    echo "<p><font size=5> Interest Tags: </font>";

    $sql1 = "SELECT * FROM WorkInterests WHERE WorkID=" .$row["WorkID"]. "";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if ($row1["I1"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I1'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>&nbsp&nbsp";
    }
    
    if ($row1["I2"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I2'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I3"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I3'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }
  
    if ($row1["I4"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I4'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I5"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I5'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }
    
    if ($row1["I6"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I6'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I7"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I7'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I8"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I8'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I9"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I9'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I10"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I10'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I11"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I11'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I12"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I12'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I13"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I13'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I14"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I14'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I15"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I15'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I16"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I16'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I17"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I17'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I18"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I18'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I19"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I19'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }

    if ($row1["I20"]==1){
    $sql3 = "SELECT NameOfInterest FROM InterestMapping where MappingNumber='I20'" ;
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    echo "<font size=5 color='yellow'>" .$row3["NameOfInterest"]. "</font>,";
    }
    echo "<br></p>";
    echo "<font size=5>Deadline: " .$row2["DeadlineToApply"]. " </font><br>";
    echo "<br><br>";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<input type="hidden" name="workid" value="<?php echo $row["WorkID"];?>">
	<button type="submit" name="submit" value="submit"> Accept </button>
        <button type="submit" name="reject" value="reject"> Reject </button>
    </form>
    <?php
    echo '</div>';
    echo "<br><br>";
    }
    
} else {
    echo "NO OFFERED WORKS";
    exit;
}

 
$conn->close();




?>

</body>
</html>
