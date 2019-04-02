<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['Type']) and isset($_POST['Taille']) and isset($_POST['Couleur']) and isset($_POST['Quantite']))
{
	$datetime=date_create()->format('Y-m-d H:i:s');
//$commande1=new commande($_POST['Type'],$_POST['Taille'],$_POST['Couleur'],$_POST['Quantite'],$datetime);
$commande1C=new commandeC();
$commande1C->ajoutercommande($_POST['Type'],$_POST['Taille'],$_POST['Couleur'],$_POST['Quantite'],$datetime);




  require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 25;
$mail->isHTML(true);
$mail->Username = "saidghada81@gmail.com"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "123456789ghada"; //mdp l mail mte3ik 
$mail->setFrom("saidghada81@gmail.com"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "nouvelle commande: '$genre'"; //sujet mta3 l mail mte3ik
$mail->Body= "votre commande sera delivrer dans 2 jours merci pour votre attents  ";
$mail->AltBody =""; //ikteb ili t7eb
$mail->AddAddress("ghada.said@esprit.tn"); // lmail mta3 l 3abed ili bich tab3athlou 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);



//var_dump($mail);
if (!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo;
} else{


       ?>
          <script>
            Javascript:alert('Mail sent !');
          </script>
          <?php
     
     
    }


header('Location: affichercommande.php');
	
}else{
	echo "vérifier les champs";
}



?>