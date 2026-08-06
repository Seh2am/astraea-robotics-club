<?php include 'header.php'; include 'db-connect.php'; ?>
<?php
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM events WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<h1>" . htmlspecialchars($row['title']) . "</h1>";
    echo "<p><strong>Date:</strong> " . htmlspecialchars($row['event_date']) . "</p>";
    echo "<p><strong>Location:</strong> " . htmlspecialchars($row['location']) . "</p>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
} else {
    echo "<h1>Event not found</h1>";
}
mysqli_close($conn);
?>
<?php include 'footer.php'; ?>