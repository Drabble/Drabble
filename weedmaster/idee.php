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
		
		<!-- MILLIEUX -->
		<div id="corpmilieu">		 
		<div style="text-align:center;text-decoration: underline;">
			<h2>Idée pour le site<br/></h2></div><br/><br/>
			Dans cette section, vous pouvez poster toutes vos idées pour créer/améliorer un site, que ce soit pour le contenu ou pour le design.<br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</div>
		<!--FIN MILLIEU-->
	
		<!-- COMMENTAIRE -->	
	<div id="footer">	
	<div style="text-align: center;">
		<h2>Commentaire</h2>
	</div>
		<br/><br/><br/><br>
			<form method="post" action="temp.php">
			<p>
			<label style="margin-left: 100px;float:left;" for="user">Username</label><br/>
			<input style="margin-left: 70px;float:left; border-color: #DDDDDD; border-radius: 5px;" id ="user" type="text" name="user"/><br/><br/>
			<label for="comment">Commentaire</label>
			<input type="hidden" name="page" value="idee" />
			
			<textarea style="border-color: #DDDDDD; margin-left: 20px;border-radius: 10px;width:470px;height: 200px;" id="comment" name="comment"></textarea>
			<input type="submit" value="Valider"/></p></form>
		<br/><br/><br/><br/><br/>
		
<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=sql101.byethost17.com;dbname=b17_12509246_drabble', 'b17_12509246', 'flyflyfl', $pdo_options);

$commentaire = $bdd->query('SELECT * FROM idee ORDER BY date DESC');

while ($comment = $commentaire->fetch()){?>
<div style="margin-bottom: 20px; padding: 10px; border-radius: 10px; border: 2px solid #DDDDDD">
	<TABLE BORDER="0">
  <TR style="text-decoration: underline;">
    <TD align="left" WIDTH="275px">
	<?php 
		if($comment['user'] == '')
			echo "anonyme"; 
		else
			echo Stripslashes(htmlspecialchars($comment['user']));
		?></TD>
    <TD align="right" WIDTH="275px"><?php echo Stripslashes(htmlspecialchars($comment['date'])); ?> </TD>
  </TR>
</TABLE>
	<div style="text-align: left;margin-left: 70px; width:  400px;">
		<?php echo Stripslashes(htmlspecialchars($comment ['comment']));?>
	</div><br/></div>

<?php
}
$commentaire->closeCursor();
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
		</div>
		<!--FIN COMMENTAIRE-->
		
		<?php include("end.php"); ?>
		
</body>
</html>

