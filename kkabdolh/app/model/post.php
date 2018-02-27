<?php
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $character;

    public function __construct($character) {
      $this->character = $character;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM character');

      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post);
      }

      return $list;
    }

    public static function findCharacter($name) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Character` WHERE name = :name');
      $post = $req->execute(array('name' => $name));
      $post = $req->fetch();
      
      return new Post($post);
    }
  }