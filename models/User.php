<?php

class User {
    public $id;
    public $name;
    public $lastname;
    public $mail;
    public $password;
    public $image;
    public $token;
    public $bio;
}

interface UserDAOInterface{
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user);
    public function verifyToken($protected = false);
    public function setTokenToSession($token, $redirect = true);
    public function authenticateUser($email, $passwords);
    public function findUserByEmail($email);
    public function findbyId($id);
    public function findByToken($token);
    public function changePassword(User $user);

}