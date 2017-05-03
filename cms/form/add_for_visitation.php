 <?php                               
                                         
			  include('../database/database.php');  
			   date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				if(!empty($_POST['visitorid']) && !empty($_POST['visitedid'])){
				
				$visitorid  = $_POST['visitorid'];
				$visitedid  = $_POST['visitedid'];
				$response  = $_POST['response'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['visitorid'] = $visitorid;
				$array_register['visitedid'] = $visitedid;
				$array_register['response'] = $response;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
				
		$query ="INSERT INTO visitresponse(visitid,visitorid,visitedid,response,date)
		VALUES(NULL,'".$visitorid."','".$visitedid."','".$response."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo "Successful";
				 
				
				}else{
					
					echo " Not Added for visit , Please Check Your Fields";
					
					
					}
					
				}
				}else{
					
					echo " Not Added for visit , Please add a response.";
					
					
					}
				
				?>