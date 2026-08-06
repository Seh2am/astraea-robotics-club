<?php include 'header.php'; include 'db-connect.php'; ?>
<h2>All Registrations</h2>
<table>
    <thead><tr><th>Name</th><th>ID</th><th>Email</th><th>Event</th></tr></thead>
    <tbody>
    <?php
    $sql = "SELECT name, student_id, email, event_title FROM registrations";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["student_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["event_title"]) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No registrations yet.</td></tr>";
    }
    mysqli_close($conn);
    ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>