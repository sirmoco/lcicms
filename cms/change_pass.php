 <?php                               
                                         
			  include('database/database.php');  
				if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['accountid'])){
				
				$password  = $_POST['password'];
				$confirm_password  = $_POST['confirm_password'];
				
				
				
				
		$query ="UPDATE accounts SET password='".md5($password)."',realpass='".$password."' WHERE accountid='".$_POST['accountid']."'" ;
				
				
				if($result = $process->numRows($query)){
				  echo 	"Your Password Changed Successfully.";
				  echo '<script type="text/javascript">';
        echo 'window.location.href="manage_account.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=manage_account.php" />';
        echo '</noscript>'; exit;
				
				}else{
					
					echo "Your Password Couldn't Change";
					 echo '<script type="text/javascript">';
        echo 'window.location.href="manage_account.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=manage_account.php" />';
        echo '</noscript>'; exit;
					
					}
					
				
				}
				
				?>