

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Password</th>
        </tr>
    <?php
        $conn=mysqli_connect("localhost","root","","zeal-database");
        // $que="insert into student_data values ('$name','$email','$pass','$cont')";
        $q="select * from student_data";
        $res=mysqli_query($conn,$q);

        while($row=mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo($row['Name'])?></td>
            <td><?php echo($row['Email'])?></td>
            <td><?php echo($row['Contact'])?></td>
            <td><?php echo($row['Password'])?></td>
        </tr>


        <?php

         }

?>


    </table>
    </div>


    
</body>
</html>