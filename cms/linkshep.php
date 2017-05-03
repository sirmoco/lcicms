<?php

 include('database/database.php'); 
	if(isset($_POST['submit']) && !empty($_POST['shepherd']) && !empty($_POST['sheep'])){
				
				 date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				$shepherd  = $_POST['shepherd'];
				$sheep  = $_POST['sheep'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				
				$array_register['shepherd'] = $shepherd;
				$array_register['sheep'] = $sheep;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
					
					
					
		$query ="INSERT INTO assignment(assignment_id,shepherd,sheep,date)
		VALUES(NULL,'".$shepherd."','".$sheep."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $sheep;
				  
				   
				
				}else{
					
					echo "Sheep Assigned";
					
					
					}
					
				}else{
					echo "Couldnt Assign Sheep";
				}
				
				
				}else{
					echo 'Did Not Add Shepherd To Sheep'.$shepherd.'-'.$sheep;
					
				}

?>