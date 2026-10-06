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
  
  