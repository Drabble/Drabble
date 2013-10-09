<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>WeedMaster</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css"/>	  
		<link rel="shortcut icon" href="http://www.buddhashop.toile-libre.org/favicon.ico/"/>
	</head>
		<body>
		
		<?php include("start.php"); ?>
		
		<!-- MILLIEU-->
		<div id="corpmilieu">		 
		<div style="text-align:center;text-decoration: underline;">
			<h2>Création d'un compte</h2></div><br/><br/>
			
					<br/><br/><br/><br>
			<form method="post" action="temp.php">
			<p>
			<label style="margin-left: 100px;float:left;" for="user">Username</label><br/>
			<input style="margin-left: 70px;float:left; border-color: #DDDDDD; border-radius: 5px;" id ="user" type="text" name="user"/><br/><br/>
			
			<label style="margin-left: 100px;float:left;" for="password">Password</label><br/>
			<input style="margin-left: 70px;float:left; border-color: #DDDDDD; border-radius: 5px;" id ="password" type="password" name="password"/><br/><br/>
			
			<label style="margin-left: 100px;float:left;" for="email">E-mail</label><br/>
			<input style="margin-left: 70px;float:left; border-color: #DDDDDD; border-radius: 5px;" id ="email" type="text" name="email"/><br/><br/>
			
			<label for="comment">Commentaire</label>			
			<textarea style="border-color: #DDDDDD; margin-left: 50px;border-radius: 10px;width:400px;height: 200px;" id="comment" name="comment"></textarea>
			
			<input type="hidden" name="page" value="compte" />
			
			<input type="submit" value="Valider"/></p></form>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
		<!--FIN MILLIEU-->
	
			<?php include("end.php"); ?>
			
</body>
</html>
