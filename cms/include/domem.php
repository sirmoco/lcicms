<?php
include('function.php');


if(isset($_POST['submit'])){
	if(isset($_POST['title'])){
		if(isset($_POST['fname'])){
			
			$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg','.gif','.JPG','.GIF','.JPEG','.jpeg');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 20000000))
	{	
		// Rename file
		$query=mysql_query('SELECT * FROM image WHERE imageid >=1 ORDER BY imageid DESC');
		$join=mysql_fetch_assoc($query);
		$text= $join['imageid'];
		$newfilename = md5($file_basename).$text . $file_ext;
		if (file_exists("../uploads/passport/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/passport/" . $newfilename);
			addimage($newfilename);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 20000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
			
		addmem($_POST['fname'],$_POST['lname'],$_POST['oname'],$_POST['gender'],$_POST['dob'],$_POST['title']) or die(mysql_error());
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