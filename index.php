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
        
        if(isset($_POST['register']))
        {
            $first_name =trim( mysqli_real_escape_string($conn, $_POST['first_name']));
            $middle_name =trim( mysqli_real_escape_string($conn, $_POST['middle_name']));
            $last_name =trim( mysqli_real_escape_string($conn, $_POST['last_name']));
            $email =trim( mysqli_real_escape_string($conn, $_POST['email']));
            $phone_number =trim( mysqli_real_escape_string($conn, $_POST['phone_number']));
            $country =trim( mysqli_real_escape_string($conn, $_POST['country']));
            $state =trim( mysqli_real_escape_string($conn, $_POST['state']));
            $lga =trim( mysqli_real_escape_string($conn, $_POST['lga']));
         
            date_default_timezone_set("Africa/Lagos");
            $date = date('l m d , Y');
            $time = date('h:ia');

            //SELECT
            $select = mysqli_query($conn, "SELECT * FROM students where email = '$email'");
            if(mysqli_num_rows($select)>0)
            {
                echo "Already Registered!";
            }
            else
            {
                $insert = mysqli_query($conn, "INSERT INTO students (first_name,middle_name,last_name,email,phone_number,country,state,lga,date,time ) VALUES ('$first_name','$middle_name','$last_name','$email','$phone_number','$country','$state','$lga','$date','$time')");
                if( $insert)
                {
                    echo "Successfully Registered!";
                }

            }
            
        }




        ?>
        <h1>Students' Register</h1>

        <form action="#" method="POST">

            <input type="text" class="input_control" name="first_name" placeholder="Enter your first name" required>
            <input type="text" class="input_control" name="middle_name" placeholder="Enter your middle name" required>
            <input type="text" class="input_control" name="last_name" placeholder="Enter your last name" required>
            <input type="email" class="input_control" name="email" placeholder="Enter your email" required>
            <input type="tel" class="input_control" name="phone_number" placeholder="Enter your phone number" required>
            <input type="text" class="input_control" name="country" placeholder="Enter your country" required>
            <input type="text" class="input_control" name="state" placeholder="Enter your state" required>
            <input type="text" class="input_control" name="lga" placeholder="Enter your LGA" required>
            <button name="register">Register</button>
        </form>
    </div>
</body>

</html>