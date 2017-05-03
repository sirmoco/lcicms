<!DOCTYPE html>
<html lang="en">
<head>
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
  <meta charset="utf-8">
  <meta name="description" content="LCICMS Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LCICMS</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="LCICMS" class="dashboard">
 <?php
										
										$tablequeryhead="SELECT * FROM member INNER JOIN accounts ON accounts.memberid=member.memberid WHERE accounts.accountid='".$_SESSION['accountid']."'";
										$tableresulthead = mysqli_query($process->connectDB(),$tablequeryhead);
		                                $tablerowshead=$process->queryrow($tablequeryhead);  
										$tablerowshead=mysqli_fetch_assoc($tableresulthead);
										
									   $tablequery="SELECT * FROM ministry_member WHERE memberid='".$tablerowshead['memberid']."'";
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery); 
										$ministrynum=mysqli_num_rows($tableresult);	
										
										$tablequery="SELECT * FROM assignment WHERE shepherd='".$tablerowshead['memberid']."'";
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery); 
										$sheepnum=mysqli_num_rows($tableresult);	
										  ?> 
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.php" class="navbar-brand"> 
                 <b>LCICMS</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search"><b>Search</b> for church members </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $tablerowshead['firstname'].' '.$tablerowshead['lastname']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="form/img/img_member/<?php echo $tablerowshead['picture']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href="manage_account.php"><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="../index.php"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid LCICMS-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <?php echo left_menu();  ?>
			 </div>
          <!-- end: Left Menu -->


            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Member Privileges</h3>
                        <p class="animated fadeInDown">
                          Accounts <span class="fa-angle-right fa"></span> Privileges
                        </p>
                    </div>
                  </div>
              </div>
			  
			  
			
              <div class="top-20 padding-0">
			   <?php
										
										$tablequeryacc="SELECT * FROM accounts WHERE accountid='".$_SESSION['accountid']."' && memberid='".$_SESSION['memberid']."'";
										$tableresultacc = mysqli_query($process->connectDB(),$tablequeryacc);
		                                $tablerowsacc=$process->queryrow($tablequeryacc);  
		                                if($tablerowsacc>0){
											
										$tablerowsacc=mysqli_fetch_assoc($tableresultacc);
										$tablequerymem="SELECT * FROM member WHERE memberid='".$tablerowsacc['memberid']."'";
										$tableresultmem = mysqli_query($process->connectDB(),$tablequerymem);
		                                $tablerowsmem=$process->queryrow($tablequerymem); 
										$tablerowsmem=mysqli_fetch_assoc($tableresultmem);
										  ?> 
			  <div class="row">
				<div class="col-md-3">
                  <div class="panel">
                    <div class="panel-heading" style="background:#fff;"><h3 style="color:#0f95fc; "><?php echo $tablerowsmem['salutation'].' '.$tablerowsmem['lastname'].' '.$tablerowsmem['firstname']; ?></h3></div>
                    <div class="panel-body">
                      <div class="responsive-table" style="border:4px solid #0f95fc; min-height:200px; min-width:200px;
						max-width:200px;
					  border-radius:50%;">
					  <img src="form/img/img_member/<?php echo $tablerowsmem['picture']; ?>" style=" min-height:192px; min-width:192px;
						max-width:192px;
					  border-radius:50%;"/>
					  
					  </div>
					  </div>
					  </div>
					  </div>
					  
					  <div class="col-md-6">
					  
					  
                  <div class="panel">
                    <div class="panel-heading" style="background:#fff;"><h6 style="color:green; ">Member Privileges</h6></div>
                    <div class="panel-body">
                      <div class="responsive-table">
					  <form class="cmxform" method="post" action="doprivilege.php?accountid=<?php echo $tablerowsacc['accountid']; ?>&&memberid=<?php echo $tablerowsacc['memberid']; ?>" >
					 <div class="col-md-12">
					  
                              <div class="form-group form-animate-checkbox">
							  <?php
							  if($tablerowsacc['administrator']==0){
								  ?>
								   <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="administrator">
                                  <label><b> ADMINISTRATOR</b> (<i style="color:#FECE1A;">Gives full access to the system. </i>)</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="administrator" checked>
                                  <label style="color:#0f95fc;"><b> ADMINISTRATOR</b> (<i style="color:green;">Has full access to the system. </i>)</label> 
							 <?php 
							 }
							 ?>
                                 
                              </div>
                             
                        </div>

					 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							  <?php
							  if($tablerowsacc['shepherd']==0){
								  ?>
								   <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="shepherd">
                                  <label>SHEPHERD</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="shepherd" checked>
                                  <label style="color:#0f95fc;">SHEPHERD</label> 
							 <?php 
							 }
							 ?>
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
                              <div class="form-group form-animate-checkbox">
							  <?php
							  if($tablerowsacc['information']==0){
								  ?>
								    <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="information"/>
                                  <label>INFORMATION</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="information" checked>
                                  <label style="color:#0f95fc;">INFORMATION</label> 
							 <?php 
							 }
							 ?>
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
                              <div class="form-group form-animate-checkbox">
                                  
								  <?php
							  if($tablerowsacc['follow_up']==0){
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="follow_up"/>
                                  <label>FOLLOW UP</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="follow_up" checked>
                                  <label style="color:#0f95fc;">FOLLOW UP</label> 
							 <?php 
							 }
							 ?>
								  

                              </div>
                             
                        </div>
						 <div class="col-md-6">
                              <div class="form-group form-animate-checkbox">
							   <?php
							  if($tablerowsacc['data_entry']==0){
								  ?>
								  <input type="checkbox" class="checkbox" value="1" id="validate_agree" name="data_entry"/>
                                  <label>DATA ENTRY</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="data_entry" checked>
                                  <label style="color:#0f95fc;">DATA ENTRY</label> 
							 <?php 
							 }
							 ?>
                                
                              </div>
                        </div>
						 <div class="col-md-6">
                              <div class="form-group form-animate-checkbox">
                                 							   <?php
							  if($tablerowsacc['ministry_head']==0){
								  ?>
								 <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="ministry_head"/>
                                  <label>HEAD MINISTRY</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="ministry_head" checked>
                                  <label style="color:#0f95fc;">HEAD MINISTRY</label> 
							 <?php 
							 }
							 ?>

                              </div>
                              
                        </div>
						 <div class="col-md-6">
                              <div class="form-group form-animate-checkbox">
                                  		   <?php
							  if($tablerowsacc['account']==0){
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="account" >
                                  <label>ACCOUNTS</label>
								  <?php
							  }else{
								  ?>
								  <input type="checkbox" class="checkbox" value="1"  id="validate_agree" name="account" checked>
                                  <label style="color:#0f95fc;">ACCOUNTS</label> 
							 <?php 
							 }
							 ?>
								 
                              </div>
							  <input type="hidden"  value="<?php echo $tablerowsacc['accountid']; ?>"   name="accountid" >
                              <input class="submit btn btn-primary" type="submit" value="Save Privileges" name="privilege"/>
                        </div>
						</form>
					  
					  </div>
					  </div>
					  </div>
					  </div>
			  
			  
			  </div>
			  
			  <div class="row" style=" margin-top:10px; margin-right:10px; padding-left: 20px; border:2px solid red;" id="DontPrint">

                        <?php
							  if($tablerowsacc['shepherd']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">SHEPHERD</h5></div>
                    <div class=" row panel-body">
                     <a href="linkshepherd.php?memberid=<?php echo $_GET['memberid']; ?>&&accountid=<?php echo $_GET['accountid']; ?>&&last=<?php echo $tablerowsmem['lastname']; ?>&&first=<?php echo $tablerowsmem['firstname']; ?>" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Assign Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
				
			   <?php
							  if($tablerowsacc['information']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">INFORMATION</h5></div>
                    <div class=" row panel-body">
 <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
							  
							   <?php
							  if($tablerowsacc['ministry_head']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">MINISTRY</h5></div>
                    <div class=" row panel-body">
                      <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
							  
							   <?php
							  if($tablerowsacc['account']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">ACCOUNTS</h5></div>
                    <div class=" row panel-body">
                      <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
							  
							   <?php
							  if($tablerowsacc['data_entry']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">DATA ENTRY</h5></div>
                    <div class=" row panel-body">
                     <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
			  
			   <?php
							  if($tablerowsacc['follow_up']!=0){
								  ?>
								  
						<div class="col-md-6">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">VISITATION</h5></div>
                    <div class=" row panel-body">
                      <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  
					   <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  <a href="" class="link"> <div class="responsive-table col-md-4" style="background:#0f95fc; border-radius:5px;
					 -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
					 border:4px solid #0f95fc; max-width:150px; max-height:150px; margin:5px; ">
					  <img src="asset/img/About.png" style=" width:100%; height:100%; "/>
					  <div class="panel-heading" style="background:#fff;"><h6 style="color:#0f95fc; ">Sheeps</h6></div>
					  </div></a>
					  </div>
					  </div>
					  </div>
					  <?php
							  }
							  ?>
			  
			  
			  
              </div>
            </div>
          <!-- end: content -->



          <!-- start: right menu -->
            <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">
                 <a data-toggle="tab" href="#right-menu-user">
                  <span class="fa fa-comment-o fa-2x"></span>
                 </a>
                </li>
                <li>
                 <a data-toggle="tab" href="#right-menu-notif">
                  <span class="fa fa-bell-o fa-2x"></span>
                 </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#right-menu-config">
                   <span class="fa fa-cog fa-2x"></span>
                  </a>
                 </li>
              </ul>

              <div class="tab-content">
                <div id="right-menu-user" class="tab-pane fade in active">
                  <div class="search col-md-12">
                    <input type="text" placeholder="search.."/>
                  </div>
                  <div class="user col-md-12">
                   <ul class="nav nav-list">
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="away">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-desktop"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>

                  </ul>
                </div>
                <!-- Chatbox -->
                <div class="col-md-12 chatbox">
                  <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Kpabitey Emmanuel</h4>
                  </div>
                  <div class="chat-area">
                    <div class="chat-area-content">
                      <div class="msg_container_base">
                        <div class="row msg_container send">
                          <div class="col-md-9 col-xs-9 bubble">
                            <div class="messages msg_sent">
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                  tiny master db, and huge document store</p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                      tiny master db, and huge document store</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                          tiny master db, and huge document store</p>
                                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-input">
                                <textarea placeholder="type your message here.."></textarea>
                              </div>
                              <div class="user-list">
                                <ul>
                                  <li class="online">
                                    <a href=""  data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div id="right-menu-notif" class="tab-pane fade">

                            <ul class="mini-timeline">
                              <li class="mini-timeline-highlight">
                               <div class="mini-timeline-panel">
                                <h5 class="time">07:00</h5>
                                <p>Coding!!</p>
                              </div>
                            </li>

                            <li class="mini-timeline-highlight">
                             <div class="mini-timeline-panel">
                              <h5 class="time">09:00</h5>
                              <p>Playing The Games</p>
                            </div>
                          </li>
                          <li class="mini-timeline-highlight">
                           <div class="mini-timeline-panel">
                            <h5 class="time">12:00</h5>
                            <p>Meeting with <a href="#">Clients</a></p>
                          </div>
                        </li>
                        <li class="mini-timeline-highlight mini-timeline-warning">
                         <div class="mini-timeline-panel">
                          <h5 class="time">15:00</h5>
                          <p>Breakdown the Personal PC</p>
                        </div>
                      </li>
                      <li class="mini-timeline-highlight mini-timeline-info">
                       <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Checking Server!</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-success">
                      <div class="mini-timeline-panel">
                        <h5 class="time">16:01</h5>
                        <p>Hacking The public wifi</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-danger">
                      <div class="mini-timeline-panel">
                        <h5 class="time">21:00</h5>
                        <p>Sleep!</p>
                      </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>

                </div>
                <div id="right-menu-config" class="tab-pane fade">
                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Notification</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-info">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Custom Designer</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch-label" for="myonoffswitch2"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Autologin</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Hacking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                        <label class="onoffswitch-label" for="myonoffswitch4"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto locking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                        <label class="onoffswitch-label" for="myonoffswitch5"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>FireWall</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                        <label class="onoffswitch-label" for="myonoffswitch6"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>CSRF Max</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                        <label class="onoffswitch-label" for="myonoffswitch7"></label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Man In The Middle</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
                        <label class="onoffswitch-label" for="myonoffswitch8"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Repair</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
                        <label class="onoffswitch-label" for="myonoffswitch9"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="button" value="More.." class="btnmore">
                  </div>

                </div>
              </div>
            </div>  
          <!-- end: right menu -->
          
      </div>
<?php
										}else{
											echo 'Something Went Wrong';
										}
?>
      <!-- start: Mobile -->
       
            
                <?php echo mobile_menu(); ?>
          
              
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-primary">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="asset/js/plugins/datatables/jquery.dataTables.min.js"></script>  

        <script type="text/javascript" src="asset/js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="asset/js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="asset/js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="asset/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="asset/js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="asset/js/plugins/tableexport/jspdf/libs/base64.js"></script>     
<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example2').DataTable();
  });
</script>
<!-- end: Javascript -->
<script type="text/javascript">

$(document).ready(function(){
			$(document).on('submit','#makeuser',function(e) {
                 e.preventDefault();	
 var message = $(this).find('#message');	
          var press = $(this);	
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"makeuser.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#message').text(response);
					  press.css('display','none');
					  $('#show').css('display','');
					 }		   		   
		   
	         });
	     	 

       });
  
              
		}); 

</script>
</body>
</html>