
<?php
if( !defined( 'PHP_EOL') ) { // Si la constante PHP_EOL n'existe pas (http://php.net/manual/fr/reserved.constants.php), 
    if( strtoupper( substr( PHP_OS, 0, 3 ) ) == 'WIN' ) { // Si la version du système d'exploitation (fournie par la constantes pré-définie PHP_OS) correspond à un noyau Windows,
        define( 'PHP_EOL', "\r\n" ); // On définit la constante avec les caractères Windows.
    } else { // Sinon,
        define( 'PHP_EOL', "\n" ); // On définit la constante avec les caractères UNIX.
    }
}

if( isset( $_POST ) && !empty( $_POST ) && array_key_exists( 'submitFrmTxt', $_POST ) ) : // S'il y a soumission de formulaire et que des données sont passées,
    $_err = array(); // On définit et initialise une variable que nous utiliserons pour la gestion d'erreur.
    if( ( isset( $_POST['1'] ) && $_POST['1']=='' ) || ( isset( $_POST['2'] ) && $_POST['2']=='Ne pas remplir' ) ) : // Si les valeurs des champs "antispam" sont les mêmes que les valeurs initiales,
        if( isset( $_POST['nom'] ) && $_POST['nom']!='' ) : // Si un nom est renseigné,
            if( isset( $_POST['email'] ) && $_POST['email']!='' ) : // Si un email est renseigné,
            if( isset( $_POST['contenuForm'] ) && $_POST['contenuForm']!='' ) : // Si un email est renseigné,
                /**
                 * On crée l'en-tête du message qui apporte les diverses informations complémentaires.
                **/
                $headers = 'From: noreply@localhost' . PHP_EOL; // On spécifie l'adresse mail de l'expéditeur. /!\ Cette en-tête est la seule qui soit obligatoire. Si le serveur est configuré correctement, une adresse sera renseignée par défaut si l'instruction n'existe pas dans le script. Si aucune instruction "From" n'est décrite dans le script ou dans la configuration, le serveur retournera une erreur.
                $headers .= 'MIME-Version: 1.0' . PHP_EOL; // On spécifie qu'on utilise le format MIME et sa version.
                $headers .= 'Priority: normal' . PHP_EOL; // On spécifie la priorité du mail (normal | urgent | non-urgent).
                $headers .= 'Reply-To: ' . htmlentities( $_POST['email'] ) . PHP_EOL; // On spécifie une adresse autre que celle de l'expéditeur pour que le destinataire renvoie sa réponse à celle-là et pas celle du "From".
                $headers .= 'X-Confirm-Reading-To: paul.pinguet@yahoo.fr' . PHP_EOL; // On spécifie un mail de retour pour indiquer si le message a été reçu ou lu. Les clients de messagerie demandent habituellement si l'accusé peut être envoyé.
                $headers .= 'X-Mailer: PHP/' . phpversion() . PHP_EOL; // On spécifie le logiciel d'envoi du mail en spécifiant qu'il s'agit d'un script PHP et en précisant sa version (http://php.net/manual/fr/function.phpversion.php).
                $headers .= 'X-Priority: 3' . PHP_EOL; // On spécifie la priorité du mail (entre 1=plus haute et 5=plus basse).

                $headers .= 'Content-Type: text/plain; charset=utf-8' . PHP_EOL; // On définit le type du contenu du message (text/plain | text/html | multipart | multipart/mixed | multipart/alternative | multipart/digest | image(image/jpeg, image/gif, image/png, ...) | audio(audio/ac3, audio/mp4, ...) | video(video/mpeg, ...) | application | application/octet-stream | application/postscript). Généralement composé d'un type/sous-type. Le type par défaut est "Content-type: text/plain; charset=us-ascii".
                $headers .= 'Content-Transfer-Encoding: 8bit' . PHP_EOL; // On spécifie le type d'encodage (7bit | 8bit | binary | quoted-printable | base64 | ietf-token | x-token).

                if( mail( "paul.pinguet@yahoo.fr", "Message de mon portfolio : " . htmlentities( $_POST['nom'] ) ." ". htmlentities( $_POST['prenom'] ) , chunk_split( "Message de : " . htmlentities( $_POST['nom'] ) . " " . htmlentities( $_POST['prenom'] ) . " <br/><br/> " . htmlentities( $_POST['contenuForm'] ), 70, PHP_EOL ), $headers ) ) : // Si le serveur parvient à envoyer l'email (http://php.net/manual/fr/function.mail.php) après avoir épuré les champs (http://php.net/manual/fr/function.htmlentities.php) et scindé le texte (http://php.net/manual/fr/function.chunk-split.php),
                    $_err = array( 'code'=>'done', 'msg'=>array( '<span class="titre-action">Message envoyé !</span><br />L\'envoi de votre message s\'est déroulé correctement.<br />Merci pour votre intérêt.' ) ); // On renseigne le code et le message de retour.
                else : // Sinon,
                    $_err['code'] = 'error'; // On renseigne le code de retour.
                    $_err['msg'][] = '<span class="titre-action">Échec de l\'envoi !</span><br />Veuillez nous excuser pour ce désagrément.'; // On renseigne le message de retour.
                endif;
            else : // Sinon,
                $_err['code'] = 'incomplete'; // On renseigne le code de retour.
                $_err['msg'][] = '<span class="titre-action">Envoi interrompu !</span><br />Veuillez préciser votre message.'; // On renseigne le message de retour.
            endif;
            else : // Sinon,
                $_err['code'] = 'incomplete'; // On renseigne le code de retour.
                $_err['msg'][] = '<span class="titre-action">Envoi interrompu !</span><br />Veuillez préciser votre email.'; // On renseigne le message de retour.
            endif;
        else : // Sinon,
            $_err['code'] = 'incomplete'; // On renseigne le code de retour.
            $_err['msg'][] = '<span class="titre-action">Envoi interrompu !</span><br />Veuillez préciser votre nom.'; // On renseigne le message de retour.
        endif;
    else : // Sinon,
        $_err = array( 'code'=>'spam', 'msg'=>array( '<span class="titre-action">Envoi interrompu !</span><br />Vous avez été identifié en tant que spam ! Votre message n\'a donc pas été envoyé.<br />Nous vous présentons nos excuses si votre message ne devait pas être considéré comme tel.' ) ); // On renseigne le code et le message de retour.
    endif;

    if( isset( $_err ) && array_key_exists( 'code', $_err ) ) : // Si un retour existe,
        if( array_key_exists( 'msg', $_err ) ) :
            foreach( $_err['msg'] as $value ) : // Pour chaque message,
                echo $value; // On affiche le message de retour.
            endforeach;
            echo "<br/>Redirection en cours...";
            header('Refresh:2;url= index.php');
            exit;
        endif;
    endif;
endif;

echo "Redirection en cours...";
header('Refresh:2;url= index.php');
exit;
?>