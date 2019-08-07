<?php 
	$dbconn = pg_connect("host='localhost' port='5432' dbname='elearning' user='postgres' password='123456'") or die ("couldnt connect");
				
 		if($dbconn)
			{	
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$q=pg_query($dbconn,"select username,password from users where username='$username'");
				if(!$q)
				{
					echo"error";
				}
				else
				{
				$row = pg_fetch_assoc($q);
				
				if($username==$row['username'] && $password==$row['password'])
					{
						setcookie('username', $_POST['username']);
						header("Location: admire2.lorvent.in/index.php", true, 301);					
						
					}
				else
				{
					echo "
						<script type='text/javascript'>
					alert('INVALID USERNAME OR PASSWORD');							
						</script>
						";
					
				}header("refresh:0.5;url=login.html" );
#########################################################################################		
			/*while($row = pg_fetch_assoc($q)) 
							{
		       						 echo $row["username"]."--".$row["password"]."<br>";
		    					}
						*/
				
				}
				
			}
	
?>
