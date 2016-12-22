<?php
function connection_open() {
// Database credential
    $servername = "localhost";
    $username = "root";
    $password = "";
//Data base name
    $dbname = "payment";
    try {
        global $conn;
// Open the connection using PDO.
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
//echo $e->getMessage();
        die();
    }
}
function connection_close() {
    global $conn;
    $conn = null;
}
?>

