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
           $select = mysqli_query($conn, "SELECT student_fees.full_name, student_fees.fees, students.country FROM student_fees LEFT JOIN students ON student_fees.student_id=students.id
                                    UNION SELECT student_fees.full_name, student_fees.fees, students.country FROM student_fees RIGHT JOIN students ON student_fees.student_id=students.id
        ");
           if(mysqli_num_rows( $select)>0)
           {
           
             echo"<br>";
             echo "<table class = 'table_format'>";
             echo "<tr>";
             echo "<th>FULL NAME</th>";
             echo "<th>FEES</th>";
             echo "<th>COUNTRY</th>";
             echo"</tr>";
             
            
            
            while($row = mysqli_fetch_array( $select))
               {
                
                 $full_name = $row['full_name'];
                 $fees = $row['fees'];
                 $country = $row['country'];
                
                  

                  echo"<tr>";
                  echo"<td>$full_name</td>";
                  echo"<td>$fees</td>";
                  echo"<td>$country</td>";
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