<?php include 'header.php'; include 'db-connect.php'; ?>
<h2>Welcome to Astraea</h2>
<p>Build cool robots, try new ideas, and have fun with the team.</p>

<h3>Why Join Us?</h3>
<p>Because robotics is better when you learn, create, and solve challenges together.</p>

<h3>Club Activities</h3>
<ol>
    <li>Join fun workshops and hands-on sessions.</li>
    <li>Build smart robots with your teammates.</li>
    <li>Take on challenges and show your ideas.</li>
</ol>

<h3>Upcoming Events</h3>
<ul>
<?php
$sql = "SELECT title, event_date FROM events ORDER BY event_date ASC LIMIT 3";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . htmlspecialchars($row["title"]) . " - " . $row["event_date"] . "</li>";
}
mysqli_close($conn);
?>
</ul>
<?php include 'footer.php'; ?> 
