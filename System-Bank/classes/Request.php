<?php
class Request{

    public function geta(string $key=null)
    {
        return ($key==null)?$_GET:((isset($_GET[$key]))?$_GET[$key]:null);
    }
    public function get(string $key)
    {
        return $_GET[$key];
    }
    public function post(string $key)
    {
        return $_POST[$key];
    }
    public function files(string $key)
    {
        return $_FILES[$key];
    }
    public function postHas(string $key)
    {
        return isset($_POST[$key]);
    }
    public function postClean(string $key)
    {
        return trim(htmlspecialchars($_POST[$key]));
    }
    public function method()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
    public function redirect(string $path)
    {
        header ($path);
    }
   
}




?>