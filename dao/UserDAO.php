<?php
    require_once('models/User.php');
    class UserDAO implements UserDAOInterface{
        private $conn;
        private $url;

        public function __construct(PDO $conn, $url)
        {
            $this->conn = $conn;
            $this->url = $url;
        }

        public function buildUser($data){
            $user = new User;
            
            $user->id = $data['id'];
            $user->name = $data['name'];
            $user->lastname = $data['lastname'];
            $user->mail = $data['mail'];
            $user->password = $data['password'];
            $user->image = $data['image'];
            $user->token = $data['token'];
            $user->bio = $data['bio'];
        }
        public function create(User $user, $authUser = false){

        }
        public function update(User $user){

        }
        public function verifyToken($protected = false){

        }
        public function setTokenToSession($token, $redirect = true){

        }
        public function authenticateUser($email, $passwords){

        }
        public function findUserByEmail($email){

        }
        public function findbyId($id){

        }
        public function findByToken($token){

        }
        public function changePassword(User $user){

        }
    }