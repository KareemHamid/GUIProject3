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

    public static function loadByName($name) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Character` WHERE name = :name');
      $post = $req->execute(['name' => $name]);
      $post = $req->fetch();
      
      return new Character($post);
    }

    public static function loadById($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Character` WHERE char_id = :id');
      $post = $req->execute(['id' => $id]);
      $post = $req->fetch();
      
      return new Character($post);
    }

    public static function loadRelations($name) {
      $db = Db::getInstance();
      $character = Character::loadByName($name);
      
      $req = $db->prepare('SELECT `rel_id`,`relationship` FROM `Relationship` WHERE char_id = :id');
      $req->execute(['id' => $character->character['char_id']]);

      $list = [
        "parent" => [],
        "sibling" => [],
        "significant" => [],
        "child" => [],
        "other" => [],
      ];

      foreach($req->fetchAll() as $result) {
        array_push($list[$result['relationship']], Character::loadById($result['rel_id']));
      }
      //print_r($list);
      return $list;
    }

    public static function update($name, $gDesc) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE `Character` SET general_description=:gDesc WHERE name = :name');
      $req->execute([
        'gDesc' => $gDesc,
        'name' => $name,
      ]);

      return $req->rowCount() > 0;
    }
    

    public static function delete($name) {
      $db = Db::getInstance();
      $req = $db->prepare('DELETE FROM `Character` WHERE name = :name');
      $req->execute(['name' => $name]);
    }

    public static function add($char) {
      $rel_name = $_GET['name'];
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO `Character` (name, birth, death, age, era, bender, bending_specialty, tribe_group, general_description, img) VALUES '.
        '(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j)');
      print_r($char);
      
      $req->execute([
        'a' => $_POST['new_name'],
        'b' => $_POST['birth'],
        'c' => $_POST['death'],
        'd' => $_POST['age'],
        'e' => $_POST['era'],
        'f' => $_POST['bender'],
        'g' => $_POST['bending_specialty'],
        'h' => $_POST['tribe_group'],
        'i' => $_POST['general_description'],
        'j' => $_POST['img'],
      ]);
      
      $req = $db->prepare('INSERT INTO `Relationship` (char_id, rel_id, relationship) VALUES'.
      '((SELECT char_id FROM `Character` WHERE name = :rel_name), (SELECT char_id FROM `Character` WHERE name = :new_name), :relationship)');

      $req->execute([
        'rel_name' => $rel_name,
        'new_name' => $_POST['new_name'],
        'relationship' => $_POST['relationship'],
      ]);
    }
  }