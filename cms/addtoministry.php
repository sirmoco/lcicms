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
                     <li><a href="member_detail.php"><span class="fa fa-user"></span> My Profile</a></li>
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
					<?php
					$tablequeryheads="SELECT * FROM ministry WHERE ministry_id='".$_GET['ministry_id']."'";
										$tableresultheads = mysqli_query($process->connectDB(),$tablequeryheads);
		                                $tablerowsheads=$process->queryrow($tablequeryheads);  
										
										$tablerowsheads=mysqli_fetch_assoc($tableresultheads);
					
					?>
                        <h2 class="animated fadeInLeft" style="color:#0f9ec0;"><?php  echo $tablerowsheads['name'];  ?></h2>
                        <p class="animated fadeInDown">
                          Ministry <span class="fa-angle-right fa"></span> <?php  echo $tablerowsheads['name'];  ?>
                        </p>
                    </div>
                  </div>
              </div>
              <div class="top-20 padding-0">
			  <div class="row" style=" margin-top:10px; margin-right:10px; padding-left: 20px; " id="DontPrint">

                           <div class="col-md-12" >
                  <div class="row panel" style="border-radius:10px; -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;">
                   <?php
				   
				   
				    $tablequeryheads2="SELECT * FROM member WHERE memberid='".$tablerowsheads['head']."'";
										$tableresultheads2 = mysqli_query($process->connectDB(),$tablequeryheads2);
		                                $tablerowsheads2=$process->queryrow($tablequeryheads2);  
										
										$tablerowsheads2=mysqli_fetch_assoc($tableresultheads2);
				   
				   ?>
                    <div class=" panel-body" >
					 <div class="col-md-3" style="">
					 <div class="row" style=" ">
					  <div class="col-md-4" style=" max-height:90px; min-height:90px; max-width:90px;">
					  <img src="form/img/img_member/<?php  echo $tablerowsheads2['picture']; ?>" style="width:100%; height:100%;"/>
					  </div>
					  <div class="col-md-8" >
					  <h5 style="color:#0f9ec0;"><a href="member_detail.php?memberid=<?php echo $tablerowsheads2['memberid']; ?>&&member_detail=<?php echo $tablerowsheads2['lastname'].'_'.$tablerowsheads2['firstname']; ?>"><?php  echo $tablerowsheads2['firstname'].' '.$tablerowsheads2['lastname']; ?></a></h5>
					   <h5>MINISTRY HEAD</h5>
					  </div>
					  
					 </div>
					 <?php
					 $tablequeryass="SELECT * FROM member WHERE memberid='".$tablerowsheads['assistant']."'";
										$tableresultass = mysqli_query($process->connectDB(),$tablequeryass);
		                                $tablerowsass=$process->queryrow($tablequeryass);  
										
										$tablerowsass=mysqli_fetch_assoc($tableresultass);
				   
					 
					 ?>
					 <div class="row" style="">
					  <div class="col-md-4" style=" max-height:90px; min-height:90px; max-width:90px;">
					  <img src="form/img/img_member/<?php  echo $tablerowsass['picture']; ?>" style="width:100%; height:100%;"/>
					  </div>
					  <div class="col-md-8" >
					  <h5 style="color:#0f9ec0;"><a href="member_detail.php?memberid=<?php echo $tablerowsass['memberid']; ?>&&member_detail=<?php echo $tablerowsass['lastname'].'_'.$tablerowsass['firstname']; ?>"><?php  echo $tablerowsass['firstname'].' '.$tablerowsass['lastname']; ?></a></h5>
					   <h5>ASSISTANT</h5>
					  </div>
					  
					 </div>
					 
					 </div>
                     <div class="col-md-5">
					 <?php
					 if(isset($_POST['submitmin']) && !empty($_POST['name']) ){
				
				 date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				$name  = $_POST['name'];
				$head  = $_POST['head'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				
				$array_register['name'] = $name;
				$array_register['head'] = $head;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
					
					
						
					
		$query ="INSERT INTO ministry(ministry_id,name,head,date)
		VALUES(NULL,'".$name."','".$head."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
					$tablequeryhead2="SELECT * FROM ministry WHERE name='".$name."'";
										$tableresulthead2 = mysqli_query($process->connectDB(),$tablequeryhead2);
		                                $tablerowshead2=$process->queryrow($tablequeryhead2);  
		                               
											
										$tablerowshead2=mysqli_fetch_assoc($tableresulthead2);
					$query2 ="INSERT INTO ministry_member(ministrymember_id,ministry_id,head,memberid,date)
		VALUES(NULL,'".$tablerowshead2['ministry_id']."','".$head."','".$head."','".$date_uploaded."')" ;
		$result2 = $process->numRows($query2);
		
		$tablequeryhead3="SELECT * FROM member WHERE memberid='".$head."'";
										$tableresulthead3 = mysqli_query($process->connectDB(),$tablequeryhead3);
		                                $tablerowshead3=$process->queryrow($tablequeryhead3);  
		                               
											
										$tablerowshead3=mysqli_fetch_assoc($tableresulthead3);
				  echo '<center><h4 style="color:green;">Success! You have created '.$name.' ministry.</h4><br/>
				  <h5 style="color:green;">'.$tablerowshead3['firstname'].' '.$tablerowshead3['lastname'].' is now '.$name.' ministry head</h5>
				  </center>';
				  
				   
				
				}else{
					
					echo "Ministry created";
					
					
					}
					
				}else{
					echo "Couldnt create Ministry";
				}
				
				
				}else{
					echo '';
					
				}


?>
					  <?php
					  $tablequery="SELECT * FROM ministry_member WHERE ministry_id='".$_GET['ministry_id']."'";
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery); 
$num=mysqli_num_rows($tableresult);										
					  ?>
					  <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Members</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo $num;   ?></h1>
                                        <p></p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Meetings</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>320</h1>
                                        <p></p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
								
								
								<div class="col-md-6" style="border:2px solid;">
								
								
								
								</div>
                            </div>
					  
					  
							</div>
					  
					  
					  </div>
					  </div>
					  </div>
						
						  
                <div class="col-md-6">
                  <div class="panel">
				 
                    <div class="panel-heading" style=""><h3>Ministries</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
					 <?php  
				
	if(isset($_POST['assist']) && !empty($_POST['memberid']) && !empty($_POST['ministry_id'])){
				
				 date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				 $query="UPDATE ministry SET assistant='".$_POST['memberid']."', date='".$date_uploaded."' WHERE ministry_id='".$_POST['ministry_id']."'";
				$result = $process->numRows($query);
				$query2="UPDATE ministry_member SET assistant='".$_POST['memberid']."', date='".$date_uploaded."' WHERE ministry_id='".$_POST['ministry_id']."'";
				$result2 = $process->numRows($query2);
				
				if($result){
					echo '';
				}
				else{
					echo '';
				}
				if($result){
					 
					$tablequery3="SELECT * FROM member WHERE memberid  = '".$_POST['memberid']."'";
										$tableresult3 = mysqli_query($process->connectDB(),$tablequery3);
		                                $tablerows3=$process->queryrow($tablequery3);  
		                              
											
										$tablerows3=mysqli_fetch_assoc($tableresult3);
					
				  echo '<center><h5 style="color:green;">Success! You have made '.$tablerows3['lastname'].' '.$tablerows3['firstname'].' the assistant of this ministry</h5><br/> <a href="" class="btn btn-success" onClick="location.reload()" >OK</a></center>';
				  
				   echo '<script type="text/javascript">
location.reload();
window.stop();
</script>';
				
				}else{
					
					echo "Made Assistant";
					 
					
					}
					
				
				
				
				}else{
					echo '';
					
				}


?>

<?php  
				
	if(isset($_POST['head']) && !empty($_POST['memberid']) && !empty($_POST['ministry_id'])){
				
				 date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				 $query="UPDATE ministry SET head='".$_POST['memberid']."', date='".$date_uploaded."' WHERE ministry_id='".$_POST['ministry_id']."'";
				$result = $process->numRows($query);
				$query2="UPDATE ministry_member SET head='".$_POST['memberid']."', date='".$date_uploaded."' WHERE ministry_id='".$_POST['ministry_id']."'";
				$result2 = $process->numRows($query2);
				
				if($result){
					echo '';
				}
				else{
					echo '';
				}
				if($result){
					 
					$tablequery3="SELECT * FROM member WHERE memberid  = '".$_POST['memberid']."'";
										$tableresult3 = mysqli_query($process->connectDB(),$tablequery3);
		                                $tablerows3=$process->queryrow($tablequery3);  
		                              
											
										$tablerows3=mysqli_fetch_assoc($tableresult3);
					
				  echo '<center><h5 style="color:green;">Success! You have made '.$tablerows3['lastname'].' '.$tablerows3['firstname'].' the head of this ministry</h5><br/> <a href="" class="btn btn-success" onClick="location.reload()" >OK</a></center>';
				  
				   
				  echo '<script type="text/javascript">
location.reload();
window.stop();
</script>';
				}else{
					
					echo "Made Head";
					
					
					}
					
				
				
				
				}else{
					echo '';
					
				}


?>
                      <table id="datatables-example" class="table table-striped table-bordered datatable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						<th></th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					 <?php
										
										
		                                if($tablerows>0){
											
										while($tablerows=mysqli_fetch_assoc($tableresult)) {
										
										$tablequerym="SELECT * FROM member WHERE memberid='".$tablerows['memberid']."'";
										$tableresultm = mysqli_query($process->connectDB(),$tablequerym);
		                                $tablerowsm=$process->queryrow($tablequerym);  
		                              
											
										$tablerowsm=mysqli_fetch_assoc($tableresultm);
										
										
										
										  ?>  
						<tr>
						<td><img src="form/img/img_member/<?php echo $tablerowsm['picture']; ?>" style="width:40px; height:40px; border-radius:50%;"/></td>
                          <td><a href="member_detail.php?memberid=<?php echo $tablerowsm['memberid']; ?>&&member_detail=<?php echo $tablerowsm['lastname'].'_'.$tablerowsm['firstname']; ?>"><h5 style="color:#0f9ec0;"><b><?php echo $tablerowsm['firstname'].' '.$tablerowsm['lastname']; ?></b></h5></a></td>
                          <td><div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?memberid=<?php echo $tablerows['memberid']; ?>&&ministry_id=<?php echo $_GET['ministry_id']; ?>" >
						  <div id="message"></div>
						  <input type="hidden" name="memberid" value="<?php echo $tablerows['memberid']; ?>">
						   <input type="hidden" name="ministry_id" value="<?php echo $_GET['ministry_id']; ?>">
						  <input type="submit" name="head" class="btn btn-default" style="display:;" value="Head" />
						  </form>
						  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?memberid=<?php echo $tablerows['memberid']; ?>&&ministry_id=<?php echo $_GET['ministry_id']; ?>" >
						  <div id="message"></div>
						  <input type="hidden" name="memberid" value="<?php echo $tablerows['memberid']; ?>">
						   <input type="hidden" name="ministry_id" value="<?php echo $_GET['ministry_id']; ?>">
						  <input type="submit" name="assist" class="btn btn-default" style="display:;" value="Assist" />
						  </form>
						  </div> 
						  </td>
                       <td><div>
						  
						  <form method="post" action="remove_member.php?memberid=<?php echo $tablerows['memberid']; ?>&&ministry_id=<?php echo $_GET['ministry_id']; ?>" >
						  <div id="message"></div>
						  <input type="hidden" name="memberid" value="<?php echo $tablerows['memberid']; ?>">
						   <input type="hidden" name="ministry_id" value="<?php echo $_GET['ministry_id']; ?>">
						  <input type="submit" name="delete" class="btn btn-danger" style="display:;" value="X" /></div> 
						  </form> </div> 
						  </td>
						
						</tr>
						 <?php  }
											
											} 
											
											?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
			  
			  
			  
			  <div class="col-md-6">
                  <div class="panel">
                    <div class="panel-heading" style=""><h3 style=" "> Non ministry members </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
					 <?php  
				if(isset($_POST['add']) && !empty($_POST['ministry_id'])){
				
				 date_default_timezone_set('UTC');
				  $date_uploaded =date("r",time());
				  
				$ministry_id  = $_POST['ministry_id'];
				$memberid = $_POST['memberid'];
				
				//Database table data binding for users
				$array_register= $format_register = array();
				
				
				$array_register['ministry_id'] = $ministry_id;
				$array_register['memberid'] = $memberid;
				
				$process->format($array_register); 
				$error=$process->error();
				
				if($process->error()===true){
					
		$query ="INSERT INTO ministry_member(ministry_id,memberid,date)
		VALUES('".$ministry_id."','".$memberid."','".$date_uploaded."')" ;
				$result = $process->numRows($query);
				
				if($result){
				  echo '<center><h5 style="color:green;">Success! You have added a new member to ministry</h5><br/> <a href="" class="btn btn-success" onClick="location.reload()" >OK</a></center>';
				  
				   
				  echo '<script type="text/javascript">
location.reload();
window.stop();
</script>';
				
				}else{
					
					echo "Added";
					
					
					}
					
				}else{
					echo 'Not Added';
				}
				
				
				}else{
					echo 'Add Members';
					
				}

?>
                      <table id="datatables-example2" class="table table-striped table-bordered datatable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						<th></th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					 <?php
										
										$tablequerymem="SELECT * FROM member WHERE memberid NOT IN (SELECT memberid FROM ministry_member WHERE ministry_id='".$_GET['ministry_id']."')";
										$tableresultmem = mysqli_query($process->connectDB(),$tablequerymem);
		                                $tablerowsmem=$process->queryrow($tablequerymem);  
		                                if($tablerowsmem>0){
											
										while($tablerowsmem=mysqli_fetch_assoc($tableresultmem)) {
										
									
										  ?>  
						<tr>
						<td><img src="form/img/img_member/<?php echo $tablerowsmem['picture']; ?>" style="width:40px; height:40px; border-radius:50%;"/></td>
						  <td ><a href="member_detail.php?memberid=<?php echo $tablerowsmem['memberid']; ?>&&member_detail=<?php echo $tablerowsmem['lastname'].'_'.$tablerowsmem['firstname']; ?>"><h5 style="color:#0f9ec0;"><b><?php echo $tablerowsmem['firstname'].' '.$tablerowsmem['lastname']; ?></b></h5></a></td>
                          
                          
						  <td>
						  <div>
						  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?ministry_id=<?php echo $_GET['ministry_id']; ?>">
						 <input type="hidden" name="ministry_id" value="<?php echo $_GET['ministry_id']; ?>">
						 <input type="hidden" name="memberid" value="<?php echo $tablerowsmem['memberid']; ?>">
						  <input type="submit" name="add" id="show"  class="btn btn-primary" value="+"> 
						 </form>
						  </div> 
						  
						  </td>
                       
						
						</tr>
						 <?php  }
											
											} 
											
											?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div> 
			  
			  
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

    <!-- start: Mobile -->
       
            
                <?php echo mobile_menu(); ?>
          
              
       <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-mobile">
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

<script src="asset/js/plugins/select2.full.min.js"></script>


<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>

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
			$(document).on('submit','#linkshep',function(e) {
                 e.preventDefault();	
 var message = $(this).find('#message');	
          var press = $(this);	
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"linkshep.php",
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

<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });
</script>
</body>
</html>