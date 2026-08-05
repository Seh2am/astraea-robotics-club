<?php include 'header.php'; ?>

<main>
<section>
<h2>About Astraea</h2>
<p>A student robotics club driven by innovation, hands-on learning, and technology.</p>
</section>

<section>
<h2>Our Vision</h2>
<p>To inspire future leaders and pioneers in robotics and smart technology.</p>
</section>

<section>
<h2>Our Mission</h2>
<p>To empower students through real-world projects, teamwork, and exciting competitions.</p>
</section>

<section>
<h2>Meet the Team</h2>
<ul>
<li><strong>Seham:</strong> Home & About pages, Core CSS design.</li>
<li><strong>Alaa:</strong> Events page & Schedule structure.</li>
<li><strong>Reema:</strong> Registration system & Member list.</li>
</ul>
</section>

<section>
<h2>Contact Us</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = $_POST["cname"];
  $cmessage = $_POST["cmessage"];
  if ($cname == "" || $cmessage == "") {
    echo "<p class='msg-error'>Please fill both fields.</p>";
  } else {
    echo "<p class='msg-success'>Thank you for your message!</p>";
  }
}
?>
<form method="post" action="about.php">
<label for="cname">Name:</label><br>
<input type="text" id="cname" name="cname" required><br><br>
<label for="cmessage">Message:</label><br>
<textarea id="cmessage" name="cmessage" rows="5" cols="30" required></textarea><br><br>
<input type="submit" value="Send">
</form>
</section>
</main>

<?php include 'footer.php'; ?>
