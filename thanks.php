<?php
        echo 'Merci à toi, ô '.$_POST['user_first_name'].' ' .$_POST['user_last_name'] .' de nous avoir contacté à propos de ' .$_POST['choice_menu'] .'.' 
        .'Un de nos conseillers vous contactera soit à l\'adresse ' .$_POST['user_email'] .' soit par téléphone au ' .$_POST['user_phone_number'] 
        .' pour traiter votre demande : ' .$_POST['user_message'];
    ?>