
<?php 
 include('../database/database.php');
  if(isset($_GET["code"])){
     $cp_mobile="";
	  $cp_pic="";
     $data =array();
      $query = "SELECT * FROM member WHERE memberid='".$_GET['code']."' LIMIT 1";
     $results=mysqli_query($process->connectDB(),$query);
	while($rows=mysqli_fetch_assoc($results)){
		  $data['cp_mobile']=$rows["mobile1"];
		  $data['cp_pic']=$rows["picture"];	
     }
  
      echo json_encode($data);
  }
  
  
  ?>