<?php include_once "partials/header_main.php" ?>

<link rel="stylesheet" href="assets/cross-browser-styles.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="assets/cross-browser-scripts.js"></script>

<style>
  .products-img {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: center;
    min-height: 250px;
  }

  .products-img img {
    display: block;
    visibility: visible;
    opacity: 1;
    position: static;
    width: 350px;
    height: 350px;
    object-fit: contain;
    background: white;
    border-radius: 8px;
    margin: 10px 0;
    z-index: 999;
  }

  .text-orientation-upright {
    position: absolute;
    top: 0.05%;
    transform: translate(-50%, -50%);
    writing-mode: horizontal-tb;
    text-orientation: mixed;
    color: white;
    font-weight: bold;
    text-align: center;
    background: teal;
    padding: 10px 20px;
    border-radius: 20px;
    margin: 0;
    z-index: 10;

  }

  .solution_text {
    font-size: 13px;
  }

  .modal-header {
    background-color: transparent;
    /* Transparent background */
    border: none;
    /* No border */
    position: absolute;
    top: 0;
    right: 0;
    /* Fixed invalid syntax */
  }

  /* Style for the close button */
  .close {
    color: #fff;
    /* Text color */
    font-size: 25px;
    cursor: pointer;
    background-color: #333;
    /* Dark background color */
    border: none;
    /* No border */
    border-radius: 50%;
    /* Round shape */
    padding: 5px;
    margin: 12px;
  }

  .close:hover {
    background-color: #333;
    /* Dark background color on hover */
    color: #ccc;
    cursor: pointer;
    box-shadow: 0 0 30px 10px rgba(0, 0, 0, 0.3);
    /* Increased glow effect with larger spread on hover */
    outline: 1px solid rgba(200, 200, 200, 0.8);
    /* Light grey glow on hover */
  }

  .modal {
    z-index: 1050;
  }

  .modal-dialog {
    display: flex;
    align-items: center;
    justify-content: center;
  }


  @keyframes reveal {
    from {
      transform: scale(0.8);
      opacity: 0;
    }

    to {
      transform: scale(1);
      opacity: 1;
    }
  }

  .info .hover-text {
    visibility: hidden;
  }

  .social-icon::before {

    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
  }

  .social-icon:hover::before {
    left: 100%;
  }

  .social-tooltip {
    position: absolute;
    top: 100%;
    /* Position below the icon */
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 14px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    pointer-events: none;
    margin-top: 8px;
    /* Optional spacing from the icon */
  }


  .social-tooltip::after {
    content: '';
    position: absolute;
    left: 100%;
    top: 50%;
    transform: translateY(-50%);
    border: 6px solid transparent;
    border-left-color: rgba(0, 0, 0, 0.8);
  }

  .social-icon:hover .social-tooltip {
    opacity: 1;
    visibility: visible;
    right: 65px;
  }

  /* Mobile responsive for social icons */
  @media (max-width: 768px) {

    .social-media-container {
      position: relative;
      margin: 20px auto;
      width: fit-content;
      flex-direction: row;
      background: rgba(0, 0, 0, 0.1);
      padding: 10px;
      border-radius: 30px;
      backdrop-filter: blur(10px);
    }

    .social-icon {
      width: 40px;
      height: 40px;
      font-size: 16px;
    }

    .social-tooltip {
      display: none;
    }
  }

  @media (min-width: 967px) {
    .inch-14-text {
      font-size: 13px;
    }

    .inch-14-head-text {
      font-size: 40px;
    }



    .inch-4-height {
      height: 50vh;
    }
  }

  /* Make the row take full width */
  .about_us .row {
    margin: 0;
    width: 100%;
    max-width: none;
  }

  /* Ensure columns take full width without gaps - reduced padding for thinner section */
  .about_us .col-md-6 {
    padding: 2rem;
    margin: 0;
    max-width: 50%;
    flex: 0 0 50%;
    min-height: auto;
  }


  /* Ensure image takes full width of its container with controlled height */
  .about_us img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 8px;
  }

  /* Make sure the background extends fully */
  .about_us .bg-light {
    background-color: #f8f9fa;
  }

  /* Remove any Bootstrap container constraints */
  body .container,
  body .container-fluid {
    max-width: none;
    padding: 0;
  }

  /* Additional styles for compact design */
  .about_us .header_text_about {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    line-height: 1.2;
  }

  .about_us .inner_text {
    font-size: 1rem;
    line-height: 1.6;
    margin-top: 1rem;
  }

  /* Remove any height constraints from your HTML classes */
  .about_us.inch-14-height,
  .about_us.height_40 {
    height: auto;
    min-height: auto;
  }

  /* Reduce space between sections */
  .about_us {
    margin-bottom: 0;
  }

  .our_approach {
    margin-top: 0;
    padding-top: 2rem;
  }

  /* Responsive adjustments for mobile */
  @media (max-width: 768px) {
    .about_us .col-md-6 {
      padding: 1.5rem;
      max-width: 100%;
      flex: 0 0 100%;
    }

    .about_us img {
      height: 200px;
    }

    .about_us .header_text_about {
      font-size: 2rem;
    }
  }

  .inner_about_cont {
    margin: 0 !important;
    padding: 2rem 0 !important;
    max-width: none !important;
    width: 100% !important;
  }

  /* Make the row take full width */
  .about_us .row {
    margin: 0 !important;
    width: 100% !important;
    max-width: none !important;
  }

  /* Ensure columns take full width without gaps - reduced padding for thinner section */
  .about_us .col-md-6 {
    padding: 2rem !important;
    margin: 0 !important;
    max-width: 50% !important;
    flex: 0 0 50% !important;
    min-height: auto !important;
  }

  /* Remove any container constraints that might limit width */
  .about_us * {
    box-sizing: border-box !important;
  }

  /* Alternative approach - if the above doesn't work, use this instead */
  .about_us.full-width-override {
    width: 100vw !important;
    margin-left: calc(50% - 50vw) !important;
    margin-right: calc(50% - 50vw) !important;
  }

  /* Ensure image takes full width of its container with controlled height */
  .about_us img {
    width: 100% !important;
    height: 100% !important;
    min-height: 300px !important;
    object-fit: cover !important;
    object-position: center center !important;
    border-radius: 8px !important;
  }

  /* Make sure the image column takes full height */
  .about_us .col-md-6:first-child {
    display: flex !important;
    align-items: stretch !important;
    padding: 0 !important;
  }

  /* Ensure equal height columns */
  .about_us .row {
    display: flex;
    align-items: stretch;
  }

  .about_us .col-md-6 {
    display: flex;
    flex-direction: column;
  }

  /* Make sure the background extends fully */
  .about_us .bg-light {
    background-color: #f8f9fa;
  }

  /* Remove any Bootstrap container constraints */
  body .container,
  body .container-fluid {
    max-width: none;
    padding: 0;
  }

  /* Additional styles for compact design */
  .about_us .header_text_about {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    line-height: 1.2;
  }

  .about_us .inner_text {
    font-size: 1rem;
    line-height: 1.6;
    margin-top: 1rem;
  }

  /* Remove any height constraints from your HTML classes */
  .about_us.inch-14-height,
  .about_us.height_40 {
    height: auto;
    min-height: auto;
  }

  /* Reduce space between sections */
  .about_us {
    margin-bottom: 0;
  }

  .our_approach {
    margin-top: 0;
    padding-top: 2rem;
  }

  /* Responsive adjustments for mobile */
  @media (max-width: 768px) {
    .about_us .col-md-6 {
      padding: 1.5rem;
      max-width: 100%;
      flex: 0 0 100%;
    }

    .about_us img {
      height: 200px;
    }

    .about_us .header_text_about {
      font-size: 2rem;
    }
  }

  :root {
    --hero-primary: #40E0D0;
    --hero-secondary: #00CED1;
    --hero-accent: #48D1CC;
    --hero-dark: #1a2332;
    --hero-darker: #0f1419;
    --hero-text-light: rgba(255, 255, 255, 0.95);
    --hero-text-muted: rgba(255, 255, 255, 0.75);

    /* Typography */
    --hero-font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --hero-font-display: 'Poppins', sans-serif;

    /* Glass Effects */
    --hero-glass-bg: rgba(255, 255, 255, 0.05);
    --hero-glass-border: rgba(64, 224, 208, 0.15);
    --hero-glass-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
  }

  /* Main Hero Container */
  .hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;

    /* Advanced Background */
    background:
      linear-gradient(135deg, var(--hero-darker) 0%, var(--hero-dark) 50%, #1e2a3a 100%),
      radial-gradient(circle at 20% 50%, rgba(64, 224, 208, 0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 20%, rgba(72, 209, 204, 0.08) 0%, transparent 50%);

    /* Grid Pattern Overlay */
    background-image:
      linear-gradient(rgba(64, 224, 208, 0.1) 1px, transparent 1px),
      linear-gradient(90deg, rgba(64, 224, 208, 0.1) 1px, transparent 1px);
    background-size: 60px 60px;

    animation: backgroundShift 20s ease-in-out infinite;
  }

  @keyframes backgroundShift {

    0%,
    100% {
      background-position: 0% 0%, 0% 0%, 0% 0%;
    }

    50% {
      background-position: 20px 20px, 0% 0%, 0% 0%;
    }
  }

  /* Animated Grid Lines */
  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    background-image:
      linear-gradient(45deg, transparent 45%, rgba(64, 224, 208, 0.05) 50%, transparent 55%),
      linear-gradient(-45deg, transparent 45%, rgba(72, 209, 204, 0.03) 50%, transparent 55%);
    background-size: 120px 120px;

    animation: gridMove 15s linear infinite;
    pointer-events: none;
    z-index: 1;
  }

  @keyframes gridMove {
    0% {
      transform: translateX(-120px) translateY(-120px);
    }

    100% {
      transform: translateX(0) translateY(0);
    }
  }

  /* Floating Geometric Shapes */
  .hero-section::after {
    content: '';
    position: absolute;
    top: 10%;
    right: 15%;
    width: 200px;
    height: 200px;

    background: linear-gradient(45deg, rgba(64, 224, 208, 0.1), rgba(72, 209, 204, 0.05));
    border: 1px solid rgba(64, 224, 208, 0.2);
    border-radius: 20px;

    animation: floatShape 8s ease-in-out infinite;
    pointer-events: none;
    z-index: 1;
  }

  @keyframes floatShape {

    0%,
    100% {
      transform: translateY(0) rotate(0deg);
      opacity: 0.3;
    }

    50% {
      transform: translateY(-20px) rotate(5deg);
      opacity: 0.6;
    }
  }

  /* Hero Content Container */
  .hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 1000px;
    padding: 2rem;
    animation: heroEntrance 1.2s cubic-bezier(0.23, 1, 0.32, 1);
  }

  @keyframes heroEntrance {
    from {
      opacity: 0;
      transform: translateY(60px) scale(0.95);
    }

    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  /* Main Heading */
  .hero-title {
    font-family: var(--hero-font-display);
    font-size: clamp(3rem, 8vw, 6rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1.5rem;

    /* Advanced Text Effects */
    background: linear-gradient(135deg,
        var(--hero-primary) 0%,
        var(--hero-accent) 30%,
        var(--hero-secondary) 70%,
        #5DFDCB 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;

    /* Glowing Text Shadow */
    filter: drop-shadow(0 4px 20px rgba(64, 224, 208, 0.4));

    position: relative;
    animation: titleGlow 4s ease-in-out infinite alternate;
  }

  @keyframes titleGlow {
    from {
      filter: drop-shadow(0 4px 20px rgba(64, 224, 208, 0.4));
    }

    to {
      filter: drop-shadow(0 8px 40px rgba(64, 224, 208, 0.6));
    }
  }

  /* Subtitle */
  .hero-subtitle {
    font-family: var(--hero-font-primary);
    font-size: clamp(1.25rem, 3vw, 2rem);
    font-weight: 400;
    line-height: 1.4;
    color: var(--hero-text-muted);
    margin-bottom: 3rem;

    /* Subtle Animation */
    animation: fadeInUp 0.8s ease-out 0.3s both;

    /* Modern Typography */
    letter-spacing: 0.025em;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
  }

  /* Description Card */
  .hero-description {
    font-family: var(--hero-font-primary);
    font-size: clamp(1rem, 2.5vw, 1.25rem);
    line-height: 1.7;
    color: var(--hero-text-light);

    /* Glass Morphism Card */
    background: var(--hero-glass-bg);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);

    border: 1px solid var(--hero-glass-border);
    border-radius: 24px;
    padding: 2.5rem;

    box-shadow: var(--hero-glass-shadow);

    position: relative;
    overflow: hidden;

    transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    animation: fadeInUp 0.8s ease-out 0.5s both;
  }

  /* Animated Border Effect */
  .hero-description::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;

    background: linear-gradient(90deg,
        transparent,
        rgba(64, 224, 208, 0.1),
        transparent);

    animation: borderShimmer 4s infinite;
  }

  @keyframes borderShimmer {
    0% {
      left: -100%;
    }

    50% {
      left: -100%;
    }

    100% {
      left: 100%;
    }
  }

  /* Hover Effects */
  .hero-description:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow:
      0 20px 60px rgba(0, 0, 0, 0.4),
      0 0 0 1px rgba(64, 224, 208, 0.3);

    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(64, 224, 208, 0.25);
  }

  /* Accent Line Under Title */
  .hero-title::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);

    width: 100px;
    height: 4px;

    background: linear-gradient(90deg, var(--hero-primary), var(--hero-secondary));
    border-radius: 2px;

    animation: expandFromCenter 1.5s ease-out 0.8s both;
  }

  @keyframes expandFromCenter {
    from {
      width: 0;
      opacity: 0;
    }

    to {
      width: 100px;
      opacity: 1;
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .hero-content {
      padding: 1.5rem;
    }

    .hero-description {
      padding: 2rem;
      border-radius: 20px;
    }

    .hero-title::after {
      width: 60px;
    }
  }

  @media (max-width: 480px) {
    .hero-content {
      padding: 1rem;
    }

    .hero-description {
      padding: 1.5rem;
      border-radius: 16px;
    }

    .hero-subtitle {
      margin-bottom: 2rem;
    }

    .hero-title::after {
      width: 40px;
      height: 3px;
    }
  }

  /* Fade In Up Animation */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Accessibility - Reduce Motion */
  @media (prefers-reduced-motion: reduce) {

    .hero-section,
    .hero-section::before,
    .hero-section::after,
    .hero-title,
    .hero-subtitle,
    .hero-description,
    .hero-description::before {
      animation: none;
    }

    .hero-description:hover {
      transform: none;
    }
  }

  /* Performance Optimization */
  .hero-section * {
    will-change: transform;
  }

  /* Additional Decorative Elements */
  .hero-section .floating-element {
    position: absolute;
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, rgba(64, 224, 208, 0.1), rgba(72, 209, 204, 0.05));
    border: 1px solid rgba(64, 224, 208, 0.2);
    border-radius: 50%;
    animation: floatElement 10s ease-in-out infinite;
    pointer-events: none;
  }

  .hero-section .floating-element:nth-child(1) {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
  }

  .hero-section .floating-element:nth-child(2) {
    top: 60%;
    right: 20%;
    animation-delay: 2s;
    animation-duration: 12s;
  }

  @keyframes floatElement {

    0%,
    100% {
      transform: translateY(0) translateX(0) rotate(0deg);
      opacity: 0.3;
    }

    25% {
      transform: translateY(-20px) translateX(10px) rotate(90deg);
      opacity: 0.6;
    }

    50% {
      transform: translateY(-10px) translateX(-10px) rotate(180deg);
      opacity: 0.4;
    }

    75% {
      transform: translateY(10px) translateX(5px) rotate(270deg);
      opacity: 0.5;
    }
  }
</style>

<!-- Social Media Icons Container -->
<!-- header section -->
<div class="header_section height_90 width_100">
  <!-- navbar -->

  <!-- heading -->
  <?php include_once "partials/nav.php" ?>
  <div class="content width_70 pt-5">
    <div class="header_text main_color inch-14-head-text">
      Achieve your<span class="transparent inch-14-head-text"> goals</span>
    </div>
    <div class="h4 text-light pb-5 inch-14-margin">
      with our reliable and scalable end-to-end IT solutions
    </div>
    <div class="p text-light width_100 inch-20-text">
      Ace Micro Services is a trusted partner for delivery of end-to-end IT
      Solutions. We help businesses achieve their goals through technology.
      Our team has extensive experience in providing customized solutions to
      clients across various industries.
    </div>
  </div>
</div>


<!-- ! header section -->

<!-- about us section -->
<div class="about_us width_100 inch-14-height height_40 d-flex justify-content-center align-items-center">
  <div class="inner_about_cont p-5 m-5">
    <div class="row">
      <div class="col-md-6 p-5 bg-light">
        <img src="assets/Rectangle 56.png" class="width_100" alt="" />
      </div>
      <div class="col-md-5 bg-light p-5">
        <div class="header_text_about">
          <span class="transparent_about"> Who we are</span>
        </div>
        <div class="inner_text mid_color pt-5">
          At Ace Micro Services, we provide customized IT solutions to help
          businesses thrive in today's rapidly evolving digital landscape.
          That is why we offer a range of services to ensure that our
          clients can leverage the most relevant solutions to meet their
          business needs. We believe that technology should be a tool for
          growth, not source of frustration. That's why we are committed to
          providing reliable, efficient, and cost- effective solutions to
          help you achieve your goals.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ! about us section -->

<!-- our approach section -->
<div class="our_approach height_50 bg-dark width_100 p-5">
  <div class="cont inner_our_approach width_50">
    <div class="header_text_approach text-light">
      Our <span class="transparent_approach">Approach</span>
    </div>

    <div class="p text-light pb-4">
      We take a collaborative approach to working with our clients.
    </div>
    <div class="p text-light">
      We work closely with you to understand your business goals,
      challenges, and needs, and then we develop solutions tailored to your
      specific requirements. We pride ourselves on being responsive and
      flexible, and we always strive to exceed our clients' expectations.
    </div>
  </div>
</div>
<!-- !our approach section -->

<!-- our solutions section -->
<div class="our_solutions width_100 p-5">
  <div class="cont width_50 inner_our_solutions  pb-2">
    <div class="header_text_solutions mid_color">
      Our <span class="transparent_solutions">Solutions</span>
    </div>

    <div class="p">
      At Ace Micro Services, we offer a variety of solutions which include
      Cloud Services, Data Center Solutions, Managed IT and Smart Living
      Tech and IoT
    </div>
  </div>
  <div class="solutions_card py-5">
    <div class="row solutions-row">
      <!-- Cloud Services Card -->
      <div class="col-md-3 d-flex our-solutions-card-item justify-content-center align-items-center" onclick="redirectToCloud()">
        <div class="card width_100" style="width: 90%;">
          <div class="inner-cont1">
            <div class="info p-4" data-hover-text="Cloud Services Info">
              <div class="contain"></div>
              <div class="card-heading h6 font-weight-bold">Cloud Services</div>
              <div class="hover-text py-5">We use the best-in-class
                technologies and follow
                industry best practices to
                ensure that our cloud
                hosting solutions are reliable,

                secure, and high-
                performance, giving you

                peace of mind and allowing
                you to focus on what
                matters most - growing your
                business.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Center Solutions Card -->
      <div class="col-md-3 our-solutions-card-item d-flex justify-content-center align-items-center" onclick="redirectToData()">
        <div class="card" style="width: 90%;">
          <div class="inner-cont2">
            <div class="info p-4" data-hover-text="Data Center Solutions Info">
              <div class="card-heading h6 font-weight-bold">Data Center Solutions</div>
              <div class="hover-text py-5">Productivity and efficiency of your business is dependent on performance of your technology. Managed IT service from Ace Micro Services frees you to focus on your core business </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Managed IT Card -->
      <div class="col-md-3 d-flex our-solutions-card-item justify-content-center align-items-center" onclick="redirectToIT()">
        <div class="card" style="width: 90%;">
          <div class="inner-cont3">
            <div class="info p-4" data-hover-text="Managed IT Info">
              <div class="card-heading h6 font-weight-bold">Managed IT</div>
              <div class="hover-text py-5">Productivity and efficiency of your business is dependent on performance of your technology. Managed IT service from Ace Micro Services frees you to focus on your core business </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Smart Living Tech & IOT Card -->
      <div class="col-md-3 d-flex justify-content-center our-solutions-card-item align-items-center" onclick="redirectToAuto()">
        <div class="card" style="width: 90%;">
          <div class="inner-cont4">
            <div class="info p-4" data-hover-text="Smart Living Tech & IOT Info">
              <div class="card-heading h6 font-weight-bold">Smart Living Tech & IOT</div>
              <div class="hover-text py-5">We specialize in transforming houses into smart homes, offering intuitive solutions that enhance comfort, convenience, and security. Experience the future of living with our home automation technology solutions. </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- !our solutions section -->

<!-- our products section -->
<style>
  .our_products {
    background-color: #008080;
    /* Teal background */
  }

  .our_products .header_text,
  .our_products ol {
    color: white;
    /* Ensure text is readable on teal background */
  }
</style>

<div class="our_products width_100 height_50 p-5" id="our_products">
  <div class="cont width_50 pb-2">
    <div class="header_text">
      Our <span class="transparent">Products</span>
    </div>

    <ol style="list-style-type: upper-roman;">
      A purchase of IT hardware from Ace Micro Services is a purchase of peace of mind. We offer warranty and fix it if it breaks.Professional-grade hardware for business reliability.Scalable solutions from individual users to enterprise deployments.</li>
    </ol>
  </div>
</div>
<div class="products_pic width_100 height_80 p-5">
  <div class="row">
    <div class="col-md-3 products-img d-flex justify-content-center align-items-center">
      <div class="text-orientation-upright">Laptops and Desktops</div>
      <img class="width_100 popup-trigger" src="assets/Group 2590.png" alt="Laptops and Desktops">
    </div>
    <div class="col-md-3 products-img d-flex justify-content-center align-items-center">
      <div class="text-orientation-upright">Servers and server management</div>
      <img class="width_100 popup-trigger1" src="assets/Group 2591.png" alt="Servers and Server Management">
    </div>
    <div class="col-md-3 products-img d-flex justify-content-center align-items-center">
      <div class="text-orientation-upright">Networking products</div>
      <img class="width_100 popup-trigger2" src="assets/Group 2592.png" alt="Networking Products">
    </div>
    <div class="col-md-3 products-img d-flex justify-content-center align-items-center">
      <div class="text-orientation-upright">Printers and Scanners</div>
      <img class="width_100 popup-trigger3" src="assets/Group 2593.png" alt="Printers and Scanners">
    </div>

    <!-- !our products section -->
    <!-- Add a modal or popup container -->
    <div id="myModal" class="modal">
      <div class="modal-dialog modal-fullscreen overflow-hidden">
        <div class="modal-content">


          <div class="modal-body">
            <div class="modal-header  ">
              <!-- Add close button to remove the popup -->

              <button class="close px-3 ">&times;</button>
            </div>
            <div class="container-fluid">
              <div class="row ">
                <!-- Left column for image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center pt-5">
                  <img src="assets/Group 2590.png" class="width_80">
                </div>

                <!-- Right column for horizontal text -->
                <div class="col-md-6  mt-4">
                  <div class="text-orientation-horizontal mt-5">
                    <h2 class="font-weight-bold pt-5 pb-3 mt-5">Laptops & Desktops</h2>
                    <p>Ace Micro Services offers laptops and desktops as part of their comprehensive IT hardware solutions. Their approach to hardware sales emphasizes peace of mind, as a purchase of IT hardware from Ace Micro Services is a purchase of peace of mind, with warranty coverage and repair services if equipment breaks.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="myModal1" class="modal">
      <div class="modal-dialog modal-fullscreen overflow-hidden">
        <div class="modal-content">


          <div class="modal-body">
            <div class="modal-header  ">
              <!-- Add close button to remove the popup -->

              <button class="close px-3 ">&times;</button>
            </div>
            <div class="container-fluid">
              <div class="row ">
                <!-- Left column for image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center pt-5">
                  <img src="assets/Group 2591.png" class="width_80" alt="">
                </div>

                <!-- Right column for horizontal text -->
                <div class="col-md-6  mt-4">
                  <div class="text-orientation-horizontal mt-5">
                    <h2 class="font-weight-bold pt-5 pb-3 mt-5">Servers and server management</h2>
                    <p>Ace Micro Services offers laptops and desktops as part of their comprehensive IT hardware solutions. Their approach to hardware sales emphasizes peace of mind, as a purchase of IT hardware from Ace Micro Services is a purchase of peace of mind, with warranty coverage and repair services if equipment breaks.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="myModal2" class="modal">
      <div class="modal-dialog modal-fullscreen overflow-hidden">
        <div class="modal-content">


          <div class="modal-body">
            <div class="modal-header  ">
              <!-- Add close button to remove the popup -->

              <button class="close px-3 ">&times;</button>
            </div>
            <div class="container-fluid">
              <div class="row ">
                <!-- Left column for image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center pt-5">
                  <img src="assets/Group 2592.png" class="width_80" alt="">
                </div>

                <!-- Right column for horizontal text -->
                <div class="col-md-6  mt-4">
                  <div class="text-orientation-horizontal mt-5">
                    <h2 class="font-weight-bold pt-5 pb-3 mt-5">Networking products</h2>
                    <p>Ace Micro Services is a trusted partner for delivery of end-to-end IT Solutions, helping businesses achieve their goals through technology with extensive experience in providing customized solutions to clients across various industries.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal3" class="modal">
      <div class="modal-dialog modal-fullscreen overflow-hidden">
        <div class="modal-content">


          <div class="modal-body">
            <div class="modal-header  ">
              <!-- Add close button to remove the popup -->

              <button class="close px-3 ">&times;</button>
            </div>
            <div class="container-fluid">
              <div class="row ">
                <!-- Left column for image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center pt-5">
                  <img src="assets/Group 2593.png" class="width_80" alt="">
                </div>

                <!-- Right column for horizontal text -->
                <div class="col-md-6  mt-4">
                  <div class="text-orientation-horizontal mt-5">
                    <h2 class="font-weight-bold pt-5 pb-3 mt-5">
                      Printers and Scanners
                    </h2>
                    <p>At Ace Micro Services, they provide customized IT solutions to help businesses thrive in today's rapidly evolving digital landscape. They believe that technology should be a tool for growth, not a source of frustration, which is why they are committed to providing reliable, efficient, and cost-effective solutions.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="body">
      <a href="pages/about_us.php"> <button class="btn btn_cloud px-5 py-3 mt-5">READ MORE <span class="pl-5"> → </span> </button></a>

    </div>

  </div>

  <script>
    window.onload = function() {
      var popupTriggers = document.querySelectorAll(".popup-trigger");
      var popupTriggers1 = document.querySelectorAll(".popup-trigger1");
      var popupTriggers2 = document.querySelectorAll(".popup-trigger2");
      var popupTriggers3 = document.querySelectorAll(".popup-trigger3");
      var modals = document.querySelectorAll(".modal");
      var closeBtns = document.querySelectorAll(".modal .close");

      function openModal(index) {
        modals[index].style.display = "block";
        modals[index].classList.add("modal-reveal");
      }

      popupTriggers.forEach(function(trigger, index) {
        trigger.onclick = function() {
          openModal(index);
        }
      });

      popupTriggers1.forEach(function(trigger, index) {
        trigger.onclick = function() {
          openModal(index + 1);
        }
      });

      popupTriggers2.forEach(function(trigger, index) {
        trigger.onclick = function() {
          openModal(index + 2);
        }
      });

      popupTriggers3.forEach(function(trigger, index) {
        trigger.onclick = function() {
          openModal(index + 3);
        }
      });

      closeBtns.forEach(function(closeBtn) {
        closeBtn.onclick = function() {
          closeModal();
        }
      });

      window.onclick = function(event) {
        modals.forEach(function(modal) {
          if (event.target == modal) {
            closeModal();
          }
        });
      }

      function closeModal() {
        modals.forEach(function(modal) {
          modal.style.display = "none";
          modal.classList.remove("modal-reveal");
        });
      }
    }
    // JavaScript to handle hover effect
    const infoContainers = document.querySelectorAll('.info');

    infoContainers.forEach(container => {
      container.addEventListener('mouseenter', () => {
        const hoverText = container.querySelector('.hover-text');
        hoverText.style.visibility = 'visible';
        hoverText.style.opacity = 1;
      });

      container.addEventListener('mouseleave', () => {
        const hoverText = container.querySelector('.hover-text');
        hoverText.style.visibility = 'hidden';
        hoverText.style.opacity = 0;
      });
    });

    function redirectToCloud() {
      // Specify the relative path to the page inside the 'pages' folder
      window.location.href = 'pages/cloud_services.php';
    }

    function redirectToIT() {
      // Specify the relative path to the page inside the 'pages' folder
      window.location.href = 'pages/managed_it_services.php';
    }

    function redirectToData() {
      // Specify the relative path to the page inside the 'pages' folder
      window.location.href = 'pages/data_center.php';
    }

    function redirectToAuto() {
      // Specify the relative path to the page inside the 'pages' folder
      window.location.href = 'pages/home_automation.php';
    }
  </script>

  <?php include_once "partials/footer.php" ?>