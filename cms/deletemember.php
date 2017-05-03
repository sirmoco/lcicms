<?php      
 include("database/database.php");
  if(isset($_POST['delete']) && !empty($_POST['memberid'])){
   
				
				$tablequeryhead="SELECT * FROM member WHERE memberid ='".$_POST['memberid']."'";
				$tableresulthead = mysqli_query($process->connectDB(),$tablequeryhead);
		        $tablerowshead=$process->queryrow($tablequeryhead);  
		        $tablerowshead=mysqli_fetch_assoc($tableresulthead);
				
				$firstname  = $tablerowshead['firstname'];
				$lastname  = $tablerowshead['lastname'];
				$email  = $tablerowshead['email'];
				$gender  = $tablerowshead['gender'];
				$dob  = $tablerowshead['dob'];
				$maritalstatus  = $tablerowshead['maritalstatus'];
				$mobile1  = $tablerowshead['mobile1'];
				$mobile2  = $tablerowshead['mobile2'];
				$occupation  = $tablerowshead['occupation'];
				$nationality  = $tablerowshead['nationality'];
				$residence  = $tablerowshead['residence'];
				$post_address  = $tablerowshead['post_address'];
				$directiontohse  = $tablerowshead['directiontohse'];
				$cp  = $tablerowshead['cp'];
				$cp_mobile  = $tablerowshead['cp_mobile'];
				$cp_rel  = $tablerowshead['cp_rel'];
				$salutation = $tablerowshead['salutation'];
				$picture = $tablerowshead['picture'];
				$lng = $tablerowshead['lng'];
				$lat = $tablerowshead['lat'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['firstname'] = $firstname;
				$array_register['lastname'] = $lastname;
				$array_register['maritalstatus'] = $maritalstatus;
				$array_register['email'] = $email;
				$array_register['gender'] = $gender;
				$array_register['mobile1'] = $mobile1;
				$array_register['mobile2'] = $mobile2;
				$array_register['occupation'] = $occupation;
				$array_register['nationality'] = $nationality;
				$array_register['residence'] = $residence;
				$array_register['post_address'] = $post_address;
				$array_register['salutation'] = $salutation;
				$array_register['cp'] = $cp;
				$array_register['cp_mobile'] = $cp_mobile;
				$array_register['cp_rel'] = $cp_rel;
				$array_register['dob'] = $dob;
				$array_register['directiontohse'] = $directiontohse;
				$array_register['picture'] = $picture;
				$array_register['lng'] = $lng;
				$array_register['lat'] = $lat;
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
				$bday=substr($dob,5,7);
		$query ="INSERT INTO member_bin(bin_id,salutation,firstname,lastname,dob,gender,maritalstatus,occupation,nationality,residence,post_address,directiontohse,mobile1,mobile2,email,cp,cp_rel,cp_mobile,picture,lng,lat,bday)
		VALUES(NULL,'".$salutation."','".$firstname."','".$lastname."','".$dob."','".$gender."','".$maritalstatus."','".$occupation."','".$nationality."','".$residence."','".$post_address."','".$directiontohse."','".$mobile1."','".$mobile2."','".$email."','".$cp."','".$cp_rel."','".$cp_mobile."','".$picture."','".$lng."','".$lat."','".$bday."')" ;
				$result = $process->numRows($query);
				
				if($result){
					
			    $query1="DELETE FROM member WHERE memberid='".$_POST['memberid']."'";
				$query6="DELETE FROM accounts WHERE memberid='".$_POST['memberid']."'";
				$query7="DELETE FROM ministry_member WHERE memberid='".$_POST['memberid']."'";
				$query8="DELETE FROM assignment WHERE shepherd='".$_POST['memberid']."'";
				$query9="DELETE FROM assignment WHERE sheep='".$_POST['memberid']."'";
				$query10="DELETE FROM service_attendance WHERE memberid='".$_POST['memberid']."'";
				$query11="DELETE FROM timelinepost WHERE memberid='".$_POST['memberid']."'";
				$query12="DELETE FROM visitation WHERE memberid='".$_POST['memberid']."'";
				$query13="DELETE FROM visitresponse WHERE visitorid='".$_POST['memberid']."'";
				$query14="DELETE FROM visitresponse WHERE visitedid='".$_POST['memberid']."'";
				$query2 ="UPDATE ministry SET head=0 WHERE head='".$_POST['memberid']."'" ;
				$query3 ="UPDATE ministry SET assistant=0 WHERE assistant='".$_POST['memberid']."'" ;
				$query4 ="UPDATE ministry_member SET head=0 WHERE head='".$_POST['memberid']."'" ;
				$query5 ="UPDATE ministry_member SET assistant=0 WHERE assistant='".$_POST['memberid']."'" ;
				if($process->numRows($query1)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query6)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query7)){
				   echo   "";
				}else{
					echo '';
				}
				if($process->numRows($query2)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query3)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query4)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query5)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query8)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query9)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query10)){
				   echo   "";
				}else{
					echo '';
				}
				if($process->numRows($query11)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query12)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query13)){
				   echo   " ";
				}else{
					echo '';
				}
				if($process->numRows($query14)){
				   echo   " ";
				}else{
					echo '';
				}
				
				 echo '<script type="text/javascript">';
        echo 'window.location.href="members.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=members.php" />';
        echo '</noscript>'; exit;
				}else{
					
					echo "";
					 echo '<script type="text/javascript">';
        echo 'window.location.href="members.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=members.php" />';
        echo '</noscript>'; exit;
					
					}
					
				}
              
          
         
     }
    else{
      
      
      echo "not set";
	  
	    echo '<script type="text/javascript">';
        echo 'window.location.href="members.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=members.php" />';
        echo '</noscript>'; exit;
  }

?>