<!DOCTYPE html>

<?php
session_start();
include "dbFunctions.php";
$theID = $_GET['id'];
$query = "SELECT * FROM movies WHERE movieId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);

if (!empty($row)) {
    
                $title = $row['movieTitle'];
                $genre = $row['movieGenre'];
                $time = $row['runningTime'];
                $language = $row['language'];
                $image = $row['picture'];
                $director = $row['director'];
                $cast = $row['cast'];
                $synopsis = $row['synopsis'];
}
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
        
        <h1 style="font-weight: bold; text-align: center; color: blueviolet">Movie Details</h1>
        <hr style="color: blueviolet">
        
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="card" style="width:400px; margin: 0 auto">
                    <div class="card-body bg-dark text-white" style="text-align: center">
        
        <?php if (!empty($title)) { ?>
            <h4 class="card-title"><?php echo $title ?></h4>
                        <b>Movie Genre: </b> <?php echo $genre ?>
                        <br>
                        <br>
                        <b>Run Time: </b> <?php echo $time ?>
                        <br>
                        <br>
                        <b>Language: </b> <?php echo $language ?>
                        <br>
                        <br>
                        <b>Director: </b> <?php echo $director ?>
                        <br>
                        <br>
                        <b>Cast:  </b> <?php echo $cast ?>
                        <br>
                        <br>
                        <?php echo $synopsis ?>
                        <br>
                        
                        
                        <form method="post" action="reviewList.php?id=<?php echo $theID ?>">
                            
                            
                            <input type="hidden" name="movieTitle" value="<?php echo $title ?>">
  
                            <input type="submit" value="See Reviews" class="btn btn-light">
                                   
                        </form>
                        
                        <br>
                        <img class="card-img-top" style="height: 400px" src="Images/<?php echo $image ?>" alt="<?php echo $title ?>">
                        <br>
                        <br>
                        <a href="homepageUpdated.php" class="btn btn-light">Back</a>
                        
                        
                        
                        
                        
                        
        
        
        
        <?php } ?>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>
