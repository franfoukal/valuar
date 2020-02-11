<?php


    class CRUDRouter{

        public static function route(CRUD $resource, $param=null){

                switch ($_SERVER["REQUEST_METHOD"]) {
                    case 'GET':
                        $resource->read($param); 
                        break;
                    case "DELETE":
                        $resource->delete($param);
                        break;
                    case 'POST':
                        $resource->create();
                        break;
                    case 'PUT':
                        $resource->update($param);
                        break;
                }
            }

    }



?>