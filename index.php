<?php
$pageTitle = "ITCERTG — Practical certification courses";
$pageDescription = "Hands-on courses, projects, and certificates to level-up your career.";
$active = 'home';
include "includes/header.php";
include "includes/navbar.php";
include "includes/banner-slider.php";
?>

<!-- HERO SECTION -->
<section class="bg-white">
  <div class="container py-5">
    <div class="row align-items-center g-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <h1 class="fw-bold display-5">Pass First Pay Next</h1>
        <p class="mt-3 text-muted fs-5">
          Most professionals get stressed thinking of certifications, Certforest ease their certification journey
          ensuring a thriving career.
        </p>

        <div class="mt-4 d-flex flex-wrap gap-2">
          <a href="<?php echo $BASE_URL ?>/certificates.php" class="btn btn-primary rounded-pill px-4 py-2">Browse
            Certificates</a>
          <a href="<?php echo $BASE_URL ?>/contact.php" class="btn btn-primary rounded-pill px-4 py-2">Contact Us</a>
        </div>

        <!-- Stats Boxes -->
        <!-- <div class="row mt-4 gy-3">
          <div class="col-4">
            <div class="bg-white p-3 rounded text-center shadow-sm">
              <div class="text-muted small">Hours</div>
              <div class="fw-semibold fs-5">60+</div>
            </div>
          </div>
          <div class="col-4">
            <div class="bg-white p-3 rounded text-center shadow-sm">
              <div class="text-muted small">Projects</div>
              <div class="fw-semibold fs-5">8+</div>
            </div>
          </div>
          <div class="col-4">
            <div class="bg-white p-3 rounded text-center shadow-sm">
              <div class="text-muted small">Assessments</div>
              <div class="fw-semibold fs-5">Quizzes</div>
            </div>
          </div>
        </div> -->

      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6">
        <div class="bg-white p-4 rounded shadow border">
          <img src="<?php echo $BASE_URL ?>/public/assets/images/home-slider.jpg" alt="hero" class="img-fluid rounded">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TOP CERTIFICATIONS -->
<section class="py-5 bg-light">
  <div class="d-flex justify-content-center align-items-center mb-4">
    <h2 class="fw-bold display-6 mb-0 me-3">Top Certifications</h2>
  </div>

  <?php include "includes/certifications-swipper.php"; ?>
  <div class="text-center mt-3">
    <a href="<?php echo $BASE_URL ?>/certificates.php"
      class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
      View All →
    </a>
  </div>
</section>

<?php include "includes/certification-support-cards.php"; ?>

<!-- TESTIMONIALS -->
<section class="bg-white py-5">
  <h2 class="fw-bold display-6 mb-4 px-2 text-center">What Our Learners Say</h2>
  <?php include "includes/testimonials-slider.php"; ?>
</section>

<!-- Exclusive Training Section -->
<section
  style="background: url('<?php echo $BASE_URL ?>/public/assets/images/section-bg.jpg') center/cover no-repeat; padding: 80px 0;background-attachment: fixed;">
  <div class="container">
    <!-- Section Heading -->
    <h2 class="text-center text-white fw-bold mb-4" style="color: #212529;">Exclusive Training And Courses</h2>
    <!-- Section Content -->
    <p class="text-center text-white fs-5" style="max-width: 900px; margin: 0 auto; line-height: 1.8;">
      Our training courses are exclusively designed and modernized by more than hundred plus well-known industry
      experts.
      The blended learning approach that we have blends online classes, instructor-led sessions, project work, and
      around-the-clock teaching assistance. The vibrant community of professionals and certified experts is a robust
      resource group of tactics, tricks, and insightful advice. We can proudly say that more than twenty global training
      organizations have acknowledged us as a rational and official provider of certification training. We have a robust
      and intact reputation for end-to-end established capabilities, and the capability to cater to all facets of
      Workforce
      Optimization, ending up in enhanced organizational alignment. Ace your certifications with us and you will
      definitely
      find quality assistance and professional outcomes. We are there to help you throughout!
    </p>
  </div>
</section>

<?php include "includes/footer.php"; ?>