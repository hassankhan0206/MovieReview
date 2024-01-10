<?php
session_start();

// php file that contains the common database connection code
include "dbFunctions.php";

$entered_username = $_POST['username'];
$entered_password = $_POST['password'];

$msg = "";

$queryCheck = "SELECT * FROM users
          WHERE username='$entered_username'
          AND password = '$entered_password'";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['userId'];
    $_SESSION['username'] = $row['username'];
    
    $dob = $row['dob'];
    $email = $row['email'];
    $name = $row['name'];

    $msg = "<p><i>You are logged in as " . $_SESSION['username'] . "</p>";
    $msg .= "<p><a href='homepageUpdated.php'>Home</a></p>";
} else {
    $msg = "<p>Sorry, you must enter a valid username and password to log in</p>";
    $msg .= "<p><a href='Login.php'>Go back to login page</a></p>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <title>Log In</title>
    </head>
    <body>

<?php
include 'navBar.php';
?>

        <div class="container-fluid mt-3">
            <div class="card" style="width:800px; margin: 0 auto; background-color: lightgray; padding: 20px">
                <h2 class="card-title" style="color: blueviolet; text-align: center">Welcome</h2>
                <br>
                <br>
                <b>Username: <?php echo $_SESSION['username'] ?></b> 
                <b>Name: <?php echo $name ?></b>
                <b>Date of Birth: <?php echo $dob ?></b>
                <b>Email: <?php echo $email ?></b>

<?php
echo $msg;
?>



            </div>






        </div>















    </body>
</html>
