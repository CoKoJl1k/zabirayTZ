<?php

class CardModel
{
    public $db;
    public function __construct(){
        $this->db = DataBase::getInstance();
    }

    public function getCardsUser($id_user){
        $stmt = $this->db->prepare("select * from cards where id_user = :id_user order by expire_date");
        $stmt->execute(array('id_user'=>$id_user));
        return $stmt->fetchAll();
    }

    public function getCard($id){
        $stmt = $this->db->prepare("select * from cards where id = :id");
        $stmt->execute(array('id'=>$id));
        return $stmt->fetch();
    }
}