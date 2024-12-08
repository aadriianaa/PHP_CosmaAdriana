<?php
namespace App\Models;

use Core\App;
use PDO;

class Campeo {
    protected static $table = "campeons";

    public $id;
    public $name;
    public $role;
    public $releaseDate;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->role = $data['role'];
        $this->releaseDate = $data['releaseDate'];
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Actualizar
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, role = :role, releaseDate = :releaseDate WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':role', $this->role);
            $statement->bindValue(':releaseDate', $this->releaseDate);
            $statement->execute();
        } else {
            // Crear
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (name, role, releaseDate) VALUES (:name, :role, :releaseDate)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':role', $this->role);
            $statement->bindValue(':releaseDate', $this->releaseDate);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $campeons = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $campeons[] = new self($result);
        }
        return $campeons;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
