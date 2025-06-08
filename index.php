 <?php include 'includes/header.php'; include 'includes/nav.php'; include 'db/config.php';

$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
echo "<h2>User List</h2><table><tr><th>Name</th><th>Email</th><th>Actions</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";

include 'includes/footer.php';
?>
