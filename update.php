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
        
        if(isset($_POST['update']))
        {
            $first_name =trim( mysqli_real_escape_string($conn, $_POST['first_name']));
            $email =trim( mysqli_real_escape_string($conn, $_POST['email']));
            

            //SELECT
            $select = mysqli_query($conn, "SELECT * FROM students where email = '$email'");
            
            if(mysqli_num_rows($select)==0)
            {
                echo "User does not exist";
            }
            else
            {
               $update = mysqli_query($conn, "UPDATE students SET first_name = '$first_name' WHERE email='$email'");
                if( $update)
                {
                    echo "Successfully Updated!";
                }

            }
            
        }




        ?>
        <h1>Students' Register</h1>

        <form action="#" method="POST">

            <input type="text" class="input_control" name="first_name" placeholder="Enter your first name" required>
            <input type="email" class="input_control" name="email" placeholder="Enter your email" required>
            <button name="update">Update</button>
        </form>
    </div>
</body>

</html>