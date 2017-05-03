<?php      
 include("database/database.php");
  if(isset($_POST['delete']) && !empty($_POST['memberid'])){
   
				
				
					$query3 ="UPDATE ministry SET assistant=0 WHERE assistant='".$_POST['memberid']."' && ministry_id='".$_POST['ministry_id']."'" ;
					$query4 ="UPDATE ministry SET head=0 WHERE head='".$_POST['memberid']."' && ministry_id='".$_POST['ministry_id']."'" ;
		
		$result = $process->numRows($query3);
				
				if($result){
					
					$query="DELETE FROM ministry_member WHERE memberid='".$_POST['memberid']."' && ministry_id='".$_POST['ministry_id']."'";
					
					if($process->numRows($query)){
						  echo '<script type="text/javascript">';
        echo 'window.location.href="addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'" />';
        echo '</noscript>'; exit;
					}else{
						 echo '<script type="text/javascript">';
        echo 'window.location.href="addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'" />';
        echo '</noscript>'; exit;
					}
				
				
				}else{
					 echo '<script type="text/javascript">';
        echo 'window.location.href="addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'" />';
        echo '</noscript>'; exit;
				}
         
     
  }else{
      
      
      echo "not set";
       echo '<script type="text/javascript">';
        echo 'window.location.href="addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=addtoministry.php?memberid='.$_POST['memberid'].'&&ministry_id='.$_POST['ministry_id'].'" />';
        echo '</noscript>'; exit;   
  }

?>