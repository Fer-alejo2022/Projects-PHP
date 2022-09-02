<?php
    class Connection{
        private $server = "localhost";
        private $user = "root";
        private $key = "";
        private $conection;

        public function __construct(){
               try {
                   $this->conection = new PDO("mysql:host=$this->server; dbname=mathematics",$this->user, $this->key);
                   $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               } catch (PDOException $e) {
                    return "Failed ".$e;
               }
        }
        public function run($sql){
            $this->conection->exec($sql);
            return $this->conection->lastInsertId();
        }
        public function consult($sql){
             $sentence = $this->conection->prepare($sql);
             $sentence->execute();
             return $sentence->fetchAll();
        }
    }
?>