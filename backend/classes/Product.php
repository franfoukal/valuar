<?php

include_once("backend/core/ObjectAbstract.php");




class Product extends ObjectAbstract {
    
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
    public function __construct(){
        $this->POST_INFO = json_decode(file_get_contents('php://input'), true);
        parent::__construct("products", $this->params());
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
                        "value" => $this->POST_INFO["name"]
            ],

            "price" => [
                        "type" => "number",
                        "NULL" => "NO",
                        "value" => $this->POST_INFO["price"]
            ],

            "photos" => [
                        "type" => "array",
                        "NULL" => "NO",
                        "value" => $this->POST_INFO["photos"]
            ],
            "material" =>[
                "type" => "string",
                "NULL" => "NO",
                "value" => $this->POST_INFO["material"]
            ],
            "sells" =>[
                "type" => "number",
                "NULL" => "YES",
                "value" => 0
            ],
            "description" => [
                "type" => "string",
                "NULL" => "YES",
                "value" => isset($this->POST_INFO["description"]) ? $this->POST_INFO["description"] : NULL
            ],
            "stock" => [
                "type" => "number",
                "NULL" => "YES",
                "value" => $this->POST_INFO["stock"]
            ]

        );
    }

    public function paginate($cant, $page=0){
        $offset = $cant * $page;
        $sql = "SELECT * FROM products LIMIT $cant OFFSET $offset";
        $sql1 = "SELECT COUNT(*) as 'pages' FROM products";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt1 = $this->connection->getConnection()->prepare($sql1);
        try {
            $stmt->execute();
            $stmt1->execute();
            print json_encode([
                "pages" => floor($stmt1->fetch(PDO::FETCH_COLUMN)/$cant),
                "result" => $stmt->fetchAll(PDO::FETCH_ASSOC)
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


}

    
?>