<?php require_once ("includes/functions.php"); ?>
<?php require_once("includes/functions.php");?>
<?php
$id = $_GET['page'];

if($page = get_page_by_id($id)){
    $query = "DELETE FROM pages WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if($stmt->execute()){
        if($stmt->rowCount() == 1){
            header("location: content.php");
            exit;
        } else {
            echo "<p>Delete failed</p>";
            echo '<a href="content.php">Return to main page</a>';
        }
    }
} else {
    header("location: content.php");
    exit;
}
?>
