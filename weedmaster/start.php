		<!-- LOGIN -->
		<?php 
		if($_SESSION['log'] != 'on') {?>
		<div style="width: 940px; margin: auto;margin-top: 100px; color: white; text-align: right;">
			<h3 style="height: 0px; line-height: 0px; margin-right: 45px;">Login</h3>
					<TR><form style="display: inline;" method="post" action="temp.php">
					<p style="display: inline;"> <div style="margin-right: 20px;">	Entrer votre nom:<br/></div>
						<input type="text" name="user" /><br/>
						<div style="margin-right: 5px;">Entre le mot de passe:<br/></div>
						<input type="password" name="password" /><br/>
						<input type="hidden" name="page" value="login" />
						<input type="submit" value="Connexion"/>
					</p><br/><br/>
			</form>
		</div>
			<?php }
				else { ?>
					<div style="width: 940px; margin: auto;margin-top: 100px; margin-bottom: 50px;  color: white; text-align: right;">
						<?php
						echo Stripslashes(htmlspecialchars($_SESSION['user'])); ?> <br/> <?php
						echo Stripslashes(htmlspecialchars($_SESSION['email'])); ?> <br/> <?php
						echo nl2br(Stripslashes(htmlspecialchars($_SESSION['comment']))); ?> <br/> <?php
						echo Stripslashes(htmlspecialchars($_SESSION['date'])); ?>
						<form method="post" action="temp.php">
						<input type="submit" value="Log off"/>
						<input type="hidden" name="page" value="logoff" />
						</form>
			<?php } ?></div>
		
		
		<!--FIN LOGIN-->
			
			
<table id="corp">
<tr>
<td>
<div id="corpgauche">	

			<!-- MENU -->
<div style="border: 2px solid #DDDDDD; border-radius: 10px;"><div style="text-align:center;"><h2>Menu</h2></div>
	<ul>
		<li><a href="index.php">Accueil</a><br/></li>
		<li><a href="idee.php">Idée pour le site</a></li>
		<li><a href="info.php">Info</a></li>
                <li><a href="compte.php">Inscription</a></li>
	</ul><br/><br/></div>
			<!--FIN MENU-->
			
			<!--VIDEO-->
<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=sql101.byethost17.com;dbname=b17_12509246_drabble', 'b17_12509246', 'flyflyfl', $pdo_options);

$video = $bdd->query('SELECT * FROM video ORDER BY RAND() LIMIT 0, 3');
while ($vid = $video->fetch()){?><div style="margin-top: 20px;">
 		<object type="application/x-shockwave-flash" width="295" height="325" data="http://www.youtube.com/v/<?php echo $vid['link']; ?>" >
		<param name="movie" value="http://www.youtube.com/v/<?php echo $vid['link']; ?>" />
		<param name="wmode" value="transparent" /></object>
		</div><?php
}
$video->closeCursor();
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>	
			<!--FIN VIDEO-->

			</div>
		
				