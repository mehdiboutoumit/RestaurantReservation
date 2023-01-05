<?php 
session_start();
include('connexion.php');
if(isset($_POST['submit']))
{
$prénom=$_POST['prenom'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'] ;
$date=$_POST['date'];
$time=$_POST['time'];
$number=$_POST['number'];
$req="INSERT INTO `reservation`(`First_name`,`Last_name`,`Email`,`N_phone`,`date`,`time` ,`nbrpersonne`) VALUES ('$prénom','$name','$email','$phone','$date','$time','$number')";
$ex=mysqli_query($db,$req);
}

?>