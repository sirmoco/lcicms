 <?php                               
                                         
			  include('../database/database.php');  
				if(!empty($_POST['memberid']) && !empty($_POST['accountid'])){
				
				$memberid  = $_POST['memberid'];
				$accountid  = $_POST['accountid'];
				$memid  = $_POST['memid'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['memberid'] = $memberid;
				$array_register['accountid'] = $accountid;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
				
		$query ="SELECT memberid FROM member WHERE memberid ='".$memberid."'" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo $memid;
				 
				
				}else{
					
					echo "Check Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>