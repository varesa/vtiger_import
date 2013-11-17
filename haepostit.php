<html>
    <head>
    </head>
    <body>
	<pre>Ole hyvä ja odota, kun uudet hakemukset haetaan...
	
	
	<?php
	    exec('fetchmail -f /var/www/scripts/.fetchmailrc --pidfile /var/www/scripts/fetchmail.pid 2>&1',$pal);
	    print_r($pal);
	    print('<br><br><form method="post" action="index.php"> <input type="submit" value="Jatka"></form>');
	?>
	
	</pre>
	
    </body>
</html>

