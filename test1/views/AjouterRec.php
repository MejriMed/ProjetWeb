<?PHP 
include "../entities/Reclamation.php";
include "../core/ReclamationC.php";

if (isset($_POST['mail']) && isset($_POST['description'])){
	if($_POST['probleme']=="autre")
	{
		$prob=$_POST['probleme1'];
	}
	else
	{
		$prob=$_POST['probleme'];
	}
		$da=date("Y-m-d");

	$reclamation1=new Reclamation($_POST['mail'],$prob,$_POST['description'],$da);

//var_dump($reclamation1);

}

$reclamation1C=new ReclamationC();
$reclamation1C->AjouterRc($reclamation1);
ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Monsieur, Madame, <br> Nous avons bien pris en compte votre reclamation du $da <br> a propos de votre problemeune $prob <br> une reponse vous sera envoyer dans les brefs délais  ";
 mail($_POST['mail'], "Reclamation !", $message, $header);
header('Location: AfficherRec.php');

$message = "Votre reclamation a été envoyée avec succès";
echo "<script type='text/javascript'>alert('$message');</script>";
//echo $mail." ".$prob." ".$desc." ".$da;

 ?>

