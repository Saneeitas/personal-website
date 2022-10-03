<?php 

require 'connection.php';

if(isset($_POST["send_message"])){

	$firstname = $lastname = $message = "";

	if (empty($_POST["fname"]) && empty($_POST["lname"]) && empty($_POST["message"])) {
       $error = "Inputs are required";
  } else {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $message = $_POST["message"];
   
    $sql = "INSERT INTO messages(firstname,lastname,message) VALUES('$firstname','$lastname','$message')";
    $query = mysqli_query($connection,$sql);
    $firstname = $lastname = $message = "";

   
    if($query){
        $success = "Message sent";
    }else{
        $error = "Unable to send message";
    }
  }

   
}

?>