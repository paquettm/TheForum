<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$post = new \app\models\Post();
		$posts = $post->getAll();
		$this->view('Post/index', $posts);
	}

	public function add(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_confirm']){
				$post = new \app\models\Post();
				$post->author = $_POST['author'];
				$post->message = $_POST['message'];
				$post->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$post->insert();
				header('location:/Main/index');
			}else{
				header("location:/Main/add/?error=Passwords don't match");
			}
		}else{
			$this->view('Post/add');
		}
	}

	public function edit($post_id){
		$post = new \app\models\Post();
		$post = $post->get($post_id);
		if(isset($_POST['action'])){
			//authenticate
			if(password_verify($_POST['password'], $post->password_hash)){
				$post->author = $_POST['author'];
				$post->message = $_POST['message'];
				$post->update();
				header('location:/Main/index');
			}else{
				header("location:/Main/edit/$post_id?error=Wrong password provided");
			}
		}else{
			$this->view('Post/edit', $post);
		}
	}

	public function delete($post_id){
		$post = new \app\models\Post();
		$post = $post->get($post_id);
		if(isset($_POST['action'])){
			//authenticate
			if(password_verify($_POST['password'], $post->password_hash)){
				$post->delete();
				header('location:/Main/index');
			}else{
				header("location:/Main/delete/$post_id?error=Wrong password provided");
			}
		}else{
			$this->view('Post/delete', $post);
		}
	}
}