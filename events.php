<?php include 'header.php'; include 'db-connect.php'; ?>
<h2>All Events</h2>
<table>
    <thead><tr><th>Title</th><th>Date</th><th>Details</th></tr></thead>
    <tbody>
    <?php
    $sql = "SELECT id, title, event_date FROM events";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
        echo "<td>" . $row["event_date"] . "</td>";
        echo "<td><a href='event-details.php?id=" . $row["id"] . "'>View</a></td>";
        echo "</tr>";
    }
    mysqli_close($conn);
    ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>