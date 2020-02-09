<?php


include_once("DatabaseConnector.php");
include_once("CRUD.php");

abstract class ObjectAbstract implements CRUD{

    private $table;
    private $definition;
    protected $connection;

    public function __construct(string $table, array $definition){
        
        $this->connection = new DatabaseConnector();
        $this->table = $table;
        $this->definition = $definition;
    }

    public function read($id=NULL){
        if($id == null){
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->connection->getConnection()->prepare($sql);
            try {
                $stmt->execute();
                $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (empty($response)) throw new Exception("Not Found", 1);
                echo json_encode($response);
                http_response_code(200);
            } catch (\Exception $e) {
                echo $e->getMessage();
                http_response_code(404);
            }
        } else {
            $sql = "SELECT * FROM $this->table WHERE id = $id";
            $stmt = $this->connection->getConnection()->prepare($sql);

            try {
                $stmt->execute();
                $response = $stmt->fetch(PDO::FETCH_ASSOC);
                if (empty($response)) throw new Exception("Not Found", 1);
                echo json_encode($response);
                http_response_code(200);
            } catch (\Exception $e) {
                echo $e->getMessage();
                http_response_code(404);
            }
        }
    }

    public function create(){
        //se prepara la query
        $sql = "INSERT INTO $this->table (id, ";
        $values = "VALUES (NULL, ";

        foreach($this->definition as $column=>$value){

            if ($column === array_key_last($this->definition)) {
                $sql .= $column . ") ";
                $values .= ":$column)";
            } else {
                $sql .= $column . ", ";
                $values .= ":$column, ";
            }
        }

        $sql .= $values;

        //se prepara el stmt
        $stmt = $this->connection->getConnection()->prepare($sql);

        //binding de variables
        foreach($this->definition as $column=>$value){
            $stmt->bindParam(":$column", $value["value"]);
        }
        //ejecuta la query 
        try {
            $stmt->execute();
            echo "Created";
            http_response_code(201);
        } catch (\Exception $e) {
            echo $e->getMessage();
            http_response_code(400);
        }
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $stmt = $this->connection->getConnection()->prepare($sql);
        try {
            $stmt->execute();
            echo "Deleted";
            http_response_code(200);
        } catch (\Exception $e) {
            echo $e->getMessage();
            http_response_code(400);
        }
    }

    public function update($id){
        $sql ="UPDATE $this->table SET ";

        foreach($this->definition as $column=>$value){
            if ($column === array_key_last($this->definition)) {
                $sql .= "$column = :$column WHERE id = $id";
            } else {
                $sql .= "$column = :$column, ";
            }
        }

        //se prepara el stmt
        $stmt = $this->connection->getConnection()->prepare($sql);

        //binding de variables
        foreach ($this->definition as $column => $value) {
            $stmt->bindParam(":$column", $value["value"]);
        }

        try {
            $stmt->execute();
            echo "Updated";
            http_response_code(200);
        } catch (\Exception $e) {
            echo $e->getMessage();
            http_response_code(400);
        }

    }

}