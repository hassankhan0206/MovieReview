<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

        <div class="container-fluid mt-3">

            <div class="row">
                <div class="card" style="width:300px">
                    <img class="card-img-top" style="height: 350px" src="Images/JohnWick.png" alt="John Wick: Chapter 4">
                    <div class="card-body bg-dark text-white">
                        <h4 class="card-title">John Wick: Chapter 4</h4>
                        <p class="card-text">Action/Thriller/Dark</p>
                        <a href="synopsis_John.php" class="btn btn-light">See More</a>
                    </div>
                </div>
                
                <div class="card" style="width:300px">
                    <img class="card-img-top" style="height: 350px" src="Images/mypuppy.png" alt="My Puppy">
                    <div class="card-body bg-dark text-white">
                        <h4 class="card-title">My Puppy</h4>
                        <p class="card-text">Drama</p>
                        <a href="synopsis_Pup.php" class="btn btn-light">See More</a>
                    </div>
                </div>
                
                <div class="card" style="width:300px">
                    <img class="card-img-top" style="height: 350px" src="Images/suzume.png" alt="Suzume">
                    <div class="card-body bg-dark text-white">
                        <h4 class="card-title">Suzume</h4>
                        <p class="card-text">Animation</p>
                        <a href="sysnopsis_Suz.php" class="btn btn-light">See More</a>
                    </div>
                </div>
                
                <div class="card" style="width:300px">
                    <img class="card-img-top" style="height: 350px" src="Images/avatar.png" alt="Avatar: The Way of Water">
                    <div class="card-body bg-dark text-white">
                        <h4 class="card-title">Avatar: The Way of Water</h4>
                        <p class="card-text">Fantasy/Adventure/Drama</p>
                        <a href="#" class="btn btn-light">See More</a>
                    </div>
                </div>
                
                <div class="card" style="width:300px">
                    <img class="card-img-top" style="height: 350px" src="Images/mummies.png" alt="Mummies">
                    <div class="card-body bg-dark text-white">
                        <h4 class="card-title">Mummies</h4>
                        <p class="card-text">Animation/Family</p>
                        <a href="#" class="btn btn-light">See More</a>
                    </div>
                </div>
            </div>
            




        </div>












    </body>
</html>
