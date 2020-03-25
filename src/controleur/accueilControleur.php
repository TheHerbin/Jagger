<?php

Function accueilControleur($twig){
    echo $twig->render('index.html.twig',array());
}

Function add_recordControleur($twig,$db){
    $form = array();
    if (isset($_POST['btAjouter'])){
        $nom = $_POST['nom'];
        $form['valide'] = true;
        if ($nom == null){
            $form['valide'] = false; 
            $form['message'] = 'le genre est vide';
        }
        else{
            $Genre = new Genre($db);
            $exec = $Genre->insert($nom);
            if (!$exec){
                $form['valide'] = false;  
                $form['message'] = 'Problème d\'insertion dans la table genre ';  
            }
        }
    }
    echo $twig->render('add_record.html.twig', array('form'=>$form));
}

Function add_articleControleur($twig,$db){
    echo $twig->render('add_article.html.twig',array());
}



Function maintenanceControleur($twig){
    echo $twig->render('maintenance.html.twig',array());
}


?>