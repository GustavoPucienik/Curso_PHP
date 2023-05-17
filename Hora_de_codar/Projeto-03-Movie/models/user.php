<?php 

    class User {

        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

        public function getFullName($user){
            return $user->name . " " . $user->lastname;
        }
        public function generateToken(){

            return bin2hex(random_bytes(50));

        }
        public function generatePassword($password){

            return $finalPassword = password_hash($password, PASSWORD_DEFAULT);

        }

    }

    interface UserDAOInterface {

        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user, $redirect = true);
        public function verifyToken($protect = false);
        public function setTokenToSession($token, $redirect = true);
        public function autenticateUser($email, $password);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function changePassword(User $user);
    }

?>