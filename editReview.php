<?php
session_start();
include "dbFunctions.php";
$_id = $_GET['id'];
$query = "SELECT * FROM reviews WHERE reviewId=$_id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
$arrContent = array();
    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Movie Details</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        
        <?php
        include 'navBar.php';
        ?>
        
        <h1 style="font-weight: bold; text-align: center; color: blueviolet">Edit Details</h1>
        <hr style="color: blueviolet">
        
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="card" style="width:400px; margin: 0 auto">
                    <div class="card-body bg-dark text-white" style="text-align: center">
                        
                        <?php
        if (!empty($row)) {
    
                
                
                $review = $row['review'];
                $rating = $row['rating'];
                $date = $row['datePosted'];
}
?>
<?php if (!empty($_id)) { ?>
    <form action="doEditReview.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_id ?>"/>
        
        
            Review: 
            <input type="text" name="Review" value="<?php echo $review ?>"/>
            <br/><br/>
            Rating:
            <input type="number" name="Rating" value="<?php echo $rating?>"/>
            <br/><br/>
            
            <input type="submit"/>
        
    </form>
<?php } ?>
                        
                        
                    </div></div>
        
        
    </body>
</html>