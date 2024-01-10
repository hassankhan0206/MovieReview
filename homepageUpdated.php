<!DOCTYPE html>

<?php
session_start();
include "dbFunctions.php";

$query = "SELECT * FROM movies";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}



?>




<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <?php
        include 'navBar.php';
        ?>
        
        
        <h1 style="font-weight: bold; text-align: center; color: blueviolet">List of Movies</h1>
        <hr style="color: blueviolet">
        
        
        <div class="row">
        <?php 
        for ($i = 0; $i<count($arrContent); $i++){
                $id = $arrContent[$i]['movieId'];
                $title = $arrContent[$i]['movieTitle'];
                $genre = $arrContent[$i]['movieGenre'];
                $time = $arrContent[$i]['runningTime'];
                $language = $arrContent[$i]['language'];
                $image = $arrContent[$i]['picture'];
                $director = $arrContent[$i]['director'];
                $cast = $arrContent[$i]['cast'];
                $synopsis = $arrContent[$i]['synopsis'];
               
        ?>
        
        
            
            <div class="card" style="width:300px">
                <img class="card-img-top" style="height: 350px" src=Images/<?php echo $image ?> alt=<?php echo $title ?>>
                <div class="card-body bg-dark text-white">
                    <h4 class="card-title"><?php echo $title ?></h4>
                        <p class="card-text"><?php echo $genre ?></p>
                        <a href="movieDetails.php?id=<?php echo $id ?>" class="btn btn-light">See More</a>
                </div>
                
            </div>
            
        
        
        <?php } ?>
        
        </div>
        
        
        
    </body>
</html>
