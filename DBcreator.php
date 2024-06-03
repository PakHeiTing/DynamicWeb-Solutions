<?php

try {
    $db = new PDO('sqlite:cmsdb.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('
        CREATE TABLE IF NOT EXISTS pages (
            id INTEGER PRIMARY KEY,
            menu_name VARCHAR(30),
            content TEXT
        )
    ');
    $db->exec('
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY,
            username VARCHAR(50),
            hashed_password VARCHAR(40)
        )
    ');

    echo "Database and tables created successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>