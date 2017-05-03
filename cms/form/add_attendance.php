 <?php                               
                                         
			  include('../database/database.php');  
				if(!empty($_POST['memberid']) && !empty($_POST['accountid'])){
				
				$memberid  = $_POST['memberid'];
				$accountid  = $_POST['accountid'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['memberid'] = $memberid;
				$array_register['accountid'] = $accountid;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
				
		$query ="INSERT INTO service_attendance(attid,memberid,date,accountid)
		VALUES(NULL,'".$memberid."',CURRENT_DATE(),'".$accountid."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo "Successful";
				 
				
				}else{
					
					echo "Member Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>