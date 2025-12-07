<?php
$pageTitle = "Certificate Details — ITCERTG";
$active = 'certificates';
include "includes/header.php";
include "includes/navbar.php";
?>

<section style="
    background: 
      linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
      url('<?php echo $BASE_URL ?>/public/assets/images/section-bg.jpg') center/cover no-repeat;
    padding: 60px 0;
">
    <div class="container text-center text-white">

        <div id="certLogoWrapper" class="mb-3" style="
        display: none;
        padding: 12px 16px;
        border-radius: 14px;
        backdrop-filter: blur(6px);
        background: rgba(255, 255, 255, 0.50);
        display: inline-block;
    ">
            <img id="certLogo" src="" alt="Logo" style="max-height: 140px;">
        </div>

        <h1 id="certTitle" class="display-5 fw-bold">Loading...</h1>
    </div>
</section>

<!-- Content -->
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $BASE_URL ?>/certificates.php">Certificates</a></li>
            <li class="breadcrumb-item active" id="certTitleBread">Loading...</li>
        </ol>
    </nav>
    <div id="certDetails" class="row gy-4">
        <!-- Dynamic Content Loaded Here -->
    </div>
</section>
<div class="clearfix"></div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    // const certTitle = urlParams.get("title");
    const certId = urlParams.get("id");

    document.getElementById("certTitle").innerText = certTitle || "Certificate Not Found";

    fetch('<?php echo $BASE_URL ?>/public/assets/js/certifications.json')
        .then(response => response.json())
        .then(data => {
            // const certificate = data.pages.find(item => item.title.toLowerCase() === certTitle.toLowerCase());
            const certificate = data.pages.find(item => String(item.id) === String(certId));
            if (!certificate) {
                document.getElementById("certTitle").innerText = "Certificate Not Found!";
                return;
            }

            document.getElementById("certTitle").innerText = certificate.title;
            document.getElementById("certTitleBread").textContent = certificate.title;

            const logo = document.getElementById("certLogo");
            logo.src = "<?php echo $BASE_URL ?>" + certificate.logo_src;
            logo.style.display = "inline-block";

            let html = "";
            certificate.sections.forEach(section => {

                html += `
                    <div class="col-12 col-md-6">
                    <div class="card h-100">
  <div class="card-header bg-warning">
                        <h3 class="fw-bold mb-2">${section.heading}</h3>
                        </div>
                        <div class="card-body">
                `;

                if (section.content) {
                    html += `<p class="text-muted">${section.content}</p>`;
                }

                if (section.list) {
                    html += `<ul class="text-muted">`;
                    section.list.forEach(item => {
                        html += `<li>${item}</li>`;
                    });
                    html += `</ul>`;
                }

                /* ⭐ ADDING SUBSECTIONS SUPPORT */
                if (section.subsections) {
                    html += `<div class="mt-3">`;
                    section.subsections.forEach(sub => {
                        html += `
                            <div class="mb-3">
                                <h5 class="fw-semibold">${sub.title}</h5>
                                <p class="text-muted">${sub.content}</p>
                            </div>
                        `;
                    });
                    html += `</div>`;
                }

                html += `</div>
</div></div>`;
            });

            document.getElementById("certDetails").innerHTML = html;
        })
        .catch(error => {
            console.error("Error loading JSON:", error);
            document.getElementById("certTitle").innerText = "Failed to load certificate details.";
        });
</script>

<!-- Call to Action Section -->
<section style="
    background: 
      linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      url('<?php echo $BASE_URL ?>/public/assets/images/counselor-bg.jpg') center/cover no-repeat;
    padding: 80px 0;backbackground-attachment: fixed;
">
    <div class="container text-center text-white">

        <h2 class="fw-bold mb-3">Want to speak with a good counselor?</h2>
        <p class="mb-4">Call us at <a href="tel:+918838666212" class="text-white fw-semibold">+91 8838666212</a></p>

        <a href="<?php echo $BASE_URL ?>/contact.php" class="btn btn-warning btn-lg me-3 mb-2">
            Let's Connect
        </a>
        <a href="tel:+918838666212" class="btn btn-outline-light btn-lg mb-2">
            Call Now
        </a>

    </div>
</section>

<?php include "includes/footer.php"; ?>