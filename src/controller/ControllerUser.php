<?php
class ControllerUser{
    private $con=null;
    public function __construct($db){
        $this->con=database::create()->conect($db);
    }
    public function getAll(){
        $sql="SELECT*FROM table_users";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    //---
    public function getUser($id){
        $sql="SELECT*FROM table_users";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
}