<?php

include_once("backend/core/ObjectAbstract.php");
include_once("backend/core/Auth.php");


class User extends ObjectAbstract{

    
    public $POST_INFO;

    /**
     *  Construye al objeto user
     * 
     *  POST_INFO es la informacion que viene 
     *  en el request (desde cualquier verbo http), en JSON.
     * 
     *  De ser necesario se puede cambiar por las variables 
     *  $_POST/$_GET solo asignandola $this -> POST_INFO = $_POST/$_GET
     * 
     *  El constructor del padre son las funciones CRUD en un objeto PDO
     *  con statements preparados, se le pasa como parametro el nombre de la tabla
     *  
     */
    public function __construct($form = false){
        if($form){
            $this->POST_INFO = $_POST;
        }else {
            $this->POST_INFO = json_decode(file_get_contents('php://input'), true);
        }
        parent::__construct("users", $this->params());
    }


    /**
     *  Define los campos de la db
     * 
     *  Configurando el array, se automatiza funciones
     *  CRUD. El campo 'type' y 'null' puede servir
     *  para validar.
     */

     // TODO opcional - clase para validar los campos de la clase

    private function params(){
        return array(
            "name" => [
                        "type" => "string",
                        "NULL" => "NO",
                        "value" => isset($this->POST_INFO["name"]) ? $this->POST_INFO["name"] : NULL
            ],

            "email" => [
                        "type" => "email",
                        "NULL" => "NO",
                        "value" => $this->POST_INFO["email"]
            ],

            "lastname" => [
                        "type" => "string",
                        "NULL" => "YES",
                        "value" => isset($this->POST_INFO["lastname"]) ? $this->POST_INFO["lastname"] : NULL
            ],

            "password" => [
                        "type" => "string",
                        "NULL" => "NO",
                        "value" => password_hash($this->POST_INFO["password"], PASSWORD_DEFAULT)
            ]
        );
    }

    
    public function login($redirect = '')
    {
        
        $email = $this->POST_INFO["email"];
        $password = $this->POST_INFO["password"];

        $query = "SELECT * FROM users WHERE email = :email";
        $stmt =  $this->connection->getConnection()->prepare($query);
        $stmt->bindValue(":email", $email);

        if ($stmt->execute()) {
            $response_body = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            http_response_code(404);
            exit;
        }

        if (password_verify($password, $response_body["password"])) {
            setcookie("token", Auth::SignIn($response_body), time() + 3600); //tiempo de la cookie
            if(isset($_COOKIE["token"]) && !empty($_COOKIE["token"])){
                http_response_code(200);
                header("Location: " . $redirect);
            } else {
                http_response_code(403);
            }
        } else {
            http_response_code(401);
            exit;
        }
    }

}

?>