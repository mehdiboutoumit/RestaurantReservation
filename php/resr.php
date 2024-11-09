<?php
session_start();
include('connexion.php');

if (isset($_POST['submit'])) {
   
    $prenom = $_POST['prenom'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $number = $_POST['number'];

    
    $query = "INSERT INTO reservation (First_name, Last_name, Email, N_phone, date, time, nbrpersonne) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";

   
    if ($stmt = mysqli_prepare($db, $query)) {
        
        mysqli_stmt_bind_param($stmt, "ssssssi", $prenom, $name, $email, $phone, $date, $time, $number);
        
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
      
    } else {
        echo "Error: Could not prepare statement.";
    }

    mysqli_close($db);
}
?>
