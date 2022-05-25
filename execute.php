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
    <div class="students_container">
        <?php
        
        if(isset($_POST['show']))
        {
           $execute = mysqli_query($conn, "CREATE TABLE backend_students(
                                    id int NOT NULL,
                                    full_name varchar(200) NOT NULL,
                                    student_id int NOT NULL,
                                    PRIMARY KEY (id),
                                    CONSTRAINT FK_backend FOREIGN KEY (student_id) REFERENCES students(id)
                                
                                )");
           if($execute)
           {
           
               echo "Successful!";
           }
           else
           {
               echo "Failed!";
           }
        }




        ?>
        <!-- <h1>Morrhtech Students</h1>-->

        <form action="#" method="POST">
            <!--
                
            <input type="text" class="input_control" name="first_name" placeholder="Enter your first name" required>
                <input type="text" class="input_control" name="middle_name" placeholder="Enter your middle name"
                    required>
                <input type="text" class="input_control" name="last_name" placeholder="Enter your last name" required>
                <input type="email" class="input_control" name="email" placeholder="Enter your email" required>
                <input type="tel" class="input_control" name="phone_number" placeholder="Enter your phone number"
                    required>
                <input type="text" class="input_control" name="country" placeholder="Enter your country" required>
                <input type="text" class="input_control" name="state" placeholder="Enter your state" required>
                <input type="text" class="input_control" name="lga" placeholder="Enter your LGA" required>
              -->
            <br>
            <button name="show">Execute</button>
        </form>
    </div>
</body>

</html>

</html>