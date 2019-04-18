<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}



</style>
</head>

<body>

<?php



$email=$_POST['emailval'];
$name=$_POST['nameval'];

$servername = "localhost";
$username = "root";
$password = "time.org";
$dbname = "seproject";

// Create $connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT Username,Name FROM Department where Username='$email'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) 
{
    $_SESSION['name'] = $row["Name"];
    header('Location: departmenthomepage.php'); 
} 

$sql1 = "SELECT username,rollno FROM Student where username='$email'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) 
{
    $row = $result1->fetch_assoc();
    $_SESSION['rollno'] = $row["rollno"];
    header('Location: studenthomepage.php'); 

}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<button type="submit" name="dept" value="dept" class="button button2"> SIGN UP AS DEPARTMENT </button>
        <button type="submit" name="stu" value="stu" class="button button2"> SIGN UP AS STUDENT </button>
    </form>

<?php

if (isset($_POST['dept'])) {
    $_SESSION['dname'] = $name;
    $_SESSION['demail'] = $email;
    header('Location: departmentsignup.php'); 
}

if (isset($_POST['stu'])) {
    $_SESSION['sname'] = $name;
    $_SESSION['semail'] = $email;
    header('Location: studentsignup.php'); 
}

?>

</body>
</html>
