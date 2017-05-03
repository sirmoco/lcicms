<?php
                 include('database/database.php');
include('loadmenu.php');      
				if(!empty($_POST['timelinepost']) && !empty($_POST['accountid'])){
				
				date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				$timelinepost  = $_POST['timelinepost'];
				$accountid  = $_POST['accountid'];
				$memberid  = $_POST['memberid'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				
				$array_register['timelinepost'] = $timelinepost;
				$array_register['accountid'] = $accountid;
				$array_register['memberid'] = $memberid;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
					
					
		
		$query ="INSERT INTO timelinepost(timelinepost,memberid,accountid,date)
		VALUES('".$timelinepost."','".$memberid."','".$accountid."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $accountid;
				  
				   
				
				}else{
					
					echo "Comment not added";
					
					
					}
					
				}else{
					echo $error;
				}
				
				
				}else{
					echo 'Fields Empty';
					
				}

?>