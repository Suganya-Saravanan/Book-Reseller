 <?php
$conn=mysqli_connect("localhost","root","","book reseller");
session_start();

$Username1=($_POST['email']);
$Password1=($_POST['password']);

$result=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Username1' and Pwd ='$Password1'");

while(mysqli_fetch_array($result,MYSQLI_ASSOC)){
  
  header("location:Acc.php");
}
if(!mysqli_fetch_array($result,MYSQLI_ASSOC)){
	//header("location:indexx.php");
 $message="Invalid Entry";
 echo "<script type='text/javascript'>alert('$message');</script>";

}
?>