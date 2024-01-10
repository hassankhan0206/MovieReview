<?php
// php file that contains the common database connection code
include "dbFunctions.php";

$name = $_POST['name'];
$email = $_POST['email'];
$birthdate = $_POST['DOB'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO users
          (username,password,name,dob,email) 
          VALUES 
          ('$username','$password','$name',
           '$birthdate','$email')";

$status = mysqli_query($link, $query);

if ($status) {
    $message = "<p>Your new account has been successfully created. 
                You are now ready to <a href='logIn.php'>Login</a>.</p>";
}
else {
    $message = "account creation failed";
}


mysqli_close($link);

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="Solution/style.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    </head>
    <body>
        <?php
        include 'navBar.php';
        ?>
        
        <h3>Movie Review - Register</h3>
        <?php
        echo $message;
        ?>
    </body>
</html>
