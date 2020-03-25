<?php

function getPage($db){

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['add_record'] = "add_recordControleur";
    $lesPages['maintenance'] = "maintenanceControleur";
    $lesPages['add_article'] = "add_articleControleur";
    if($db!=NULL){

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 'accueil';
        
        }
        if(isset($lesPages[$page])){
    
            $contenu = $lesPages[$page];
        
        }
        else
        {
            $contenu = $lesPages['accueil'];
        
        }
    
        return $contenu;
    }else{
        return $lesPages['maintenance'];
    }
    
    
    }

?>