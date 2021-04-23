<?php
$host = 'localhost';
$user= 'root';
$password = '';
$db = 'labb1';

$link = mysqli_connect($host,$user,$password,$db);

$email = 'rabbi@gmail.com';
$sql = 'SELECT* FROM user WHERE user_email = "'.$email.'"';
$result = mysqli_query($link,$sql); 


$noOfData = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
	print_r($row);
}

?>
