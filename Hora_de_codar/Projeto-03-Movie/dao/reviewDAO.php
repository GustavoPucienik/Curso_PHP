<?php

require_once("models/review.php");
require_once("models/message.php");

require_once("dao/userDAO.php");

class ReviewDAO implements ReviewDAOInterface {

    private $conn;
    private $url;
    private $message;
    public function __construct(PDO $conn, $url){
        $this->conn =  $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    public function buildReview($data){

        $reviewObject = new Review();

        $reviewObject->id = $data["id"];
        $reviewObject->rating = $data["rating"];
        $reviewObject->review = $data["review"];
        $reviewObject->users_id = $data["users_id"];
        $reviewObject->movies_id = $data["movies_id"];

        return $reviewObject;

    }
    public function create(Review $review){

        $stmt = $this->conn->prepare("INSERT INTO reviews (
            rating, reviews, movies_id, users_id
          ) VALUES (
            :rating, :review, :movies_id, :users_id
          )");
    
          $stmt->bindParam(":rating", $review->rating);
          $stmt->bindParam(":review", $review->review);
          $stmt->bindParam(":movies_id", $review->movies_id);
          $stmt->bindParam(":users_id", $review->users_id);
    
          $stmt->execute();
    
          // Mensagem de sucesso por adicionar filme
          $this->message->setMessage("Crítica adicionada com sucesso!", "sucess", "index.php");

    }
    public function getMoviesReview($id){}
    public function hasAlreadyReviewed($id, $userId){}
    public function getRating($id){}

}

?>