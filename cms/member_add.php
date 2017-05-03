 <?php                               
                                         
			
				if(isset($_POST['Addmember'])){
				
				$firstname  = $_POST['firstname'];
				$lastname  = $_POST['lastname'];
				$othername  = $_POST['othername'];
				$email  = $_POST['email'];
				$gender  = $_POST['gender'];
				$dob  = $_POST['dob'];
				$maritalstatus  = $_POST['maritalstatus'];
				$mobile1  = $_POST['mobile1'];
				$occupation  = $_POST['occupation'];
				$area  = $_POST['area'];
				$cp  = $_POST['cp'];
				$files = $_FILES['files'];
				$salutation = $_POST['salutation'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['firstname'] = $firstname;
				$array_register['lastname'] = $lastname;
				$array_register['othername'] = $othername;
				$array_register['maritalstatus'] = $maritalstatus;
				$array_register['email'] = $email;
				$array_register['gender'] = $gender;
				$array_register['mobile1'] = $mobile1;
				$array_register['files'] = $files;
				$array_register['occupation'] = $occupation;
				$array_register['salutation'] = $salutation;
				$array_register['cp'] = $cp;
				$array_register['dob'] = $dob;
				$array_register['area'] = $area;
				$process->format($array_register); 
				$upload=$process->single_upload($_FILES['files']);
				$error=$process->error();
				
				if($process->error()===true){
				
		$query ="INSERT INTO member(memberid,salutation,firstname,lastname,othername,dob,gender,maritalstatus,occupation,area,mobile1,email,cp)
		VALUES(NULL,'".$salutation."','".$firstname."','".$lastname."','".$othername."','".$dob."','".$gender."','".$maritalstatus."','".$occupation."','".$area."','".$mobile1."','".$email."','".$cp."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $lastname." ".$firstname." Was Added To LCI La Successfully";
				 
				
				}else{
					
					echo "Member Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>