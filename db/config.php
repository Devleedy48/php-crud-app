 <?php
$host = 'localhost';
$dbname = 'crud_app';
$username = 'root';
$password = 'sesame';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>
