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
	<meta name="description" content="LCICMS Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LCICMS</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/jquery.steps.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
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
                        <h3 class="animated fadeInLeft">Membership Registration Form</h3>
                        <p class="animated fadeInDown">
                          Forms <span class="fa-angle-right fa"></span> Membership
                        </p>
                    </div>
                  </div>
              </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                       
                  <div class="col-md-12 panel">
                    
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
					  
					     
					  
					  
                        <div class="col-md-12" style=" padding-top:30px;">
					  
					     <?php
										if(isset($_GET['memberid'])){
											$memid=$_GET['memberid'];
										}else{
											$memid=$_SESSION['memberid'];
										}
										
										$tablequeryacc="SELECT * FROM member WHERE memberid='".$memid."'";
										$tableresultacc = mysqli_query($process->connectDB(),$tablequeryacc);
		                                $tablerowsacc=$process->queryrow($tablequeryacc);  
		                               
											
										$tablerowsacc=mysqli_fetch_assoc($tableresultacc);
										$tablequerymem="SELECT * FROM member WHERE memberid='".$memid."'";
										$tableresultmem = mysqli_query($process->connectDB(),$tablequerymem);
		                                $tablerowsmem=$process->queryrow($tablequerymem); 
										$tablerowsmem=mysqli_fetch_assoc($tableresultmem);
										  ?> 
										  
                        <form enctype="multipart/form-data" class="cmxform row" id="signupForm" method="post" style="">
                        <div class="col-md-9">
						  <div class=" row">
                             
						  <div class="form-group form-animate-text col-md-3" >
                               <select class="select2-A" name="salutation" style=" color:#337ab7;" required>
							   <option value="<?php echo $tablerowsmem['salutation'];  ?>"><?php echo $tablerowsmem['salutation'];  ?></option>
                           <option value="">Salutation</option>
						    <option value="Bishop">Bishop</option>
						   <option value="Lady Bishop">Lady Bishop</option>
						   <option value="Rev">Rev</option>
						   <option value="Lady Rev">Lady Rev</option>
						   <option value="Pastor">Pastor</option>
						   <option value="Lady Pastor">Lady Pastor</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prof.">Prof.</option>
						  </select>
                            </div>
						   <div class="form-group form-animate-text col-md-4" >
                              <input type="text" class="form-text"  id="validate_firstname" pattern="[A-Za-z]+" style=" color:#337ab7;" name="firstname" value="<?php echo $tablerowsmem['firstname'];  ?>" required>
                              <span class="bar"></span>
                              <label>Firstname</label>
                            </div>

                            <div class="form-group form-animate-text col-md-5" >
                              <input type="text" class="form-text" id="validate_lastname" pattern="[A-Za-z]+" style=" color:#337ab7;" name="lastname" value="<?php echo $tablerowsmem['lastname'];  ?>" required>
                              <span class="bar"></span>
                              <label>Lastname</label>
                            </div>

                            </div>
						  
                           <div class="row" >
						   
							<div class="form-group form-animate-text col-md-5" >
                            <?php
							date_default_timezone_set('UTC');
				  $date = date("Y/m/d");
							?>
							  <span class="bar">Date of birth</span>
							 <input class="form-text" name="dob" type="date" style=" color:#337ab7;"  min="1900/01/01" max="<?php echo $date; ?>" value="<?php echo $tablerowsmem['dob'];  ?>" >
                            
                              
                            </div>
							<?php 
							if($tablerowsmem['gender']=='Male'){
							?>
							<div class=" col-md-5 " >
							
							
							 
                      <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                      <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Male" style=" color:#337ab7;"  id="validate_agree" name="gender"  required checked>
                                 Male
                              </div>
							 
                      </div>
					   <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                     
							  <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Female" style=" color:#337ab7;" id="validate_agree" name="gender" >
                                  Female
                              </div>
                      </div>
							
							
                            </div>
							<?php
							}elseif($tablerowsmem['gender']=='Female'){
							
							?>
						   <div class=" col-md-5 " >
							
							
							 
                      <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                      <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Male" style=" color:#337ab7;"  id="validate_agree" name="gender"  required >
                                 Male
                              </div>
							 
                      </div>
					   <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                     
							  <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Female" style=" color:#337ab7;" id="validate_agree" name="gender" checked>
                                  Female
                              </div>
                      </div>
							
							
                            </div>
						   
						   <?php
							}else{
						   ?>
                                                    			<div class=" col-md-5 " >
							
							
							 
                      <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                      <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Male" style=" color:#337ab7;"  id="validate_agree" name="gender"  required >
                                 Male
                              </div>
							 
                      </div>
					   <div class="col-md-6 panel" style="padding:20px;padding-bottom:0px; ">
                     
							  <div class="form-group form-animate-checkbox">
                                  <input type="radio" class="checkbox" value="Female" style=" color:#337ab7;" id="validate_agree" name="gender" >
                                  Female
                              </div>
                      </div>
							
							
                            </div>

                                                    <?php

                                                      }
                                                      ?>
						   </div>
						   
						  <div class="row" >
							<div class="form-group form-animate-text col-md-3" >
                               <select class="select2-A" name="maritalstatus" style=" color:#337ab7;" required>
                           <option value="<?php echo $tablerowsmem['maritalstatus'];  ?>"><?php echo $tablerowsmem['maritalstatus'];  ?></option>
                            <option value="">Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
						  </select>
                            </div>

                            <div class="form-group form-animate-text col-md-3" >
                              <select class="select2-A" name="occupation" style=" color:#337ab7;">
                           <option value="<?php echo $tablerowsmem['occupation'];  ?>"><?php echo $tablerowsmem['occupation'];  ?></option>
                            <option value="Teacher">Teacher</option>
                         <option value="Religious Worker">Religious Worker</option>
                         <option value="Health Worker">Health Worker</option>
			 <option value="Student">Student</option>
			<option value="Trader">Trader</option>
			<option value="Security Personnel ">Security Personnel </option>
			<option value="Civil Servant">Civil Servant</option>
			<option value="Self Employed">Self Employed</option>
			<option value="Social Worker">Social Worker</option>
			<option value="Un-Employed">Un-Employed</option>
			<option value="Other">Other</option>
							
						  </select>
                            </div>
							
							<div class="form-group form-animate-text col-md-3" >
                              <select class="select2-A" name="nationality" style=" color:#337ab7;">
                           <option value="<?php echo $tablerowsmem['nationality'];  ?>"><?php echo $tablerowsmem['nationality'];  ?></option>
                            <option value="Ghana">Ghana</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Benin">Benin</option>
							<option value="Togo">Togo</option>
							<option value="Cote D'voire">Cote D'voire</option>
							<option value="South Africa">South Africa</option>
							
						  </select>
                            </div>
						  </div>
						  
						  <div class="row">
						  <div class="form-group form-animate-text col-md-4" style="margin-top:0px !important;">
                              <input type="tel" class="form-text" id="" pattern="^\d{4}\d{3}\d{4}$" style=" color:#337ab7;" name="mobile1" value="<?php echo $tablerowsmem['mobile1'];  ?>" required>
                              <span class="bar"></span>
                              <label>Mobile</label>
                            </div>
							<div class="form-group form-animate-text col-md-4" style="margin-top:0px !important;">
                              <input type="tel" class="form-text" id="validate_username" pattern="^\d{4}\d{3}\d{4}$" style=" color:#337ab7;" name="mobile2" value="<?php echo $tablerowsmem['mobile2'];  ?>" >
                              <span class="bar"></span>
                              <label>Mobile 2</label>
                            </div>
                            
							 <div class="form-group form-animate-text col-md-4" style="margin-top:0px !important;">
                              <input type="email" class="form-text" id="validate_email" style=" color:#337ab7;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" value="<?php echo $tablerowsmem['email'];  ?>">
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
							</div>
							
							
							
							<div class="row" >
							<div class="form-group form-animate-text col-md-4" style="margin-top:0px !important;">
                              <input type="text" class="form-text"  style=" color:#337ab7;" name="residence" value="<?php echo $tablerowsmem['residence'];  ?>">
                              <span class="bar"></span>
                              <label>Residence</label>
                            </div>
							<div class="form-group form-animate-text col-md-4" style="margin-top:0px !important;">
                              <input type="text" class="form-text"   style=" color:#337ab7;" name="post_address" value="<?php echo $tablerowsmem['post_address'];  ?>">
                              <span class="bar"></span>
                              <label>Postal Address</label>
                            </div>
							
                            </div>
							<div class="row">
							<div class="form-group form-animate-text col-md-8" style="margin-top:0px !important;">
                              <textarea class="form-text" name="directiontohse" style=" color:#337ab7;" required><?php echo $tablerowsmem['directiontohse'];  ?></textarea>
                              <span class="bar"></span>
                              <label>Direction To House</label>
							  </div>
                            </div>
							
							<div class="row">
							<div class="col-md-10">
							    
							    <div class="row" >
							<div class="form-group form-animate-text col-md-4" >
                              <select style="width:300px" id="states" name="branch_id"   style=" color:#337ab7;" >
							   
							  
							   <?php
										$branchquery="SELECT * FROM branch";
										$branchresult = mysqli_query($process->connectDB(),$branchquery);
		                                $branchrows=$process->queryrow($branchquery);  
		                                if($branchrows>0){
											$branchquery2="SELECT * FROM branch WHERE branch_id='".$tablerowsmem['branch_id']."'";
										$branchresult2 = mysqli_query($process->connectDB(),$branchquery2);
											$branchrows2=mysqli_fetch_assoc($branchresult2);
											?>
											<option value="<?php echo $branchrows2['branch_id']; ?>"><?php echo $branchrows2['branch_name']; ?></option>
											<?php
										while($branchrows=mysqli_fetch_assoc($branchresult)) {
			       
										  ?> 
                   <option value="<?php echo $branchrows['branch_id']; ?>"><?php echo $branchrows['branch_name']; ?></option>
                  
           
                              <?php
										}}
							  
							  
							  ?>
							     </select>
                            </div>
							</div>
							    
                           <div class="row" >
							<div class="form-group form-animate-text col-md-4" >
                              <select style="width:300px" id="states" name="cp"  onChange="cp_field(this);"  style=" color:#337ab7;" >
							   
							  <?php
										$tablequery="SELECT * FROM member";
										$tableresult = mysqli_query($process->connectDB(),$tablequery);
		                                $tablerows=$process->queryrow($tablequery);  
		                                if($tablerows>0){
											$tablequery2="SELECT * FROM member WHERE memberid='".$tablerowsmem['cp']."'";
										$tableresult2 = mysqli_query($process->connectDB(),$tablequery2);
											$tablerows2=mysqli_fetch_assoc($tableresult2);
											?>
											<option value="<?php echo $tablerows2['memberid']; ?>"><?php echo $tablerows2['firstname'].' '.$tablerows2['lastname'] ; ?></option>
											<?php
										while($tablerows=mysqli_fetch_assoc($tableresult)) {
			       
										  ?> 
                   <option value="<?php echo $tablerows['memberid']; ?>"><?php echo $tablerows['firstname'].' '.$tablerows['lastname'] ; ?></option>
                  
           
                              <?php
										}}
							  
							  
							  ?>
							     </select>
                            </div>
							</div>
							
							<div class="row">
							<div class="form-group form-animate-text col-md-6" style="margin-top:0px !important;">
                              <select class="select2-A"  name="cp_rel" style=" color:#337ab7;">
                           <option value="<?php echo $tablerowsmem['cp_rel'];  ?>"><?php echo $tablerowsmem['cp_rel'];  ?></option>
                           <option value="<?php echo $tablerowsmem['cp_rel'];  ?>">Relation to contact person</option>
						  <option value="Friend">Friend</option>
						   <option value="Mother">Mother</option>
						   <option value="Sibling">Sibling</option>
                            <option value="Uncle">Uncle</option>
                            <option value="Aunt">Aunt</option>
                            <option value="Cousin">Cousin</option>
							<option value="Distant Relation">Distant Relation</option>
							<option value="Pastor">Pastor</option>
							<option value="Shepherd">Shepherd</option>
							<option value="Daughter ">Daughter </option>
							<option value="Son">Son</option>
							<option value="Husband">Husband</option>
							<option value="Wife">Wife</option>
							<option value="Grand Daughter">Grand Daughter</option>
							<option value="Grand Son">Grand Son</option>
							<option value="Grand Father">Grand Father</option>
							<option value="Grand Mother">Grand Mother</option>
							
						  </select>
                            </div>
							
							<div class="form-group form-animate-text col-md-6" style="margin-top:0px !important;">
                              <input type="text" class="form-text" id="cp_mobile" pattern="^\d{4}\d{3}\d{3}$" style=" color:#337ab7;" name="cp_mobile" value="<?php echo $tablerowsmem['cp_mobile'];  ?>" >
                              <span class="bar"></span>
                              <label>Contact Person Mobile</label>
                            </div>
							</div>
							</div>
							<div class="col-md-2">
							<img id="cp_pic" src="" />
							</div>
							</div>
							
							
							 <div class="col-md-row">
                              <input value="<?php echo $tablerowsmem['memberid'];  ?>" name="memberid" type="hidden">
                            <center>  <input class="submit btn btn-success" type="submit" value="Save Changes" name="submit">
							<div class="message" id="message" style="font-weight:50px; color:green; font-size:24px;"></div>
							</center>
                       
					   </div>
							</div>
							<div class="col-md-3" id="border" style=" display:; border-radius:10px;">
                            <div class="form-group form-animate-text" style="margin-top:10px !important;">
							<div id="my_camera"><img src="img/img_member/<?php echo $tablerowsmem['picture'];  ?>" style="width:170px;"/>
							
							</div>
							
							<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp" style="border:;">
					<div id="edited"></div>
				                                                                                                                           
                                                 <input type="file"  multiple   id="file-simple"  data-preview-file-type="any" type="file" class="file btn-primary pull-right" name="filename" id="filename" title="Browse file"/>
                                                 <input type="hidden" value="<?php echo $tablerowsmem['picture']; ?>" name="original_file"/>
                                             
				</div>
                             
                            </div>
							<!-- Configure a few settings and attach camera -->
	

                          </div>
                          
                      </form>
					
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
<script src="../asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="../asset/js/plugins/jquery.mask.min.js"></script>
<script src="../asset/js/plugins/select2.full.min.js"></script>
<script src="../asset/js/plugins/nouislider.min.js"></script>


<!-- custom -->
	  

<script src="../asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){



    var form = $("#example1").show();
     
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18)
            {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });




  });
</script>

<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function preview_snapshot() {
			// freeze camera so user can preview pic
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera feed
			Webcam.unfreeze();
			
			// swap buttons back
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		
		function save_photo() {
			// actually snap photo (from preview freeze) and display it
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					
					'<img style="border-radius:50%; border:solid 2px #0c66ae; width:200px; height:200px;" src="'+data_uri+'"/>'+ 
					'<input type="hidden" value="'+data_uri+'" name="picture"/>';
				
				// swap buttons back
				document.getElementById('pre_take_buttons').style.display = '';
				document.getElementById('post_take_buttons').style.display = 'none';
				document.getElementById('my_camera').style.display = 'none';
				document.getElementById('border').style.border = '0px';
			} );
		}
	</script>
	
	 <script type="text/javascript">
	 
		$(document).ready(function(){
			$(document).on('submit','#signupForm',function(e) {
                 e.preventDefault();		   
	           var staff_data = new FormData(this);                
	           $.ajax({
		      url:"member_edit.php",
			  type:'post',
			  contentType:false,
              processData:false,
    		  data:staff_data,
			  success: function(response){
					 
					 $('#message').text(response);
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