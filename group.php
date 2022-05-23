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
           $select = mysqli_query($conn, "SELECT first_name, amount, 
                                          CASE 
                                          WHEN amount > 1000 THEN 'Higher Payment'
                                          WHEN amount > 500 THEN 'Medium Payment'
                                          ELSE 'Lower Payment'
                                          END AS amount_desc FROM students
           


           
           ");
           if(mysqli_num_rows( $select)>0)
           {
           
             echo"<br>";
             echo "<table class = 'table_format'>";
             echo "<tr>";
             echo "<th>First Name</th>";
             echo "<th>Amount</th>";
             echo "<th>Description</th>";
             echo"</tr>";
             
            
            
            while($row = mysqli_fetch_array( $select))
               {
                
                  $first_name = $row['first_name'];
                  $amount = $row['amount'];
                  $amount_desc = $row['amount_desc'];
                  
                
                  

                  echo"<tr>";
                  echo"<td>$first_name </td>";
                  echo"<td> $amount </td>";
                  echo"<td> $amount_desc </td>";
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