<?php

class Database_conn {

    private $host = "localhost";
    private $user = "lcinavro_user";
    private $password = "lcinavro1234";
    private $database = "lcinavro_cms";
    public $id = "";
    private $errorMessage = array();

    function __construct() {

        $conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        return $conn;
    }

    function runQuery($query) {
        $result = mysqli_query($this->connectDB(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset)) {
            return $resultset;
        } else {

            return false;
        }
    }

    function numRows($query) {
        $result = mysqli_query($this->connectDB(), $query);
        if ($result) {

            return true;
        } else {

            return false;
        }
    }

    function queryrow($query) {
        $result = mysqli_query($this->connectDB(), $query);
        $rows = mysqli_num_rows($result);
        return $rows;
    }

    function format($array) {

        $message = array();
        foreach ($array as $input) {

            if (isset($input)) {
                $data = $this->validate($input);
                if (!empty($data)) {

                    return true;
                } else {

                    $this->errorMessage[] = "Please some Fields are empty";
                }
            }
        }

        return true;
    }

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function db_insert($table, $keys, $values) {
        return "INSERT INTO " . $table . " (" . implode(', ', $keys) . ") VALUES (" . implode(', ', $values) . ")";
    }

    function db_insert_batch($table, $keys, $values) {
        echo "INSERT INTO " . $table . " (" . implode(', ', $keys) . ") VALUES " . implode(', ', $values);
    }

    function db_update($table, $values, $where, $orderby = array(), $limit = FALSE) {
        foreach ($values as $key => $val) {
            $valstr[] = $key . " = " . $val;
        }
        $limit = (!$limit) ? '' : ' LIMIT ' . $limit;

        $orderby = (count($orderby) >= 1) ? ' ORDER BY ' . implode(", ", $orderby) : '';

        $sql = "UPDATE " . $table . " SET " . implode(', ', $valstr);

        $sql .= ($where != '' AND count($where) >= 1) ? " WHERE " . implode(" ", $where) : '';
        $sql .= $orderby . $limit;

        return $sql;
    }

    function db_truncate($table) {
        return "TRUNCATE " . $table;
    }

    function select_default() {
        $default_list = func_get_args();

        foreach ($default_list as $defauts) {

            if ($defauts == "default") {

                $this->errorMessage[] = "There is an Empty Selection";
            }
        }
    }

    function error() {


        if (!empty($this->errorMessage)) {

            foreach ($this->errorMessage as $error => $value) {

                return $value;
            }
        } else {

            return true;
        }
    }

    function getprojectsformenu() {
        $result = mysqli_query($this->connectDB(), 'SELECT * FROM projects');
        while ($list = mysqli_fetch_assoc($result)) {
            echo '
	     <li><a href="project.php?project_id=' . $list["project_id"] . '"><span class="fa fa-rocket"></span>' . $list["project_name"] . '</a></li>
	            
	      ';
        }
    }

    function randPass($length, $strength = 8) {
        $vowels = 'aeuy';
        $consonants = 'b6dgh9jm6n7pqrs8tvz';
        if ($strength >= 1) {
            $consonants .= 'BD2GH/JL3MN4PQR7STV9WXZ';
        }
        if ($strength >= 2) {
            $vowels .= "AE6UY";
        }
        if ($strength >= 4) {
            $consonants .= '123456789';
        }
        if ($strength >= 8) {
            $consonants .= '@#$%';
        }

        $password = '';
        $alt = time() % 2;
        for ($i = 0; $i < $length; $i++) {
            if ($alt == 1) {
                $password .= $consonants[(rand() % strlen($consonants))];
                $alt = 0;
            } else {
                $password .= $vowels[(rand() % strlen($vowels))];
                $alt = 1;
            }
        }
        return $password;
    }


    function cbeChildTotal() {
        $query = mysqli_query($this->connectDB(), 'SELECT COUNT(*) AS TOTAL FROM cbe_learners');
        $transNumb = mysqli_fetch_assoc($query);
        
        return $transNumb['TOTAL'];
    }

    function cbeDropOut(){
         $query = mysqli_query($this->connectDB(), "SELECT COUNT(*) AS DO FROM cbe_learners WHERE oosc = 'Drop out'");
        $transNumb = mysqli_fetch_assoc($query);
        
        return $transNumb['DO'];
    }
    
    function cbeNeverBeenToSchool(){
        $query = mysqli_query($this->connectDB(), "SELECT COUNT(*) AS NBS FROM cbe_learners WHERE oosc = 'Never been to school'");
        $transNumb = mysqli_fetch_assoc($query);
        
        return $transNumb['NBS'];
    }
    
    function getstafffortable() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM staff');
        while ($list = mysqli_fetch_assoc($query)) {
            echo '
	 <tr>
                                                <td>' . $list['surname'] . '</td>
                                                <td>' . $list['firstname'] . '</td>
                                                <td>' . $list['email'] . '</td>
                                                <td>' . $list['gender'] . '</td>
                                                <td>' . $list['phone_number'] . '</td>
                                                <td>' . $list['position'] . '</td>
                                            </tr>
	';
        }
    }

    function getprojectfortable() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM projects');
        while ($list = mysqli_fetch_assoc($query)) {
            $query2 = mysqli_query($this->connectDB(), 'SELECT * FROM staff WHERE staff_id="' . $list["staff_id"] . '"');
            $list2 = mysqli_fetch_assoc($query2);
            $short = $list['project_description'];
            echo '
	 <tr>
                                                <td>' . $list['project_name'] . '</td>
                                                <td>' . substr($short, 0, 100) . '</td>
                                                <td>' . $list2['surname'] . ' ' . $list2['firstname'] . '</td>
                                                <td>' . $list['commencement_date'] . '</td>
                                                <td>' . $list['expected_completion_date'] . '</td>
                                                <td>' . $list['actual_completion_date'] . '</td>
                                            </tr>
	';
        }
    }

    function getcbelearnerfortable() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_learners');
        while ($list = mysqli_fetch_assoc($query)) {
            $query2 = mysqli_query($this->connectDB(), 'SELECT * FROM beneficiaries WHERE beneficiary_id="' . $list["beneficiary_id"] . '"');
            $list2 = mysqli_fetch_assoc($query2);
            $query3 = mysqli_query($this->connectDB(), 'SELECT * FROM schools WHERE school_id="' . $list["school_id"] . '"');
            $list3 = mysqli_fetch_assoc($query3);
            $query4 = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_class WHERE class_id="' . $list["class_id"] . '"');
            $list4 = mysqli_fetch_assoc($query4);
            echo '
	 <tr>
                                                <td>' . $list2['surname'] . '</td>
                                                <td>' . $list2['firstname'] . '</td>
                                                <td>' . $list2['gender'] . '</td>
                                                <td>' . $list['age'] . '</td>
                                                <td>' . $list3['school_name'] . '</td>
                                                <td>' . $list4['class_name'] . '</td>
                                            </tr>
	';
        }
    }

    function select_option($table, $column_id, $column_name) {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->connectDB(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row[$column_id] . "'>" . $row[$column_name] . "</option>";
        }
    }

    function select_option_only($table, $column_id, $column_name) {

        $query = "SELECT * FROM $table";

        $result = mysqli_query($query);

        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row[$column_id];
            $query2 = "SELECT * FROM cbe_learners WHERE beneficiary_id='" . $id . "'";
            $results2 = mysqli_query($query2);
            $rows = mysqli_num_rows($results2);

            if ($rows > 0) {
                
            } else {

                echo "<option value='" . $row[$column_id] . "'>" . $row[$column_name] . "</option>";
            }
        }
    }

    function getsubject() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_subject');

        while ($row = mysqli_fetch_assoc($query)) {
            $query2 = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_topics WHERE subject_id="' . $row["subject_id"] . '"');
            $num = mysqli_num_rows($query2);
            echo '
		     <tr>
				<td>' . $row['subject_name'] . '</td>
                <td>' . $num . '</td>
                <td></td>
                
             </tr>
		   
		   ';
        }
    }
    function getooscforreport() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_learners WHERE oosc = "Drop Out"');

        $do = mysqli_num_rows($query);
        $query2 = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_learners WHERE oosc = "Never been to school"');

        $nb = mysqli_num_rows($query2);
            echo '<tr>
                        <td>Drop Out</td>
                        <td>'.$do.'</td>
                        <td></td>
                   </tr>
		   
		   ';
            echo '<tr>
                        <td>Out Of School</td>
                        <td>'.$nb.'</td>
                        <td></td>
                   </tr>
		   
		   ';
        
    }
    function gettransitionstatusforreport() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_learners  INNER  JOIN beneficiaries ON 
									   cbe_learners.beneficiary_id= beneficiaries.beneficiary_id WHERE cbe_learners.transitioned="Yes" and beneficiaries.gender="Male"');

        $yes = mysqli_num_rows($query);
        $query2 = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_learners  INNER  JOIN beneficiaries ON 
									   cbe_learners.beneficiary_id= beneficiaries.beneficiary_id WHERE cbe_learners.transitioned="Yes" and beneficiaries.gender="Female"');

        $no = mysqli_num_rows($query2);
        $total =$yes + $no;
            echo '<tr>
                      
                        <td>'.$yes.'</td>
                   
                        <td>'.$no.'</td>
                            <td>'.$total.'</td>
                   </tr>
                  
		   
		   ';
    }

    function gettopic() {

        $query = mysqli_query($this->connectDB(), 'SELECT * FROM cbe_topics');

        while ($row = mysqli_fetch_assoc($query)) {
            echo '
		     <tr>
				<td>' . $row['topic_name'] . '</td>
                <td></td>
                <td></td>
                
             </tr>
		   
		   ';
        }
    }

    function single_upload($files) {


        define('DS', DIRECTORY_SEPARATOR);
        $number = rand(1, 1000);
        $file_name = $files['name'];
        $file_size = $files['size'];
        $file_tmp = $files['tmp_name'];
        $file_type = $files['type'];
        if ($file_size > 2097152) {
            $errors = "File size must be less than 2 MB";
            $this->errorMessage[] = "File size must be less than 2 MB";
        }
        //
        $allowed = array('gif', 'png', 'jpg', 'JPG', 'PNG', 'GIF');
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            $errors = "Only Image with gif,png and jpg upload needed";
            $this->errorMessage[] = "Only Image with gif,png and jpg upload needed";
        }

        //		

        $desired_dir = "img" . DS . "img_member" . DS;

        if (empty($errors) == true) {

            if (file_exists("$desired_dir" . $file_name) == false) {
                if (move_uploaded_file($file_tmp, "$desired_dir" . $file_name)) {

                    return $file_name;
                } else {


                    $this->errorMessage[] = "File Upload unsuccessfull";
                }
            } else {

                if (move_uploaded_file($file_tmp, "$desired_dir" . $number . "_" . $file_name)) {

                    return $number . "_" . $file_name;
                } else {


                    $this->errorMessage[] = "File Upload unsuccessfull";
                }
            }
        } else {

            $this->errorMessage[] = "File Upload unsuccessfull";
        }
    }

 function profile_upload($files){
		
		  
        define('DS',DIRECTORY_SEPARATOR);
	     $number = rand (1,1000);
		$file_name = $files['name'];
		$file_size = $files['size'];
		$file_tmp = $files['tmp_name'];
		$file_type = $files['type'];	
        if($file_size > 2097152){
			$errors="File size must be less than 2 MB";
			$this->errorMessage[]="File size must be less than 2 MB";
        }
		//
		  $allowed =  array('gif','png' ,'jpg','JPG','PNG','GIF');
         $ext = pathinfo($file_name, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed)) {
		    $errors="Only Image with gif,png and jpg upload needed";
			$this->errorMessage[]="Only Image with gif,png and jpg upload needed";
		 }     
		
		//		
       
        $desired_dir="img".DS."img_member".DS;
		
        if(empty($errors)==true){
            if(file_exists("$desired_dir".$file_name)==false){
                if(move_uploaded_file($file_tmp,"$desired_dir"."lcinavrongo_org_".$file_name)){
					
					 return "lcinavrongo_org_".$file_name;
					}
			    else{
					 
					 
					$this->errorMessage[]="File Upload unsuccessfull";
				}
            }else{
				
				    if(move_uploaded_file($file_tmp, "$desired_dir"."lcinavrongo_org_".$number."_".$file_name)){
					
					 return "lcinavrongo_org_".$number."_".$file_name;
					}
			    else{
					 
					 
					$this->errorMessage[]="File Upload unsuccessfull";
				}
				   	
				
			}			
        }else{
			
			$this->errorMessage[]="File Upload unsuccessfull";
			
			}

	
   } 

}

$process = new Database_conn();
?>