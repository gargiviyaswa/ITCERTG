<?php
$protocol = isset($_SERVER['HTTPS']) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$folder = "/ITCERTß";

$BASE_URL = $protocol . $host . $folder;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= $pageTitle ?? "ITCERTG — Smart, practical certification courses" ?></title>
  <meta name="description" content="<?= $pageDescription ?? "High-quality certification courses, hands-on projects, and assessments to level up your career." ?>" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo $BASE_URL; ?>/public/assets/images/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo $BASE_URL; ?>/public/assets/images/favicon.ico" />

  <!-- Bootstrap CSS & JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Inter Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- Main script -->
  <script src="<?= $BASE_URL ?>/public/assets/js/main.js"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="<?php echo $BASE_URL ?>/public/assets/css/custom.css">
</head>

<body class="bg-light text-dark">
