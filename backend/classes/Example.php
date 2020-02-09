<?php

class Example extends ObjectAbstract{

    public $name;
    public $lastname;
    public $email; 
    public $POST_INFO;

    public function __construct(){
        $this->POST_INFO = json_decode(file_get_contents('php://input'), true);
        parent::__construct("example", $this->params());
    }


    private function params(){
        return array(
            "name" => [
                        "type" => "string",
                        "NULL" => "NO",
                        "value" => $this->POST_INFO["name"]
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
            ]
        );
    }


}

?>