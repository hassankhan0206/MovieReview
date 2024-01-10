<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                
                
                <a class="navbar-brand" href="homepageUpdated.php">Movie Review</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="homepageUpdated.php">Movies</a>
                        </li>  
    
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    <?php if(!isset($_SESSION['user_id'])){ ?>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="logIn.php">Login/Register</a>
                        </li> 
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logOut.php">Logout</a>
                        </li> 
                        <?php } ?>
                        
                        
                        
                        <input style="background-color: blue; color: white" type="submit" value="Search" name="searchButton" />
                    </ul>
                </div>
            </div>
        </nav>

