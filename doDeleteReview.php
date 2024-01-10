<?php
session_start();
include "dbFunctions.php";
$theID = $_POST['id'];

$msg = "";
$query = "DELETE FROM reviews
          WHERE reviewId = $theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "Review successfully deleted";
} else {
    $msg = "Review not deleted";
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title></title>
    </head>
    <body>
        <?php include "navBar.php" ?>
        <div class="container-fluid mt-3">
            <div class="card" style="width:800px; margin: 0 auto; background-color: lightgray; padding: 20px">
                <h3>Review Deleted!</h3>
        <p>
            <?php echo $msg; ?>
            
        </p>
        
        <a href="homepageUpdated.php" class="btn btn-light">Home</a>
            </div>
        </div>
</html>