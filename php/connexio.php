<?php
$host='localhost';
$db_username='root';
$db_passe='root';
$db_name='webproject';

$db=mysqli_connect($host,$db_username,$db_passe,$db_name) 
or die('Could not connect to database');
?>
