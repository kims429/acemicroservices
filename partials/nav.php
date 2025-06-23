  <!-- navigation bar -->
  <div class="row nav-main text-light pb-2">
    <div class="col-md-7" style="margin-left: -5%">
      <ul class="d-flex justify-content-evenly pt-3 ">
        <li><a href="../index.php" class="main_nav_li">Home</a></li>
        <li><a href="pages/about_us.php" class="main_nav_li">About Us</a></li>
        <li><a href="pages/products.php" class="main_nav_li">Products</a></li>
        <li class="dropdown">
          <a href="#" class="main_nav_li" onclick="openSolutions()">Solutions</a>
          <div class="dropdown-content py-3 px-2">
            <a href="pages/cloud_services.php" class=" main_nav_li m-5 " style="font-weight: 100;font-size:14px;">Cloud Services</a><br><br>
            <a href="pages/data_center.php" class=" main_nav_li m-5 " style="font-weight: 100;font-size:14px;">Networking</a><br><br>
            <a href="pages/managed_it_services.php" class=" main_nav_li m-5 " style="font-weight: 100;font-size:14px;">Manages IT</a><br><br>
            <a href="pages/home_automation.php" class=" main_nav_li m-5 " style="font-weight: 100;font-size:14px;">Smart-Living Tech</a><br><br>
            <!-- Add more dropdown items as needed -->
          </div>
        </li>

        <li><a href="pages/clients.php" class="main_nav_li">Clients</a></li>
        <li><a href="pages/contact.php" class="main_nav_li">Contact</a></li>
      </ul>
    </div>
    <div class="col-md-2">
      <a href="">
        <img src="assets/ace media/Logo.png" width="60" alt="" /></a>
    </div>
    <div class="col-md-3 pt-3 ml-5 float-right" style="margin-left: 3%">
      <!-- <div class="cont justify-content-evenly d-flex">
            <a href=""><i class="fa fa-search text-light"></i></a>
            <a href=""><i class="fa fa-bars text-light"></i></a>
          </div> -->
    </div>
  </div>
  <!-- ! navigation bar -->

  <!-- minor navigation bar -->

  <div class="nav-minor row  text-light pb-2  ">

    <div class="col-md-12">
      
      <div class="hamburger-menu ">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn " for="menu__toggle">
          <span></span>
        </label>

        <ul class="menu__box">
          <li><a class="menu__item" href="index.php">Home</a></li>
          <li><a class="menu__item" href="pages/about_us.php">About Us</a></li>
          <li><a class="menu__item" href="pages/product.php">Products</a></li>
          <li><a class="menu__item" href="#" onclick="openSolutions()">Solutions</a></li>
          <li><a class="menu__item" href="pages/clients.php">Clients</a></li>
          <li><a class="menu__item" href="pages/contact.php">Contact</a></li>

        </ul>

      </div>

    </div>



  </div>
  <script>
    function openSolutions() {
      window.location.href = 'pages/solutions.php';
    }
    // Get the element to change background color
    const menuBtn = document.querySelector('.menu__btn');

    // Add an event listener for scroll
    document.addEventListener('scroll', function() {
      // Get the current scroll position
      const scrollPosition = window.scrollY;

      // Check if the scroll position is greater than a certain value
      if (scrollPosition > 100) {
        // Add the 'scrolled' class to change background color
        menuBtn.classList.add('scrolled');
      } else {
        // Remove the 'scrolled' class to revert to the initial background color
        menuBtn.classList.remove('scrolled');
      }
    });
  </script>