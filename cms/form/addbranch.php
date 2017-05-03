<?php                             
                                         
			  include('../database/database.php');  
				if(!empty($_POST['branch_name']) && !empty($_POST['branch_location'])){
				
				$branch_name  = $_POST['branch_name'];
				$branch_location  = $_POST['branch_location'];
				$branch_head  = $_POST['branch_head'];
			
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['branch_name'] = $branch_name;
				$array_register['branch_location'] = $branch_location;
				$array_register['branch_head'] = $branch_head;
			
				$process->format($array_register); 
                                 
				$error=$process->error();
				
				  date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				
				if($process->error()===true){
		$query ="INSERT INTO branch(branch_id,branch_name,branch_location,branch_head,date)
		VALUES(NULL,'".$branch_name."','".$branch_location."','".$branch_head."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $branch_name." Branch at ".$branch_location." Was Added To The System Successfully.";
				 
				
				}else{
					
					echo $branch_name." Branch Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>