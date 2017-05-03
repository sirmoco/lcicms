<?php
session_start();
      include('cms/database/database.php'); 

	
$username = $_POST['username'];
$password = $_POST['password'];

$getLogin = mysqli_query($process->connectDB(),"SELECT * FROM accounts WHERE username='$username' AND password='".md5($password)."'");
$row = mysqli_fetch_array($getLogin);
$result=mysqli_num_rows($getLogin);
if($result > 0)
{
	$_SESSION['IsValid'] = true;
	$_SESSION['accountid'] = $row['accountid'];
	$_SESSION['administrator'] = $row['administrator'];
	$_SESSION['username'] = $row['username'];
   $_SESSION['memberid']=$row['memberid'];
   $_SESSION['information']=$row['information'];
   $_SESSION['ministry_head']=$row['ministry_head'];
   $_SESSION['account']=$row['account'];
   $_SESSION['shepherd']=$row['shepherd'];
   $_SESSION['data_entry']=$row['data_entry'];
   $_SESSION['follow_up']=$row['follow_up'];
   $_SESSION['service_id']=$row['service_id'];
   $_SESSION['account_type']=$row['account_type'];
	
	if($_SESSION['account_type']=='0'){
	header("Location:cms/index.php");
	}
	else{
	header("Location:cms/index.php");
		
	}
}
else
{
	header("Location:index.php");
}
?>