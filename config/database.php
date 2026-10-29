<?php
/*
 * MySQL connection is optional for this starter site.
 * The website still works without MySQL; prices are displayed from the language files.
 * To enable the database, create a database using database/schema.sql and update these values.
 */
$db = null;
$dbHost = '127.0.0.1';
$dbName = 'computer_service';
$dbUser = 'root';
$dbPass = '';

try {
    if (class_exists(PDO::class)) {
        $db = new PDO(
            "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
            $dbUser,
            $dbPass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }
} catch (PDOException $exception) {
    // Database is not required for the demo version. Avoid showing credentials/errors to visitors.
    $db = null;
}
