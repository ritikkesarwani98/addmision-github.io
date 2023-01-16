<?php
$percentage = $_POST['percentage'];
$percentageinter = $_POST['percentageinter'];
$namal = $_POST['fname'];

if ($percentage >= 60   &&  $percentageinter >= 60 )
{

    header('Location: result.html');
}


 if($percentage < 60  &&  $percentageinter < 60)
 {
    echo"<h2>Dear, \n", $namal ,"\n you are not eligible for any college try with different records.</h2>"; 
    
}
else{
    echo "<h1> Invalid Data try again .<h1>";
}
?>
