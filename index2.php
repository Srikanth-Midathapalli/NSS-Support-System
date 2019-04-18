<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
    <title>SELECT STUDENTS</title>
    <script type="text/javascript" src="jquery-latest.js"></script>
    <style type="text/css">
    <!--
    #main {
        max-width: 800px;
        margin: 0 auto;
    }
    -->
    </style>
    </head>
    <body>
    <div id="main">
        <h1>SELECT STUDENTS</h1>
        <div class="my-form">
       <center>           
 <form role="form" method="post">
      
          <fieldset>
         <legend> STUDENTS </legend>
                 
                <p class="text-box">
                    <label for="box1">ROLLNO <span class="box-number">1</span></label>
                    <input type="text" name="boxes[]" value="" id="box1" />
                    <a class="add-box" href="#">Add + </a>
                </p>
                <p><input type="submit" value="Submit" /></p>
          </fieldset>
            </form>
</center>
        
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
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $con = new mysqli ("localhost", "root", "time.org", "seproject");
    if ($con->connect_error){
    die("Cannot connect: " .$con->connect_error);
    }

    $work = $_SESSION['WorkID'];
    //echo $name;

//please assume boxes = training
    foreach($_POST['boxes'] as $textbox){
        $training= $textbox;
        //echo $training;
        $AddQuery ="INSERT INTO PrivateWork (RollNo, WorkID) VALUES ('$training', '$work')";
        $con->query($AddQuery);

    }
}
?>
    </body>
    </html>


