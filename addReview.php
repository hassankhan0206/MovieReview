
<?php 
session_start();
$reviewId = $_POST['reviewId'];
$movieId = $_POST['movieId'];

$username = $_SESSION['username'];





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
        
        <div class="container-fluid mt-3">
            <div class="card" style="width:800px; margin: 0 auto; background-color: lightgray; padding: 20px">
                <h2 class="card-title" style="color: blueviolet; text-align: center">Add Review</h2>
        
        
        
            <form id="postForm" method="post" action="doAddReview.php" style="text-align: center">
            <label for="idName">Username:</label>
            <br>
            <input type="text" id="idName" name="username" value="<?php echo $username ?>" required/>	
            <br>
            <br>
            <label for="idComm">Comments:</label>
            <br>
            <textarea id="idComm" name="comments" rows="5" cols="30" required></textarea>	
            <br>
            <br>
            <label for="idRating">Rating:</label>
            <br>
            <input type="number" id="idRatin" name="rating" required/>	
            <br>
            <br>
            
            <input type="hidden" name="reviewId" value="<?php echo $reviewId ?>">
            <input type="hidden" name="movieId" value="<?php echo $movieId ?>">
                   
            
            
            
            <input type="submit" value="Add Review" />	
        </form>
        
        
            </div>
        </div>
        
    </body>
</html>
