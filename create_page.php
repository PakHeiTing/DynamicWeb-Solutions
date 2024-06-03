<?php
require_once("includes/connection.php");
require_once("includes/functions.php");
?>
<?php
    $menu_name = $_POST["menu_name"];
    $content = $_POST["content"];

    $query = "INSERT INTO pages (Menu_name, content) VALUES (:menu_name, :content)";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(':menu_name', $menu_name);
    $stmt->bindParam(':content', $content);

    if($stmt->execute()){
        header("Location: content.php");
    } else {
        echo "Error";
    }

    if(isset($connection)){
        $connection = null;
    }
?>
