@extends('layout')

@section('content')

<!--seccion intro-->
<section class="intro">
      <div class="intro__perfect-base--container">
        <div class="intro__perfect-base">
          <h5 class="text__pretitle text--light intro__pretitle">
            THE ULTIMATE LUXURY EXPERIENCE
          </h5>
          <h1 class="text__title text--light intro__title">
            The Perfect Base for You
          </h1>
          <div class="button__intro">
            <button class="button button--golden button--intro">TAKE A TOUR</button>
            <button class="button button--dark button--intro">LEARN MORE</button>
          </div>        
        </div>
      </div>
      <div class="intro__availability">
        <div class="intro__calendar">
          <div class="intro__calendar-item">
            <label class="text--light text__label">Arrival Date</label>
            <input
              class="intro__calendar-input"
              type="date"
              placeholder="24th march 2020"
            />
          </div>
          <div class="intro__calendar-item">
            <label class="text--light text__label">Departure Date</label>
            <input
              class="intro__calendar-input"
              type="date"
              placeholder="30th march 2020"
            />
          </div>
        </div>
        <button class="button button--golden button--availability">
          CHECK AVAILABILITY
        </button>
      </div>
    </section>
    <!--Seccion About-Us-->
    <section class="about-us">
      <div class="about-us__container">
        <div class="intro__about-us">
          <div class="about-us__info-container">
            <h5 class="text__pretitle text--gray about-us__pretitle">
              ABOUT US
            </h5>
            <h1 class="text__title text--black about-us__title">
              Discover Our Underground.
            </h1>
            
            <p class="text__paragraph text--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <button class="button button--golden button--book">BOOK NOW</button>
          </div>       
        </div>

        <div class="about-us__cards">
          <div class="about-us__card about-us__card--team">
            <div class="about-us__card-img about-us__card--itemteam"></div>
            <div class="about-us__card--text">
              <img
                class="about-us__card--teamback"
                src="./img/Home/teambackground.png"
                alt="equipo background"
              >        
              <img
                class="about-us__card--teamicon"
                src="./img/Home/teamicon.png"
                alt="equipo icono"
              >              
              <h6 class="text__subtitle about-us__card-title">Strong Team</h6>
              <p class="text__card-paragraph text--black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
              </p>
            </div>
          </div>
          <div class="about-us__card about-us__card--luxury">
            <div class="about-us__card-img about-us__card--itemlux"></div>
            <div class="about-us__card--text about-us__card-text--dark">
              <img
                class="about-us__card--teamicon"
                src="./img/Home/luxury-room.png"
                alt="equipo icono"
              >            
              <h6 class="text__subtitle text--light about-us__card-title">Luxury Room</h6>
              <p class="text__card-paragraph text--light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
              </p>
            </div>
          </div>       
        </div>
      </div>
    </section>
    <!--Seccion Hand Picked Rooms-->
    <section class="handpicked">
      <h5 class="text__pretitle text--gray text--center handpicked__pretitle">ROOMS</h5>
      <h1 class="text__title text--lightblack text--center handpicked__title">Hand Picked Rooms</h1>
      <div class="swiper swiper__handpicked--rooms">
        <div class="swiper-wrapper swiper-wrapper__handpicked">
          <div class="swiper-slide swiper-slide--handpicked--rooms">
            <div class="room-card">
              <div class="room-card__img room-card__img--full">
                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                <div class="room-card__features-bar ">
                    <img src="./img/Home/beds.png" alt="bedIcon" class="room-card__features-icon"> 
                    <img src="./img/Home/wifi.png" alt="wifiIcon" class="room-card__features-icon">
                    <img src="./img/Home/parking.png" alt="carIcon" class="room-card__features-icon">
                    <img src="./img/Home/climate.png" alt="winterIcon" class="room-card__features-icon">
                    <img src="./img/Home/gym.png" alt="gymIcon" class="room-card__features-icon">
                    <img src="./img/Home/smoking.png" alt="noSmokingIcon" class="room-card__features-icon">
                    <img src="./img/Home/bar.png" alt="cocktailIcon" class="room-card__features-icon">
                </div>
              </div>
        
              <div class="room-card__info rom-card__info--rooms">
                <h4 class="text__subtitle--small text--lightblack text--center room-card__title">
                  Minimal Duplex Room
                </h4>
                <p class="text__card-paragraph text--center text--gray rom-card__paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="room-card__price-container">
                  <p class="room-card__price room-card__price--small text--gold">
                  345 <span class="room-card__price--night">/Night</span>
                  </p>              
                </div>           
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide--handpicked--rooms">
            <div class="room-card">
              <div class="room-card__img room-card__img--full">
                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                <div class="room-card__features-bar ">
                    <img src="./img/Home/beds.png" alt="bedIcon" class="room-card__features-icon"> 
                    <img src="./img/Home/wifi.png" alt="wifiIcon" class="room-card__features-icon">
                    <img src="./img/Home/parking.png" alt="carIcon" class="room-card__features-icon">
                    <img src="./img/Home/climate.png" alt="winterIcon" class="room-card__features-icon">
                    <img src="./img/Home/gym.png" alt="gymIcon" class="room-card__features-icon">
                    <img src="./img/Home/smoking.png" alt="noSmokingIcon" class="room-card__features-icon">
                    <img src="./img/Home/bar.png" alt="cocktailIcon" class="room-card__features-icon">
                </div>
              </div>
        
              <div class="room-card__info rom-card__info--rooms">
                <h4 class="text__subtitle--small text--lightblack text--center room-card__title">
                  Minimal Duplex Room
                </h4>
                <p class="text__card-paragraph text--center text--gray rom-card__paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="room-card__price-container">
                  <p class="room-card__price room-card__price--small text--gold">
                  345 <span class="room-card__price--night">/Night</span>
                  </p>              
                </div>           
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide--handpicked--rooms">
            <div class="room-card">
              <div class="room-card__img room-card__img--full">
                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                <div class="room-card__features-bar ">
                    <img src="./img/Home/beds.png" alt="bedIcon" class="room-card__features-icon"> 
                    <img src="./img/Home/wifi.png" alt="wifiIcon" class="room-card__features-icon">
                    <img src="./img/Home/parking.png" alt="carIcon" class="room-card__features-icon">
                    <img src="./img/Home/climate.png" alt="winterIcon" class="room-card__features-icon">
                    <img src="./img/Home/gym.png" alt="gymIcon" class="room-card__features-icon">
                    <img src="./img/Home/smoking.png" alt="noSmokingIcon" class="room-card__features-icon">
                    <img src="./img/Home/bar.png" alt="cocktailIcon" class="room-card__features-icon">
                </div>
              </div>
        
              <div class="room-card__info rom-card__info--rooms">
                <h4 class="text__subtitle--small text--lightblack text--center room-card__title">
                  Minimal Duplex Room
                </h4>
                <p class="text__card-paragraph text--center text--gray rom-card__paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore.
                </p>
                <div class="room-card__price-container">
                  <p class="room-card__price room-card__price--small text--gold">
                  345 <span class="room-card__price--night">/Night</span>
                  </p>              
                </div>           
              </div>
            </div>
          </div>
        </div>
        <div class="room-card__buttons room-card__button--home">
          <button class="room-card__button button button--room-card handpicked-rooms__button-prev"><img src="./img/Home/Vector.svg" alt="arrow-icon" /></button>
          <button class="room-card__button button button--room-card button--golden handpicked-rooms__button-next"><img src="./img/Home/arrow-right.svg" alt="arrow-icon" /></button>
        </div>
      </div>
    </section>
    <!--Seccion Video-->
    <section class="video">
      <div class="video_container">      
          <h5 class="text__pretitle text--gold video__pretitle">
            INTRO VIDEO
          </h5>
          <h1 class="text__title text--light video__title">
            Meet With Our Luxury Place.
          </h1>
          
          <p class="video__paragraph text__paragraph text--gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
          </p>
        <video class="video__video" autoplay muted loop>
          <source src="./img/Home/Miranda-video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <button class="button button--golden button--book">BOOK NOW</button>
      </div>
    </section>
    <!--Seccion Facilities-->
    <section class="facilities">
      <div class="facilities_container">
        <h5 class="text__pretitle text--gray text--center facilities__pretitle">
          FACILITIES
        </h5>
        <h1 class="text__title text--black text--center facilities__title">
          Core Features
        </h1>
        <!--Slider de facilities-->
        <div class="swiper swiper__core-features">
          <div class="swiper-wrapper core-features__slider core-features__slider">
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/01.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/rating.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--black">
                  Have High Rating
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/02.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/hours.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--dark">
                  Quiet Hours
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/03.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/location.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--dark">
                  Best Locations
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/04.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/cancelation.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--dark">
                Free Cancellation
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/05.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/payment.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--dark">
                  Payment Options
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
            <div class="swiper-slide core-features__slide core-features__slide">
              <img
                class="core-features_number-icon core-features_number-icon"
                src="./img/Home/06.svg"
                alt=""
              />
              <div class="core-features__slide-info">
                <img
                  class="core-features__icon"
                  src="./img/Home/offers.svg"
                  alt=""
                />
                <h4 class="text__subtitle core-features__slide-title text--dark">
                  Special Offers
                </h4>
                <p class="text__paragraph text--gray">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna..
                </p>
              </div>
            </div>
    
          </div>
          <div class="swiper-pagination swiper-pagination__core-features"></div>
        </div>
      </div>
    </section>
    <!--Sección Menu-->
    <section class="menu">
      <div class="menu__container">
        <img class="menu__donut" src="./img/Home/donut.svg" alt="donut">
        <div class="menu__text">
          <h5 class="text__pretitle text--gray menu__pretitle">MENU</h5>
          <h1 class="text__title text--dark menu__title">Our Foods Menu</h1>
        </div>
      

      <div class="swiper swiper--menu">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide--menu">
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--eggs"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Eggs &amp Bacon
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>

            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--tea"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Tea or Coffee
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>

            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--oatmeal"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Chia Oatmeal
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide--menu">
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--fruit"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Fruit Parfait
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>

            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--marmalade"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Marmalade Selection
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>

            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--cheese"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Cheese Plate
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="menu__buttons">
          <button class="button menu__button menu__button-prev">
            <img src="./img/Home/Vector.svg" alt="arrow-icon" />
          </button>
          <button class="button button--golden menu__button menu__button-next">
            <img src="./img/Home/arrow-right.svg" alt="arrow-icon" />
          </button>
        </div>
      </div>

    </div>
    <div class="swiper swiper--menu__photo">
      <div class="swiper-wrapper swiper--menu__photo-wrapper">
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img" src="./img/Home/restaurant1.jpg" />
        </div>
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img" src="./img/Home/restaurant2.jpg" />
        </div>
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img"  src="./img/Home/restaurant3.jpg"/>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination--menu__photo swiper"></div>
    </div>
    </section>
    <!--Seccion Logros-->
    <section class="logros">
      <div class="logros__container">
        <div class="logros__card">
          <img
            class="logros__card-img"
            src="./img/Home/cohete.svg"
            alt="rocket"
          />
          <img
            class="logros__card-info"
            src="./img/Home/84.svg"
            alt="projects"
          />
        </div>
        <div class="logros__card">
          <img
            class="logros__card-img"
            src="./img/Home/plantilla.svg"
            alt="people"
          />
          <img
            class="logros__card-info"
            src="./img/Home/100M.svg"
            alt="backers"
          />
        </div>
        <div class="logros__card">
          <img
            class="logros__card-img"
            src="./img/Home/categorias.svg"
            alt="invest"
          />
          <img
            class="logros__card-info"
            src="./img/Home/02k.svg"
            alt="categories served"
          />
        </div>
        <div class="logros__card">
          <img
            class="logros__card-img"
            src="./img/Home/idea.svg"
            alt="book"
          />
          <img
            class="logros__card-info"
            src="./img/Home/100M2.svg"
            alt="raised funds"
          />
        </div>
      </div>  
    </section>
@endsection