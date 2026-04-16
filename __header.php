<header class="header">


  <!-- desktop header  -->
  <div class="header-content">
    <a href="./" class="header__logo">
      <img src="images/flat-logo.png" alt="logo" />
    </a>
    <div class="header__menu">
      <a href="./" class="menu__link"> Home </a>
      <a href="./about.php" class="menu__link"> About </a>
      <a href="./services.php" class="menu__link"> Services </a>
      <!-- <a href="./pricing.php" class="menu__link"> Pricing </a> -->
      <a href="./contact.php" class="menu__link"> Contact </a>
      <a href="./contact.php" class="btn-outline"> Book Now <i class="uil uil-arrow-up-right"></i> </a>
    </div>
  </div>



  <!-- header mobile  -->
  <div class="header-mobile">
    <a href="./" class="header__logo">
      <img src="images/flat-logo.png" alt="logo" />
    </a>
    <div class="open">
      <i class="uil uil-left-indent-alt"></i>
    </div>
  </div>

  <!-- aside menu  -->
  <aside class="aside">

    <div class="close">
      <i class="uil uil-multiply"></i>
    </div>

    <div class="menu">
      <a href="./">Home</a>
      <a href="./about.php">About</a>
      <a href="./services.php">Services</a>
      <!-- <a href="./pricing.php">Pricing</a> -->
      <a href="./contact.php">Contact</a>
    </div>


    <div class="buttons">
      <a href="./contact.php" class="btn-1"> Book Now </a>
      <a href="https://api.whatsapp.com/send?phone=916300225950&text=Hi%2C%20I%20am%20Looking%20for%20Pest%20Control%20Service%20in%20Hyderabad." class="btn-2"> Whatsapp Now </a>
    </div>


    <div class="social-icons">
      <a href="https://www.instagram.com/killteck.pci"> <i class="uil uil-instagram"></i> </a>
    </div>
  </aside>
</header>


<script>
  let openNav = document.querySelector('.header-mobile .open')
  let closeNav = document.querySelector('.aside .close')
  let aside = document.querySelector(".aside")

  openNav.addEventListener("click", () => {
    aside.style.transform = "translateX(0)"
  })

  closeNav.addEventListener("click", () => {
    aside.style.transform = "translateX(100%)"
  })
</script>