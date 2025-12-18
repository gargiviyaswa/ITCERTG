<?php
$pageTitle = "Contact Us — ITCERTG";
$active = 'contact';
include "includes/header.php";
include "includes/navbar.php";

$formSubmitted = false;
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $course   = trim($_POST['course']);
    $comments = trim($_POST['comments']);

    if ($name === "" || $email === "" || $phone === "" || $course === "") {
        $errorMessage = "Please fill all required fields.";
    } else {
        $to      = "samirhindustani2025@gmail.com";
        $subject = "New Contact Inquiry From ITCERTG";
        
        $message = "
        Name: $name
        Email: $email
        Phone: $phone
        Course: $course
        Comments: $comments
        ";

        $headers = "From: $email\r\n";

        if (mail($to, $subject, $message, $headers)) {
            $formSubmitted = true;
        } else {
            $errorMessage = "Unable to send message. Try again later.";
        }
    }
}
?>

<!-- Page Hero -->
<section class="bg-secondary py-5">
    <div class="container text-center">
        <h1 class="display-4 text-white fw-bold">Contact Us</h1>
        <p class="text-white fs-5 mt-2">Contact Customer Support</p>
    </div>
</section>

<!-- Contact Content -->
<section class="container py-5">
    <div class="row g-5">

        <!-- LEFT SIDE: FORM -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3 fs-2">Talk To Us</h2>
            <p class="text-muted mb-4">Let's have a discussion</p>

            <?php if ($formSubmitted): ?>
                <div class="alert alert-success">
                    ✔ Your message has been sent successfully!
                </div>
            <?php endif; ?>

            <?php if ($errorMessage): ?>
                <div class="alert alert-danger">
                    ⚠ <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>

            <form method="POST" onsubmit="return validateForm()">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Name *</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name*">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email ID *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter mail address*">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Phone No *</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter mobile number*">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Courses *</label>
                    <select name="course" id="course" class="form-select">
                        <option value="">Select</option>
                        <option value="PMI">PMI</option>
                        <option value="AWS">AWS</option>
                        <option value="Azure">Azure</option>
                        <option value="Scrum">Scrum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Comments</label>
                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter Comments"></textarea>
                </div>

                <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
            </form>
        </div>

        <!-- RIGHT SIDE: INFO -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3 fs-2">More About Us</h2>

            <div class="mb-4">
                <h3 class="fw-semibold fs-4">ITCERTG</h3>
                <p class="text-muted mt-2">
                    Sometimes you need a little help from your friend. Or a support rep.
                    Don't worry... we are here for you. Call or Whatsapp.
                </p>
            </div>

            <div class="mb-3">
                <p class="fw-semibold mb-1">Phone:</p>
                <p><a href="tel:+918007294965" class="text-muted">+91 8007294965</a></p>
            </div>

            <div class="mb-3">
                <p class="fw-semibold mb-1">Email:</p>
                <p><a href="mailto:samirhindustani2025@gmail.com" class="text-muted">samirhindustani2025@gmail.com</a></p>
            </div>

            <img src="https://certforest.com/images/1.jpg" class="img-fluid rounded-4 shadow mt-4" alt="Contact Image">
        </div>
    </div>
</section>

<script>
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const course = document.getElementById("course").value;

    if (!name || !email || !phone || !course) {
        alert("Please fill all required fields.");
        return false;
    }

    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid 10-digit mobile number.");
        return false;
    }

    return true;
}
</script>

<?php include "includes/footer.php"; ?>
