<?php
class Article{
    private $db;
    private $insert;
	public function __construct($db){
        $this->db=$db;
        $this->insert =$db->prepare("insert into Article(titre,contenu,idGenre)
values(:titre,:contenu,:idGenre)");
    }
    public function insert($titre,$texte,$idgenre){
        $r=true;
        $this->insert->execute(array(':titre'=>$titre,':contenu'=>$texte,':idGenre'=>$idgenre));
    
    if($this->insert->errorCode()!=0){
        print_r($this->insert->errorInfo());
    $r=false;
    }
    return $r;
    }
}
?>