<?php
namespace app\models;

class Post extends \app\core\Model{
	public function getAll(){
		$SQL = "SELECT * FROM post";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Post');
		return $STMT->fetchAll();
	}

	public function get($post_id){
		$SQL = "SELECT * FROM post WHERE post_id=:post_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['post_id'=>$post_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Post');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO post(author, message, password_hash) VALUES (:author, :message ,:password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['author'=>$this->author,
						'message'=>$this->message,
						'password_hash'=>$this->password_hash]);
	}

	public function update(){
		$SQL = "UPDATE post SET author=:author, message=:message WHERE post_id=:post_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['author'=>$this->author,
						'message'=>$this->message,
						'post_id'=>$this->post_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM post WHERE post_id=:post_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['post_id'=>$this->post_id]);
	}

}