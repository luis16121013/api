<?php
class ControllerAdmin{
    private $con=null;
    public function __construct($db){
        $this->con=database::create()->conect($db);
    }
    public function getAll(){
        $sql="SELECT*FROM table_admins";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAdmin($id){
        $sql="SELECT*FROM table_admins WHERE id=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($id));
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
}