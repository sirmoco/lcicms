<!DOCTYPE html>
<html lang="en">
<head>
  
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
  <meta charset="utf-8">
  <meta name="description" content="LCICMS Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LCICMS</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link href="../asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logomi.png">
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
                <a href="../index.php" class="navbar-brand"> 
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
                   <img src="img/img_member/<?php echo $tablerowshead['picture']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="member_detail.php"><span class="fa fa-user"></span> My Profile</a></li>
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
                    <div class="col-md-4">
                        <h3 class="animated fadeInLeft time">Members Present Today   <p class="animated fadeInRight">Sat,October 1st 2029</p>
						
					</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Members
                        </p>
                    </div>
					 <div class="col-md-2">
						<p class="text-center">
                      <a href="mypresent.php" class="btn btn-success btn-round green"> Members Present  <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
					</div>
					 <div class="col-md-2">
					<p class="text-center">
                      <a href="my_notpresent.php" class="btn btn-success btn-round green"> Members Absent  <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                    </div>
					 <div class="col-md-2">
					<p class="text-center">
                      <a href="my_visitations.php" class="btn btn-success btn-round green"> My Visitation <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                    </div>
					 <div class="col-md-4">
					 <p class="text-center">
                      <a href="myattendance.php" class="btn btn-success btn-round green"> Check Attendance  <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
					
					 </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
			  <div style="float:left; margin-top:10px; margin-right:10px; padding-left: 20px;" id="DontPrint">

                           
						
						 <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
										 <li><a onclick="window.print();" class="WebHRSolidButton_Blue" style="">

                                            <i style="vertical-align:middle;"
                                               class="fa fa-print WebHR_Icon_White"></i><span>&nbsp;Print Report</span>

                                        </a></li>


                                    <li><a onclick="$('#divEmail').show();

                                                    $('#divExport').hide();" class="WebHRSolidButton_Blue">

                                            <i style="vertical-align:middle;"
                                               class="fa fa-envelope WebHR_Icon_White"></i><span>&nbsp;Email Report</span>

                                        </a></li>


                                    <li><a onclick="$('#divExport').show();

                                                    $('#divEmail').hide();" class="WebHRSolidButton_Blue">

                                            <i style="vertical-align:middle;"
                                               class="fa fa-floppy-o WebHR_Icon_White"></i><span>&nbsp;Export Report</span>

                                        </a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'json',escape:'false'});"><img src='asset/img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='asset/img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'json',escape:'true'});"><img src='asset/img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'xml',escape:'false'});"><img src='asset/img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'csv',escape:'false'});"><img src='asset/img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'txt',escape:'false'});"><img src='asset/img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'excel',escape:'false'});"><img src='asset/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'doc',escape:'false'});"><img src='asset/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'powerpoint',escape:'false'});"><img src='asset/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'png',escape:'false'});"><img src='asset/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#datatables-example').tableExport({type:'pdf',escape:'false'});"><img src='asset/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>  
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Member Present list</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
					 
                      <table id="datatables-example" class="table table-striped table-bordered datatable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						<th></th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php
										$timestamp = date("y-m-d");
										$tablequery1='SELECT * FROM assignment WHERE shepherd="'.$tablerowshead['memberid'].'" && sheep IN(SELECT service_attendance.memberid FROM service_attendance WHERE service_attendance.date=CURRENT_DATE())';
										$tableresult1 = mysqli_query($process->connectDB(),$tablequery1);
		                                $tablerows1=$process->queryrow($tablequery1);  
		                                if($tablerows1>0){
											
										while($tablerows1=mysqli_fetch_assoc($tableresult1)) {
			       
										$tablequery='SELECT * FROM member WHERE memberid="'.$tablerows1['sheep'].'"';
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery); 
											
										$tablerows=mysqli_fetch_assoc($tableresult);
										
										  ?>  
						<tr>
						<td><img src="img/img_member/<?php echo $tablerows['picture']; ?>" style="width:40px; height:40px; border-radius:50%;"/></td>
                          <td><a href="../member_detail.php?memberid=<?php echo $tablerows['memberid']; ?>&&member_detail=<?php echo $tablerows['lastname'].'_'.$tablerows['firstname']; ?>"><?php echo $tablerows['lastname']." ".$tablerows['firstname']; ?></a></td>
                          <td><?php echo $tablerows['mobile1']; ?></td>
                          <td><div><form method="post"  id="#"><div id="message"></div> <input type="hidden" name="memberid" value="<?php echo $tablerows['memberid']; ?>">
						  <input type="hidden" name="accountid" value="<?php echo $_SESSION['accountid']; ?>">
						  <input type="submit" name="submit" class="btn btn-primary" value="Message"/></form><i  id="check" style="display:none;" class="fa fa-check-square-o"></i></div></td>
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
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
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
                                  <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
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
                                      <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="../asset/img/avatar.jpg" class=" img-responsive " alt="user name">
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

 <script type="text/javascript" src="../asset/js/plugins/datatables/jquery.dataTables.min.js"></script>  

        <script type="text/javascript" src="../asset/js/plugins/tableexport/tableExport.js"></script>
	<script type="text/javascript" src="../asset/js/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="../asset/js/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="../asset/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../asset/js/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="../asset/js/plugins/tableexport/jspdf/libs/base64.js"></script>     
<!-- plugins -->
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/jquery.datatables.min.js"></script>
<script src="../asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="../asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>

 <script type="text/javascript">
	 
		$(document).ready(function(){
			$(document).on('submit','#attendForm',function(e) {
                 e.preventDefault();	
 var message = $(this).find('#message');	
          var press = $(this);					 
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"add_attendance.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#message').text(response);
					  press.css('display','none');
					  $('#check').css('display','visible');
					 }		   		   
		   
	         });
	     	 

       });
  
              
		});
		
	 
	 </script>
<!-- end: Javascript -->
</body>
</html>