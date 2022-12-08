<?php
    require_once("autoload.php");

    class teacher extends conexion {
        private $strname;
        private $strlastname;
        private $strmail;
        private $strmatter;
       
        public function __construct () {
            $this->conexion = new conexion ();
            $this->conexion = $this->conexion->connect();
        }

        public function insert(string $name, string $lastname, string $mail, string $matter){

            $this->strname = $name;
            $this->strlastname = $lastname;
            $this->strmail = $mail;
            $this->strmatter =$matter ;
        

            $sql = "INSERT INTO teachers(name, lastname, mail, matter) VALUES(?,?,?,?)";
           
            $insert = $this->conexion->prepare($sql);
           
            $arrData = array($this->strname, $this->strlastname, $this->strmail, $this->strmatter);
           
            $resInsert = $insert->execute($arrData);
                           
            $idInsert = $this->conexion->lastInsertid();

            return $idInsert;

        }

        public function getTeachers() {
            $sql = "SELECT * FROM 'teachers';";
            $execute = $this->conexion->query($sql);
            $request = $execute->ferchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function updateTeacher(string $name, string $lastname, string $mail, string $matter){
           
            $this->strname = $name;
            $this->strlastname = $lastname;
            $this->strmail = $mail;
            $this->strmatter =$matter;
            

            $sql = "UPDATE teachers SET name=?, lastname=?, mail=?, matter=? WHERE id=$id";
           
            $update = $this->conexion->prepare($sql);

            $arrData = array( $this->strname, $this->strlastname, $this->strmail, $this->strmatter);
            
            $resExecute = $update->execute($arrData);
            return $resExecute;

        }
         public function getTeacher(int $id){
            $sql = "SELECT * FROM techers WHERE id 0 ? ";
            $arrwhere = array($id);
            $query = $this->conexion->prepare($sql);
            $query->execute($arrwhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }

        public function delTeacher(int $id){
            $sql = "DELETE FROM teachers WHERE id 0 ? ";
            $arrwhere = array($id);
            $delet = $this->conexion->prepare($sql);
            $del= $delete->execute($arrwhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $del;
        }

    
    }

?>