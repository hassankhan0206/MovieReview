<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <h2 class="card-title" style="color: blueviolet; text-align: center">Register</h2>
                <br>
                <br>
                <form action="doRegister.php" method="post">
                    
                    Name:
                    <br>
                    <input type="text" placeholder="Enter Name" name="name" style="width: 700px">
                    <br>
                    Date of Birth: (format: YYYY-MM-DD)
                    <br>
                    <input type="text" placeholder="Enter Date of Birth" name="DOB" style="width: 700px"> 
                    <br>
                    Email Address:
                    <br>
                    <input type="text" placeholder="Enter Email Address" name="email" style="width: 700px">
                     <br>
                    
                    <hr>
                    Username: 
                    <br>
                    <input type="text" placeholder="Enter Username" name="username" style="width: 700px">
                    <br>
                    Password:
                    <br>
                    <input type="text" placeholder="Enter Password" name="password" style="width: 700px">
                   
                    
                    <br>
                    <br>
                    <input type="submit" value="Register"/>
                    
                    
                    
                    
                    
                    
                </form>
                
                
            </div>
        
        
        
    </body>
</html>
