<?php include_once "../partials/header_minor.php" ?>
<!-- header section -->
<!-- header section -->
<div class="header_section_solutions height_90 width_100">
  <?php include_once "../partials/nav2.php"; ?>
  <!-- navbar -->

  <!-- ! navbar -->
  <!-- header content -->
  <div class="d-flex justify-content-center align-items-center">
    <div class="header-text text-light ">Solutions We Provide</div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="header-text-min text-light width_60">
      <br /><br />
      At Ace Micro Services, we offer a variety of solutions which include
      Cloud Services,Networking,Managed IT and Smart Lifestyle Tech
    </div>
  </div>
  <!-- ! header content -->
</div>
<!-- ! header section -->
<!-- header short links -->
<div class="cont d-flex justify-content-center solutions_short_links_outer align-items-center py-5">
  <div class="row g-4 w-100 justify-content-center">
    <div class="col-md-3">
      <div class="card position-relative overflow-hidden" style="width: 100%; height: 500px;" onclick="redirectToCloud()">
        <div class="cont position-relative h-100">
          <img src="../assets/Group 2623.png" class="solution_shortcut_img w-100 h-100 object-fit-cover" alt="..." />
          <div class="card-body position-absolute bottom-0 start-0 end-0 bg-light py-4">
            <h6 class="card-text text-dark text-center mb-0" style="font-weight: bold;">Cloud Services</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card position-relative overflow-hidden" style="width: 100%; height: 500px;" onclick="redirectToNetworking()">
        <img src="../assets/Group 2622.png" class="w-100 h-100 object-fit-cover" alt="..." />
        <div class="card-body position-absolute bottom-0 start-0 end-0 bg-light py-4">
          <h6 class="card-text text-dark text-center mb-0" style="font-weight: bold;">Networking</h6>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card position-relative overflow-hidden" style="width: 100%; height: 500px;" onclick="redirectToIT()">
        <img src="../assets/Group 2621.png" class="w-100 h-100 object-fit-cover" alt="..." />
        <div class="card-body position-absolute bottom-0 start-0 end-0 bg-light py-4">
          <h6 class="card-text text-dark text-center mb-0" style="font-weight: bold;">Managed IT</h6>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card position-relative overflow-hidden" style="width: 100%; height: 500px;" onclick="redirectToSmart()">
        <img src="../assets/MicrosoftTeams-image (7).png" class="w-100 h-100 object-fit-cover" alt="..." />
        <div class="card-body position-absolute bottom-0 start-0 end-0 bg-light py-4">
          <h6 class="card-text text-dark text-center mb-0" style="font-weight: bold;">Smart Living Tech</h6>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ! header short links -->
<div class="cont width_100">
  <!-- Flexible Multi cloud strategies section -->
  <div class="cloud_strategies1" id="cloud">
    <div class="row">
      <div class="col-md-6 cloud-left height_70 "></div>
      <!-- <div class="col-md-6 height_70">
        <img src="../assets/Rectangle -3.png" style="width: 100%; height:100%; " alt="">
      </div> -->
      <div class="col-md-6 p-3 d-flex justify-content-center align-items-center">
        <div class="cont p-5">
          <h3 class="cloud_right_header">Flexible Multicloud strategies</h3>
          <br />
          <p class="cloud_right_text">
            We use the best-in-class technologies and follow industry best
            practices to ensure that our cloud hosting solutions are
            reliable, secure, and high-performance, giving you peace of mind
            and allowing you to focus on what matters most - growing your
            business.
          </p>

          <a href="cloud_services.php"> <button class="btn btn_cloud px-5 py-3 mt-5">Read more <span class="pl-5"> → </span> </button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- !Flexible Multi cloud strategies section -->

  <!-- Data Centre Solutions section -->
  <div class="cloud_strategies bg-light-custom py-5 " id="networking">
    <div class="row">
      <div class="col-md-6 p-3 d-flex justify-content-center align-items-center">
        <div class="cont p-5">
          <h3 class="cloud_right_header">Data Centre Solutions</h3>
          <br />
          <p class="cloud_right_text">
            Productivity and efficiency of your business is dependent
            on performance of your technology. Managed IT service
            from Ace Micro Services frees you to focus on your core
            business
          </p>

          <a href="data_center.php"> <button class="btn btn_cloud px-5 py-3 mt-5">Read more <span class="pl-5"> → </span> </button></a>
        </div>
      </div>
      <div class="col-md-6 data-left height_70"></div>
    </div>
  </div>
  <!-- Data Centre Solutions section -->

  <!-- Managed IT Services section -->
  <div class="cloud_strategies" id="IT">
    <div class="row">
      <div class="col-md-6 manage-left height_70"></div>
      <div class="col-md-6 p-3 d-flex justify-content-center align-items-center">
        <div class="cont p-5">
          <h3 class="cloud_right_header">Managed IT Services</h3>
          <br />
          <p class="cloud_right_text">
            Productivity and efficiency of your business is dependent
            on performance of your technology. Managed IT service
            from Ace Micro Services frees you to focus on your core
            business
          </p>

          <a href="managed_it_services.php"> <button class="btn btn_cloud px-5 py-3 mt-5">Read more <span class="pl-5"> → </span> </button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ! Managed IT Services section -->

  <!-- Home Automation Technology section -->
  <div class="cloud_strategies bg-light-custom py-5" id="smart">
    <div class="row">
      <div class="col-md-6 p-3 d-flex justify-content-center align-items-center">
        <div class="cont p-5">
          <h3 class="cloud_right_header">Home Automation Technology</h3>
          <br />
          <p class="cloud_right_text">
            We specialize in transforming houses into smart homes,
            offering intuitive solutions that enhance comfort,
            convenience, and security. Experience the future of living
            with our home automation technology solutions.
          </p>

          <a href="home_automation.php"> <button class="btn btn_cloud px-5 py-3 mt-5">Read more <span class="pl-5"> → </span> </button></a>
        </div>
      </div>
      <div class="col-md-6 auto-left height_70"></div>
    </div>
  </div>
  <!-- ! Home Automation Technology section -->
</div>
<script>
  function redirectToCloud() {
    // Specify the relative path to the page inside the 'pages' folder
    window.location.href = '#cloud';
  }

  function redirectToNetworking() {
    // Specify the relative path to the page inside the 'pages' folder
    window.location.href = '#networking';
  }

  function redirectToIT() {
    // Specify the relative path to the page inside the 'pages' folder
    window.location.href = '#IT';
  }

  function redirectToSmart() {
    // Specify the relative path to the page inside the 'pages' folder
    window.location.href = '#smart';
  }
</script>
<?php include_once "../partials/footer_minor.php" ?>