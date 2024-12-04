<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/colors/color-1.css" />

    <title>Bowlier</title>
  </head>
  <body>
    <!-- Header Guys -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="{{ route('index')}}" class="nav__logo">
          <i class="bx bxs-shopping-bags nav__logo-icon"></i> Bowlier
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="{{route('index')}}" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="{{ route('products.index')}}" class="nav__link">Shop</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Cart</a>
            </li>
            <li class="nav__item">
              <a href="blog.html" class="nav__link">Blog</a>
            </li>
            <li class="nav__item">
              <a href="faq.html" class="nav__link">FAQ</a>
            </li>
            <li class="nav__item">
              <a href="contact.html" class="nav__link">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Cart nya -->
    <div class="cart" id="cart">
      <i class="bx bx-x cart__close" id="cart-close"></i>

      <h2 class="cart__title-center">My Cart</h2>

      <div class="cart__container">
        <article class="cart__card">
          <div class="cart__box">
            <img src="assets/img/Korean_Fried_Chicken_Recipe-removebg-preview.png" alt="" class="cart__img" />
          </div>

          <div class="cart__details">
            <h3 class="cart__title">Rice bowl with chicken and sasame seeds</h3>
            <span class="cart__price">$0.85</span>

            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>

                <span class="cart__amount-number">1</span>

                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>

              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>

        <article class="cart__card">
          <div class="cart__box">
            <img src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png" alt="" class="cart__img" />
          </div>

          <div class="cart__details">
            <h3 class="cart__title">Rice bowl with chicken and broccoli</h3>
            <span class="cart__price">$0.85</span>

            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>

                <span class="cart__amount-number">1</span>

                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>

              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="cart__prices">
        <span class="cart__prices-item">2 Items</span>
        <span class="cart__prices-total">$1.70</span>
      </div>
    </div>

    <!-- Login nya -->
    <div class="login" id="login">
      <i class="bx bx-x login__close" id="login-close"></i>

      <h2 class="login__title-center">Login</h2>

      <form action="" class="login__form grid">
        <div class="login__content">
          <label for="" class="login__label">Email</label>
          <input type="email" class="login__input" />
        </div>

        <div class="login__content">
          <label for="" class="login__label">Password</label>
          <input type="password" class="login__input" />
        </div>

        <div>
          <a href="#" class="button">Sign In</a>
        </div>

        <div>
          <p class="signup">
            Not a member <a href="registration.html">Sign up now</a>
          </p>
        </div>
      </form>
    </div>

    <main class="main">
      <section class="home container">
        <div class="swiper home-swiper">
          <div class="swiper-wrapper">
            <!-- Home Swiper 1 -->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>

                  <div class="home__details-img">
                    <h4 class="home__details-title">Rice bowl</h4>
                    <span class="home__details-subtitle">with chicken and broccoli</span>
                  </div>
                </div>

                <div class="home__data">
                  <h3 class="home__subtitle">#1 FOOD</h3>
                  <h1 class="home__title">
                    TASTE <br />
                    IS NEVER <br />
                    CHANGE
                  </h1>
                  <p class="home__description">
                    A unique food is created for you who wants a fast and tasty
                    food
                  </p>

                  <div class="home__button">
                    <a href="details.html" class="button">Buy Now</a>
                    <a href="details.html" class="button--link button--flex"
                      >View Details
                      <i class="bx bx-right-arrow-alt button__icon"></i
                    ></a>
                  </div>
                </div>
              </div>
            </section>

            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="assets/img/Korean_Fried_Chicken_Recipe-removebg-preview.png"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>

                  <div class="home__details-img">
                    <h4 class="home__details-title">Rice Bowl</h4>
                    <span class="home__details-subtitle">with chicken and sasame seeds</span>
                  </div>
                </div>

                <div class="home__data">
                  <h3 class="home__subtitle">#2 FOOD</h3>
                  <h1 class="home__title">
                    TASTE <br />
                    IS NEVER <br />
                    CHANGE
                  </h1>
                  <p class="home__description">
                    A unique food is made by using chicken karage
                  </p>

                  <div class="home__button">
                    <a href="details.html" class="button">Buy Now</a>
                    <a href="details.html" class="button--link button--flex"
                      >View Details
                      <i class="bx bx-right-arrow-alt button__icon"></i
                    ></a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="discount section">
        <div class="discount__container container grid">
          <img
            src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png"
            alt=""
            class="discount__img"
          />

          <div class="discount__data">
            <h2 class="discount__title">
              50% Discount <br />
              On Popular Products
            </h2>
            <a href="#" class="button">Go to new</a>
          </div>
        </div>
      </section>

      <section class="new section">
        <h2 class="section__title">New Arrivals</h2>

        <div class="new__container container">
          <div class="swiper new-swiper">
            <div class="swiper-wrapper">
              <!-- New Content 1 -->
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and broccoli</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
              <!-- New Content 2 -->
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Korean_Fried_Chicken_Recipe-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and sasame seeds</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and broccoli</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Korean_Fried_Chicken_Recipe-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and sasame seeds</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Quick_Teriyaki_Chicken_Bowls-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and broccoli</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img
                  src="assets/img/Korean_Fried_Chicken_Recipe-removebg-preview.png"
                  alt=""
                  class="new__img"
                />
                <h3 class="new__title">Rice bowl with chicken and sasame seeds</h3>
                <span class="new__subtitle">Rice Bowl</span>

                <div class="new__prices">
                  <span class="new__price">$0.85</span>
                  <span class="new__discount">$1.00</span>
                </div>

                <a href="details.html" class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="steps section container">
        <div class="steps__bg">
          <h2 class="section__title">
            How to order foods <br />
            from <strong>bowlier</strong>
          </h2>

          <div class="steps__container grid">
            <!-- Step Card 1 -->
            <div class="steps__card">
              <div class="steps__card-number">01</div>
              <h3 class="steps__card-title">Choose Foods</h3>
              <p class="steps__card-description">
                We have several menu you can choose from.
              </p>
            </div>
            <!-- Step Card 2 -->
            <div class="steps__card">
              <div class="steps__card-number">02</div>
              <h3 class="steps__card-title">Contact Us</h3>
              <p class="steps__card-description">WA: +62 813-2525-7711</p>
            </div>
            <!-- Step Card 3 -->
            <div class="steps__card">
              <div class="steps__card-number">03</div>
              <h3 class="steps__card-title">Get Your Foods Delivered</h3>
              <p class="steps__card-description">
                Habli will go to your home to deliver your orders
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="newsletter section">
        <div class="newsletter__container container">
          <h2 class="section__title">Our Newsletter</h2>
          <p class="newsletter__description">
            Promotion new menus. Directly to your inbox
          </p>

          <form action="" class="newsletter__form">
            <input
              type="email"
              placeholder="Enter your email"
              class="newsletter__input"
            />
            <button class="button">Subscribe</button>
          </form>
        </div>
      </section>
    </main>

    <footer class="footer section">
      <div class="footer__container container grid">
        <!-- Footer Content 1 -->
        <div class="footer__content">
          <a href="#" class="footer__logo">
            <i class="bx bxs-shopping-bags footer__logo-icon"></i> bowlier
          </a>

          <p class="footer__description">
            Enjoy the biggest sale <br />
            of your life.
          </p>

          <ul class="footer__social">
            <a href="#" class="footer__social-link"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="#" class="footer__social-link"
              ><i class="bx bxl-instagram-alt"></i
            ></a>
            <a href="#" class="footer__social-link"
              ><i class="bx bxl-whatsapp"></i
            ></a>
          </ul>
        </div>
        <!-- Footer Content 2 -->
        <div class="footer__content">
          <h3 class="footer__title">About</h3>

          <ul class="footer__links">
            <li><a href="#" class="footer__link">About Us</a></li>
            <li><a href="#" class="footer__link">Customer Support</a></li>
            <li><a href="#" class="footer__link">Support Center</a></li>
          </ul>
        </div>
        <!-- Footer Content 3 -->
        <div class="footer__content">
          <h3 class="footer__title">Our Services</h3>

          <ul class="footer__links">
            <li><a href="#" class="footer__link">Shop</a></li>
            <li><a href="#" class="footer__link">Discounts</a></li>
            <li><a href="#" class="footer__link">Shipping mode</a></li>
          </ul>
        </div>
        <!-- Footer Content 4 -->
        <div class="footer__content">
          <h3 class="footer__title">Our Company</h3>

          <ul class="footer__links">
            <li><a href="#" class="footer__link">Register</a></li>
            <li><a href="#" class="footer__link">Contact Us</a></li>
            <li><a href="#" class="footer__link">About Us</a></li>
          </ul>
        </div>
      </div>
      <span class="footer__copy">&#169; Bowlier. All rights reserved</span>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
