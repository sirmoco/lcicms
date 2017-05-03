<?php      
 include("database/database.php");
  if(isset($_POST['delete']) && !empty($_POST['memberid'])){
   
				
				
				
		$query="DELETE FROM accounts WHERE memberid='".$_POST['memberid']."'";
		$result = $process->numRows($query);
				
				if($result){
					
			  
				 echo '<script type="text/javascript">';
        echo 'window.location.href="accounts.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=accounts.php" />';
        echo '</noscript>'; exit;
              
				}else{
					
					 echo '<script type="text/javascript">';
        echo 'window.location.href="accounts.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=accounts.php" />';
        echo '</noscript>'; exit;
				}
         
     
  }else{
      
      
      echo "not set";
       
	    echo '<script type="text/javascript">';
        echo 'window.location.href="accounts.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=accounts.php" />';
        echo '</noscript>'; exit;
  }

?>