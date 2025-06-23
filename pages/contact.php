<?php include_once "../partials/header_minor.php" ?>
<!-- header section -->
<div class="contact_header ">
  <div class="row contact-content height_90">
    <div class="col-md-6 contact_header_left"></div>
    <div class="col-md-6 ">
      <div class="cont-nav pt-3 pb-4"> <?php include_once "../partials/contact_nav.php" ?></div>
      <div class="d-flex font-weight-center align-items-center">
        <div class="cont1 width_100">

          <script src="https://www.google.com/recaptcha/api.js" async defer></script>

          <script src="https://www.google.com/recaptcha/api.js" async defer></script>

          <h1 class="section-title">
            <i class=" fas fa-paper-plane me-3"></i>
            Get In Touch
          </h1>
          <p class="section-subtitle">
            We'd love to hear from you. Send us a message and we'll respond as soon as possible.
          </p>

          <div class="col-lg-8">
            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
              <div class="alert alert-custom alert-success-custom">
                <i class="fas fa-check-circle me-2"></i>
                Your message has been sent successfully! We'll get back to you soon.
              </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
              <div class="alert alert-custom alert-danger-custom">
                <i class="fas fa-robot me-2"></i>
                Please verify that you are not a robot.
              </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] === 'recaptcha_error'): ?>
              <div class="alert alert-custom alert-danger-custom">
                <i class="fas fa-exclamation-triangle me-2"></i>
                reCAPTCHA verification failed. Please try again.
              </div>
            <?php endif; ?>

            <style>
              /* Teal background for form inputs */
              form.needs-validation .form-control {
                background-color: #1A8A94;
                /* Deep teal */
                color: white;
              }

              form.needs-validation .form-control:focus {
                background-color: black;
                color: white;
              }

              form.needs-validation label {
                color: white;
              }

              .g-recaptcha {
                margin: 20px 0;
              }
            </style>

            <form action="send_contact.php" method="POST" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    <label for="name">Full Name <span class="required-asterisk">*</span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="your@email.com" required>
                    <label for="email">Email Address <span class="required-asterisk">*</span></label>
                  </div>
                </div>
              </div>

              <div class="form-floating">
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Message Subject">
                <label for="subject">Subject</label>
              </div>

              <div class="form-floating">
                <textarea name="message" class="form-control" id="message" placeholder="Your message here..." style="height: 150px;" required></textarea>
                <label for="message">Message <span class="required-asterisk">*</span></label>
              </div>
              <div class="mb-3">
                <div class="g-recaptcha" data-sitekey="6LfUw2krAAAAAOTM7g47eGSMutOIDjgI_MPldqb2"></div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-send">
                  <i class="fas fa-paper-plane me-2"></i>
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

</div>

<!-- Start of form container -->
<div class="col-lg-8 mb-5 pb-5">
  <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
    <!-- ... alerts ... -->
  <?php endif; ?>

  <form action="send_contact.php" method="POST" class="needs-validation" novalidate>

</div>
</form>

<!-- ✅ Boosted spacing below the form -->
<div style="margin-bottom: 120px;"></div>

</div> <!-- end col-lg-8 -->
<!-- Find Us + Map section -->
<div class="row contact-content mt-5"> <!-- Adds spacing before this section -->
  <div class="col-sm-12 text-center p-0">
    <!-- Add spacing between contact form and map section -->
    <!-- Add spacing below the previous section -->
    <div class="section-spacer"></div>

    <!-- Heading -->
    <div class="header_text_about font_size mb-4 text-center">
      Find<span class="transparent_about font_size"> Us Here</span>
    </div>

    <!-- Google Map (touching heading directly) -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2651462711637!2d36.805897514757334!3d-1.2662052989661857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173e4f773017%3A0x6ea952c2753d2498!2sRainbow%20Tower!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="width_100 height_60"></iframe>
   
    </iframe>


    <!DOCTYPE html>
    <html lang="en">

    <style>
      .section-spacer {
        height: 80px;
        /* Space between form and heading */
      }

      .header_text_about {
        margin-top: 0;
        margin-bottom: 20px;
        /* Ensures space between heading and map */
        padding: 0 15px;
      }

      /* Optional: Improve heading on small screens */
      @media (max-width: 768px) {
        .header_text_about {
          font-size: 1.5rem;
          line-height: 1.2;
        }
      }

      /* Map height if not already defined */
      .height_60 {
        height: 400px;
        /* or use vh units like 60vh */
      }

      :root {
        --ace-teal: #004D4A;
        /* Deep Teal */
        --ace-teal-accent: #009F93;
        /* Brighter Teal */
        --ace-bg-soft: #E3F6F5;
        --ace-dark-text: #333333;
        --ace-white: #ffffff;
        --ace-success: #009F93;
        --ace-error: #FF6B6B;

        --primary-gradient: linear-gradient(135deg, #ffffff 0%, var(--ace-teal) 100%);
        --secondary-gradient: linear-gradient(135deg, #ffffff 0%, var(--ace-teal-accent) 100%);
        --success-gradient: linear-gradient(135deg, #ffffff 0%, var(--ace-success) 100%);
        --error-gradient: linear-gradient(135deg, #ffffff 0%, var(--ace-error) 100%);

        --glass-bg: rgba(255, 255, 255, 0.12);
        --glass-border: rgba(0, 77, 74, 0.25);
      }

      .button-ace {
        background: var(--primary-gradient);
        color: var(--ace-white);
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.3s;
      }

      .button-ace:hover {
        background: var(--secondary-gradient);
      }

      body {
        background: linear-gradient(135deg, #ffffff 0%, #E3F6F5 100%);
        /* light to white teal tint */
        color: #333333;
        /* readable dark text */
        min-height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        overflow-x: hidden;
      }

      body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="25" cy="25" r="2" fill="white" opacity="0.1"><animate attributeName="opacity" values="0.1;0.3;0.1" dur="3s" repeatCount="indefinite"/></circle><circle cx="75" cy="75" r="1.5" fill="white" opacity="0.1"><animate attributeName="opacity" values="0.1;0.4;0.1" dur="4s" repeatCount="indefinite"/></circle><circle cx="50" cy="10" r="1" fill="white" opacity="0.1"><animate attributeName="opacity" values="0.1;0.5;0.1" dur="2s" repeatCount="indefinite"/></circle></svg>') repeat;
        pointer-events: none;
        z-index: 0;
      }

      .main-container {
        position: relative;
        z-index: 1;
        padding: 2rem 0;
      }

      .contact-card {
        background: var(--glass-bg);
        backdrop-filter: blur(20px);
        border: 1px solid var(--glass-border);
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        padding: 3rem;
        margin: 2rem 0;
        position: relative;
        overflow: hidden;
        animation: slideUp 0.8s ease-out;
      }

      .contact-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        transform: rotate(45deg);
        pointer-events: none;
      }

      @keyframes slideUp {
        from {
          opacity: 0;
          transform: translateY(50px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .section-title {
        color: black;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 1rem;
        text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);
        position: relative;
      }

      .section-subtitle {
        color: black;
        text-align: center;
        font-size: 1.1rem;
        margin-bottom: 3rem;
        font-weight: 300;
      }

      .contact-info {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .contact-info-item {
        display: flex;
        align-items: center;
        color: black;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
      }

      .contact-info-item:hover {
        transform: translateX(10px);
      }

      .contact-info-item i {
        font-size: 1.5rem;
        margin-right: 1rem;
        width: 30px;
        text-align: center;
        background: var(--secondary-gradient);
        padding: 0.5rem;
        border-radius: 50%;
        color: white;
      }

      .form-floating {
        margin-bottom: 1.5rem;
        position: relative;
      }

      .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        color: white;
        font-size: 1rem;
        padding: 1rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
      }

      .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        color: white;
      }

      .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
      }

      .form-floating>label {
        color: black;
        font-weight: 500;
      }

      .btn-send {
        background-color: teal;
        color: white;
      }


      .btn-send:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        color: white;
      }

      .btn-send::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
      }

      .btn-send:hover::before {
        left: 100%;
      }

      .alert-custom {
        border: none;
        border-radius: 15px;
        padding: 1.2rem;
        margin-bottom: 2rem;
        font-weight: 500;
        backdrop-filter: blur(10px);
        animation: fadeInDown 0.5s ease-out;
      }

      .alert-success-custom {
        background: var(--success-gradient);
        color: white;
        box-shadow: 0 10px 30px rgba(79, 172, 254, 0.3);
      }

      .alert-danger-custom {
        background: var(--error-gradient);
        color: white;
        box-shadow: 0 10px 30px rgba(250, 112, 154, 0.3);
      }

      @keyframes fadeInDown {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .floating-icons {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
      }

      .floating-icon {
        position: absolute;
        color: rgba(255, 255, 255, 0.1);
        font-size: 2rem;
        animation: float 6s ease-in-out infinite;
      }

      .floating-icon:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
      }

      .floating-icon:nth-child(2) {
        top: 60%;
        right: 15%;
        animation-delay: 2s;
      }

      .floating-icon:nth-child(3) {
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
      }

      @keyframes float {

        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }

        50% {
          transform: translateY(-20px) rotate(180deg);
        }
      }

      @media (max-width: 768px) {
        .contact-card {
          padding: 2rem 1.5rem;
          margin: 1rem;
        }

        .section-title {
          font-size: 2rem;
        }

        .contact-info {
          padding: 1.5rem;
        }
      }

      .required-asterisk {
        color: red;
        margin-left: 2px;
      }

      .ripple {
        position: absolute;
        border-radius: 50%;
        background: black;
        animation: ripple-animation 1s ease-out;
        pointer-events: none;
      }

      @keyframes ripple-animation {
        0% {
          transform: scale(0);
          opacity: 1;
        }

        100% {
          transform: scale(1);
          opacity: 0;
        }
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Form validation
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      // Enhanced input animations
      document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', function() {
          this.style.transform = 'scale(1.02)';
        });

        input.addEventListener('blur', function() {
          this.style.transform = 'scale(1)';
        });
      });

      // Button click animation
      document.querySelector('.btn-send').addEventListener('click', function(e) {
        let ripple = document.createElement('span');
        let rect = this.getBoundingClientRect();
        let size = Math.max(rect.width, rect.height);
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
        ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
        ripple.classList.add('ripple');
        this.appendChild(ripple);

        setTimeout(() => {
          ripple.remove();
        }, 1000);
      });
    </script>

    </body>
    <?php include_once "../partials/footer_minor.php" ?>

    </html>