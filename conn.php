<?php

    abstract class conn
    {
        public string $db ="mysql"; // tipo de banco
        public string $host ="localhost"; // nome do host no caso local
        public string $user="root"; // padrão
        public string $password=""; // padrão
        public string $dbname="contas";
        public int $port=3306;
        public object $connect;

        public function connect(){
            try{

                $this->connect= new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user,$this->password);
                echo "Conexão realizada com sucesso!";
                return $this->connect;
            }
            catch(Exception $err){
                    echo "Tente mais tarde ou entre em contato com o administrador".$err;
            }
        }
    }



?>