<?php
$pageTitle = "FAQ — ITCERTG";
$active = 'faq';
include "includes/header.php";
include "includes/navbar.php";
?>

<!-- Page Hero Section -->
<section class="bg-secondary py-5">
  <div class="container text-center">
    <h1 class="display-5 fw-bold text-white">Answers To Your Questions</h1>
    <p class="text-white mt-2">Find answers to common queries about our certifications and courses.</p>
  </div>
</section>

<!-- FAQ Accordion Section -->
<section class="container py-5">
  <div class="accordion" id="faqAccordion">

    <!-- FAQ 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="faqHeading1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
          Which Certification Is Suitable For Me?
        </button>
      </h2>
      <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Please share your contact details. One of our career counselor will get in touch with you at earliest. You can also directly reach us on <a href="mailto:info@certforest.com">info@certforest.com</a> or Whatsapp us on <a href="tel:+918838666212">+91 88386 66212</a>.
        </div>
      </div>
    </div>

    <!-- FAQ 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="faqHeading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
          How Certforest Team Will Help Me?
        </button>
      </h2>
      <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Our trainers are very experienced and industry experts. They will guide and help to crack your dream certifications. Pay after you Pass!
        </div>
      </div>
    </div>

    <!-- FAQ 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="faqHeading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
          What Is Pass First! Pay Next!
        </button>
      </h2>
      <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          We take the payment once the candidate passes the exam successfully. After checking your score report, you have to make the payment.  
          Certifications available for: PMP | CISA | CISM | SCRUM MASTER | AWS | AZURE | GOOGLE CLOUD | ITIL | TOGAF | COMPTIA+ | ISTQB | SALESFORCE | CCNA | CCNP | CKA | CKAD | SIX SIGMA BLACK BELT and many more.
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
