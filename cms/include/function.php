<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lcinavrongo');

$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
$select = mysql_select_db(DB_NAME,$connection) or die(mysql_error);


function addmember($salutation,$firstname,$lastname,$othername,$dob,$gender,$pob,$nationality,$maritalstatus,$occupation,$directiontohse,$street,$area,$subarea,$landmark,$hsedescription,$city,$postalbox,$homephone,$mobile1,$mobile2,$email,$reszone,$joinedlci,$designation,$cp,$cpmobile,$reltocp,$branch,$bussel,$service,$dioces,$date){
	
$query = mysql_query("INSERT INTO member VALUES(4,'$salutation','$firstname','$lastname','$othername','$dob','$gender','$pob','$nationality','$maritalstatus','$occupation','$street','$area','$subarea','$landmark','$hsedescription','$city','$postalbox','$homephone','$mobile1','$mobile2','$email','$reszone','$joinedlci','$designation','$cp','$cpmobile','$reltocp','$branch','$bussel','$service','$dioces','$date')") or die(mysql_error());

}
function addmem($fname,$lname,$oname,$gender,$dob,$title){
	//$id = $menutitle;
	//$id = str_replace( ' ', '', $id );
$query = mysql_query("INSERT INTO mem VALUES(null,'$fname','$lname','$oname','$gender','$dob','$title')") or die(mysql_error());

}
function getabouttabforadmin(){
	$query=mysql_query('SELECT * FROM about');
	while($tab=mysql_fetch_assoc($query)){
		echo'
		<li><a data-content="'.$tab['abouttabname'].'" href="#0">'.$tab['abouttabname'].'</a></li>
		';
		
	}
	
}
function getabouttabforuser(){
	$query=mysql_query('SELECT * FROM about');
	while($tab=mysql_fetch_assoc($query)){
		echo'
		<li><a data-content="'.$tab['abouttabname'].'" href="#0">'.$tab['abouttabname'].'</a></li>
		';
		
	}
	
}
function getabouttabcontentforadmin(){
	$query=mysql_query('SELECT * FROM about');
	while($tab=mysql_fetch_assoc($query)){
		echo'
		<li data-content="'.$tab['abouttabname'].'">';
		$querycontent=mysql_query('SELECT * FROM aboutcontent WHERE aboutid='.$tab['aboutid'].' ORDER BY aboutcontentposition ASC');
	while($tabcontent=mysql_fetch_assoc($querycontent)){
	echo '
	<p><strong>'.$tabcontent['aboutcontenttitle'].'</strong><br/>
	'.$tabcontent['aboutcontenttext'].'
	
	</p>
	
	';}
	
	echo '
	<hr/>
			<p>
			<form method="post" action="../include/doaddabouttabcontent.php">
			<p>
			<h3>Add Content</h3>
			<div class="row">
			<input type="hidden" name="aboutid" value='.$tab['aboutid'].'>
			<input type="text" style=" height:30px;" name="aboutcontenttitle" class="form-control" />
			</div>
			<div class="row">
			<select name="aboutcontentposition" class="form-control">
			<option>Select position</option>
			<option value="1">First</option>
			<option value="2">Second</option>
			<option  value="3">Third</option>
			<option value="4">Forth</option>
			<option value="5">Fifth</option>
			</select>
			</div>
			<div class="row">
			<textarea name="aboutcontenttext" class="form-control"></textarea>
			</div>
			</p>

			<p><input type="submit" class="btn btn-primary" name="submit" value="Add"/></p>
			</form>
			
			</p>
		</li>
		';
		
	}
	
}

function getabouttabcontentforuser(){
	$query=mysql_query('SELECT * FROM about');
	while($tab=mysql_fetch_assoc($query)){
		echo'
		<li data-content="'.$tab['abouttabname'].'">';
		$querycontent=mysql_query('SELECT * FROM aboutcontent WHERE aboutid='.$tab['aboutid'].' ORDER BY aboutcontentposition ASC');
	while($tabcontent=mysql_fetch_assoc($querycontent)){
	echo '
	<p><strong>'.$tabcontent['aboutcontenttitle'].'</strong><br/>
	'.$tabcontent['aboutcontenttext'].'
	
	</p>
	
	';}
	
	echo '
	<hr/>
			
		</li>
		';
		
	}
	
}


function addabouttabcontent($aboutcontenttitle,$aboutcontenttext,$aboutcontentposition,$aboutid){
$query = mysql_query("INSERT INTO aboutcontent VALUES(null,'$aboutcontenttitle','$aboutcontenttext','$aboutcontentposition',CURRENT_DATE(),CURRENT_TIME(),'$aboutid')") or die(mysql_error());

}

function newmenupage(){
	echo  'class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>home</h1>
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                </div>
                <div class="price-table row-fluid">
                    <h1>New Page</h1>
                </div>
                <div class="centered">
                    <p class=price-text>We Offer Custom Plans. Contact Us For More Info.</p>
                    <a href=#contact class=button>Contact Us</a>
                </div>
            </div>
        </div>
	';
}

function getmenuforupdate(){
	
	echo '<div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                       <form method="post" action="../include/doaddmenu.php">
					   <div class="span6" >
                            <img src="../images/Portfolio01.png" alt="project 2" />
                        </div>
                        <div class="span6">
						
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Add Menu Item</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
								
                                <div class="project-info">
                                    <div>
                                        <span>Name</span><input type="text" name="menutitle" class="form-control" required="required"></div>
                                    <div>
                                        <span>Position</span>
										<select name="menuposition" class="selectContainer" required="required" > 
										<option value="">Select position</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										</select>
										</div>
										<div>
                                        <span>Description</span><textarea value="Home" name="menudescription" class="form-control"></textarea>
						<textarea name="menupage" type="hidden" class="form-control" required="required"><?php newmenupage(); ?></textarea>
										</div>
                                </div>
								<input type="submit" name="submit" class="modalcss-button button-success" value="Add+">
                            </div>
                        </div>
						</form>
                    </div>
					';
}

function addblogpost($categoriesid,$topic,$content,$date,$time,$userid){
$query = mysql_query("INSERT INTO post VALUES(null,'$categoriesid','$topic','$content',CURRENT_DATE(),CURRENT_TIME(),'$userid')") or die(mysql_error());

}
function addblogcomment($userid,$postid,$comment,$date,$time){
$query = mysql_query("INSERT INTO blogcomment VALUES(null,'$userid','$postid','$comment',CURRENT_DATE(),CURRENT_TIME())") or die(mysql_error());

}
function getcomments(){
	$query = mysql_query("SELECT * FROM blogcomment WHERE postid=");
	while($blog = mysql_fetch_assoc($query)){
		
	}
}

function getblogposts(){
	/* $query = mysql_query("SELECT * FROM post ORDER BY postid DESC");
	while($blog = mysql_fetch_assoc($query)){
		$get = mysql_query("SELECT * FROM accounts WHERE userid=".$blog['userid']);
		$user = mysql_fetch_assoc($get);
		$text=$blog['content']; */
		
		$query = mysql_query("SELECT * FROM post,accounts where post.userid=accounts.userid ORDER BY postid DESC");
	while($blog = mysql_fetch_assoc($query)){
		$text=$blog['content'];
	echo "
	<div id=".$blog['postid']." class=cd-timeline-block>
			<div class=cd-timeline-img cd-picture>
				<img src=img/dan.jpg alt=Picture >
			</div>
			<div style=padding:5px; class=cd-timeline-content row>
				<center><h2>".$blog['topic']."</h2></center>
				<p id=text-content>";
				echo '-'.$textdisplaylist='<div>'.substr($text,0,500).'</div>';
				echo "</p>
				<a href=#0 class=cd-read-more style=margin-bottom:5px;>Read more</a><br/>
				
				<span class=cd-date><strong style=font-size:15px; color:#000000;>".$blog['username']." </strong><br/><font style=font-size:10px;><i>".$blog['date']."</i></font></span><br/>
				
				<p id=comment-content >";
				$com=mysql_query('SELECT * FROM blogcomment WHERE postid='.$blog['postid']);
				
				while($comment=mysql_fetch_assoc($com)){
					echo "<div class=row>
					<div id=image-wrap class=col-md-3>
					";
					$use=mysql_query('SELECT * FROM accounts WHERE userid='.$comment['userid']);
				$put=mysql_fetch_assoc($use);
				echo "<div id=com-image class=col-md-3><img id=comment-image src=img/dan.jpg alt=Picture ></div><div id=commenter class=col-md-7><font>".$put['username']."</font>
			</div></div>
					<div id=comment class=col-md-9 >
				".$comment['comment']."
				</div></div><br/>";
				}
				
				echo "</p>
				<form method=post action=include/doaddcomment.php class=cd-form floating-labels>
				<div class=icon row>
				<input name=postid type=hidden value=".$blog['postid'].">
				<input name=userid type=hidden value=".$_SESSION['userid'].">
      			<textarea style=height:50px; class=message name=comment id=cd-textarea required></textarea>
			</div>
			<div class=row>
		      	<input type=submit name=submit value=Send>
		    </div>
			</form>
			</div> 
		</div>";
	
	}
	
}

function nonmembergetblogposts(){
	$query = mysql_query("SELECT * FROM post,accounts where post.userid=accounts.userid ORDER BY postid DESC");
	while($blog = mysql_fetch_assoc($query)){
		$text=$blog['content'];
	echo "
	<div id=".$blog['postid']." class=cd-timeline-block>
			<div class=cd-timeline-img cd-picture>
				<img src=img/dan.jpg alt=Picture >
			</div>
			<div style=padding:5px; class=cd-timeline-content row>
				<center><h2>".$blog['topic']."</h2></center>
				<p id=text-content>";
				echo '-'.$textdisplaylist='<div>'.substr($text,0,500).'</div>';
				echo "</p>
				<a href=#0 class=cd-read-more style=margin-bottom:5px;>Read more</a><br/>
				
				<span class=cd-date><strong style=font-size:15px; color:#000000;>".$blog['username']." </strong><br/><font style=font-size:10px;><i>".$blog['date']."</i></font></span><br/>
				
				<p id=comment-content >";
				$com=mysql_query('SELECT * FROM blogcomment WHERE postid='.$blog['postid']);
				
				while($comment=mysql_fetch_assoc($com)){
					echo "<div class=row>
					<div id=image-wrap class=col-md-3>
					";
					$use=mysql_query('SELECT * FROM accounts WHERE userid='.$comment['userid']);
				$put=mysql_fetch_assoc($use);
				echo "<div id=com-image class=col-md-3><img id=comment-image src=img/dan.jpg alt=Picture ></div><div id=commenter class=col-md-7><font>".$put['username']."</font>
			</div></div>
					<div id=comment class=col-md-9 >
				".$comment['comment']."
				</div></div><br/>";
				}
				
				echo "</p>
				<form method=post action=include/doaddcomment.php class=cd-form floating-labels>
				<div class=icon row>
				<input name=postid type=hidden value=".$blog['postid'].">
				<input name=userid type=hidden value=".$_SESSION['userid'].">
      			<textarea style=height:50px; class=message name=comment id=cd-textarea required></textarea>
			</div>
			<div class=row>
		      	<input type=submit name=submit value=Send>
		    </div>
			</form>
			</div> 
		</div>";
	
	}
	
}

?>