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
            $this->message = new Message($url);
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

        public function verifyToken($protect = false){

            if(!empty($_SESSION["token"])){

                //pega o token da session
                $token = $_SESSION["token"];

                $user = $this->findByToken($token);

                if($user){
                    return $user;
                } else if($protect){
                //redireciona para o usuario não autenticado
                $this->message->setMessage("faça a autenticação para acessar essa pagina!", "error", "index.php");
                
                }

            } else if($protect){
                //redireciona para o usuario não autenticado
                $this->message->setMessage("faça a autenticação para acessar a pagina!", "error", "index.php");
            }

        }
        public function setTokenToSession($token, $redirect = true){

            //Salvar token na sessão
            $_SESSION["token"] = $token;

            if($redirect = true){

                //redireciona para o perfil do usuario
                $this->message->setMessage("Seja bem-vindo!", "sucess", "editprofile.php");

            } else{}

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
        public function findByToken($token) {

            if($token != "") {
      
              $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");
      
              $stmt->bindParam(":token", $token);
      
              $stmt->execute();
      
              if($stmt->rowCount() > 0) {
      
                $data = $stmt->fetch();
                $user = $this->buildUser($data);
                
                return $user;
      
              } else {
                return false;
              }
      
            } else {
              return false;
            }
      
          }

        public function destroyToken(){

            //remove o token da sessão
            $_SESSION["token"] = "";

            //redirecionar e apresentar a mensagem de sucesso
            $this->message->setMessage("Você fez o logout com sucesso", "sucess", "index.php");

        }

        public function changePassword(User $user){}
    }

?>