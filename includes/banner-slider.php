<section id="homeBanner">
  <div id="mainBannerCarousel" class="carousel slide" data-bs-ride="carousel">

    <?php
      $slides = [
        "black-friday.webp",
        "worlds-best.webp",
        "keep-passing.webp",
        "ccie-lab.webp",
        "ccie-ei-lab.webp"
      ];
    ?>

    <!-- Indicators -->
    <div class="carousel-indicators">
      <?php foreach ($slides as $index => $img): ?>
        <button type="button"
          data-bs-target="#mainBannerCarousel"
          data-bs-slide-to="<?= $index ?>"
          class="<?= $index === 0 ? 'active' : '' ?>">
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <?php foreach ($slides as $index => $img): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
          <img src="<?= $BASE_URL ?>/public/assets/images/banner/<?= $img ?>"
               class="d-block w-100"
               alt="<?= $img ?>" />
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainBannerCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#mainBannerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
</section>
