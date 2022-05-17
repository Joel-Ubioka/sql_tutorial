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
           $select = mysqli_query($conn, "SELECT * FROM students");
           if(mysqli_num_rows( $select)>0)
           {
             echo"<h1>Morrhtech Students</h1>";
             echo"<br>";
             echo "<table class = 'table_format'>";
             echo "<tr>";
             echo "<th>First Name</th>";
             echo "<th>Middle Name</th>";
             echo "<th>Last Name</th>";
             echo "<th>Email</th>";
             echo "<th>Phone Number</th>";
             echo "<th>Country</th>";
             echo "<th>State</th>";
             echo "<th>L.G.A</th>";
             echo "<th>Date</th>";
             echo "<th>Time</th>";
             echo"</tr>";
             
            
            
            while($row = mysqli_fetch_array( $select))
               {
                  $first_name =  $row['first_name'];
                  $middle_name = $row['middle_name'];
                  $last_name =  $row['last_name'];
                  $email =  $row['email'];
                  $phone_number =  $row['phone_number'];
                  $country =  $row['country'];
                  $state =  $row['state'];
                  $lga =  $row['lga'];
                  $date =  $row['date'];
                  $time=  $row['time'];
                  

                  echo"<tr>";
                  echo"<td>$first_name</td>";
                  echo"<td>$middle_name</td>";
                  echo"<td>$last_name</td>";
                  echo"<td>$email</td>";
                  echo"<td>$phone_number</td>";
                  echo"<td>$country</td>";
                  echo"<td>$state</td>";
                  echo"<td>$lga</td>";
                  echo"<td>$date</td>";
                  echo"<td>$time</td>";
                  echo"</tr>";
               }

               echo"</table>";
           }
           else
           {
               echo "No record found!";
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
            <button name="show">Show Students</button>
        </form>
    </div>
</body>

</html>

</html>