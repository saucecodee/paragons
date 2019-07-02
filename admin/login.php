<?php include "../inc/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../ass/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <h1>Admin Login</h1><br>
            <form action="login.php" method="POST">
                <input type="text" name="user" placeholder="Username" required autofocus>
                <input type="password" name="pword" placeholder="Password"required>
                <button type="submit" name="submit">Login</button>

                <?php
                    if(!isset($_POST['submit'])){
                        die('');
                    }else{
                        $msg ='connected';
                        echo $msg ;
                    }

                    $user = $_POST['user'];
                    $pword = $_POST['pword'];

                    $read = "SELECT * FROM admin WHERE user ='".$user."' AND pword ='".$pword."' ";
                    $query = mysqli_query($con, $read);
                    
                    $row = mysqli_fetch_array($query);
                        if(($row['id']) > 0){
                            header('location: list.php');
                        }else{
                            echo "incorrect password";  
                        }
                    
                ?>
                
            </form>
        </div>
    </body>
</html>