<?php
session_start();
include "dbFunctions.php";
$theID = $_GET['id'];
$query = "SELECT * FROM reviews WHERE reviewId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $review = $row['review'];
                $rating = $row['rating'];
                $date = $row['datePosted'];
}
?>
<body>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <?php
        include 'navBar.php';
        ?>

    
    
    <?php if (!empty($theID)) { ?>
    
    <div class="container-fluid mt-3">
            <div class="row">
                <div class="card" style="width:400px; margin: 0 auto">
                    <div class="card-body bg-dark text-white" style="text-align: center">
                        
                     <form action="doDeleteReview.php" method="post">
            <input type="hidden" name="id" value="<?php echo $theID ?>"/>
            
            <div style="width:350px;">
                Review: <?php echo $review ?>
                </br>
                
                Rating: <?php echo $rating ?>
                
                
                
                <br/><br/>
                <br/><input type="submit" value="Delete"/>
            </div>
        </form>
                        
                        
                        
                        
                    </div></div>
                
                    </div>
    
    <?php } ?>
</body>