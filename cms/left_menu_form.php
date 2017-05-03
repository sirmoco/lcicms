<?php

function left_menu_form(){
?>


<div class="sub-left-menu scroll">
                
             
<ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="../index.php">Main Dashboard</a></li>
                          <li><a href="../member_detail.php">Profile</a></li>
						  
                      </ul>
                    </li>
                   <?php
				   if($_SESSION['administrator']==1){
					   
				   ?>
				    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Branches  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <?php
					  if(!empty($_SESSION['administrator'])){
						 
					  ?>
                        <li><a href="branch.php">+Add Branch</a></li>
						<li><a href="">Branch Members</a></li>
						
						
						<?php
					  }else{
						  
						  echo '';
					  }
						?>
						<li><a href="#">My Branch</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <?php
					  if(!empty($_SESSION['administrator'])){
						 
					  ?>
                        <li><a href="memberregistrationform.php">+New Member</a></li>
						<li><a href="../createaccount.php">Create Accounts</a></li>
						<li><a href="../accounts.php">View Accounts</a></li>
						<?php
						}elseif(!empty($_SESSION['data_entry'])){
							?>
							<li><a href="memberregistrationform.php">+New Member</a></li>
						
						<?php
					  }else{
						  
						  echo '';
					  }
						?>
						<li><a href="../members.php">View Members</a></li>
						<li><a href="../linkshepherd.php?memberid=<?php echo $_SESSION['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li>
                    <?php
				   }elseif(!empty($_SESSION['data_entry'])){
					   ?>
					<li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                      <li><a href="form/memberregistrationform.php">+New Member</a></li>
                      <li><a href="../members.php">View Members</a></li>
						<li><a href="linkshepherd.php?memberid=<?php echo $_SESSION['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li> 
					<?php
				   }else{
					   ?>
					<li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
						<li><a href="../linkshepherd.php?memberid=<?php echo $_SESSION['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li>   
				   <?php
				   }   
				   ?>
					 <?php
					  if(!empty($_SESSION['ministry_head'])){
						 
					  ?>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Ministry  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="../ministry.php">Ministry</a></li>
                      </ul>
                    </li>
					<?php
					  }else{
						  echo '';
					  }
					?>
					 <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Attendance <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <li><a href="myattendance.php">Member Attendance</a></li>
                        <li><a href="my_notpresent.php">Members Absent</a></li>
                        <li><a href="my_visitations.php">Visitation</a></li>
                      </ul>
                    </li>
                    
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Report <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="../reporting.php">Create New Report</a></li>
                        <li><a href="#">View Old Reports</a></li>
                        <li><a href="#">View Mail</a></li>
                      </ul>
                    </li>
                    
                  </ul>
				  
				   </div>  
				<?php
}
				?>

<?php

function mobile_menu(){
?>

      <div id="mimin-mobile" class="reverse">
 <div class="mimin-mobile-menu-list">
<div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
    
<ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="../index.php">Main Dashboard</a></li>
                          <li><a href="../member_detail.php">Profile</a></li>
						  
                      </ul>
                    </li>
                   <?php
				   if($_SESSION['administrator']==1){
					   
				   ?>
				    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Branches  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <?php
					  if(!empty($_SESSION['administrator'])){
						 
					  ?>
                        <li><a href="form/branch.php">+Add Branch</a></li>
						<li><a href="">Branch Members</a></li>
						
						
						<?php
					  }else{
						  
						  echo '';
					  }
						?>
						<li><a href="#">My Branch</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <?php
					  if(!empty($_SESSION['administrator'])){
						 
					  ?>
                        <li><a href="memberregistrationform.php">+New Member</a></li>
						<li><a href="../createaccount.php">Create Accounts</a></li>
						<li><a href="../accounts.php">View Accounts</a></li>
						
						<?php
					  }else{
						  
						  echo '';
					  }
						?>
						<li><a href="../members.php">View Members</a></li>
						<li><a href="../linkshepherd.php?memberid=<?php echo $tablerowshead['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li>
                    <?php
				   }elseif(!empty($_SESSION['data_entry'])){
					   ?>
					<li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                      <li><a href="form/memberregistrationform.php">+New Member</a></li>
                      <li><a href="../members.php">View Members</a></li>
						<li><a href="linkshepherd.php?memberid=<?php echo $tablerowshead['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li> 
					<?php
				   }else{
					   ?>
					<li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Membership  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
						<li><a href="../linkshepherd.php?memberid=<?php echo $tablerowshead['memberid']; ?>&&accountid=<?php echo $_SESSION['accountid']; ?>">Members Assigned</a></li>
                        
                      </ul>
                    </li>   
				   <?php
				   }   
				   ?>
					 <?php
					  if(!empty($_SESSION['ministry_head'])){
						 
					  ?>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Ministry  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="../ministry.php">Ministry</a></li>
                      </ul>
                    </li>
					<?php
					  }else{
						  echo '';
					  }
					?>
					 <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Attendance <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
					  <li><a href="myattendance.php">Member Attendance</a></li>
                        <li><a href="my_notpresent.php">Members Absent</a></li>
                        <li><a href="my_visitations.php">Visitation</a></li>
                      </ul>
                    </li>
                    
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Report <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="../reporting.php">Create New Report</a></li>
                        <li><a href="#">View Old Reports</a></li>
                        <li><a href="#">View Mail</a></li>
                      </ul>
                    </li>
                    
                  </ul>
			</div>	 
			</div> 
			</div>
			
			   
				<?php
}
				?>