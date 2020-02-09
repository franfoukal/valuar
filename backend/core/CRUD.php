<?php

interface CRUD
{
    public function create();
    public function read($id = null);
    public function update($id);
    public function delete($id);
    // public function join($resource_name, $user_id);
}