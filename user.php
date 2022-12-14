<?php
    require_once("autoload.php");

    class user extends conexion {
        private $strname;
        private $strlastname;
        private $strmail;
        private $strpassword;
        private $strbirthdate;
        private $straddress;
        private $stravatar;
        private $intavatar;

        public function __construct () {
            $this->conexion = new conexion ();
            $this->conexion = $this->conexion->connect();
        }

        public function insert(string $name, string $lastname, string $mail, string $password, string $birthdate, string $address, string $avatar, int $active){

            $this->strname = $name;
            $this->strlastname = $lastname;
            $this->strmail = $mail;
            $this->strpassword = $password;
            $this->strbirthdate =$birthdate ;
            $this->straddress =$address ;
            $this->stravatar = $avatar ;
            $this->intactive = $active ;

            $sql = "INSERT INTO users (name, lastname, mail, password, birthdate, address, avatar, active) VALUES(?,?,?,?,?,?,?,?)";
           
            $insert = $this->conexion->prepare($sql);
           
            $arrData = array($this->strname, $this->strlastname, $this->strmail, $this->strpassword, $this->strbirthdate, $this->straddress, $this->stravatar, $this->intactive);
           
            $resInsert = $insert->execute($arrData);
                           
            $idInsert = $this->conexion->lastInsertid();

            return $idInsert;

        }

        public function getUsers() {
            $sql = "SELECT * FROM 'users' ";
            $execute = $this->conexion->query($sql);
            $request = $execute->ferchall(PDO::FETCH_ASSOC);
            return $request;
        }

        public function updateUser(int $id, string $name, string $lastname, string $mail, string $password, string $birthdate, string $address, string $avatar, int $active){
           
            $this->strname = $name;
            $this->strlastname = $lastname;
            $this->strmail = $mail;
            $this->strpassword = $password;
            $this->strbirthdate =$birthdate ;
            $this->straddress =$address ;
            $this->stravatar = $avatar ;
            $this->intactive = $active ;

            $sql = "UPDATE users SET name=?, lastname=?, mail=?, password=?, birthdate=?, address=?, avatar=?, active=?, WHERE id=$id";
           
            $update = $this->conexion->prepare($sql);

            $arrData = array( $this->strname, $this->strlastname, $this->strmail, $this->strpassword, $this->strbirthdate, $this->straddress, $this->stravatar, $this->intactive);
            
            $resExecute = $update->execute($arrData);
            return $resExecute;

        }
         public function getUser(int $id){
            $sql = "SELECT * FROM users WHERE id 0 ? ";
            $arrwhere = array($id);
            $query = $this->conexion->prepare($sql);
            $query->execute($arrwhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }

        public function delUser(int $id){
            $sql = "DELETE FROM users WHERE id 0 ? ";
            $arrwhere = array($id);
            $delet = $this->conexion->prepare($sql);
            $del= $delete->execute($arrwhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $del;
        }
    
    
    }

?>