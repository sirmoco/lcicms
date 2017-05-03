<!DOCTYPE html>
<?php
 include('../database/database.php'); 
 include('../left_menu_form.php');
session_start();
echo '<input type=hidden value='.$_SESSION['accountid'].'/>';
if($_SESSION['accountid']==0)
{
header("Location:../../index.php");
}
else
{
echo '<input type=hidden value='.$_SESSION['accountid'].'/>';
}

 
 ?>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="LCICMS">
	<meta name="author" content="Mocominds">
	<meta name="keyword" content="Lighthuose Chapel International,Mocominds,LCICMS">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LCICMS</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

 
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/select2.min.css"/>
  
  <link href="../asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	   <link href="../asset/css/style.css" rel="stylesheet">
	   
	   <style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		form { margin-top: 0px; }
		form input { margin-right: 15px; }
		#results {  margin:0px; padding:0px; border:0px; background:#fff; }
	</style>
	
	 <link href="select2.css" rel="stylesheet"/>
    <script src="jquery-1.8.0.min.js"></script>
    <script src="select2.js"></script>
    <script>
        $(document).ready(function() {
            $("#states").select2();   
        });
    </script>
	
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
                <a href="../index.php" class="navbar-brand"> 
                 <b>LCICMS</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text"  >
                      <span class="bar"></span>
                      <label class="label-search"><b>Search</b> for church members </label>
                    </div>
                  </div>
                </li>
              </ul>

                           <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $tablerowshead['firstname'].' '.$tablerowshead['lastname']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="img/img_member/<?php echo $tablerowshead['picture']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="../member_detail.php"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href="../manage_account.php"><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="../../index.php"><span class="fa fa-power-off "></span></a></li>
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
            <?php echo left_menu_form(); ?>
			</div>
          <!-- end: Left Menu -->


        <!-- start: Content -->
          <div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">New Branch Form</h3>
                        <p class="animated fadeInDown">
                          Forms <span class="fa-angle-right fa"></span> Branch
                        </p>
                    </div>
                  </div>
              </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                       
                  <div class="col-md-12 panel">
                    
                    <div class="row panel-body" style="padding-bottom:30px; ">
					<center></center>
                      <div class="col-md-12" style=" padding-top:30px;">
					  
					     
                        <form enctype="multipart/form-data" class="cmxform row" id="signupForm" method="post" style="">
                        <div class="col-md-9">
						  <div class=" row">
                             
						 
						   <div class="form-group form-animate-text col-md-4" >
                              <input type="text" class="form-text"  pattern="[A-Za-z]+" style=" color:#337ab7;" name="branch_name" required>
                              <span class="bar"></span>
                              <label>Branch Name</label>
                            </div>

                            <div class="form-group form-animate-text col-md-5" >
                              <input type="text" class="form-text"  pattern="[A-Za-z]+" style=" color:#337ab7;" name="branch_location" required>
                              <span class="bar"></span>
                              <label>Branch Lacation</label>
                            </div>

                            </div>
						  
						  
						
							<div class="row">
							<div class="col-md-6">
                           <div class="row" >
							<div class="form-group form-animate-text col-md-4" >
                              <select style="width:300px" id="states" name="branch_head"  onChange="cp_field(this);"  style=" color:#337ab7;" >
							   <option value="">Branch Head</option>
							  <?php
										$tablequery="SELECT * FROM member ";
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery);  
		                                if($tablerows>0){
											
										while($tablerows=mysqli_fetch_assoc($tableresult)) {
			       
										  ?> 
                   <option value="<?php echo $tablerows['memberid']; ?>"><?php echo $tablerows['firstname'].' '.$tablerows['lastname'] ; ?></option>
                  
           
                              <?php
										}}
							  
							  
							  ?>
							     </select>
                            </div>
							</div>
							
						
							</div>
							
							</div>
							
							
							 <div class="col-md-row" style="margin-top:10px;">
                              
                            <center>  <input class="submit btn btn-success" type="submit" value="Add Branch" name="submit">
							<div class="message" id="message" style="font-weight:50px; color:green; font-size:24px;"></div>
							</center>
                        </div>
							</div>
						
                          
                      </form>
					
                    </div>
                  </div>
                </div>
                
              
  
                
                
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Branch list</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
					 
                      <table id="datatables-example" class="table table-striped table-bordered datatable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          
                          <th>Branch</th>
                          <th>Location</th>
                          <th>Head</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php
								
    
				  
					 	$branchquery="SELECT * FROM branch";
										$branchresult = mysqli_query($process->connectDB(),$branchquery);
		                                $branchrows=$process->queryrow($branchquery);  
		                                if($branchrows>0){
										while($branchrows=mysqli_fetch_assoc($branchresult)) {
			                             
			                             $headquery="SELECT * FROM member WHERE memberid='".$branchrows['branch_head']."'";
										$headresult = mysqli_query($process->connectDB(),$headquery);
		                                $headrows=$process->queryrow($headquery); 
										$headrows=mysqli_fetch_assoc($headresult);
											?>
		                                
						<tr>
                         
                          <td><?php echo $branchrows['branch_name']; ?></td>
                           <td><?php echo $branchrows['branch_location']; ?></td>
                            <td><?php echo $headrows['salutation']." ".$headrows['firstname']." ".$headrows['lastname']; ?></td>
                          
                          <td>
						     <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $branchrows['branch_id']; ?>">Edit</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $branchrows['branch_id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit LCI <B><?php echo $branchrows['branch_name']; ?></B> </h4>
        </div>
        <div class="modal-body">
           <form enctype="multipart/form-data" class="cmxform row" id="EditForm" method="post" style="">
                        <div class="col-md-9">
						  <div class=" row">
                             
						 
						   <div class="form-group form-animate-text col-md-4" >
                              <input type="text" class="form-text"  pattern="[A-Za-z]+" style=" color:#337ab7;" value="<?php echo $branchrows['branch_name']; ?>" name="branch_name" required>
                              <span class="bar"></span>
                              <label>Branch Name</label>
                            </div>

                            <div class="form-group form-animate-text col-md-5" >
                              <input type="text" class="form-text"  pattern="[A-Za-z]+" style=" color:#337ab7;" value="<?php echo $branchrows['branch_location']; ?>" name="branch_location" required>
                              <span class="bar"></span>
                              <label>Branch Lacation</label>
                            </div>

                            </div>
						  
						  <input type="hidden" class="form-text"  pattern="[A-Za-z]+" style=" color:#337ab7;" value="<?php echo $branchrows['branch_id']; ?>" name="branch_id" required>
                             
						
							<div class="row">
							<div class="col-md-6">
                           <div class="row" >
							<div class="form-group form-animate-text col-md-4" >
                              <select style="width:300px" id="states" name="branch_head"    style=" color:#337ab7;" >
                                  <option value="<?php $headrows['memberid']; ?>"><?php echo $headrows['salutation']." ".$headrows['firstname']." ".$headrows['lastname']; ?></option>
							  <?php
										$tablequeryfor="SELECT * FROM member ";
										$tableresultfor = mysqli_query($process->connectDB(),$tablequeryfor);
		                                $tablerowsfor=$process->queryrow($tablequeryfor);  
		                                if($tablerowsfor>0){
		                                   
										while($tablerowsfor=mysqli_fetch_assoc($tableresultfor)) {
			       
										  ?> 
                   <option value="<?php echo $tablerowsfor['memberid']; ?>"><?php echo $tablerowsfor['salutation']." ". $tablerowsfor['firstname']." ".$tablerowsfor['lastname'] ; ?></option>
                  
           
                              <?php
										}}
							  
							  
							  ?>
							     </select>
                            </div>
							</div>
							
						
							</div>
							
							</div>
							
							
							 <div class="col-md-row" style="margin-top:10px;">
                              
                            <center>  <input class="submit btn btn-success" type="submit" value="Edit Branch" name="submit">
							<div class="message" id="message2" style="font-weight:50px; color:green; font-size:24px;"></div>
							</center>
                        </div>
							</div>
						
                          
                      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="../asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="../asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Kweku Moco</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                      <img src="../asset/img/avatar.jpg" alt="user name">
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
                              <p>Hello</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>About our new member from Labone. Has he joined any ministry  yet? </p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>I will call him and find out</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>Powerful</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>Hehe</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>See you in church</p>
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
                                      <div class="user-avatar"><img src="../asset/img/avatar.jpg" alt="user name"></div>
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Kpabitey Emmanuel">
                                      <img src="../asset/img/avatar.jpg" alt="user name">
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
          
              
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-primary">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/jquery.ui.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="../asset/js/plugins/jquery.steps.min.js"></script>
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/jquery.validate.min.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>

<script src="../asset/js/plugins/jquery.knob.js"></script>
<script src="../asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="../asset/js/plugins/jquery.mask.min.js"></script>
<script src="../asset/js/plugins/select2.full.min.js"></script>
<script src="../asset/js/plugins/nouislider.min.js"></script>


<!-- custom -->
	  
<?php 
		
		if(!empty($error)){
			
			if($success){
			?>
			<script type="text/javascript">
			  $("#message-box-danger").removeClass('message-box-danger');
			  $("#message-box-danger").addClass('open message-box-success');
			  $("#msg-logo").addClass('fa fa-check').text('Success');
			 
			</script>
			
			<?php
			}else{
				
				?>
			<script type="text/javascript">
			 $("#message-box-danger").addClass('open');
			 $("#msg-logo").addClass('fa fa-times');
			</script>
			
			<?php
				
				
				} 
			
			}?>
<script src="../asset/js/main.js"></script>


	
	 <script type="text/javascript">
	 
		$(document).ready(function(){
			$(document).on('submit','#signupForm',function(e) {
                 e.preventDefault();		   
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"addbranch.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#message').text(response);
					 $('.form-text').val('');
					 $('.checkbox').val('');
					 $('.select2-A').val('');
					 	 location.reload();
					 }
					 	 
		   
	         });
	     	 

       });
  
              
		});
		
	 
	 </script>
	 
	  <script type="text/javascript">
	 
		$(document).ready(function(){
			$(document).on('submit','#EditForm',function(e) {
                 e.preventDefault();		   
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"editbranch.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#message2').text(response);
					 	 location.reload();
					 }
					 	 
		   
	         });
	     	 

       });
  
              
		});
		
	 
	 </script>
<!-- end: Javascript -->

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


<script type="text/javascript">

$(document).ready(function(){
			$(document).on('submiti','#upload',function(e) {
				alert('i have recieved');
                 e.preventDefault();	
 var message = $(this).find('#message');	
          var press = $(this);	
     		  
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"load.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#messages').text(response);
					  press.css('display','none');
					  $('#border').css('display','none');
					   $('#browse').css('display','');
					 }		   		   
		   
	         });
	     	 

       });
  
              
		}); 
		
		function cp_field(cp){
		   var final_key = $(cp).val();
	       $.ajax({
				 type:'get',
				 url: 'cp_mobile.php',
				 data: {
					code:final_key
									
				 },
				 success: function (response) {
					 var res = $.parseJSON(response);
					  var imageUrl=res.cp_pic;
					 $('#cp_mobile').val(res.cp_mobile);
					
					if(final_key=='default'){
						    $('#cp_pic').hide();
						   $('#cp_pic').css('height','0');
						  }else{
							 $('#cp_pic').show();
							 $('#cp_pic').css('width','100px');
							 $('#cp_pic').css('border','3px solid #337ab7');
					         $('#cp_pic').attr('src','img/img_member/'+res.cp_pic); 
							 }
					 
					  
					 
				 }
			  });
			  
			  
		  }
	 
	 </script>
</body>
</html>