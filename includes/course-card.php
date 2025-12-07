<?php
// expects $course array with keys: title, desc, slug, img, level, duration, price
?>
<article class="card border-0 shadow position-relative rounded-3 overflow-hidden">
  <a href="/course-details.php?course=<?= htmlspecialchars($course['slug']) ?>" class="text-decoration-none text-dark">

    <!-- Image Wrapper -->
    <div class="position-relative" style="height: 220px;">
      <img 
        src="<?php echo $BASE_URL ?>/<?= $course['img'] ?? '/public/assets/images/course-placeholder.jpg' ?>" 
        alt="<?= htmlspecialchars($course['title']) ?>"
        class="w-100 h-100 object-fit-cover"
      />
    </div>

    <!-- Content -->
    <div class="card-body">

      <!-- Level + Duration -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="badge bg-light text-dark small"><?= $course['level'] ?? 'Beginner' ?></span>
        <span class="text-muted small"><?= $course['duration'] ?? 'Self-paced' ?></span>
      </div>

      <!-- Title -->
      <h3 class="h6 fw-semibold mb-2"><?= htmlspecialchars($course['title']) ?></h3>

      <!-- Description -->
      <p class="text-muted small mb-3" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
        <?= htmlspecialchars($course['desc']) ?>
      </p>

      <!-- Price + View Button -->
      <div class="d-flex justify-content-between align-items-center">
        <div class="fw-medium text-primary small"><?= $course['price'] ?? 'Free' ?></div>
        <a href="/course-details.php?course=<?= htmlspecialchars($course['slug']) ?>" class="btn btn-outline-secondary btn-sm">
          View
        </a>
      </div>

    </div>
  </a>
</article>
