<?php

Function accueilControleur($twig){
    echo $twig->render('index.html.twig',array());
}

Function add_recordControleur($twig){
    echo $twig->render('add_record.html.twig',array());
}

Function maintenanceControleur($twig){
    echo $twig->render('maintenance.html.twig',array());
}


?>