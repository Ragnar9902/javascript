<?php
 session_start();
 header('Set-Cookie: ' . session_name() . '=' . session_id() . '; SameSite=None; Secure');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Menus
    </title>
    <meta charset="UTF-8">
	<link href="styles.css" rel="stylesheet">
  	<script>
	
	document.cookie = 'Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure';

	</script>
	</head>
  <body>
	<header></header>
	<main><article>
	<div class='box'>
	<img src='https://www.google.com/imgres?imgurl=https%3A%2F%2Fs03.s3c.es%2Fimag%2F_v0%2F770x420%2Ff%2F5%2F6%2F490x_comida-rapida-hamburguesa-patatas-cola-770.jpg&imgrefurl=https%3A%2F%2Fwww.eleconomista.es%2Franking-empresas%2Fnoticias%2F9233022%2F06%2F18%2FLas-empresas-de-restauracion-y-puestos-de-comida-que-mas-facturan-de-Espana.html&tbnid=2lPEDzjsCbwuDM&vet=10CBUQxiAoA2oXChMIoKGEnffy8wIVAAAAAB0AAAAAEA0..i&docid=QYr0TZPknT26HM&w=489&h=267&itg=1&q=comida%20rapida&ved=0CBUQxiAoA2oXChMIoKGEnffy8wIVAAAAAB0AAAAAEA0'>
	</div>
	</article><aside></aside></main>
	<footer>
		<p>Made by Jesus Macias for <a href="https://apply.holbertonschool.com" target="_blank">Holberton School</a></p>		
	</footer>
  </body>
</html>
