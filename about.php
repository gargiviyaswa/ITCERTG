<?php
$pageTitle = "About Us — ITCERTG";
$active = 'about';
include "includes/header.php";
include "includes/navbar.php";
?>

<!-- Page Hero Section -->
<section class="bg-secondary py-5">
  <div class="container text-center">
    <h1 class="display-5 fw-bold text-white">About Us</h1>
  </div>
</section>

<!-- Main Content -->
<section class="container py-5">
  <div class="row align-items-center gy-4">

    <!-- Left Content -->
    <div class="col-md-6">
      <h2 class="fw-bold mb-4 text-dark" style="font-size: 2rem;">Who We Are?</h2>

      <p class="fs-5 text-muted">
        At <strong>CertiForest</strong>, we are one of the leading certification training providers across the globe.
        If you aspire to take the next step in your career and improve your professional skills without losing
        your job, we are here to help you achieve your goals.
      </p>

      <p class="fs-5 text-muted mt-3">
        We make the process easy with numerous hands-on projects, expert-led courses, and job-ready certifications
        designed to help you move ahead with confidence. We partner with globally recognized companies and
        universities to offer industry-standard programs that elevate your career.
      </p>
    </div>

    <!-- Right Image -->
    <div class="col-md-6">
      <img
        src="https://certforest.com/images/1.jpg"
        alt="About CertiForest"
        class="img-fluid rounded shadow"
        style="height: 380px; object-fit: cover; width: 100%;"
      />
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
