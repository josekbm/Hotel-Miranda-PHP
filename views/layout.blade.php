<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
  <title>Hotel Miranda | HOME</title>
</head>
<body>
  <!--Header-->
  <header class="header">
    <div></div>
    <nav class="nav">
      <div class="nav--left">
        <button class="nav__burger button"></button>

        <div class="nav__logo">
          <div class="nav__logo-H">
            <img src="./img/Header/H.svg" alt="logo" />
          </div>
          <img src="./img/Header/Hotel Miranda.svg" alt="logo" />
        </div>
      </div>

      <div class="nav__list text__nav-items">
        <li class="nav__item">
          <a class="nav__link" href="about-us.html">About us</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="rooms.html">Rooms</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="offers.html">Offers</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="contact.html">Contact</a>
        </li>
      </div>

      <div class="nav__funcionalities">
        <a href=""
          ><img
            class="nav__funcionalities-icon"
            src="./img/Header/profile-icon.svg"
            alt="profile-logo"
        /></a>
        <a href=""
          ><img
            class="nav__funcionalities-icon"
            src="./img/Header/search-icon.svg"
            alt="search-logo"
        /></a>
      </div>
    </nav>
  </header>

  
    @yield('content')
  

  <!--FOOTER-->
  <footer class="footer">
      <div class="footer__container">
        <div class="footer__brand">
          <img class="footer__logo" src="./img/Footer/Logo.svg" alt="golden-logo" />
          <p class="footer__brand-paragraph text__footer-paragraph text__footer-paragraph--big text--gray">
            Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
            eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
          </p>

          <div class="footer__social">
            <div class="footer__social-icon">
              <img
                src="./img/Footer/facebook-icon.svg"
                alt="facebook-icon"
              />
            </div>
            <div class="footer__social-icon">
              <img src="./img/Footer/twitter-icon.svg" alt="twitter-icon" />
            </div>
            <div class="footer__social-icon">
              <img src="./img/Footer/be-icon.svg" alt="be-icon" />
            </div>
            <div class="footer__social-icon">
              <img
                src="./img/Footer/linkedin-icon.svg"
                alt="linkedin-icon"
              />
            </div>
            <div class="footer__social-icon">
              <img src="./img/Footer/youtube-icon.svg" alt="youtube-icon" />
            </div>
          </div>
        </div>

        <div class="footer__services">
          <h6 class="text__subtitle--smaller footer__services-title">Services.</h6>
          <div class="footer__list-container">
          <ul class="footer__list text__footer-paragraph text__footer-paragraph--bigger text--gray">
            <li class="footer__list-item">+  Restaurent &amp Bar</li>
            <li class="footer__list-item">+  Swimming Pool</li>
            <li class="footer__list-item">+  Wellness &amp Spa</li>
            <li class="footer__list-item">+  Restaurant</li>
            <li class="footer__list-item">+  Conference Room</li>
            <li class="footer__list-item">+  Coctail Party House</li>
          </ul>

          <ul class="footer__list text__footer-paragraph text__footer-paragraph--bigger text--gray">
            <li class="footer__list-item">+  Gaming Zone</li>
            <li class="footer__list-item">+  Marrige Party</li>
            <li class="footer__list-item">+  Party Planning</li>
            <li class="footer__list-item">+  Tour Consultancy</li>
          </ul>
        </div>
        </div>

        <div class="footer__contact">
          <h4 class="footer__contact-title text__subtitle--smaller text--lightblack">Contact us.</h4>
          <div class="footer__contact-info">

          
          <div class="footer__contact-item">
            <img src="./img/Footer/telf.svg" alt="phone-icon">
            <div class="footer__contact-text">
              <h6 class="text__subtitle--super-small">Phone Number</h6>
              <p class="text__footer-paragraph text__footer-paragraph--small text--gray">+ 97656 8675 7864 7</p>
            </div>
          </div>
          <div class="footer__contact-item">
            <img src="./img/Footer/mail.svg" alt="mail-icon">
            <div class="footer__contact-text">
              <h6 class="text__subtitle--super-small text--lightblack">Mail</h6>
              <p class="text__footer-paragraph text__footer-paragraph--small text--gray">info@webmail.com</p>
            </div>
          </div>
          <div class="footer__contact-item">
            <img src="./img/Footer/address.svg" alt="">
            <div class="footer__contact-text">
              <h6 class="text__subtitle--super-small text--lightblack">Hotel Address</h6>
              <p class="text__footer-paragraph text__footer-paragraph--small text--gray">19/A, Cirikon City hall Tower New York, NYC</p>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="footer__legal">
        <p class="text__label text--lightblack">Copyright By@Example - 2020</p>
        <div class="footer-policies">
          <p>
            <a href="" class="text__label text--lightblack footer-policies-link">Terms of use  </a><span class="text__label text--lightblack"> | </span>
            <a href="" class="text__label text--lightblack footer-policies-link"
              >Privacy Enviroment Policy</a
            >
          </p>
        </div>
      </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./scripts/burger-menu.js"></script>
<script src="./scripts/swiper.js"></script>
</body>
</html>