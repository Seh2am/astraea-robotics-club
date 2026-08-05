<?php
$events = [
  [
    "id" => "sirius-workshop",
    "title" => "Sirius Workshop",
    "date" => "2026-08-01",
    "location" => "Robotics Lab 2",
    "description" => "A beginner-friendly workshop where students build thier first simple robot using basic sensors and motors.",
    "topics" => ["Basic robot components", "Simple motor control", "Introduction to sensors"]
  ],
  [
    "id" => "antares-competition",
    "title" => "Antares Competition",
    "date" => "2026-08-05",
    "location" => "Robotics Lab 2",
    "description" => "...",
    "topics" => []
  ],
  [
    "id" => "elephant-mountain-trip",
    "title" => "Elephant Mountain Field Trip",
    "date" => "2026-08-10",
    "location" => "Robotics Lab 2",
    "description" => "...",
    "topics" => []
  ]
];

$eventId = $_GET['id'] ?? '';
$event = null;
foreach ($events as $e) {
  if ($e['id'] === $eventId) {
    $event = $e;
    break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Event Details</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>


  <?php if ($event): ?>
    <h1><?php echo $event['title']; ?></h1>
    <p><strong>Date:</strong> <?php echo $event['date']; ?></p>
    <p><strong>Location:</strong> <?php echo $event['location']; ?></p>
    <p><?php echo $event['description']; ?></p>

    <?php if (!empty($event['topics'])): ?>
      <h3>Workshop Topics</h3>
      <ul>
        <?php foreach ($event['topics'] as $topic): ?>
          <li><?php echo $topic; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  <?php else: ?>
    <h1>Event not found</h1>
  <?php endif; ?>

  <?php include 'footer.php'; ?>
</body>
</html>