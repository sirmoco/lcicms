 <?php  
			include('database/database.php');
include('loadmenu.php');

		    date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				if(isset($_POST['privilege']) && !empty($_POST['administrator']) || !empty($_POST['shepherd']) || !empty($_POST['ministry_head']) || !empty($_POST['information'])
					|| !empty($_POST['account']) || !empty($_POST['follow_up']) || !empty($_POST['data_entry'])){
			
			if(!empty($_POST['administrator'])){
					$administrator=$_POST['administrator'];
				}else{
					$administrator=0;
					
				}
			
			if(!empty($_POST['ministry_head'])){
					$ministry_head=$_POST['ministry_head'];
				}else{
					$ministry_head=0;
					
				}
				if(!empty($_POST['shepherd'])){
					$shepherd=$_POST['shepherd'];
				}else{
					$shepherd=0;
					
				}
				if(!empty($_POST['account'])){
					$account=$_POST['account'];
				}else{
					$account=0;
					
				}
				if(!empty($_POST['information'])){
					$information=$_POST['information'];
				}else{
					$information=0;
					
				}
				if(!empty($_POST['data_entry'])){
					$data_entry=$_POST['data_entry'];
				}else{
					$data_entry=0;
					
				}
				if(!empty($_POST['follow_up'])){
					$follow_up=$_POST['follow_up'];
				}else{
					$follow_up=0;
					
				}
				$accountid=$_POST['accountid'];
				
				
				  $code=1;
				   $query="UPDATE accounts SET account_type='".$code."', administrator='".$administrator."', ministry_head='".$ministry_head."', shepherd='".$shepherd."',
					data_entry='".$data_entry."', follow_up='".$follow_up."', account='".$account."', information='".$information."',
					date='".$date_uploaded."' WHERE accountid='".$accountid."'";
              
           if($process->numRows($query)){
               
				 
                          echo '<script type="text/javascript">';
        echo 'window.location.href="assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'" />';
        echo '</noscript>'; exit;
               
            }else{
                
                echo '<script type="text/javascript">';
        echo 'window.location.href="assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'" />';
        echo '</noscript>'; exit;
               
                
            }
         
     }
    else if(isset($_POST['privilege']) && empty($_POST['administrator']) && empty($_POST['shepherd']) && empty($_POST['ministry_head']) && empty($_POST['information'])
					&& empty($_POST['account']) && empty($_POST['follow_up']) && empty($_POST['data_entry'])){
			$accountid=$_POST['accountid'];
			if(!empty($_POST['administrator'])){
					$administrator=$_POST['administrator'];
				}else{
					$administrator=0;
					
				}
				if(!empty($_POST['ministry_head'])){
					$ministry_head=$_POST['ministry_head'];
				}else{
					$ministry_head=0;
					
				}
				if(!empty($_POST['shepherd'])){
					$shepherd=$_POST['shepherd'];
				}else{
					$shepherd=0;
					
				}
				if(!empty($_POST['account'])){
					$account=$_POST['account'];
				}else{
					$account=0;
					
				}
				if(!empty($_POST['information'])){
					$information=$_POST['information'];
				}else{
					$information=0;
					
				}
				if(!empty($_POST['data_entry'])){
					$data_entry=$_POST['data_entry'];
				}else{
					$data_entry=0;
					
				}
				if(!empty($_POST['follow_up'])){
					$follow_up=$_POST['follow_up'];
				}else{
					$follow_up=0;
					
				}
				
						
      
      $code=0;
				   $query="UPDATE accounts SET account_type='".$code."', administrator='".$administrator."', ministry_head='".$ministry_head."', shepherd='".$shepherd."',
					data_entry='".$data_entry."', follow_up='".$follow_up."', account='".$account."', information='".$information."',
					date='".$date_uploaded."' WHERE accountid='".$accountid."'";
              
           if($process->numRows($query)){
               
				    echo '<script type="text/javascript">';
        echo 'window.location.href="assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'" />';
        echo '</noscript>'; exit;
                   
               
            }else{
                
                echo '<script type="text/javascript">';
        echo 'window.location.href="assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=assignuser.php?accountid='.$_GET['accountid'].'&&memberid='.$_GET['memberid'].'" />';
        echo '</noscript>'; exit;
               
            }
       
  }else{
	  
	  echo '';
  }

?>