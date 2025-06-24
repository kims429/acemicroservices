<!-- footer section -->
<div class="footer width_100 height_49 p-5">
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <style>
    .footer {
      margin-left: calc(-50vw + 50%);
      width: 100vw;
      padding-left: 20px;
      padding-right: 20px;
    }

    .social-media-container {
      position: relative;
      margin: 20px auto;
      width: fit-content;
      z-index: 9999;
      display: flex;
      flex-direction: row;
      gap: 10px;
      padding: 10px;
    }

    .social-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: white;
      font-size: 20px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
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

    .social-icon:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .linkedin {
      background: linear-gradient(45deg, #0077b5, #00a0dc);
    }

    .twitter {
      background: linear-gradient(45deg, #1da1f2, #0d8bd9);
    }

    .github {
      background: linear-gradient(45deg, #333, #24292e);
    }

    .facebook {
      background: linear-gradient(45deg, #1877f2, #42a5f5);
    }

    .whatsapp {
      background: linear-gradient(45deg, #25d366, #128c7e);
    }

    .social-tooltip {
      position: absolute;
      bottom: 60px;
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
    }

    .social-tooltip::after {
      content: '';
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      border: 6px solid transparent;
      border-top-color: rgba(0, 0, 0, 0.8);
    }

    .social-icon:hover .social-tooltip {
      opacity: 1;
      visibility: visible;
    }

    @media (max-width: 768px) {
      .social-media-container {
        gap: 8px;
        padding: 8px;
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
  </style>


  <div class="row">
    <div class="col-sm-4 d-flex">
      <ul>
        <li class="pb-4">
          <img src="assets/ace media/Logo.png" width="60" alt="" /></a>

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
  <script src="js/bootstrap_js/bootstrap.min.js"></script>
  <script src="js/bootstrap_js/bootstrap.js"></script>
  <script src="js/bootstrap_js/bootstrap.bundle.min.js"></script>
  </body>

  </html>