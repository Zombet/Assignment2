<?php
// Collect form data
$fullname = $_POST['fullname'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';
$dob      = $_POST['dob'] ?? '';
$gender   = $_POST['gender'] ?? '';
$course   = $_POST['course'] ?? '';
$address  = $_POST['address'] ?? '';

// Resume upload
$resume_link = '';
if (!empty($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['resume']['tmp_name'];
    $name = basename($_FILES['resume']['name']);
    $targetDir = __DIR__ . '/uploads';
    if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
    $targetPath = $targetDir . '/' . preg_replace('/[^A-Za-z0-9._-]/', '_', $name);
    if (move_uploaded_file($tmp, $targetPath)) {
        $resume_link = 'uploads/' . basename($targetPath);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Application Received</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container">
<div class="app-card">
<h2>Application Received</h2>
<p class="small">Thank you — we successfully received your application.</p>

<table>
<tr><td><strong>Full name</strong></td><td><?= $fullname ?></td></tr>
<tr><td><strong>Email</strong></td><td><?= $email ?></td></tr>
<tr><td><strong>Phone</strong></td><td><?= $phone ?></td></tr>
<tr><td><strong>Date of birth</strong></td><td><?= $dob ?></td></tr>
<tr><td><strong>Gender</strong></td><td><?= $gender ?></td></tr>
<tr><td><strong>Course</strong></td><td><?= $course ?></td></tr>
<tr><td><strong>Address</strong></td><td><?= nl2br($address) ?></td></tr>
<tr><td><strong>Resume</strong></td><td>
  <?php if ($resume_link): ?>
    <a href="<?= $resume_link ?>" target="_blank">Download Resume</a>
  <?php else: ?>
    <span class="small">No file uploaded</span>
  <?php endif; ?>
</td></tr>
</table>

<p style="margin-top:18px"><a href="index.html">Submit another application</a></p>
</div>
</main>
</body>
</html>