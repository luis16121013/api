<?php
class ControllerTeacher{
    private $con=null;
    public function __construct($db){
        $this->con=database::create()->conect($db);
    }
    public function getAll(){
        $sql="SELECT tt.*, tu.pass FROM table_teachers tt, table_users tu WHERE tt.idUser=tu.idUser";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
		public function getTeacher($id){
				$sql="SELECT tt.*, tu.pass FROM table_teachers tt, table_users tu WHERE tt.idUser=tu.idUser and tt.id=?";
				$rs=$this->con->prepare($sql);
				$rs->execute(array($id));
				return $rs->fetchAll(PDO::FETCH_OBJ);
		}
}
