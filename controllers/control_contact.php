<?php
/* champs vides */
if(isset($_POST) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message']))
    {
        extract($_POST);
        if(!empty($name) && !empty($firstname) && !empty($email) !empty($message))
        {
            $destination = 'cquentin49@hotmail.fr';
            $subject = 'Formulaire de contact';
            $msg = "Une nouvelle question de : \n
                Nom : $name \n
                Prénom : $firstname \n
                Email : $email \n
                Message : $message";
            $header = "From: $nom \n ";
            $header .= "Reply-to: $email";
            mail($destination,$subject,$msg,$header);
            echo "le mail a bien étét envoyé"
        }
        else
        {
            echo "Veuillez remplir tous les champs"
        }
    }





