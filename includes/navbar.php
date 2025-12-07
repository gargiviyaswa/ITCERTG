<?php
// $active can be: home, about, certificates, testimonials, contact
?>
<header class="sticky-top bg-white shadow-sm">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="<?php echo $BASE_URL ?>">
      <img src="<?php echo $BASE_URL ?>/public/assets/images/logo.png" alt="ITCERTG" class="logo" />
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Items -->
    <div class="collapse navbar-collapse" id="mainNavbar">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">

        <li class="nav-item">
          <a class="nav-link <?= ($active ?? '') === 'home' ? 'active text-primary fw-semibold' : '' ?>" 
             href="<?php echo $BASE_URL ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active ?? '') === 'about' ? 'active text-primary fw-semibold' : '' ?>" 
             href="<?php echo $BASE_URL ?>/about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active ?? '') === 'certificates' ? 'active text-primary fw-semibold' : '' ?>" 
             href="<?php echo $BASE_URL ?>/certificates.php">Certificates</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active ?? '') === 'testimonials' ? 'active text-primary fw-semibold' : '' ?>" 
             href="<?php echo $BASE_URL ?>/testimonials.php">Testimonials</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active ?? '') === 'contact' ? 'active text-primary fw-semibold' : '' ?>" 
             href="<?php echo $BASE_URL ?>/contact.php">Contact</a>
        </li>

      </ul>

      <!-- WhatsApp Button -->
      <div class="ms-lg-3 mt-3 mt-lg-0">
        <a href="https://wa.me/919970999518?text=Hello!%20I%20need%20help%20with%20certifications."
           target="_blank" class="btn btn-warning btn-lg">
          +91 9999999999
        </a>
      </div>

    </div>

  </div>
</nav>

</header>
