<?php
  class Character {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $character;

    public function __construct($character) {
      $this->character = $character;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM `Character`');

      foreach($req->fetchAll() as $post) {
        $list[] = new Character($post);
      }

      return $list;
    }

    public static function findCharacter($name) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Character` WHERE name = :name');
      $post = $req->execute(array('name' => $name));
      $post = $req->fetch();
      
      return new Character($post);
    }

    public static function findCharacterID($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Character` WHERE char_id = :id');
      $post = $req->execute(array('id' => $id));
      $post = $req->fetch();
      
      return new Character($post);
    }

    public static function findRelations($name) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT `char_id` FROM `Character` WHERE name = :name');
      $post = $req->execute(array('name' => $name));
      $id = $req->fetch();
      
      $req = $db->prepare('SELECT `rel_id`,`relationship` FROM `Relationship` WHERE char_id = :id');
      $req->execute(array('id' => $id['char_id']));

      $list = [
        "parent" => [],
        "sibling" => [],
        "significant" => [],
        "child" => [],
        "other" => [],
      ];

      foreach($req->fetchAll() as $result) {
        array_push($list[$result['relationship']], Character::findCharacterID($result['rel_id']));
      }
      //print_r($list);
      return $list;
    }
  }