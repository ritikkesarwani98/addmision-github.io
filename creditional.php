<?php
$username = $_POST['username'];
$pass = $_POST['pass'];

if ($username == 12115564  &&  $pass==12345 || $username == 28550  &&  $pass==12345)
{

    header('Location: profile.html');
}
echo "hello";
?>
