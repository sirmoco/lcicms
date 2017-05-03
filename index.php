<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="LCICMS Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LCICMS</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="cms/asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="cms/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="cms/asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="cms/asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="cms/asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="cms/asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="cms/asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="LCICMS" class="dashboard form-signin-wrapper">
 <?php 
  
   include("cms/database/database.php");
    
    if( isset($_POST['login']) ){
            
        $username = $_POST['username'] ;
        $password = $_POST['password'];    
        //Database table data binding for users
        

	
$getLogin = mysqli_query($process->connectDB(),"SELECT * FROM accounts WHERE username='$username' AND password='".md5($password)."'");
$row = mysqli_fetch_array($getLogin);
$result=mysqli_num_rows($getLogin);
if($result > 0)
{   
	$_SESSION['IsValid'] = true;
	$_SESSION['accountid']=$row['accountid'];
   $_SESSION['memberid']=$row['memberid'];
   $_SESSION['service_id']=$row['service_id'];
   $_SESSION['account_type']=$row['account_type'];
$_SESSION['username']=$row['username'];

if ($_SESSION['account_type']=="admin") {
   //$id=$_SESSION['project_id'];
  header("Location:cms/index.php?accountid='".$_SESSION['accountid']."'"); 
}
else if($_SESSION['account_type']=='caller')
{
header("Location:cms/call_list.php?accountid='".$_SESSION['accountid']."'");	
}
else{
	
	
	 header("Location:cms/form/attendance.php?accountid=".$_SESSION['accountid']);
}

	//header("Location:index.php");
}
else
{
	header("Location:login.php");
	
}
		
	}
?>     
      <div class="container">

        <form class="form-signin" method="post" action="dologin.php">
          <div class="panel periodic-login">
              <span class="atomic-number"style="font-weight:bolder; font-size:15px; padding-left:12px; color:#000;">LIGHTHOUSE CHAPEL INTERNATIONAL</span>
			  <span class="atomic-number"style="font-weight:bolder; font-size:15px; padding-left:74px; color:gray;">NAVRONGO - APACHE</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"><img src="cms/asset/img/lighthouse.png" style="max-width:140px;max-height:150px;"/></h1>
                  <p class="atomic-mass" style="font-weight:bolder;">WELCOME</p>
                  <p class="element-name" style="font-weight:bolder; color:#000;">LCICMS</p>
				
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:20px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" name="login" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a><br/>
					<!--a href="reg.html"><img src="1.png" style="width:100px; height:30px;"/></a-->
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="cms/asset/js/jquery.min.js"></script>
      <script src="cms/asset/js/jquery.ui.min.js"></script>
      <script src="cms/asset/js/bootstrap.min.js"></script>

      <script src="cms/asset/js/plugins/moment.min.js"></script>
      <script src="cms/asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="cms/asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>