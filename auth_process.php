<?php
    require_once('models/User.php');
    require_once('dao/UserDAO.php');
    require_once("globals.php");
    require_once("db.php");

    //resgata o tipo do formulário

    $type = filter_input(INPUT_POST, 'type');

    //verifica o tipo do formulário
    if($type === 'register'){
        $name = filter_input(INPUT_POST,'name');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $confirmpassword = filter_input(INPUT_POST,'confirmpassword');
        echo $name.'<br>';
        echo $lastname.'<br>';
        echo $password.'<br>';
        echo $confirmpassword.'<br>';

    }else{

    }
?>