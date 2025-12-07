<!-- Testimonials Slider -->
<section class="container my-5">
  <div class="swiper myTestimonialSlider">
    <div class="swiper-wrapper">
      <!-- Testimonial 1 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-one.jpg"
            alt="Prabhu"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            This is my first experience with ITCERTG and I liked it. Great way to receive PMP Certificate
            without traveling. The exam was well organized and the instructions given by Vignesh were clear.
            The best part is that they collect payment <b>after the exam</b> — a great deal!
          </p>
          <h4 class="mt-3 fw-semibold">Prabhu</h4>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-four.jpg"
            alt="Vinoth R"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            Today I passed my certification which was pending for long. Received 206 questions from ITCERTG for
            a 200-mark exam and completed it two hours early. I’ll definitely take help from ITCERTG again.
            Thank you!
          </p>
          <h4 class="mt-3 fw-semibold">Vinoth R</h4>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-three.jpg"
            alt="Hemnath"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            Big thanks to ITCERTG for helping me clear my PMP exam. Special thanks to Mr. Vignesh for his
            support and professionalism. ITCERTG provides first-class service to professionals and students
            to grow in their career. You always rock!
          </p>
          <h4 class="mt-3 fw-semibold">Hemnath</h4>
        </div>
      </div>

       <!-- Testimonial 4 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-one.jpg"
            alt="Prabhu"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            This is my first experience with ITCERTG and I liked it. Great way to receive PMP Certificate
            without traveling. The exam was well organized and the instructions given by Vignesh were clear.
            The best part is that they collect payment <b>after the exam</b> — a great deal!
          </p>
          <h4 class="mt-3 fw-semibold">Prabhu</h4>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-four.jpg"
            alt="Vinoth R"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            Today I passed my certification which was pending for long. Received 206 questions from ITCERTG for
            a 200-mark exam and completed it two hours early. I’ll definitely take help from ITCERTG again.
            Thank you!
          </p>
          <h4 class="mt-3 fw-semibold">Vinoth R</h4>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="swiper-slide">
        <div class="testimonial-card bg-white p-4 rounded shadow-sm border h-100 text-center d-flex flex-column">
          <img 
            src="<?php echo $BASE_URL ?>/public/assets/images/men-three.jpg"
            alt="Hemnath"
            class="rounded-circle mb-3 shadow mx-auto"
            style="width: 80px; height: 80px; object-fit: cover;"
          />
          <p class="text-muted small flex-grow-1 line-clamp-3">
            Big thanks to ITCERTG for helping me clear my PMP exam. Special thanks to Mr. Vignesh for his
            support and professionalism. ITCERTG provides first-class service to professionals and students
            to grow in their career. You always rock!
          </p>
          <h4 class="mt-3 fw-semibold">Hemnath</h4>
        </div>
      </div>

    </div>

    <!-- Swiper Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
  .testimonial-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
  }
  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".myTestimonialSlider", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 3500 },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: { slidesPerView: 1.2 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  });
</script>
