<?php include "db.php"; ?>
<?php
    if(!isset($_POST['submit'])){
        die("sorry, couldn't send your data to the database");
    }else{
        $msg = "connected";
    }

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone_1 = $_POST['phone_1'];
    $phone_2 = $_POST['phone_2'];
    $addr_1 = $_POST['addr_1'];
    $addr_2 = $_POST['addr_2'];
    $town = $_POST['town'];
    $lga = $_POST['lga'];
    $state = $_POST['state'];
    $photo = $_FILES['photo']['name'];
    $tmp_photo = $_FILES['photo']['tmp_name'];

    $insert = "INSERT INTO pbm (f_name,l_name,email,phone_1,phone_2,addr_1,addr_2,town,lga,state,photo) VALUES ('$f_name','$l_name','$email','$phone_1','$phone_2','$addr_1','$addr_2','$town','$lga','$state','$photo')";
    $query = mysqli_query($con, $insert);
    if(!$query){
        die("Sorry, query didn't work");
        $message = "Registration failed !";
    }else{
        $message = "Registration successful !";
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo);
    $uploadOk = 1;

    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($tmp_photo, $target_file)) {
            echo "The file ". basename($photo). " has been uploaded.";
        } else {
           // echo "Sorry, there was an error uploading your file.";
        }
    }
?>

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
            <h1><?php echo $message; ?></h1><br>
        </div>
    </body>
</html>