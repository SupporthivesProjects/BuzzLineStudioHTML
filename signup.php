<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuzzLineStudio</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="css/mainBase.css">
    <link rel="stylesheet" href="css/diksha.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container p-mo p-0">
         <div class="logo-mo-div">
            <a class="navbar-brand" href="#">
              <img src="./img/m-logo.svg" alt="" class="img-fluid d-lg-none d-md-blocks d-block  brand-logo-mo" id="logo">
              <img src="./img/brand-b.svg" alt="" class="img-fluid d-lg-block d-md-none d-none  brand-logo">
            </a>
            <div class="cart-mo-top-btn">
              <div class="user-price">
                <img src="./img/cart-outline.svg" alt="" srcset="./img/cart-outline.svg">
                <div class="counter-mo">
                  o
                </div>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <!-- <div class="hamburger hamburger--3dy">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div> -->
                  <span class="navbar-toggler-icon" id="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-one m-auto">
              <li class="nav-item">
                <div class="dropdown nav-link">
                  <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Goals
                  </button>
                  <div class="dropdown-menu dropdown-menu-ser">
                    <h6>Packaged services, built around one outcome.</h6>
                    <ul>
                      <li class="active"><a class="dropdown-item" href="#">Be Found</a></li>
                      <li><a class="dropdown-item" href="#">Be Chosen</a></li>
                      <li><a class="dropdown-item" href="#">Be Remembered</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown nav-link">
                  <button class="btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </button>
                  <div class="dropdown-menu  dropdown-menu-ser">
                    <h6>Buy any service on its own.</h6>
                    <ul>
                      <li class="active"><a class="dropdown-item" href="#">SEO</a></li>
                      <li><a class="dropdown-item" href="#">Paid Search</a></li>
                      <li><a class="dropdown-item" href="#">Social Media</a></li>
                      <li><a class="dropdown-item" href="#">Email Marketing</a></li>
                      <li><a class="dropdown-item" href="#">Website Design and Dev</a></li>
                      <li><a class="dropdown-item" href="#">Bespoke Services</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">Contact</a>
              </li>
            </ul>
            <div class="d-flex d-right-mo" role="search">
              <div class="ifuserlloginDetails">
              </div>
              <div class="nav-item dropdown d-currency-mo dropdown-toggle-cur">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 USD
                </a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="dropdown-item active" href="#">
                        <span>USD</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                        <span>EUR</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">
                      <span>GBP</span>
                    </a>
                  </li>
                </ul>
              </div>
              <a class="nav-link card-count d-none d-lg-block d-md-none" href="ourstory.php">
                <img src="./img/cart-outline.svg" alt="" srcset="./img/cart-outline.svg">
                <div class="crt--counte">
                  0
                </div>
              </a>
              <a class="btn btn-start" href="signup.php">
                <span class="btn-border-dots">Log In</span>
              </a>
              <a class="btn btn-login" href="signup.php">
                <span class="btn-border-dots">Build your order</span>
              </a>
            </div>
          </div>
        </div>
      </nav>
   </header>
  

   <section class="login-page">
    <video class="login-page__video" autoplay muted loop playsinline aria-hidden="true">
      <source src="./img/login.mp4.mp4" type="video/mp4">
    </video>
    <div class="login-page__overlay" aria-hidden="true"></div>

    <div class="login-card" aria-labelledby="login-title">
      <div class="login-c">
        <h1 class="login-card-title" id="login-title">Create your account.</h1>
        <p class="login-card-intro">Track your services, change a term and manage invoices.</p>
      </div>

      <form class="login-f" action="#" method="post">
        <div class="login-card__field">
          <label for="signup-name">Full name</label>
          <input id="signup-name" name="name" type="text" placeholder="John Smith" autocomplete="name" required>
        </div>


        <div class="login-card__field">
          <label for="login-email">Email</label>
          <input id="login-email" name="email" type="email" placeholder="john@example.com" autocomplete="email" required>
        </div>

        <div class="login-card__field">
          <label for="login-password">Password</label>
          <input id="login-password" name="password" type="password" placeholder="••••••••••" autocomplete="current-password" required>
        </div>

        <div class="login-card__field">
          <label for="login-password">Confirm Password</label>
          <input id="login-password" name="password" type="password" placeholder="••••••••••" autocomplete="current-password" required>
        </div>

        <div class="signup-card__terms">
          <input id="signup-terms" type="checkbox" name="terms" required>
          <span>
            <label for="signup-terms">By ticking this box, you agree to the</label> 
            <a href="tc.php">Terms &amp; Conditions</a> and <a href="pp.php">Privacy Policy</a>.</span>
        </div>

        <img class="signup-card__recaptcha" src="./img/recaptcha.png" alt="reCAPTCHA verification">

      </form>
      <button class="login-card__submit" type="submit">Create account</button>

      <p class="login-c-f">Already have an account? <a href="login.php">Sign in.</a></p>
    </div>
   </section>


   <section class="forgot-password-modal-section" aria-label="Password reset confirmation">
    <div class="modal fade forgot-password-modal" id="resetConfirmationModal" tabindex="-1" aria-labelledby="resetConfirmationTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="forgot-password-modal__icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M2 7L2.02762 7.01934M2.02762 7.01934L10.1649 12.7154C10.8261 13.1783 11.1567 13.4097 11.5163 13.4993C11.8339 13.5785 12.1661 13.5785 12.4837 13.4993C12.8433 13.4097 13.1739 13.1783 13.8351 12.7154L21.9724 7.01934M2.02762 7.01934C2.06295 6.4208 2.14347 5.99818 2.32698 5.63803C2.6146 5.07354 3.07354 4.6146 3.63803 4.32698C4.27976 4 5.11984 4 6.8 4H17.2C18.8802 4 19.7202 4 20.362 4.32698C20.9265 4.6146 21.3854 5.07354 21.673 5.63803C21.8565 5.99818 21.937 6.4208 21.9724 7.01934M2.02762 7.01934C2 7.48729 2 8.06278 2 8.8V15.2C2 16.8802 2 17.7202 2.32698 18.362C2.6146 18.9265 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9265 21.673 18.362C22 17.7202 22 16.8802 22 15.2V8.8C22 8.06278 22 7.48729 21.9724 7.01934M21.9724 7.01934L22 7" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" stroke="#6A2BF0"/>
              </svg>
            </div>
            <h2 id="resetConfirmationTitle">Almost there.</h2>
            <p>Check your inbox, or your junk folder, to verify your account. The link works for the next hour.</p>
            <a class="forgot-password-modal__button" href="login.php">Back to sign in</a>
          </div>
        </div>
      </div>
    </div>
   </section>

   
<footer class="footer">
    <div class="container p-0">
        <div class="col">
            <div class="row footer-row-one">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer-logo">
                        <img src="./img/f-logo.svg" alt="" class="img-fluid" srcset="./img/f-logo.svg">
                        <div class="footer-p">
                            <p>Fixed-term marketing services<br> you buy online.</p>
                            <div class="footer--p-p">
                                <img src="./img/visa-mark.svg" alt="" srcset="./img/visa-mark.svg">
                                <img src="./img/mastercard.svg" alt="" srcset="./img/mastercard.svg">
                            </div>
                            <div class="social-media">
                                <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M11.875 0.875H8.875C7.54892 0.875 6.27715 1.40178 5.33947 2.33947C4.40178 3.27715 3.875 4.54892 3.875 5.875V8.875H0.875V12.875H3.875V20.875H7.875V12.875H10.875L11.875 8.875H7.875V5.875C7.875 5.60978 7.98036 5.35543 8.16789 5.16789C8.35543 4.98036 8.60978 4.875 8.875 4.875H11.875V0.875Z" stroke="#F5EEFF" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="#F5EEFF" stroke-width="1.75"/>
                                    <path d="M15.9997 11.3701C16.1231 12.2023 15.981 13.0523 15.5935 13.7991C15.206 14.5459 14.5929 15.1515 13.8413 15.5297C13.0898 15.908 12.2382 16.0397 11.4075 15.906C10.5768 15.7723 9.80947 15.3801 9.21455 14.7852C8.61962 14.1903 8.22744 13.4229 8.09377 12.5923C7.96011 11.7616 8.09177 10.91 8.47003 10.1584C8.84829 9.40691 9.45389 8.7938 10.2007 8.4063C10.9475 8.0188 11.7975 7.87665 12.6297 8.00006C13.4786 8.12594 14.2646 8.52152 14.8714 9.12836C15.4782 9.73521 15.8738 10.5211 15.9997 11.3701Z" stroke="#F5EEFF" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 6.5H17.51" stroke="#F5EEFF" stroke-width="1.75" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="footer-link-menu">
                        <div class="footer-link footer-link-one">
                            <h6>Goals</h6>
                            <ul>
                                <li>
                                    <a href="#">Be Found</a>
                                </li>
                                <li>
                                    <a href="#">Be Chosen</a>
                                </li>
                                <li>
                                    <a href="#">Be Remembered</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link footer-link-two">
                            <h6>Services</h6>
                            <ul>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                                <li>
                                    <a href="#">Paid Search</a>
                                </li>
                                <li>
                                    <a href="#">Social Media</a>
                                </li>
                                <li>
                                    <a href="#">Email Marketing</a>
                                </li>
                                 <li>
                                    <a href="#">Website Design and Dev</a>
                                </li>
                                <li>
                                    <a href="#">Bespoke Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link footer-link-three">
                            <h6>Company</h6>
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Sign in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-row-two">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-lg-0 order-1">
                    <p>© 2026 BuzzLineStudio.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="master-card-terms">
                        <a href="#">Terms & conditions</a>
                        <a href="#">Privacy policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>


    <!-- Motion -->
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/m-logo.svg") {
                  logo.attr("src", "./img/c-logo.svg");
              } else {
                  logo.attr("src", "./img/m-logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
     <script>
        const dropdownBtns = document.querySelectorAll(
            '.dropdown-toggle-cur, .dropdown-toggle-cart'
        );

        function updateOverlay() {
            const anyOpen =
                document.querySelector('.dropdown-menu.show') !== null;

            document.body.classList.toggle('dropdown-open', anyOpen);
        }

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(updateOverlay, 50);
            });
        });

        document.addEventListener('click', () => {
            setTimeout(updateOverlay, 50);
        });
    </script>

    <script>
      AOS.init();
    </script>
</body>
</html>
  
  