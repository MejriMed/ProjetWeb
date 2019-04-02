<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?PHP
include "../core/ReclamationC.php";
include "../entities/Reclamation.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id"])){
	 $result=$reclamationC->RecupererRec($_POST["id"]);
	 	foreach($result as $row){
	$id= $row['id'];
	$mail =$row['mail'];
	$probleme=$row['probleme'];
	$etat=$row['etat'];
	$date=$row['date'];
	$message= $row['message'];
}	//header('Location: AfficherRec.php');
}
?>
<h2> Reclamtion numero <?PHP echo $id; ?> </h2><br>
<p>Reclamer par l utilisateur <?PHP echo $mail." le ".$date;?></p><br>
<p>Probleme :<?PHP echo $probleme; ?></p><br>
<p>Description :<?PHP echo $message; ?> </p> <br>
<form method="POST" action="TraiterRec.php">
	<input type="submit" name="Traiter" value="Traiter">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
</form>


</body>
</html>