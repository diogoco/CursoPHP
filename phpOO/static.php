<?php

class Login {

    public static $user;

    public static function verificaLogin(){
        echo "O usuario esta logado";
    }
}

Login::verificaLogin();
Login::user = "admin";


interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
    
}