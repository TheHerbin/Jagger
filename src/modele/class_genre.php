<?php
class Genre{
    private $db;
    private $insert;
	public function __construct($db){
        $this->db=$db;
        $this->insert =$db->prepare("insert into Genre(nom)
values(:nom)");
    }
    public function insert($nom){
        $r=true;
        $this->insert->execute(array(':nom'=>$nom));
    
    if($this->insert->errorCode()!=0){
        print_r($this->insert->errorInfo());
    $r=false;
    }
    return $r;
    }
}
?>