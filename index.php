<?php
require "config.php";

$action = $_GET['action'] ?? null;

switch ($action) {

    
    case "get":
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo json_encode(["error" => "id required"]);
            exit;
        }

        $stmt = $pdo->prepare("SELECT * FROM cities WHERE id = :id");
        $stmt->execute(["id" => $id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo json_encode($row ?: ["error" => "not found"]);
        break;


    /
    case "del":
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo json_encode(["error" => "id required"]);
            exit;
        }

        $stmt = $pdo->prepare("DELETE FROM cities WHERE id = :id");
        $stmt->execute(["id" => $id]);

        echo json_encode([
            "status" => "deleted",
            "id" => $id
        ]);
        break;


    
    case "edit":
        $id = $_GET['id'] ?? null;
        $name = $_POST['name'] ?? null;

        if (!$id || !$name) {
            echo json_encode(["error" => "id and name required"]);
            exit;
        }

        $stmt = $pdo->prepare("
            UPDATE cities 
            SET name = :name 
            WHERE id = :id
        ");

        $stmt->execute([
            "id" => $id,
            "name" => $name
        ]);

        echo json_encode([
            "status" => "updated",
            "id" => $id,
            "new_name" => $name
        ]);
        break;


    default:
        echo json_encode(["error" => "unknown action"]);
}
