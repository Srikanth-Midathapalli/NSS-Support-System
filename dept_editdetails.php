<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>
EDIT INFO
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
    padding: 15px;
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
  <a href="dept_studentdetails.php">Student Details</a>
  <a class="active" href="dept_editdetails.php">Edit Details</a> 
  
</div>

<div style="text-align: center;">
  <h2>Edit Personal Information</h2>
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



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $cno=$_POST["contactno"];
    $cperson=$_POST["contactperson"];
    $conn->query("UPDATE Department SET Name='$name', ContactNumber='$cno', ContactPerson='$cperson' 
                  WHERE Email='$email'");
    header('Location: departmenthomepage.php');
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
} 
else 
{
    echo "RECORD NOT FOUND";
    exit;
}

$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
?>

<div class="mainbox">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<H3>
<table>
<tr><td>NAME:</td> <td><input type="text" name="name" value="<?php echo $row['Name']?>"> </td></tr>
<tr><td>CONTACT PERSON:</td> <td> <input type="text" name="contactperson" value="<?php echo $row['ContactPerson']?>"></td></tr>
<tr><td>CONTACT NO:</td> <td> <input type="text" name="contactno" value="<?php echo $row['ContactNumber']?>"> </td></tr>
<tr><td>EMAIL:</td> <td> <p> <?php echo $row['Email'];?> </p><input type="hidden" name="email" value="<?php echo $row['Email']?>"></td></tr>
</table>
</H3>
    <center><input type="submit" name="submit" value="Submit"></center>
</form>
</div>

<?php
}
$conn->close();
?>


</body>
</html>
