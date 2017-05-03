 <?php                               
                                         
			  include('database/database.php');  
				if(!empty($_POST['ssid'])){
				
				$ssid  = $_POST['ssid'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				$array_register['ssid'] = $ssid;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
				
		$query ="SELECT ssid FROM admin WHERE ssid ='".$ssid."'" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo "-";
				 
				
				}else{
					
					echo "Check Not Added , Please Check Your Fields";
					
					
					}
					
				}
				}
				
				?>