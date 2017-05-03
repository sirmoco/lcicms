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
  
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.34.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.34.0/mapbox-gl.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

  

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
                        <h3 class="animated fadeInLeft">Member Details</h3>
                        <p class="animated fadeInDown">
                          Membership <span class="fa-angle-right fa"></span> Profile
                        </p>
                    </div>
                  </div>
              </div>
			  
			  
			
              <div class="top-20 padding-0">
			   <?php
										if(isset($_GET['memberid'])){
											$memid=$_GET['memberid'];
										}else{
											$memid=$_SESSION['memberid'];
										}
										
										$tablequeryacc="SELECT * FROM member WHERE memberid='".$memid."'";
										$tableresultacc = mysqli_query($process->connectDB(),$tablequeryacc);
		                                $tablerowsacc=$process->queryrow($tablequeryacc);  
		                                if($tablerowsacc>0){
											
										$tablerowsacc=mysqli_fetch_assoc($tableresultacc);
										$tablequerymem="SELECT * FROM member WHERE memberid='".$memid."'";
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
                    <div class="panel-heading" style="background:#fff;"><h6 style="color:green; ">Member Detail </h6>  
					
					  <?php
					  if($_SESSION['administrator']!=0){
					  ?>
					  <a href="form/memberregistrationform2.php?memberid=<?php echo $tablerowsmem['memberid']; ?>" class="btn btn-primary " style="float:right;">Edit Member Detail</a>
					  <?php
					  }
					  ?>
					</div>
                    <div class="panel-body">
                      <div class="responsive-table">
					
					  

					 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Date of birth : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['dob']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Gender : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['gender']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Marital Status: </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['maritalstatus']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Occupation: </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['occupation']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Nationality : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['nationality']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Mobile 1: </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['mobile1']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Mobile 2 : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['mobile2']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Email : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['email']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Residence : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['residence']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>Postal Address : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['post_address']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						<div  class="col-md-12" style="border:2px solid #0f95fc;border-bottom:20px solid #0f95fc;">
						 <div class="col-md-10">
					     <div class="row">
                              <div class="form-group form-animate-checkbox col-md-12">
							 
								   
                                  <label>Contact Person : </label>
								<?php
								
								$cp="SELECT * FROM member WHERE memberid='".$tablerowsmem['cp']."'";
										$tablecp = mysqli_query($process->connectDB(),$cp);
		                                $cpmem=$process->queryrow($cp); 
										$cpmem=mysqli_fetch_assoc($tablecp);
								
								?>
								   <label style="color:#0f95fc;"><?php echo $cpmem['firstname'].' '.$cpmem['lastname']; ?></label> 
							
                                 
                              </div>
							  
							  <div class="col-md-5">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>CP Relation : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['cp_rel']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
						 <div class="col-md-6">
					  
                              <div class="form-group form-animate-checkbox">
							 
								   
                                  <label>CP Mobile : </label>
								
								   <label style="color:#0f95fc;"><?php echo $tablerowsmem['cp_mobile']; ?></label> 
							
                                 
                              </div>
                             
                        </div>
							  
                         </div>    
                        </div>
						<div class="col-md-1">
						<img src="<?php echo $cpmem['picture']; ?>" style="width:80px;" />
						</div>
						 </div>
						
					  </div>
					  </div>
					  </div>
					  </div>
			  
			  
			  </div>
			  
			  <div class="row" style=" margin-top:10px; margin-right:10px; padding-left: 20px; border:2px solid #FECE1A;" id="DontPrint">

			  
			   <?php
							  if(empty($tablerowsmem['lng']) && empty($tablerowsmem['lat'])){
								  ?>
								<h1>No location set for <span><?php echo $tablerowsmem['firstname'].' '.$tablerowsmem['lastname']; ?></span>. Please do pay <?php echo $tablerowsmem['lastname']; ?> a visit one of this days and submit a location.</h1>  
								  
								  <?php
							  }
								  ?>
                        
								  
						<div class="col-md-12">
                  <div class="panel" style="border-radius:10px;">
                    <div class="panel-heading" style="background:#fff;"><h5 style="color:#000; ">MEMBER GEOLOCATION</h5></div>
                    <div class=" row panel-body">
                     
					 <div id="mapid" style="height: 280px; border:1px solid red;"></div>
					 
					 <script>
                     		var mymap = L.map('mapid').setView([10.886760, -1.072216], 13);
                     		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibW9jbyIsImEiOiJjajFkbmozNjYwMDFoMzJvM2hmZXlteHY2In0.eIjAS-e-6hRFx_svG-m1OA', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    
}).addTo(mymap);
                     		var myIcon = L.icon({
    iconUrl: 'form/img/img_member/<?php echo $tablerowsmem['picture']; ?>',
    iconRetinaUrl: 'form/img/img_member/<?php echo $tablerowsmem['picture']; ?>',
    iconSize: [40, 40],
    iconAnchor: [22, 40],
    popupAnchor: [-3, -36],
    shadowUrl: 'img/marker-shadow.png',
    shadowRetinaUrl: 'img/marker-shadow.png',
    shadowSize: [68, 95],
    shadowAnchor: [22, 94]
});


L.marker([10.886760, -1.072216], {icon: myIcon}).addTo(mymap).bindPopup("<?php echo $tablerowsmem['firstname'].' '.$tablerowsmem['lastname']; ?></b><br />Res: <?php echo $tablerowsmem['residence']; ?><br/>Mob: <?php echo $tablerowsmem['mobile1']; ?>.").openPopup();
var popup = L.popup();

                     		


	


                     </script>
					 
					 
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
<?php
										}else{
											echo 'Something Went Wrong';
										}
?>
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