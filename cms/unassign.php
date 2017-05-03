<?php      
 include("database/database.php");
  if(isset($_POST['sheep'] && $_POST['memberid'])){
	  
   
    $query="DELETE FROM assignment WHERE assignment_id IN(SELECT assignment_id FROM assignment WHERE sheep='".$_POST['sheep']."' && shepherd='".$_POST['memberid']."' )";
              
           $result = $process->numRows($query);
               
				 if($result){
				  echo " Was un-assigned Successfully";
				 
				  echo '<script type="text/javascript">';
        echo 'window.location.href="linkshepherd.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=linkshepherd.php" />';
        echo '</noscript>'; exit;
				
				}else{
					
					echo "Something went wrong, contact your admin";
					
						  echo '<script type="text/javascript">';
        echo 'window.location.href="linkshepherd.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=linkshepherd.php" />';
        echo '</noscript>'; exit;
					}
         
    
}
?>