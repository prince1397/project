<?php
	$dbconn = pg_connect("host='localhost' port='5432' dbname='elearning' user='postgres' password='123456'") or die ("couldnt connect");

		$q="select time from appointment where time='.$time.'";
				$result=pg_query($dbconn,$q);
				echo "
					<script type=text/java>				
					alert('.<?php echo $result; ?>.');
					</script>"
					;
?>
