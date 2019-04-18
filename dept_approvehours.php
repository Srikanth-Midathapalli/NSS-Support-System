<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>APPROVE HOURS</title>
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

.mainbox {
    float: right;
    background-color: green;
    width: 50%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 300px; 
    box-shadow: 5px 6px 7px;
    padding-left: 80px;
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

.workbox {
    float: right;
    background-color: green;
    width: 60%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}

</style>

</head>
<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a href="departmenthomepage.php">Home</a>
  <a href="dept_postwork.php">Post Work</a>
  <a href="dept_approvework.php">Approve Work</a>
  <a class="active" href="dept_approvehours.php">Approve Hours</a>
  <a href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h2>Approve Hours</h2>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "seproject";

// Create $connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error."This website is down!");
} 

$sql = "SELECT Name,Email,ContactNumber,ContactPerson FROM Department where Name='CSED'";
$result = $conn->query($sql);
      
        
    
if ($result->num_rows > 0) 
{
    // output data of each row
    echo "<br><br>";
    while($row = $result->fetch_assoc())
	{
		echo "<div class='w3-col m3'>";
		echo "<div class='w3-card w3-round w3-white'>";
		echo "<div class='w3-container'>";
		echo "<h4 class='w3-center'> " .$row["Name"]. "</h4>";
		echo "<p class='w3-center'><img src='bc2.jpg' class='w3-circle' style='height:106px;width:106px' alt='Avatar'></p>";
		echo '<hr>';
		echo "<p>Contact Person: " .$row["ContactPerson"]. "</p>";
		echo "<p>Contact No: " .$row["ContactNumber"]. "</p>";

		echo "<p>Email: " .$row["Email"]. "</p>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<br>";
	}
} 
else 
{
	echo "RECORD NOT FOUND";
    exit;
}



$result = $conn->query("SELECT DISTINCT w.WorkID, w.Name, w.Description, w.Duration, w.DeadlineToApply 
						FROM Work AS w, WorkProgressInfo AS wpi 
						WHERE wpi.Status = 'ONGOING' AND wpi.WorkID = w.WorkID");

if ($result->num_rows > 0) 
{ 
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {

	    // output data of each row
	    echo '<div class="workbox">';
	    echo "<center><H2> " .$row["Name"]. "</H2><br>";
	    echo "<p><font size=5> " .$row["Description"]. "</font></p><br>";
	    echo "<font size=5>Duration: " .$row["Duration"]. " hours</font><br>";
	 	echo "<font size=5>" .$row["DeadlineToApply"]. " </font><br>";
?>
	 	<br><br>
		<form action="dept_approve_select_students_hours.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row["WorkID"];?>">
			<input type="submit" name="submit" value="Award Hours">
		</form>

<?php
       echo '</div>';
 	}
}



$conn->close();
?>

</body>
</html>


 

