<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>
POST WORKS
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

.mainbox {
    float: right;
    background-color: green;
    width: 60%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 90px; 
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

td
{
  padding: 7px;
}

</style>
</head>
<body>

<!-- Top navigation bar-->
<div class="topnav">
  <a href="departmenthomepage.php">Home</a>
  <a class="active" href="dept_postwork.php">Post Work</a>
  <a href="dept_approvework.php">Approve Work</a>
  <a href="dept_approvehours.php">Approve Hours</a>
  <a href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Information</a>
  <a href="dept_modifywork.php">Modify Work</a>
</div>

<div style="text-align: center;">
  <h2>Post Work</h2>
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
<div class="mainbox">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<H3>
<table>
<tr>
  <td>NAME:</td> 
  <td><input type="text" name="work_name"></td>
</tr>
<tr>
  <td>DURATION IN HOURS:</td> 
  <td><input type="number" name="duration" min="0"> </td>
</tr>
<tr>
  <td>DESCRIPTION:</td> 
  <td><input type="text" name="description" placeholder="Include StartTime,EndTime And Location" style="width: 500px; padding: 2px; border: 1px solid black"/> </td>
</tr>
<tr>
  <td>DEADLINE TO APPLY:</td> 
  <td><input type="date" name="deadline"> </td>
</tr>
<tr>
  <td colspan="2"><center> SELECT AS MANY AS POSSIBLE</center></td>
</tr>
<tr>
  <td><center>INTERESTS:</center></td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Painting"> Painting</td>
  <td><input type="checkbox" name="interests[]" value="Books"> Books</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Gardening"> Gardening</td>
  <td><input type="checkbox" name="interests[]" value="Teaching"> Teaching </td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Coding"> Coding</td>
  <td><input type="checkbox" name="interests[]" value="Designing"> Designing</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Hardware"> Hardware </td>
  <td><input type="checkbox" name="interests[]" value="NGO Work"> NGO Work</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Organising"> Organising</td>
  <td><input type="checkbox" name="interests[]" value="Counselling"> Counselling</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Mentoring"> Mentoring</td>
  <td><input type="checkbox" name="interests[]" value="Sports"> Sports</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Renovation"> Renovation</td>
  <td><input type="checkbox" name="interests[]" value="Donating Blood"> Donating Blood</td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Health & Fitness"> Health & Fitness</td>
  <td><input type="checkbox" name="interests[]" value="Management"> Management</td>
</tr> 
<tr>
  <td><input type="checkbox" name="interests[]" value="Recycling"> Recycling</td>
  <td><input type="checkbox" name="interests[]" value="Surveying"> Surveying  </td>
</tr>
<tr>
  <td><input type="checkbox" name="interests[]" value="Manual Work"> Manual Work</td>
  <td><input type="checkbox" name="interests[]" value="Cleaning"> Cleaning </td>
</tr>
<tr>
  <td>TYPE:</td>
</tr>
<tr>
  <td><input type="radio" value="Private" name="type">Private</td>
  <td><input type="radio" value="Public" name="type">Public</td>
</tr>
</table>
</H3>

<input type="submit">
</form>
</div>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
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

function IsChecked($chkname,$value)
{
  if(!empty($_POST[$chkname]))
  {
    foreach($_POST[$chkname] as $chkval)
    {
      if($chkval == $value)
        return true;
    }
  }
  return false;
}


// set parameters and execute
$name=$_POST["work_name"];
$duration=$_POST["duration"];
$description=$_POST["description"];
$interests=$_POST["interests"];
$deadline=$_POST["deadline"];
$type=$_POST["type"];
$deptname = "CSED";
$conn->query("INSERT INTO Work (Name, DeptName, Description, Duration, Type, DeadlineToApply) VALUES ('$name', '$deptname', '$description', '$duration', '$type', '$deadline')");
$result = $conn->query("SELECT COUNT(*) FROM Work");
$current=0;
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {

    // output data of each row
    
      $current= $row["COUNT(*)"]; 
    //$row["COUNT(*)"] = $row["COUNT(*)"];
       // echo "WorkID " .$row["COUNT(*)"]. "<br>";
    $conn->query("INSERT INTO WorkInterests (WorkID) VALUES ('$current')");
if(IsChecked('interests','Painting')){
$conn->query("UPDATE WorkInterests SET I1 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Books')){
$conn->query("UPDATE WorkInterests SET I2 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Cleaning')){
$conn->query("UPDATE WorkInterests SET I3 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Gardening')){
$conn->query("UPDATE WorkInterests SET I4 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Teaching')){
$conn->query("UPDATE WorkInterests SET I5 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Coding')){
$conn->query("UPDATE WorkInterests SET I6 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Designing')){
$conn->query("UPDATE WorkInterests SET I7 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Hardware')){
$conn->query("UPDATE WorkInterests SET I8 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','NGO Work')){
$conn->query("UPDATE WorkInterests SET I9 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Organising')){
$conn->query("UPDATE WorkInterests SET I10 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Counselling')){
$conn->query("UPDATE WorkInterests SET I11 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Mentoring')){
$conn->query("UPDATE WorkInterests SET I12 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Sports')){
$conn->query("UPDATE WorkInterests SET I13 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Renovation')){
$conn->query("UPDATE WorkInterests SET I14 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Donating Blood')){
$conn->query("UPDATE WorkInterests SET I15 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Health & Fitness')){
$conn->query("UPDATE WorkInterests SET I16 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Management')){
$conn->query("UPDATE WorkInterests SET I17 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Recycling')){
$conn->query("UPDATE WorkInterests SET I18 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Surveying')){
$conn->query("UPDATE WorkInterests SET I19 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
if(IsChecked('interests','Manual Work')){
$conn->query("UPDATE WorkInterests SET I20 = 1 WHERE WorkID = ".$row["COUNT(*)"]."");
}
 }
}   

echo "Works Posted<br>" ;


if($type == "Private") {
$_SESSION['WorkID'] = $current;
header('Location: dept_post_work_select_students.php');
}

$conn->close();


}
?>

</body>
</html>


 

