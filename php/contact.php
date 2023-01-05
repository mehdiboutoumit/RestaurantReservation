<?php 
session_start();
include('connexion.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$prénom=$_POST['prenom'];
$email=$_POST['email'];
$message=$_POST['message'] ;
$req="INSERT INTO `message`(`name`, `prenom`, `email`, `message`) VALUES ('$name','$prénom','$email','$message')";
$ex=mysqli_query($db,$req);
}

?>