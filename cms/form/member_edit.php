 <?php                               
                                         
			  include('../database/database.php');  
				if(!empty($_POST['firstname']) && !empty($_POST['memberid'])){
				
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
				$branch_id  = $_POST['branch_id'];
				$cp  = $_POST['cp'];
				$cp_mobile  = $_POST['cp_mobile'];
				$cp_rel  = $_POST['cp_rel'];
				$salutation = $_POST['salutation'];
				$memberid=$_POST['memberid'];
				
				
				 if(!empty($_FILES['filename']['name']) && isset($_FILES['filename']['name'])){
					 
				 $file=$_FILES['filename']['name'];
            $dir =DIRECTORY_SEPARATOR;
	        $tmp_file = $_FILES['filename']['tmp_name'];
            $remove_file="img".$dir."img_member".$dir.$_POST['original_file'];
            $desired_dir="img".$dir."img_member".$dir.$file;
			
				$bday=substr($dob,5,7);
				
		$query ="UPDATE member SET salutation='".$salutation."',firstname='".$firstname."'
		,lastname='".$lastname."',dob='".$dob."',gender='".$gender."',maritalstatus='".$maritalstatus."'
		,occupation='".$occupation."',nationality='".$nationality."',residence='".$residence."'
		,post_address='".$post_address."',directiontohse='".stripslashes($directiontohse)."',mobile1='".$mobile1."'
		,mobile2='".$mobile2."',email='".$email."',cp='".$cp."',cp_rel='".$cp_rel."'
		,cp_mobile='".$cp_mobile."',picture='".$file."',bday='".$bday."' WHERE memberid='".$memberid."'" ;
				 if($process->numRows($query)){
               
                 	  if(!file_exists($desired_dir)){
                              unlink($remove_file);                              
                              move_uploaded_file($tmp_file ,$desired_dir);	
                              echo "Profile Update Successfull";
			           
                           }else{
                              unlink($desired_dir); 
		              move_uploaded_file($tmp_file ,$desired_dir);
                             echo "Profile Update Successfull2";
			     }	
              
               
            }else{
                
                echo "Profile Update Successfull";; 
                
            }
				 }else{
					 
					$bday=substr($dob,5,7);
				
		$query ="UPDATE member SET salutation='".$salutation."',firstname='".$firstname."'
		,lastname='".$lastname."',dob='".$dob."',gender='".$gender."',maritalstatus='".$maritalstatus."'
		,occupation='".$occupation."',nationality='".$nationality."',residence='".$residence."'
		,post_address='".$post_address."',directiontohse='".$directiontohse."',mobile1='".$mobile1."'
		,mobile2='".$mobile2."',email='".$email."',branch_id='".$branch_id."',cp='".$cp."',cp_rel='".$cp_rel."'
		,cp_mobile='".$cp_mobile."',bday='".$bday."' WHERE memberid='".$memberid."'" ; 
					
if($result = $process->numRows($query)){
					
					
				  echo $lastname." ".$firstname." Was edited Successfully.";
				 
				
				}else{
					
					echo "Member Not edited , Please Check Your Fields";
					
					
					}
										
				 }
				
				
				
				}
				
				?>