<?php

require_once "Db.php";


class User extends Db{
    public function __construct()
    {
        $this->table="users";
        $this->connect();
    }
   
}

class Transfer extends Db{
    public function __construct()
    {
        $this->table="transaction";
        $this->connect();
    }
}