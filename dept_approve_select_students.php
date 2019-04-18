<!DOCTYPE html>
<html>
<head>
	<title>SELECT STUDENTS</title>

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
    width: 55%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 140px; 
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

</style>
</head>
<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a href="departmenthomepage.php">Home</a>
  <a href="dept_postwork.php">Post Work</a>
  <a class="active" href="dept_approvework.php">Approve Work</a>
  <a href="dept_approvehours.php">Approve Hours</a>
  <a href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Details</a>
</div>
<div style="text-align: center;">
  <h2>Approve Work</h2>
</div>





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
} else {
    echo "RECORD NOT FOUND";
    exit;
}

?>



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


if (isset($_POST['approve']))
{
    $workid = $_POST["id"];
    $sql = "SELECT wpi.RollNo 
            FROM Student AS s, WorkProgressInfo AS wpi 
            WHERE wpi.WorkID = '$workid' AND wpi.Status = 'PENDING' AND wpi.RollNo = s.rollno";

    $result = $conn->query($sql);

	if(!empty($_POST['students'])) 
	{
		
        while($row = $result->fetch_assoc()) 
		{
			$flag=0;
           	foreach($_POST['students'] as $rollno) 
    		{
    			if ($rollno == $row["RollNo"])
    			{
           			$sql = "UPDATE WorkProgressInfo SET Status = 'ONGOING' WHERE RollNo = '$rollno' AND WorkID = '$workid'";
           			$conn->query($sql);
           			$flag = 1;
           			break;
    			}
        	}
        	if ($flag == 0)
        	{
        		$roll = $row["RollNo"];
        		$sql = "UPDATE WorkProgressInfo SET Status = 'REJECTED' WHERE RollNo = '$roll' AND WorkID = '$workid'";
        		$conn->query($sql);
        	}	
        }
    }
    else   //reject all
    {
        while($row = $result->fetch_assoc()) 
        {
          $rollno = $row["RollNo"];
          $sql = "UPDATE WorkProgressInfo SET Status = 'REJECTED' WHERE RollNo = '$rollno'";
                $conn->query($sql);
        }
    }
    header('Location: dept_approvework.php');
} 


else
{
	$workid = $_POST["id"];
	$sql = "SELECT s.name, wpi.RollNo 
			FROM Student AS s, WorkProgressInfo AS wpi 
			WHERE wpi.WorkID = '$workid' AND wpi.Status = 'PENDING' AND wpi.RollNo = s.rollno";

	$result = $conn->query($sql);

	?>
    <div class="mainbox">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	<?php
	while($row = $result->fetch_assoc()) 
	{
               echo  '<H3><input type="checkbox" name="students[]" value="'.$row["RollNo"].'">'.$row["name"];
	    echo  '&nbsp&nbsp'.$row["RollNo"].'</H3>';
		
	    echo '<br>';
	}
	?>
	<br><br>
	<p><i>All unselected students will be rejected. No more students will be able to apply to this particular work after submitting.</i></p>
	<br>
	<input type="hidden" name="id" value="<?php echo $workid;?>">
	<input type="submit" name="approve" value="SUBMIT">
	</form>
    </div>

<?php
}
$conn->close();
?>
</body>
</html>
