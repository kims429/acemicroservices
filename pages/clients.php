<?php include_once "../partials/header_minor.php" ?>
<!-- header section -->
<div class="clients_header width_100 bg-light text-light py-5" style="min-height: 60vh;">
  <?php include_once "../partials/nav2.php" ?>
  <div class="container d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 50vh;">
    <h1 class="fw-bold text-light mb-5">Our Clients</h1>
    <div class="header-text-min px-3" style="max-width: 800px;">
      At Ace Micro Services, we partner with leading organizations across sectors such as Automotive, Aviation, Finance,
       Government, Healthcare, ICT, Manufacturing, NGOs, and Professional Services—delivering smart, 
       scalable solutions tailored to each industry's needs.
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<br />
<!-- ! header section -->
<style>
  .tab-scroll-wrapper {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    /* Firefox */
  }

  .tab-scroll-wrapper::-webkit-scrollbar {
    display: none;
    /* Chrome/Safari */
  }

  .tab-scroll-container {
    min-width: max-content;
    display: inline-block;
  }

  .nav {
    display: flex;
    flex-wrap: nowrap;
    margin-bottom: 0;
    /* Optional, remove gap below tabs */
  }

  .client-tab-item {
    white-space: nowrap;
    flex: 0 0 auto;
    padding: 0.5rem 1rem;
  }
</style>
<!-- Scrollable Tabs Section -->
<!-- Scrollable Tabs Section -->
<div class="tab-scroll-wrapper">
  <div class="tab-scroll-container">
    <ul class="nav my-3 mx-5 justify-content-start align-items-center" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active client-tab-item" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Automotive</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Aviation</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false">Financial Services</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-3" data-bs-toggle="tab" href="#simple-tabpanel-3" role="tab" aria-controls="simple-tabpanel-3" aria-selected="false">Government Bodies</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-4" data-bs-toggle="tab" href="#simple-tabpanel-4" role="tab" aria-controls="simple-tabpanel-4" aria-selected="false">Healthcare</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-5" data-bs-toggle="tab" href="#simple-tabpanel-5" role="tab" aria-controls="simple-tabpanel-5" aria-selected="false">ICT and Professional Services</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-6" data-bs-toggle="tab" href="#simple-tabpanel-6" role="tab" aria-controls="simple-tabpanel-6" aria-selected="false">Manufacturing</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link client-tab-item" id="simple-tab-7" data-bs-toggle="tab" href="#simple-tabpanel-7" role="tab" aria-controls="simple-tabpanel-7" aria-selected="false">NGOs</a>
      </li>
    </ul>
  </div>
</div>
<div class="mx-5 px-5">
  <hr>
</div>
<!-- automotive clients -->
<div class="tab-content" id="tab-content" style="margin-top: -6%;">

  <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
    <div class="d-flex justify-content-center align-items-center">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/cmc.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/mobius-motors.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/subaru.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/subaru.png" class="width_80 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- aviation clients -->
  <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/dac-aviation.png" class="width_100 products-img p-5" alt=""></div>
        <div class="col-sm-3"> <img src="#" class="width_100 p-5" alt=""></div>
        <div class="col-sm-3"> <img src="#" class="width_100 p-5" alt=""></div>
        <div class="col-sm-3"> <img src="#" class="width_100 p-5" alt=""></div>
      </div>
    </div>
  </div>
  <!-- financial services clients -->
  <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/geminia.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/kenya-orient.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/The-monarch.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/Arion-Associates.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/turnkey-africa.png" class="width_80 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- government bodies clients -->
  <div class="tab-pane" id="simple-tabpanel-3" role="tabpanel" aria-labelledby="simple-tab-3">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/kura.png" class="width_100 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/ufaa.png" class="width_100 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- healthcare clients -->
  <div class="tab-pane" id="simple-tabpanel-4" role="tabpanel" aria-labelledby="simple-tab-4">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/chs-2.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/City-eye.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/goldstar.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/ion.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/molars.jpg" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/turaco.png" class="width_80 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- ICT professional services clients -->
  <div class="tab-pane" id="simple-tabpanel-5" role="tabpanel" aria-labelledby="simple-tab-5">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/Arion-Associates.png" class="width_100 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/Becs.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/broadcom.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/IKM.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/Sphinx.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/Teknohub.png" class="width_80 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- manufacturing clients -->
  <div class="tab-pane" id="simple-tabpanel-6" role="tabpanel" aria-labelledby="simple-tab-6">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"> <img src="../assets/ace media/basco.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/blowplast.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/glacier.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/kenblest.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"> <img src="../assets/ace media/nairobi-flour-mills.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/paperbags.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"><img src="../assets/ace media/tarpo.png" class="width_80 p-5 products-img" alt=""></div>
        <div class="col-sm-3"> <img src="../assets/ace media/thermopak.png" class="width_80 p-5 products-img" alt=""></div>
      </div>
    </div>
  </div>
  <!-- NGOs clients -->
  <div class="tab-pane" id="simple-tabpanel-7" role="tabpanel" aria-labelledby="simple-tab-7">
    <div class="d-flex justify-content-center align-items-center m-5">
      <div class="row m-5">
        <div class="col-sm-3"><img src="../assets/ace media/Amnesty.png" class="width_100 p-3 products-img" alt=""></div>
        <div class="col-sm-3"><img src="#" class="width_80 p-5" alt=""></div>
        <div class="col-sm-3"><img src="#" class="width_80 p-5" alt=""></div>
        <div class="col-sm-3"><img src="#" class="width_80 p-5" alt=""></div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
  </div>
</div>
<!-- ! content section -->
<?php include_once "../partials/footer_minor.php" ?>