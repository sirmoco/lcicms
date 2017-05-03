<?php
include('function.php');


if(isset($_POST['submit'])){
	if(isset($_POST['firstname'])){
		if(isset($_POST['lastname'])){
		addmember($_POST['salutation'],$_POST['firstname'],$_POST['lastname'],$_POST['othername'],$_POST['dob'],$_POST['gender'],$_POST['pob'],$_POST['nationality'],$_POST['maritalstatus'],$_POST['occupation'],$_POST['directiontohse'],$_POST['street'],$_POST['area'],$_POST['subarea'],$_POST['landmark'],$_POST['hsedescription'],$_POST['city'],$_POST['postalbox'],$_POST['homephone'],$_POST['mobile1'],$_POST['mobile2'],$_POST['email'],$_POST['reszone'],$_POST['joinedlci'],$_POST['designation'],$_POST['cp'],$_POST['cpmobile'],$_POST['reltocp'],$_POST['branch'],$_POST['bussel'],$_POST['service'],$_POST['dioces'],$_POST['date']) or die(mysql_error());
		header("Location:../index.html"); 
		} else{
		echo "Please Enter correct details!";
		}
	} else {
		echo "Please Enter correct details!";
		include('../form/memberregistrationform.php');
	}
}else{
header("Location: ../index.html");
}

?>