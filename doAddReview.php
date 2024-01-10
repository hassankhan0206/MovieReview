<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login.php"); // auto redirect to login.php
}

$userID = $_SESSION['user_id'];

// php file that contains the common database connection code
include "dbFunctions.php";

if (!empty($_POST['username']) && !empty($_POST['comments']) && !empty($_POST['rating'])) 
{
    //TODO: Assign data retreived from form to the following variables $itemName, $itemDesc, $itemPrice  respectively
    $username = $_POST['username'];
    $comments  = $_POST['comments'];
    $rating = $_POST['rating'];
    $reviewId = $_POST['reviewId'];
    $movieId = $_POST['movieId'];
    $datePosted = date('Y-m-d');


    $sql = "INSERT INTO reviews (reviewId,movieId,userId,review,rating,datePosted) 
            VALUES ('','$movieId','$userID','$comments','$rating', '$datePosted')";
    
    
    //TODO: Execute the SQL statement 
    $status = mysqli_query($link, $sql) or die(mysqli_error($link));

    
    if ($status) {
        $message = "Review posted successfully.";
    } else {
        $message = "Review post failed.";
    }
    } else {
        $message = "All Item details have to be provided.";
    }

//TODO: Close the Database conection 
mysqli_close($link);
    
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title></title>
    </head>
    <body>
        <?php include "navBar.php" ?>
        <div class="container-fluid mt-3">
            <div class="card" style="width:800px; margin: 0 auto; background-color: lightgray; padding: 20px">
                <h3>Review Added!</h3>
        <p>
            <?php echo $message; ?>
            
        </p>
        
        <a href="homepageUpdated.php" class="btn btn-light">Home</a>
            </div>
        </div>
    </body>
</html>
