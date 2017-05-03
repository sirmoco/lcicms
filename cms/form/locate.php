  <?php  
		  include('database/database.php');
include('loadmenu.php'); 		
	if(isset($_POST['locate']) && !empty($_POST['lat']) && !empty($_POST['lng'])){
				
				
				  
				 $query="UPDATE member SET lat='".$_POST['lat']."', lng='".$_POST['lng']."' WHERE memberid='".$_POST['memberid']."'";
				$result = $process->numRows($query);
				
				
				if($result){
					echo 'location done';
				}
				else{
					echo 'not done';
				}
	}  
					  ?>