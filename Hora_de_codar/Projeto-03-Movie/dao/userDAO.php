<?php 

require_once("models/User.php");
require_once("models/message.php");

    class UserDAO implements UserDAOInterface {
        
        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url){
            $this->conn = $conn;
            $this->url = $url;
        }        

        public function buildUser($data){

            $user = new User();

            $user->id = $data['id'];
            $user->name = $data['name'];
            $user->lastname = $data['lastname'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->image = $data['image'];
            $user->bio = $data['bio'];
            $user->token = $data['token'];

            return $user;

        }

        public function create(User $user, $authUser = false){

            $stmt = $this->conn->prepare("INSERT INTO 
            users(name, lastname, email, password, token)
            VALUES (:name, :lastname, :email, :password, :token
            )");

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);

        $stmt->execute();

        //autenticar usuario, caso auth seja true
        if ($authUser) {
            $this->setTokenToSession($user->token);
        }

        }
        public function update(User $user){}

        public function verifyToken($protect = false){}
        public function setTokenToSession($token, $redirect = true){

            //Salvar token na sessão
            $_SESSION["token"] = $token;

            if($redirect){

                //redireciona para o perfil do usuario
                $this->message->setMessage("Seja bem-vindo!", "sucess", "editprofile.php");

            }

        }
        public function autenticateUser($email, $password){}

        public function findByEmail($email){

            if ($email != "") {

                $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

                $stmt->bindParam(":email", $email);

                $stmt->execute();

                if($stmt->rowCount() > 0){

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                } else {

                    return false;

                }

            } else {

                return false;

            }

        }
        public function findById($id){}
        public function findByToken($token){}

        public function changePassword(User $user){}
    }

?>