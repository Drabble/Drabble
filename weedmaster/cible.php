<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>WeedMaster</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
	   
   </head>
 
		<body>
			
			<?php include("start.php"); ?>
				<!--MILLIEU-->
				<div id="corpmilieu">		 
				<u><center><h1>Bienvenue <?php echo $_POST['nom'];?></h1></center></u><br/><br/>
				<p>
					Mauvais mot de passe.
				</p>
				</div>
				<div id="footer">
					<center>Le site WeedMaster 2011m   vbn,jh bla bla bla<br/>Made by Antoine</center>
				</div>
				<!--FIN MILLIEU-->
				
		<?php include("end.php"); ?>
		
		</body>
</html>
