<?php
$pageTitle = "Certificates — ITCERTG";
$active = 'certificates';
include "includes/header.php";
include "includes/navbar.php";
?>
<!-- Page Hero Section -->
<section class="bg-secondary py-5">
  <div class="container text-center">
    <h1 class="display-4 text-white fw-bold">All Certificates</h1>
    <p class="mt-3 fs-5 text-white">We offer more than 100+ certifications to get cleared in the first attempt.</p>
  </div>
</section>

<section class="container py-5">
  <div id="coursesGrid" class="row g-4">
    <!-- Dynamic cards will be inserted here -->
  </div>
</section>

<script>
fetch('<?php echo $BASE_URL ?>/public/assets/js/certifications.json')
  .then(res => res.json())
  .then(data => {
    const container = document.getElementById('coursesGrid');
    const courses = data.pages;

    courses.forEach(course => {
      const col = document.createElement('div');
      col.className = "col-sm-6 col-lg-3 col-md-4";

      const card = document.createElement('div');
      card.className = 'card p-4 h-100 shadow-sm border-0 rounded-4';

      card.innerHTML = `
        <div class="d-flex align-items-center justify-content-center overflow-hidden" style="height: 190px;">
          <img src="<?php echo $BASE_URL ?>${course.logo_src}" alt="${course.title}" class="img-fluid rounded" style="object-fit: contain; max-height: 100%;" />
        </div>

        <div class="card-body d-flex flex-column p-0">
          <h3 class="h6 fw-semibold mt-3" style="min-height: 40px;">${course.title}</h3>

          <p class="text-muted small mt-2 line-clamp-3">${course.sections[0].content}</p>

          <div class="mt-auto">
            <a href="<?php echo $BASE_URL ?>/details.php?id=${encodeURIComponent(course.id)}" class="btn btn-primary btn-sm">
              View details →
            </a>
          </div>
        </div>
      `;

      col.appendChild(card);
      container.appendChild(col);
    });
  })
  .catch(err => console.error("Failed to load certifications JSON:", err));
</script>

<script src="/public/assets/js/main.js"></script>
<?php include "includes/footer.php"; ?>
