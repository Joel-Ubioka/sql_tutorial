<?php require "config/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL TUTORIAL</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="reg_form">
        <?php
        
        if(isset($_POST['delete']))
        {
            $email =trim( mysqli_real_escape_string($conn, $_POST['email']));
            

            //SELECT
            $select = mysqli_query($conn, "SELECT * FROM students where email = '$email'");
            
            if(mysqli_num_rows($select)==0)
            {
                echo "User does not exist";
            }
            else
            {
               $delete = mysqli_query($conn, "DELETE FROM students WHERE email='$email'");
                if( $delete)
                {
                    echo "Successfully Deleted!";
                }

            }
            
        }




        ?>
        <h1>Delete Students</h1>

        <form action="#" method="POST">
            <input type="email" class="input_control" name="email" placeholder="Enter your email" required>
            <button name="delete">Delete</button>
        </form>
    </div>
</body>

</html>