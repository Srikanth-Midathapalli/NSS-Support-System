<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
    <title>SELECT STUDENTS</title>
    <script type="text/javascript" src="jquery-latest.js"></script>

    <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<style type="text/css">
body {margin:0;}

<!--
#main {
    max-width: 800px;
    margin: 0 auto;
}
-->

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
  <a href="departmenthomepage.php">Home</a>
  <a class="active" href="dept_postwork.php">Post Work</a>
  <a href="dept_approvework.php">Approve Work</a>
  <a href="dept_approvehours.php">Approve Hours</a>
  <a href="dept_studentdetails.php">Student Details</a>
  <a href="dept_editdetails.php">Edit Details</a>
</div>

<div style="text-align: center;">
  <h2>Post Work</h2>
</div>
    




<div id="main">
<h1>SELECT STUDENTS</h1>
<div class="my-form">
<div class="workbox">           
<form role="form" method="post">
    <p class="text-box">
        <label for="box1">ROLLNO <span class="box-number">1</span></label>
        <input type="text" name="boxes[]" value="" id="box1" />
        <a class="add-box" href="#">Add + </a>
    </p>
    <p><input type="submit" value="Submit" /></p>
</form>
</div>
        
        </div>
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('.my-form .add-box').click(function(){
            var n = $('.text-box').length + 1;
            if( 15 < n ) {
                alert('Stop it!');
                return false;
            }
            var box_html = $('<p class="text-box"><label for="box' + n + '">ROLLNO <span class="box-number">' + n + '</span></label> <input type="text" name="boxes[]" value="" id="box' + n + '" /> <a href="#" class="remove-box">Remove</a></p>');
            box_html.hide();
            $('.my-form p.text-box:last').after(box_html);
            box_html.fadeIn('slow');
            return false;
        });
        $('.my-form').on('click', '.remove-box', function(){
            $(this).parent().css( 'background-color', '#FF6C6C' );
            $(this).parent().fadeOut("slow", function() {
                $(this).remove();
                $('.box-number').each(function(index){
                    $(this).text( index + 1 );
                });
            });
            return false;
        });
    });
    </script>
    










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
    die("Connection failed: " . $conn->connect_error);
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
    

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $con = new mysqli ("localhost", "root", "time.org", "seproject");
    if ($con->connect_error){
    die("Cannot connect: " .$con->connect_error);
    }

    $work = $_SESSION['WorkID'];
    //echo $name;

    foreach($_POST['boxes'] as $textbox)
    {
        $training= $textbox;
        //echo $training;
        $AddQuery ="INSERT INTO PrivateWork (RollNo, WorkID) VALUES ('$training', '$work')";
        $con->query($AddQuery);

    }
    header('Location: dept_postwork.php');
}
?>
    </body>
    </html>


