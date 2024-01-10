<!DOCTYPE html>

<?php
session_start();
include "dbFunctions.php";


$_id = $_GET['id'];
$movieTitle = $_POST['movieTitle'];


$query = "SELECT r.*, u.username FROM reviews r INNER JOIN users u ON u.userId = r.userId WHERE r.movieId = $_id";








$result = mysqli_query($link, $query) or die(mysqli_error($link));

$arrContent = array();
while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}


?>




<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    </head>
    
    
    <body>
        
        <?php
        include 'navBar.php';
        
        ?>
        
        <h3>Movie Reviews for <?php echo $movieTitle ?></h3>
        
        
        <table border="10" cellpadding="10" cellspacing="10">
            <tr>
                <th>Review</th>
                <th>Rating</th>
                <th>Date Posted</th>
                <th>Username</th>
                <th>Edit</th>
                <th>Delete</th>  
            </tr>
            
            
              <?php
                for ($i = 0; $i<count($arrContent); $i++){
                $username = $arrContent[$i]['username'];
                
                $reviewID = $arrContent[$i]['reviewId'];
                $review = $arrContent[$i]['review'];
                $rating = $arrContent[$i]['rating'];
                $date = $arrContent[$i]['datePosted'];
                
                
                ?>
            <tr>
                <td><?php echo $review; ?></td>
                <td><?php echo $rating; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $username; ?></td>
                
                <?php if(isset($_SESSION['user_id'])) { 
                    if($_SESSION['username'] == $username){ ?>
                
                <td><a href="editReview.php?id=<?php echo $reviewID ?>">Edit</a></td>
                <td><a href="deleteReview.php?id=<?php echo $reviewID ?>">Delete</a></td>
            </tr>
              
               
                <?php }}} ?>
        </table>
        
        <form method="post" action="addReview.php">
            <input type="hidden" name="reviewId" value="<?php echo $reviewID ?>">
            <input type="hidden" name="movieId" value="<?php echo $_id ?>">
            
            <?php if(isset($_SESSION['user_id'])){ ?>
            <input type="submit" value="Add Review">
            <?php } ?>
            
        </form>
        
        
        
        
    </body>
</html>

