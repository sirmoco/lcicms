 <?php                               
                                         
			  include('../database/database.php');  
				if(!empty($_POST['branch_name']) && !empty($_POST['branch_id'])){
				
				$branch_name  = $_POST['branch_name'];
				$branch_location  = $_POST['branch_location'];
		    	$branch_head  = $_POST['branch_head'];
				$branch_id  = $_POST['branch_id'];
				
			
					
				
		$query ="UPDATE branch SET branch_name='".$branch_name."',branch_location='".$branch_location."'
		,branch_head='".$branch_head."' WHERE branch_id='".$branch_id."'" ; 
					
if($result = $process->numRows($query)){
					
					
				  echo "Branch has been edited to ".$branch_name." .";
				 
				
				}else{
					
					echo "Branch Not edited , Please Check Your Fields";
					
					
					}
										
				 
				
				
				
				}
				
				?>