<?php
    require_once "../chamadoReal/src/models/user.php";

    class LoginController{
        private $users;

    public function __construct(){
        $this -> users = [
            new User(1,'adm@test.com.br','1234',1 ),
            new User(2,'user@test.com.br','1234',2),
            new User(3,'tiagoPitangaCamisa10@gmail.com','1234',2)
        ];
    }
    public function autenticar($email, $password){
        foreach ($this->users as $user) {
            if($user->email == $email && $user->password == $password){
                $_SESSION['autenticacao'] = 'SIM';
                $_SESSION['id'] = $user->id;
                $_SESSION['profile_id'] = $user->profile_id;
                header('Location: ../chamadoReal/src/view/home.php');
                exit;
            } 
        }
        $_SESSION['autenticacao'] = 'NAO';
        header('Location: index.php?login=erro');
        exit;
    }
    }
?>