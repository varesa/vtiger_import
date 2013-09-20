<html>
    <head>
    </head>
    <body>
	<pre>Ole hyvä ja odota, kun uudet hakemukset haetaan...
	
	
	<?php
	    exec('fetchmail -f /var/www/scripts/.fetchmailrc 2>&1',$pal);
	    print_r($pal);
	    print("Voit nyt sulkea tämän sivun, ja jatkaa.");
	?>
	
	</pre>
	
    </body>
</html>

