<!-- Certifications Slider -->
<section class="container py-4">

  <!-- Swiper Container -->
  <div class="swiper myCertSlider">
    <div class="swiper-wrapper" id="cert-slider-wrapper">
      <!-- Slides injected dynamically -->
    </div>

    <!-- Navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

</section>

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Function to make all cards equal height
  function setEqualCardHeights() {
    const cards = document.querySelectorAll('.myCertSlider .swiper-slide .card');
    let maxHeight = 0;

    // Reset heights to auto
    cards.forEach(card => card.style.height = 'auto');

    // Find max height
    cards.forEach(card => {
      if (card.offsetHeight > maxHeight) maxHeight = card.offsetHeight;
    });

    // Apply max height to all cards
    cards.forEach(card => card.style.height = maxHeight + 'px');
  }

  // Wait for all images in a container to load
  function waitForImages(container, callback) {
    const images = container.querySelectorAll('img');
    let loaded = 0;
    if (!images.length) return callback();

    images.forEach(img => {
      if (img.complete) {
        loaded++;
        if (loaded === images.length) callback();
      } else {
        img.addEventListener('load', () => {
          loaded++;
          if (loaded === images.length) callback();
        });
      }
    });
  }

  // Fetch certifications JSON and populate Swiper slides
  fetch('<?php echo $BASE_URL; ?>/public/assets/js/certifications.json')
    .then(res => res.json())
    .then(data => {
      const wrapper = document.getElementById('cert-slider-wrapper');
      const certs = data.pages || [];

      certs.forEach(c => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide';
        slide.innerHTML = `
          <div class="card d-flex flex-column shadow-sm border rounded h-100">
            <div class="d-flex align-items-center justify-content-center bg-light p-4" style="height: 200px;">
              <img src="<?php echo $BASE_URL; ?>/${c.logo_src}" class="img-fluid" style="max-height: 100%; object-fit: contain;" alt="${c.title}" />
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 class="card-title fw-semibold mb-2">${c.title}</h5>
              <p class="card-text mb-3 flex-grow-1 line-clamp-3">${c.sections[0].content}</p>
              <div class="mt-auto">
                <a href="<?php echo $BASE_URL; ?>/details.php?id=${c.id}" class="btn btn-primary btn-sm">
                  View details →
                </a>
              </div>
            </div>
          </div>
        `;
        wrapper.appendChild(slide);
      });

      // Initialize Swiper
      const swiper = new Swiper('.myCertSlider', {
        slidesPerView: 1.2,
        spaceBetween: 16,
        loop: true,
        autoplay: { delay: 2500 },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          640: { slidesPerView: 2.2 },
          1024: { slidesPerView: 3.2 },
          1280: { slidesPerView: 4 }
        }
      });

      // Wait for all images to load, then set equal heights
      waitForImages(wrapper, () => {
        setEqualCardHeights();
        swiper.update();
      });

      // Update on window resize
      window.addEventListener('resize', () => {
        setEqualCardHeights();
        swiper.update();
      });

    })
    .catch(err => console.error('Failed to load certifications JSON:', err));
</script>

