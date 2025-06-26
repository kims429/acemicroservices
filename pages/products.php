<?php include_once "../partials/header_minor.php" ?>
<?php include_once "../partials/nav2.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACE WEBSITE - Products</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap_css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="css/bootstrap_css/bootstrap.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <style>
    * {
      
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background: black;
      min-height: 100vh;
    }

    .our_products {
      background: teal;
      color: white;
      padding: 60px 0;
    }

    .header_text {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 30px;
      text-align: center;
    }

    .product-features {
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
    }

    .product-features ol {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-left: 20px;
    }

    .product-features li {
      margin-bottom: 10px;
    }

    .products_section {
      background: linear-gradient(135deg, #f5f7fa 0%, teal 100%);
      min-height: 80vh;
      padding: 0;
      position: relative;
      overflow: hidden;
    }

    .products_section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image:
        radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.2) 0%, transparent 50%);
      pointer-events: none;
    }

    .tabs-container {
      position: relative;
      z-index: 10;
      height: 100%;
      display: flex;
    }

    .product-tabs {
      width: 280px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 0 20px 20px 0;
      padding: 40px 0;
      box-shadow: 10px 0 30px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .product-tab {
      padding: 25px 30px;
      cursor: pointer;
      border-left: 4px solid transparent;
      transition: all 0.3s ease;
      position: relative;
      margin: 5px 0;
    }

    .product-tab:hover {
      background: teal;
      border-left-color: teal;
      transform: translateX(10px);
    }

    .product-tab.active {
      background: linear-gradient(135deg, teal, teal);
      color: white;
      border-left-color: #fff;
      transform: translateX(15px);
      border-radius: 0 25px 25px 0;
      box-shadow: teal;
    }

    .tab-title {
      font-size: 1.1rem;
      font-weight: 600;
      writing-mode: horizontal-tb;
      text-align: center;
      line-height: 1.3;
    }

    .tab-content {
      flex: 1;
      padding: 60px;
      display: none;
      animation: fadeInUp 0.6s ease;
    }

    .tab-content.active {
      display: flex;
      align-items: center;
      justify-content: center;
    }

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

    .content-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 25px;
      padding: 50px;
      max-width: 900px;
      width: 100%;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .content-image {
      width: 100%;
      max-width: 400px;
      height: 300px;
      object-fit: cover;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      margin-bottom: 30px;
    }

    .content-title {
      font-size: 2.5rem;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
      background: linear-gradient(teal, teal, teal);
      background-clip : text;
      -webkit-text-fill-color: transparent;
    }

    .content-description {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #666;
      text-align: justify;
    }

    .feature-list {
      list-style: none;
      margin-top: 25px;
    }

    .feature-list li {
      padding: 10px 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      position: relative;
      padding-left: 30px;
      color: black;
    }

    .feature-list li:before {
      content: '✓';
      position: absolute;
      left: 0;
      color: teal;
      font-weight: bold;
      font-size: 1.2rem;

    }

    .feature-list li:last-child {
      border-bottom: none;
    }

    @media (max-width: 768px) {
      .tabs-container {
        flex-direction: column;
      }

      .product-tabs {
        width: 100%;
        border-radius: 0;
        padding: 20px 0;
        display: flex;
        overflow-x: auto;
      }

      .product-tab {
        min-width: 200px;
        text-align: center;
        border-left: none;
        border-bottom: 4px solid transparent;
        margin: 0 5px;
      }

      .product-tab.active {
        border-left: none;
        border-bottom-color: teal;
        transform: translateY(-5px);
        border-radius: 15px 15px 0 0;
      }

      .tab-content {
        padding: 30px 20px;
      }

      .content-card {
        padding: 30px 20px;
      }

      .content-title {
        font-size: 2rem;
      }

      .header_text {
        font-size: 2.5rem;
      }
    }
  </style>
</head>


<body>

  <!-- Our Products Header Section -->
  <div class="our_products">
    <div class="container">
      <div class="header_text">
        Our Products
      </div>
      <div class="product-features">
        <ol style="list-style-type: upper-roman;">
          A purchase of IT hardware from Ace Micro Services is a purchase of peace of mind. We offer warranty and fix it if it breaks.Professional-grade hardware for business reliability.Scalable solutions from individual users to enterprise deployments.</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Products Tabbed Section -->
  <div class="products_section">
    <div class="tabs-container">
      <!-- Tab Navigation -->
      <div class="product-tabs">
        <div class="product-tab active" data-tab="laptops">
          <div class="tab-title">Laptops and Desktops</div>
        </div>
        <div class="product-tab" data-tab="servers">
          <div class="tab-title">Servers and Server Management</div>
        </div>
        <div class="product-tab" data-tab="networking">
          <div class="tab-title">Networking Products</div>
        </div>
        <div class="product-tab" data-tab="printers">
          <div class="tab-title">Printers and Scanners</div>
        </div>
      </div>

      <!-- Tab Contents -->
      <div class="tab-content active" id="laptops">
        <div class="content-card">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="../assets/Group 2590.png" alt="Laptops and Desktops" class="content-image">
            </div>
            <div class="col-md-6">
              <h2 class="content-title">Laptops & Desktops</h2>
              <p class="content-description">
                Ace Micro Services offers laptops and desktops as part of their comprehensive IT hardware solutions. Our approach to hardware sales emphasizes peace of mind, with warranty coverage and repair services if equipment breaks.
              </p>
              <ul class="feature-list">
                <li>High-performance processors for demanding applications</li>
                <li>Extended warranty and support packages</li>
                <li>Custom configurations for business needs</li>
                <li>24/7 technical support services</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="servers">
        <div class="content-card">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="../assets/Group 2591.png" alt="Servers" class="content-image">
            </div>
            <div class="col-md-6">
              <h2 class="content-title">Servers & Management</h2>
              <p class="content-description">
                Enterprise-grade server solutions designed for maximum uptime and performance. Our server management services ensure your infrastructure runs smoothly with minimal downtime.
              </p>
              <ul class="feature-list">
                <li>Rack-mounted and tower server configurations</li>
                <li>Virtualization and cloud integration</li>
                <li>24/7 monitoring and maintenance</li>
                <li>Scalable storage solutions</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="networking">
        <div class="content-card">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="../assets/Group 2592.png" alt="Networking" class="content-image">
            </div>
            <div class="col-md-6">
              <h2 class="content-title">Networking Products</h2>
              <p class="content-description">
                Ace Micro Services is a trusted partner for delivery of end-to-end IT Solutions, helping businesses achieve their goals through technology with extensive experience in providing customized networking solutions.
              </p>
              <ul class="feature-list">
                <li>Enterprise switches and routers</li>
                <li>Wireless access points and controllers</li>
                <li>Network security appliances</li>
                <li>Cable management and infrastructure</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="printers">
        <div class="content-card">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="../assets/Group 2593.png" alt="Printers" class="content-image">
            </div>
            <div class="col-md-6">
              <h2 class="content-title">Printers & Scanners</h2>
              <p class="content-description">
                At Ace Micro Services, we provide customized printing solutions to help businesses thrive in today's digital landscape. We believe technology should be a tool for growth, with reliable and cost-effective printing solutions.
              </p>
              <ul class="feature-list">
                <li>Multi-function printer/scanner combos</li>
                <li>High-volume commercial printers</li>
                <li>Document management solutions</li>
                <li>Maintenance and supply services</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Tab switching functionality
    const tabs = document.querySelectorAll('.product-tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove active class from all tabs and contents
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab
        tab.classList.add('active');

        // Show corresponding content
        const targetId = tab.getAttribute('data-tab');
        document.getElementById(targetId).classList.add('active');
      });
    });

    // Add smooth scrolling and intersection observer for animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe all content cards
    document.querySelectorAll('.content-card').forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(50px)';
      card.style.transition = 'all 0.6s ease';
      observer.observe(card);
    });
  </script>
</body>
<!-- footer section -->
<div class="footer width_100 height_50 p-5">
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <div class="row">
    <div class="col-sm-4 d-flex">
      <ul>
        <li class="pb-4">
          <img src="../assets/ace media/Logo.png" width="60" alt="" /></a>
        </li>
        <li class="py-2">
          Rainbow Towers, Muthithi Road, Nairobi
        </li>
        <li class="py-2">P.O.BOX 66778- 00800 Nairobi, Kenya</li>
        <li class="py-2">Tel: +254 713797915</li>
        <li class="py-2">+254 733601607</li>
        <li class="py-2">Email address:Info@dataposit.co.ke</li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <li class="pb-4">
          <a href="">LETS TALK IN</a>
        </li>

        <li class="py-2">
          <a href="https://linkedin.com/company/ace-micro-services" target="_blank" title="Let's talk on LinkedIn">
            <i class="fab fa-linkedin"></i> LinkedIn
          </a>
        </li>
        <li class="py-2">
          <a href="https://twitter.com/ace_microservices" target="_blank" title="Follow us on Twitter">
            <i class="fab fa-twitter"></i> Twitter
          </a>
        </li>
        <li class="py-2">
          <a href="https://github.com/ace-microservices" target="_blank" title="Check our GitHub">
            <i class="fab fa-github"></i> GitHub
          </a>
        </li>
        <li class="py-2">
          <a href="https://facebook.com/acemicroservices" target="_blank" title="Like us on Facebook">
            <i class="fab fa-facebook"></i> Facebook
          </a>
        </li>
        <li class="py-2">
          <a href="https://wa.me/254713797915" target="_blank" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i> WhatsApp
          </a>
        </li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
        <li class="py-2">
          <a href="pages/privacy_policy.php" class="main_nav_li">Privacy Policy</a>
        </li>

        <li class="py-2">
          &copy; 2025 All rights reserved to
        </li>

        <li class="py-2">
          Ace.co.ke
        </li>

      </ul>
    </div>
  </div>
</div>
<!-- !footer section -->
<script>
  document.getElementById('currentYear').textContent = new Date().getFullYear()
</script>
<!-- js linking -->
<script src="js/bootstrap_js/bootstrap.min.js"></script>
<script src="js/bootstrap_js/bootstrap.js"></script>
<script src="js/bootstrap_js/bootstrap.bundle.min.js"></script>
</body>

</html>