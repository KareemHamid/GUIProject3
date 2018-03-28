<?php
  class Event {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $title;
    public $body;

    public function __construct($id, $title, $body) {
      $this->id = $id;
      $this->title = $title;
      $this->body = $body;
    }

    public static function findEvents($char_id) {
      $list = [];
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Event` WHERE char_id = :char_id');
      $req->execute(array('char_id' => $char_id));
      
      foreach($req->fetchAll() as $result) {
        $list[] = new Event($result['event_id'], $result['title'], $result['body']);
      }

      return $list;
    }

    public static function findEventWithID($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM `Event` WHERE event_id = :id');
      $post = $req->execute(['id' => $id]);
      $post = $req->fetch();
      
      return new Event($post);
    }

    public static function update($id, $title, $body) {
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE `Event` SET title=:title, body=:body WHERE event_id=:id');
      $req->execute([
        'body' => $body,
        'title' => $title,
        'id' => $id,
      ]);

      return $req->rowCount() > 0;
    }

    public static function add($name, $title, $body) {
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO `Event` (char_id, title, body) VALUES '.
        '((SELECT char_id FROM `Character` WHERE name = :name), :title, :body) ');
      $req->execute([
        'name' => $name,
        'title' => $title,
        'body' => $body,
      ]);
    }
  }