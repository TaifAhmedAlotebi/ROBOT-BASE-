<?php
$server ='localhost';
$user='root';
$db='RobotBase';
$db_port = 8080;
$connection = new mysqli_connect($server,$root,$db,8080);
$sql="select from'Directions'";
if(isset($_POST['submit'])){
 if (!empty ($_POST['FORWARD']) && !empty($_POST['LEFT'])&& !empty($_POST['STOP']&& !empty($_POST['RIGHT']))&& !empty($_POST['BACKWARD'])){
    $button1 = $_POST['button1'];
    $button2 = $_POST['button2'];
    $button3 = $_POST['button3'];
    $button4 = $_POST['button4'];
    $button5 = $_POST['button5'];
    $query ="insert into form insert into Directions((button1,button2,button3,button4,button5) value($button1,$button2,$button3,$button4,$button5) ";
    $run = mysqli_query($connection,$query) or die (mysqli_error());
 if ($run){
    echo "form submitted sucessfully";
}
 else{
     echo "form not submitted";
}
} 
else{
     echo "not found";
}
}

    ?>
