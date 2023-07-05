<?php
    require("conn.php");
    class contas extends conn
    {

    public object $conn;
    public array $formData;


    public function create(){
        //Conexão com o  banco
        $this->conn = $this->connect();
        //Query sql
        $query="SELECT FROM usuario(email,senha) VALUES (:email,:senha)";
        //Preparo da query para inserção
        $addcontas=$this->conn->prepare($query);
        //Substituição de parâmetros pelo array
        $addcontas->bindParam(':email',$this->formData['email']);
        $addcontas->bindParam(':senha',$this->formData['senha']);
        $addcontas->execute();
        //Validação
        if($addcontas->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>