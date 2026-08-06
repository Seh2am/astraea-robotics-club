<?php include 'header.php'; include 'db-connect.php'; ?>
<h2>Register for an Event</h2>
<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $sid = $_POST['student_id'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    if (empty($name) || empty($sid) || empty($email)) {
        $msg = "<p class='msg-error'>Error: All fields are required.</p>";
    } elseif (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $msg = "<p class='msg-error'>Error: Invalid email format.</p>";
    } else {
        $sql = "INSERT INTO registrations (name, student_id, email, event_title) VALUES ('$name', '$sid', '$email', '$event')";
        if (mysqli_query($conn, $sql)) {
            $msg = "<p class='msg-success'>Registration Successful!</p>";
        }
    }
}
echo $msg;
?>
<form method="post" action="registration.php">
    <label>Full Name:</label><br><input type="text" name="name"><br>
    <label>Student ID:</label><br><input type="text" name="student_id"><br>
    <label>Email:</label><br><input type="email" name="email"><br>
    <label>Select Event:</label><br>
    <select name="event">
        <option>Sirius Workshop</option>
        <option>Antares Competition</option>
        <option>Elephant Mountain Field Trip</option>
    </select><br><br>
    <input type="submit" value="Register">
    <input type="reset" value="Clear">
</form>
<?php mysqli_close($conn); include 'footer.php'; ?>