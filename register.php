<?php
	 $dbconn = pg_connect("host='localhost' port='5432' dbname='elearning' user='postgres' password='123456'") or die ("couldnt connect");
  $username=$_POST['username'];
  $password=$_POST['password'];

	if(pg_query($dbconn,"insert into users(username,password) values('".$username."','".$password."')"))
	{
		echo "done";
	}	
	else echo "notdone";
	header("Location: registrationsuccess.php", true, 301);
exit();
	
?>
