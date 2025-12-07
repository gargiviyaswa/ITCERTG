<?php
$pageTitle = "Testimonials — ITCERTG";
$active = 'testimonials';
include "includes/header.php";
include "includes/navbar.php";
?>

<!-- Page Hero Section -->
<section class="bg-secondary py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold text-white">Testimonials</h1>
    <p class="lead text-white mt-2">What our learners say about ITCERTG</p>
  </div>
</section>

<section class="container py-5">
  <!-- Include Testimonials Section -->
  <?php include 'includes/testimonials.php'; ?>
</section>

<?php include 'includes/footer.php'; ?>
