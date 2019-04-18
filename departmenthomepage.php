<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="font-awesome.min.css">
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

.leftbox {
    float: left;
    background-color: red;
    width: 15%;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}

</style>
</head>
<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a class="active" href="departmenthomepage.php">Home</a>
  <a href="dept_postwork.php">Post Work</a>
  <a href="dept_approvework.php">Approve Work</a>
  <a href="dept_approvehours.php">Approve Hours</a>
  <a href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h2>Department Homepage</h2>
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

if (isset($_POST['remove'])) 
{
    $workid = $_POST["id"];
    $conn->query("DELETE FROM Work WHERE WorkID = '$workid'");
}



$sql = "SELECT Name, ContactPerson, Email, ContactNumber FROM Department where Name='CSED'";
$result = $conn->query($sql);
      
        
    
if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc()){
    
    echo "<div class='w3-col m3'>";
    echo "<div class='w3-card w3-round w3-white'>";
    echo "<div class='w3-container'>";
    echo "<h4 class='w3-center'> " .$row["Name"]. "</h4>";
    echo "<p class='w3-center'><img src='bc2.jpg' class='w3-circle' style='height:106px;width:106px' alt='Avatar'></p>";
    echo '<hr>';
    echo "<p>Contact Person: " .$row["ContactPerson"]. "</p>";
    echo "<p>Email: " .$row["Email"]. "</p>";
    echo "<p>Contact No: " .$row["ContactNumber"]. "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
    }
} else {
    echo "RECORD NOT FOUND";
    exit;
}


$sql2 = "SELECT DISTINCT w.WorkID, w.Name,w.Description,w.Duration,w.Type,w.DeadlineToApply 
         FROM Work AS w, WorkProgressInfo AS wpi 
         WHERE w.DeptName = 'CSED'";
$result2 = $conn->query($sql2);

while ($row2 = $result2->fetch_assoc()) 
{
    //choosing the right status
    $wid = $row2["WorkID"];
    $result3 = $conn->query("SELECT DISTINCT wpi.Status FROM Work AS w, WorkProgressInfo AS wpi WHERE wpi.WorkID = '$wid'");
    $status = "";
    if ($result3->num_rows > 0)
    {
        while ($row3 = $result3->fetch_assoc())
        {
            if (strcmp($row3["Status"], "PENDING")==0 )   //public work -->pending
                $status = "Not Commenced";
            else if (strcmp($row3["Status"], "ONGOING")==0) //public work--> ongoing / rejected || private work --> at least one acceptance
            {
                $status = "Active";
                break;
            }
        }
    }
    if ($status=="")       //public work--> completed/all rejected || private work--> completed
    {
        $status = "Completed";
    }
    if ($result3->num_rows == 0)  //no entry in wpi--> public work-no appln || private work-no acc/rej
    {
       $status = "Not Commenced";
    }

    echo '<div class="workbox">';
    echo "<center><H2> " .$row2["Name"]. "</H2><br>";
    echo "<p><font size=5> " .$row2["Description"]. "</font></p><br>";
    echo "<font size=5>Duration: " .$row2["Duration"]. " hours</font><br>";
    echo "<font size=5>Type: " .$row2["Type"]. " </font><br>";
    echo "<font size=5>Deadline To Apply: " .$row2["DeadlineToApply"]. " </font><br>";
    echo "<font size=5>Status: " .$status. " </font><br>";
    echo "<br><br>";
    if ($status == "Completed")
    {
?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
          <input type="hidden" name="id" value="<?php echo $wid;?>">
          <input type="submit" name="remove" value="Remove">
      </form>
<?php
    }
    echo "</div>";
}


$conn->close();

?>

</body>
</html>
