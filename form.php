<html>
<body>
<?php
if(isset($_POST['sub'])){

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","zeal-database");
$q1="select * from student_data where Email='$uname' and Password='$pass'";
$res=mysqli_query($conn,$q1);
$count=0;
while($row=mysqli_fetch_assoc($res)){
$count=$count+1;
}


if($count==1){
?>
<script>

window.location="register.php";
</script>

<?php

}else{
?>
<script>
alert("Invalid");
</script>

<?php

}

}

?>
<form method="post">
<input type="text" placeholder="Enter Uname" name="uname">
<br/>
<input type="password" placeholder="Enter Password" name="pass">
<br/>
<input type="submit" name="sub"> 
</form>
</body>
</html>