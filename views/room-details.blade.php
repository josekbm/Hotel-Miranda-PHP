@extends('layout')

@section('content')

<!--Seccion Rooms home-->
<section class="page-title">
    <div class="page-title__contenedor">
        <h5 class="text__pretitle text--light page-title__pretitle">
            THE ULTIMATE LUXURY
        </h5>
        <h1 class="text__title text--light page-title__title">
            Ultimate Room
        </h1>
        <div class="page-title__index-contenedor">
            <div class="page-title__index">
                <p class="text__page-card text--lightblack text__page-card--home">Home</p>
                <p class="text__page-card text--lightblack">|</p>
                <p class="text__page-card text--gold ">Room Details</p>
            </div>
        </div>
    </div>
</section>
<!--Room-Detail-->
<section class="room-detail">
    <div class="room-detail__contenedor">
        <div class="room-detail__card">
            <div class="room-detail__header">
                <div class="room-detail__titles">
                    <h4 class="offers__pretitle text__pretitle--small text--gray">DOUBLE BED</h4>
                    <h1 class="offers__title text__card-title text--lightblack">Luxury Double Bed</h1>
                </div>
                <div class="room-detail__price">
                    <p class="text__price text--gold offers__price-new">$345<span class="text__price--night">/Night</span></p>
                </div>
            </div>

            <div class="room-detail__img">
                <img class="room-detail__img--img" src="./img/Home/luxury-room-home.jpg" alt="">
            </div>
        </div>

        <div class="room-detail__availability">
            <h5 class="room-detail__form-title text__form text--lightblack">
                Check Availability
            </h5>
            <form class="room-detail__form">
                <div class="room-detail__input-container">
                    <label for="" class="room-detail__input-label text__form text__form--label text--lightblack">Check In</label>
                    <input type="date" name="" id="" class="room-detail__input text__paragraph text--gray" />
                </div>
                <div class="room-detail__input-container">
                    <label for="" class="room-detail__input-label text__form text__form--label text--lightblack">Check Out</label>
                    <input type="date" name="" id="" class="room-detail__input text__paragraph text--gray" />
                </div>
                <button class="button button--golden button--form-availability">
                    CHECK AVAILABILITY
                </button>
            </form>
        </div>
    </div>
</section>
<!--Características room-->
<section class="room-features">
    <div class="room-features__container">
        <div class="room-features__paragraph text__card-paragraph text--gray">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
            </p>
        </div>
        <div class="room-features__amenities">
            <h4 class="room-features__amenities-title text__subtitle text--lightblack">Amenities</h4>
            <div class="room-features__line"></div>
            <div class="offers__amenities-container">
                <ul class="offers__amenities text__amenities text--gray">
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/conditioner.svg" alt="air">
                        <p>Air conditioner</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/breakfast.svg" alt="breakfast">
                        <p>Breakfast</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/security.svg" alt="cleaning">
                        <p>Cleaning</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/grocery.svg" alt="grocery">
                        <p>Grocery</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/shop.svg" alt="shop">
                        <p>Shop Near</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/support.svg" alt="support">
                        <p>24/7 Online Support</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/security.svg" alt="security">
                        <p>Smart Security</p>
                    </li>
                </ul>
                <ul class="offers__amenities text__amenities text--gray">
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/wifi.svg" alt="wifi">
                        <p>High speed WiFi</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/kitchen.svg" alt="kitchen">
                        <p>Kitchen</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/shower.svg" alt="shower">
                        <p>Shower</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/singlebed.svg" alt="bed">
                        <p>Single bed</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/towel.svg" alt="towel">
                        <p>Towels</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/key.svg" alt="locker">
                        <p>Strong Locker</p>
                    </li>
                    <li class="offers__feature">
                        <img class="offers__feature-img" src="./img/RoomDetails/team.svg" alt="team">
                        <p>Expert Team</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="room-features__review">
            <div class="room-features__review-img">
                <img src="./img/RoomDetails/review-user.jpg" class="room-features__review-img room-features__review-img--img" />
                <img src="./img/RoomDetails/check.svg" alt="check-icon" class="room-features__review-icon" />
            </div>
            <h4 class="room-features__review-title text__subtitle text--lightblack">
                Rosalina D. William
            </h4>
            <h6 class="room-features__review-subtitle text__pretitle text--gold">
                FOUNDER, QOX CO.
            </h6>
            <p class="text__footer-paragraph text--gray text--center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
            </p>
        </div>
        <div class="room-features__cancelation">
            <h4 class="room-features__amenities-title text__subtitle text--lightblack">Cancelation</h4>
            <div class="room-features__line"></div>
            <p class="text__card-paragraph text--gray">
                Phasellus volutpat neque a tellus venenatis, a euismod augue
                facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
                Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
                get a full refund.
            </p>
        </div>

        <div class="room-features__related">
            <h4 class="room-features__amenities-title text__subtitle text--lightblack">Related Rooms</h4>

            <div class="room-features__line"></div>

            <div class="swiper room-features__swiper">
                <div class="swiper-wrapper room-features__swiper-wrapper">

                    <div class="swiper-slide rooms__slide">
                        <div class="room-card room-card--rooms">
                            <div class="room-card__img">
                                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                                <div class="room-card__features-bar room-card__features-bar--rooms">
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
                                    <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide rooms__slide">
                        <div class="room-card room-card--rooms">
                            <div class="room-card__img">
                                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                                <div class="room-card__features-bar room-card__features-bar--rooms">
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
                                    <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide rooms__slide">
                        <div class="room-card room-card--rooms">
                            <div class="room-card__img">
                                <img class="room-card__img--img" src="./img/Home/room1.jpg" alt="room photo">
                                <div class="room-card__features-bar room-card__features-bar--rooms">
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
                                    <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="room-card__buttons room-card__button--home">
                    <button class="room-card__button button button--room-card related-rooms__button-prev"><img src="./img/Home/Vector.svg" alt="arrow-icon" /></button>
                    <button class="room-card__button button button--room-card button--golden related-rooms__button-next"><img src="./img/Home/arrow-right.svg" alt="arrow-icon" /></button>
                </div>
            </div>
        </div>

</secction>
@endsection