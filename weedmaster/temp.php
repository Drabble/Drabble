<?php
session_start();

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=sql101.byethost17.com;dbname=b17_12509246_drabble', 'b17_12509246', 'flyflyfl', $pdo_options);

//COMMENTAIRE INDEX
if($_POST['page'] == 'index'){
try{

$prep = $bdd->prepare('INSERT INTO comment(comment, date, user) VALUES(:comment, NOW(), :user);');
$prep->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR); // Maintenant le commentaire est sécurisé
$prep->bindValue(':user', $_POST['user'], PDO::PARAM_STR);
$prep->execute();

header('Location: index.php');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
//FIN COMMENTAIRE INDEX

//COMMENTAIRE IDEE
elseif($_POST['page'] == 'idee'){
try{

$prep = $bdd->prepare('INSERT INTO idee(comment, date, user) VALUES(:comment, NOW(), :user);');
$prep->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR); // Maintenant le commentaire est sécurisé
$prep->bindValue(':user', $_POST['user'], PDO::PARAM_STR);
$prep->execute();

header('Location: idee.php');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
//FIN COMMENTAIRE IDEE

//CREATION COMPTE
elseif($_POST['page'] == 'compte'){
try{

$prep = $bdd->prepare('INSERT INTO compte(email, password, user, date, comment) VALUES(:email, :password, :user, NOW(), :comment);');
$prep->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR); // Maintenant le commentaire est sécurisé
$prep->bindValue(':user', $_POST['user'], PDO::PARAM_STR);
$prep->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$prep->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$prep->execute();

header('Location: compte.php');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
//FIN CREATION COMPTE

//LOGIN
elseif($_POST['page'] == 'login'){
try{
$reponse = $bdd->query("SELECT user, password, email, date, comment FROM compte WHERE user= '" . $_POST['user'] . "'"); 
$donnees = $reponse->fetch();
if($_POST['password'] == $donnees['password']){
$_SESSION['log'] = 'on';
$_SESSION['user'] = $donnees['user'];
$_SESSION['password'] = $donnees['password'];
$_SESSION['email'] = $donnees['email'];
$_SESSION['comment'] = $donnees['comment'];
$_SESSION['date'] = $donnees['date'];
}
header('Location: index.php');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
//FIN LOGIN

//LOG OFF
elseif($_POST['page'] == 'logoff'){
try{
session_destroy();
header('Location: index.php');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
//FIN LOG OFF
?>