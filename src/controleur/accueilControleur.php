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
    $form = array();
    if (isset($_POST['btAjouter'])){
        $titre = $_POST['titre'];
        $texte = $_POST['texte'];
        $idgenre = $_POST['idgenre'];
        $form['valide'] = true;
        if ($texte == null){
            $form['valide'] = false; 
            $form['message'] = 'le texte est vide';
        }
        else{
            $Article = new Article($db);
            $exec = $Article->insert($titre,$texte,$idgenre);
            if (!$exec){
                $form['valide'] = false;  
                $form['message'] = 'Problème d\'insertion dans la table genre ';  
            }
        }
    }
    echo $twig->render('add_article.html.twig',array());
}



Function maintenanceControleur($twig){
    echo $twig->render('maintenance.html.twig',array());
}


?>