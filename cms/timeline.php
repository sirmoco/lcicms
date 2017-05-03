 <?php 


include('database/database.php');
include('loadmenu.php');

session_start();
if(empty($_SESSION['accountid']))
{

echo '<script type="text/javascript">';
        echo 'window.location.href="../index.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        echo '</noscript>'; exit;
}
else
{

}

?>

 
 
 <ul class="timeline">
				  
				  <?php
				  
				  
				  $querypost="SELECT * FROM timelinepost ORDER BY timelinepostid DESC";
										$postresult= mysqli_query($process->connectDB(),$querypost);
		                                $postrows=$process->queryrow($querypost);  
										
										 if($postrows>0){
										while($postrow=mysqli_fetch_assoc($postresult)){
											
										 $querypostname="SELECT * FROM member WHERE memberid='".$postrow['memberid']."'";
										$postresultname= mysqli_query($process->connectDB(),$querypostname);
		                                $postrowsname=$process->queryrow($querypostname);  
										$postrowname=mysqli_fetch_assoc($postresultname);
				 
				if($postrow['accountid']==$_SESSION['accountid']){
				 ?>
				  
				  
                    <li>
                      <div class="timeline-badge"><img src="form/img/img_member/<?php echo $postrowname['picture']; ?>" style="max-width:60px; max-height:50px; border-radius:50%; border:4px solid #1c84c6 ;" /></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title" style="color:#337ab7;"><?php  echo $postrowname['firstname'].' '.$postrowname['lastname'];  ?></h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo $postrow['date']; ?></small></p>
                        </div>
                        <div class="timeline-body">
                          <p style="color:#000;"><?php echo $postrow['timelinepost']; ?></p>
                        </div>
                      </div>
                    </li>
					<?php
				}else{
					?>
                    <li class="timeline-inverted">
                      <div class="timeline-badge warning"><img src="form/img/img_member/<?php echo $postrowname['picture']; ?>" style="max-width:50px; max-height:60px; border-radius:50%; border:4px solid green;" /></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title"><?php  echo $postrowname['firstname'].' '.$postrowname['lastname'];  ?></h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo $postrow['date']; ?></small></p>
                        </div>
                        <div class="timeline-body">
                          <p><?php echo $postrow['timelinepost']; ?></p>
                        </div>
                      </div>
                    </li>
						<?php	
				}
						}}else{
											 
											 echo 'No posts available';
											 
										 }
										 ?>
                  </ul>