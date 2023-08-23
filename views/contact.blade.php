@extends('layout')

@section('content')

<!--Seccion contact home-->
<section class="page-title">
    <div class="page-title__contenedor">
      <h5 class="text__pretitle text--light page-title__pretitle">
      THE ULTIMATE LUXURY
      </h5>
      <h1 class="text__title text--light page-title__title">
      New Details
      </h1>
      <div class="page-title__index-contenedor">
        <div class="page-title__index">
          <p class="text__page-card text--lightblack text__page-card--home">Home</p>
          <p class="text__page-card text--lightblack">|</p>
          <p class="text__page-card text--gold ">Blog</p>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Cards-->
  <section class="contact-cards">
    <div class="contact-cards__container">
    <div class="contact-cards__item">
      <img src="./img/Contact/contact01.svg" alt="01" class="contact-cards__bg">
        <img src="./img/Footer/address.svg" alt="">
        <div class="footer__contact-text">
          <h6 class="text__subtitle--super-small text--lightblack contact-cards__title">Hotel Address</h6>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">19/A, Cirikon City hall Tower New York, NYC</p>
        </div>          
    </div>

    <div class="contact-cards__item">
      <img src="./img/Contact/contact02.svg" alt="02" class="contact-cards__bg">
      <img src="./img/Footer/telf.svg" alt="">
      <div class="footer__contact-text">
        <h6 class="text__subtitle--super-small text--lightblack contact-cards__title">Phone Number</h6>
        <p class="text__footer-paragraph text__footer-paragraph--small text--gray">+ 97656 8675 7864 7</p>
        <p class="text__footer-paragraph text__footer-paragraph--small text--gray">+ 876 766 8675 765 6</p>
      </div>
    </div>
    <div class="contact-cards__item">
      <img src="./img/Contact/contact03.svg" alt="03" class="contact-cards__bg">
        <img src="./img/Footer/mail.svg" alt="mail-icon">
        <div class="footer__contact-text">
          <h6 class="text__subtitle--super-small text--lightblack contact-cards__title">Email</h6>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">info@webmail.com</p>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">jobs.webmail@mail.com</p>
        </div> 
    </div>
  </div>
  </section>

  <!--FORM-->
  <section class="contact-form">
    <div class="contact-form__img" id="map" style="width: 500px; height: 400px;"></div>
    <form action="" class="contact-form__form">
      <div class="contact-form__inputs">
        <div class="contact-form__input-container">
          <img src="./img/Contact/name.svg" alt="name-icon" class="contact-form__input-icon">
          <input type="text" class="contact-form__input" placeholder="Your full name">
        </div>
        <div class="contact-form__input-container">
          <img src="./img/Contact/phone.svg" alt="phone-icon" class="contact-form__input-icon">
          <input type="text" class="contact-form__input" placeholder="Add phone number">
        </div>
        <div class="contact-form__input-container">
          <img src="./img/Contact/email.svg" alt="mail-icon" class="contact-form__input-icon">
          <input type="text" class="contact-form__input" placeholder="Enter email address">
        </div>
        <div class="contact-form__input-container">
          <img src="./img/Contact/subject.svg" alt="subject-icon" class="contact-form__input-icon" >
          <input type="text" class="contact-form__input" placeholder="Enter subject">
        </div>
      </div>
      <div class="contact-form__message">
        <img src="./img/Contact/message.svg" alt="msg-icon" class="contact-form__input-icon">
        <input type="text" class="contact-form__input contact-form__input--msg" placeholder="Enter message">
      </div>
      <span class="msg-error error"></span>
      <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

      <button class="button button--golden button--send boton-formulario">SEND</button>
      
    </form>
  </section>
  @endsection