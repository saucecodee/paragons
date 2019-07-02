<?php include "../inc/db.php"; ?>
<?php
    $select = "SELECT * FROM pbm ";
    $query = mysqli_query($con, $select)
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../ass/css/style.css" rel="stylesheet">
        <style>
            .wrap{
                width:1300px;
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <h1>Paragon Brothers' Members</h1><br>

            <table>
                <tr>
                    <th>S/N</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>E-mail</th>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Town</th>
                    <th>L.G.A</th>
                    <th>State</th>
                    <th>Photo</th>
                </tr>

                <?php 
                    $num = 1;
                    while ($row = mysqli_fetch_array($query)){
                        echo '<tr>
                                <td>'.$num.'</td>
                                <td>'.$row['f_name'].'</td>
                                <td>'.$row['l_name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['phone_1'].'</td>
                                <td>'.$row['phone_2'].'</td>
                                <td>'.$row['addr_1'].'</td>
                                <td>'.$row['addr_2'].'</td>
                                <td>'.$row['town'].'</td>
                                <td>'.$row['lga'].'</td>
                                <td>'.$row['state'].'</td>
                                <td><img src="../inc/uploads/'.$row['photo'].'" width="50" height="50"></td>
                            </tr>';
                        $num++;
                    }
                ?>
            </table>
            
        </div>
    </body>
</html>