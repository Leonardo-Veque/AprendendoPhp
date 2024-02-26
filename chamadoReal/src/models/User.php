<?php

    class User{
        public $id;
        public $profile_id;

        public $email;

        public $password;

        public function __construct($id, $email, $password, $profile_id) 
        {
            $this ->id = $id;
            $this ->email = $email;
            $this ->password = password_hash($password,PASSWORD_DEFAULT);
            $this -> profile_id = $profile_id;   
        }
        public function verificarSenha($password){
            return password_verify($password, $this ->password);
        }
    }

?>