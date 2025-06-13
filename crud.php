<?php
require_once 'database.php'; 
class CRUD {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function create($table, $data) {
        try {
            $keys = implode(',', array_keys($data));
            $placeholders = ':' . implode(', :', array_keys($data));
            $sql = "INSERT INTO $table ($keys) VALUES ($placeholders)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            echo "Create Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($table, $conditions = []) {
        try {
            $sql = "SELECT * FROM $table";
            if (!empty($conditions)) {
                $fields = array_map(fn($key) => "$key = :$key", array_keys($conditions));
                $sql .= " WHERE " . implode(' AND ', $fields);
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($conditions);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Read Error: " . $e->getMessage();
            return [];
        }
    }

    public function update($table, $data, $conditions) {
        try {
            $fields = implode(', ', array_map(fn($key) => "$key = :$key", array_keys($data)));
            $cond = implode(' AND ', array_map(fn($key) => "$key = :cond_$key", array_keys($conditions)));

            $sql = "UPDATE $table SET $fields WHERE $cond";
            $stmt = $this->conn->prepare($sql);

            // Merge params
            $params = array_merge($data, array_combine(
                array_map(fn($k) => "cond_$k", array_keys($conditions)),
                array_values($conditions)
            ));
            $stmt->execute($params);
            return true;
        } catch (PDOException $e) {
            echo "Update Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($table, $conditions) {
        try {
            $cond = implode(' AND ', array_map(fn($key) => "$key = :$key", array_keys($conditions)));
            $sql = "DELETE FROM $table WHERE $cond";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($conditions);
            return true;
        } catch (PDOException $e) {
            echo "Delete Error: " . $e->getMessage();
            return false;
        }
    }
}
