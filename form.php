<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="project";
$conn=mysqli_connect($servername,$username,$password,$dbn
ame);
if(isset($_POST['submit'])){
if(!empty($_POST['name']) &&
!empty($_POST['password'])){
$name=$_POST['name'];
$password=$_POST['password'];
$query="insert into form1(name,pass)
values('$name','$password')";
$run=mysqli_query($conn,$query) or
die(mysqli_error());
if($run){
echo "form submitted successfully";
}
else{
echo "form is not submitted";
}
}
else{
echo "all fields required";
}
}
?>