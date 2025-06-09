<?php include 'includes/header.php'; include 'includes/nav.php'; include 'db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute([$_POST['name'], $_POST['email']]);
    header("Location: index.php");
}
?>

<h2>Add User</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Create</button>
</form>

<?php include 'includes/footer.php'; ?>
