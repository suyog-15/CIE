<?php
$conn=mysqli_connect("localhost","root","","zeal-database");
$sql="insert into student_data values('Suyog','safdf@gmail.com','admin','5463728176')";
mysqli_query($conn,$sql);
if($sql != true)
echo "query fail";
else
echo"query done";
?>