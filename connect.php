
<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "ecommerce");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
} else {
  $query = "INSERT INTO registered_users ( fullname,  
  email, password) VALUES ('$full_name', '$email', '$password')";
     $result = mysqli_query($conn, $query); 
     if ($result) { 
    echo "Registered Successfully.";
  } else{
    echo "Failed Register. Try another time.";

  }
}

?>