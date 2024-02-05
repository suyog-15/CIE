<?php
if(isset($_POST['submit'])){
    $name=$_POST['n1'];
    $email=$_POST['n2'];
    $pass=$_POST['n3'];
    $cont=$_POST['n4'];

    $conn=mysqli_connect("localhost","root","","zeal-database");
    $que="insert into student_data values ('$name','$email','$pass','$cont')";
    mysqli_query($conn,$que);

?>


<script>
alert("registration is succesfully");
</script>
<?php
}
?>

<html>
<head>
 
</head>
<body>
    <form method="post">
    <input type="text" name="n1"> <br>
    <input type="email" name="n2"><br>
    <input type="password" name="n3"><br>
    <input type="text" name="n4"><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>