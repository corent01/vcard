<?php

//expéditeur du message

$from = "corentinwarin@gmail.com";


//destinataire du message

//ici on fais correspondre  l’expéditeur, et destinataire pour le test

$to = $from;


//sujet du message

$subject = "Test email";


//corps du message

$message = "Ceci est un message pour le test.\n";


$headers = "From:" .$from. "\r\n" ;

$headers .='Reply-To:'.$from."\r\n";

$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\r\n";

$headers .='Content-Transfer-Encoding: 7bit'."\r\n";


//on récupère la variable $_POST, on l’insère dans le message


foreach ($_POST as $cle => $valeur) {


// ici on peut vérifier si $cle ="submit" et l'enlever du message cela correspond au bouton envoyer, donc inutile

// si on peut aussi a partir d'ici ré-initialiser l'objet du message


$message.= "$cle : $valeur.\n";


}

 if(mail($to,$subject,$message,$headers))

    {

          echo 'Le message a bien été envoyé';

    }

    else

    {

          echo 'Le message n\'a pu être envoyé';

    } //*******************/

?>
