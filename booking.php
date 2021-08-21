<?php
if(isset($_POST['submit'])){
$user='root';
$pass="";
$db='hotel';
$db=new mysqli('localhost',$user,$pass,$db);
$name=$_POST['name'];
$email=$_POST['email'];
$service=$_POST['service'];
$needs=$_POST['needs'];
$sql="INSERT INTO booking
(name, email, service, needs)
VALUES('$name','$email','$service',
'$needs')";
$query=mysqli_query($db,$sql);
if($query){
echo"Booked successfully" ;
}
else{
echo "Booking failed";
}
}
?>
