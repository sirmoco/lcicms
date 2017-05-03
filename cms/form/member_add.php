<?php                             
                                         
			  include('../database/database.php');  
				if(!empty($_POST['firstname']) && !empty($_POST['lastname'])){
				
				$firstname  = $_POST['firstname'];
				$lastname  = $_POST['lastname'];
				$email  = $_POST['email'];
				$gender  = $_POST['gender'];
				$dob  = $_POST['dob'];
				$maritalstatus  = $_POST['maritalstatus'];
				$mobile1  = $_POST['mobile1'];
				$mobile2  = $_POST['mobile2'];
				$occupation  = $_POST['occupation'];
				$nationality  = $_POST['nationality'];
				$residence  = $_POST['residence'];
				$post_address  = $_POST['post_address'];
				$directiontohse  = $_POST['directiontohse'];
			    $branch_id = $_POST['branch_id'];
				$cp  = $_POST['cp'];
				$cp_mobile  = $_POST['cp_mobile'];
				$cp_rel  = $_POST['cp_rel'];
				$salutation = $_POST['salutation'];
				$files = $_FILES['files'];
				
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
				$array_register['branch_id'] = $branch_id;
				$array_register['cp'] = $cp;
				$array_register['cp_mobile'] = $cp_mobile;
				$array_register['cp_rel'] = $cp_rel;
				$array_register['dob'] = $dob;
				$array_register['directiontohse'] = $directiontohse;
				$array_register['files'] = $files;
				$process->format($array_register); 
                                  if(!empty($_FILES['filename']['name']) && isset($_FILES['filename']['name'])){
					 
				$upload=$process->profile_upload($_FILES['files']);
                                 }else{
                                 $upload='user.png';
                                 }
				$error=$process->error();
				
				if($process->error()===true){
					$bday=substr($dob,5,7);
		$query ="INSERT INTO member(memberid,salutation,firstname,lastname,dob,gender,maritalstatus,occupation,nationality,residence,post_address,directiontohse,mobile1,mobile2,email,branch_id,cp,cp_rel,cp_mobile,date,picture,bday)
		VALUES(NULL,'".$salutation."','".$firstname."','".$lastname."','".$dob."','".$gender."','".$maritalstatus."','".$occupation."','".$nationality."','".$residence."','".$post_address."','".stripslashes($directiontohse)."','".$mobile1."','".$mobile2."','".$email."','".$branch_id."','".$cp."','".$cp_rel."','".$cp_mobile."',NULL,'".$upload."','".$bday."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $lastname." ".$firstname." Was Added To The System Successfully.";
				 
				
				}else{
					
					echo "Member Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>