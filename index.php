<?php
$mode = (isset($_COOKIE['mode']) && $_COOKIE['mode'] === 'bright')? "bright" : "dark";
?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index, follow">

  <meta name="description" content="Paprika Digital specializes in high-quality digital solutions, including websites, mobile applications, and desktop applications for businesses of all sizes. Get your custom website today!" />
  <meta name="keywords" content="digital solutions, custom websites, mobile apps, desktop apps, responsive websites, app development, web design, digital marketing, affordable digital solutions" />
  <meta name="author" content="Yassine Jalti">

  <meta name="geo.placename" content="Zurich">
  <meta name="geo.placename" content="Berlin">
  <meta name="geo.placename" content="London">
  <meta name="geo.placename" content="New York">
  <meta name="geo.placename" content="Tokyo">
  
  <meta property="og:title" content="Paprika | High-Quality Digital Solutions" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://paprikadigital.net/">
  <meta property="og:image" content="https://paprikadigital.net/img/logo.svg">
  <meta property="og:description" content="Paprika Digital offers comprehensive digital solutions including custom websites, mobile apps, and desktop applications. Get started today!" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:creator" content="@paprika_digital">
  <meta name="twitter:title" content="Paprika | High-Quality Digital Solutions">
  <meta name="twitter:description" content="Get your custom website or app today with Paprika Digital. Offering affordable, innovative, and professional solutions for businesses.">
  <meta name="twitter:image" content="https://paprikadigital.net/img/logo.svg">

  <title>Paprika | High-Quality Digital Solutions</title>
  <link rel="icon" href="img/logo.ico" />
  <link rel="stylesheet" href="<?= ($mode === "bright") ? './css/main_bright.css?v=4.0' : './css/main_dark.css?v=4.0' ?>">
  <link rel="stylesheet" href="css/switch.css?v=4.0">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-wrapper__left-side">
          <div class="left-side-bg">
            <div class="left-side-bg__holder">
            </div>
          </div>
          <a class="header-logo logo" href="/">
            <picture>
              <source srcset="./img/logo.svg" type="image/svg+xml">
              <img alt="logo" src="./img/logo.svg">
            </picture>
          </a>          
        </div>
        <div class="header-wrapper__right-side">
          <div class="right-side-bg">
            <div class="right-side-bg__holder">
            </div>
          </div>
          <div class="header-wrapper__menu-holder">
            <ul class="header-menu">
              <li class="dropdown-menu solutions-dropdown">
                <a class="header-link active" href="javascript:void(0);">
                  <span class="header-link__text" style="white-space: nowrap;">Pricing</span>
                  <span class="header-link__bottom">
                  </span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="#website">
                      <div class="image">
                        <img alt="Icon" src="./img/website.webp" />
                      </div>
                      <span>Websites</span>
                    </a>
                  </li>
                  <li>
                    <a href="#mobile">
                      <div class="image">
                        <img alt="Icon" src="./img/mobile.webp" />
                      </div>
                      <span>Mobile</span>
                    </a>
                  </li>
                  <li>
                    <a href="#desktop">
                      <div class="image">
                        <img alt="Icon" src="./img/desktop.webp" />
                      </div>
                      <span>Desktop</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="header-link" href="#section-features">
                  <span class="header-link__text">
                    Features
                  </span>
                  <span class="header-link__bottom">
                  </span>
                </a>
              </li>
              <li class="dropdown-menu">
                <a class="header-link" href="javascript:void(0)">
                  <span class="header-link__text" style="white-space: nowrap;">
                    Community
                  </span>
                  <span class="header-link__bottom">
                  </span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="https://www.linkedin.com/in/yassine-jalti" target="_blank">
                      <svg fill="none" height="20" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M22.227 0H1.773C.792 0 0 .774 0 1.726v20.548C0 23.225.792 24 1.773 24h20.454C23.208 24 24 23.225 24 22.274V1.726C24 .774 23.208 0 22.227 0ZM7.12 20.453H3.554V9.091H7.12v11.362ZM5.337 7.727c-1.141 0-2.067-.926-2.067-2.067 0-1.141.926-2.067 2.067-2.067 1.14 0 2.067.926 2.067 2.067 0 1.141-.927 2.067-2.067 2.067ZM20.445 20.453h-3.566v-5.478c0-1.307-.028-2.985-1.818-2.985-1.821 0-2.1 1.423-2.1 2.892v5.571h-3.565V9.091h3.423v1.547h.048c.478-.903 1.645-1.853 3.39-1.853 3.623 0 4.294 2.385 4.294 5.486v6.183Z"
                          fill="white" fill-opacity="0.8">
                        </path>
                      </svg>
                      LinkedIn
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com/paprika_digital" target="_blank">
                      <svg fill="none" height="16" viewbox="0 0 18 16" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M0.0416787 0L6.64177 8.82495L0 16H1.4948L7.30965 9.71813L12.0079 16H17.0947L10.1233 6.67867L16.3054 0H14.8106L9.45542 5.78548L5.12853 0H0.0416787ZM2.23989 1.10107H4.5768L14.8962 14.8988H12.5593L2.23989 1.10107Z"
                          fill="white" fill-opacity="0.8">
                        </path>
                      </svg>
                      Twitter
                    </a>
                  </li>
                  <li>
                    <a href="https://t.me/paprikadigital" target="_blank">
                      <svg fill="none" height="16" viewbox="0 0 20 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17.8429 0.0653823L0.498666 6.77709C0.488347 6.78107 0.478343 6.78582 0.468741 6.7913C0.328096 6.87098 -0.65343 7.47134 0.730581 8.00961L0.744795 8.01484L4.87476 9.34911C4.90627 9.35934 4.93964 9.36257 4.97252 9.35856C5.00541 9.35456 5.03702 9.34342 5.06516 9.32591L15.3087 2.93477C15.3338 2.9191 15.3618 2.90855 15.391 2.90373C15.5335 2.88016 15.9439 2.83602 15.6843 3.16557C15.3906 3.53962 8.39389 9.80957 7.61735 10.5049C7.57257 10.5451 7.54487 10.601 7.53992 10.6609L7.20102 14.7007C7.20098 14.7419 7.21052 14.7825 7.2289 14.8193C7.24727 14.8561 7.27397 14.8881 7.30688 14.9128C7.35357 14.9422 7.40849 14.9559 7.46351 14.9517C7.51854 14.9475 7.57076 14.9258 7.61248 14.8896L10.0663 12.6965C10.1051 12.6619 10.1545 12.6416 10.2064 12.6389C10.2583 12.6363 10.3096 12.6515 10.3517 12.682L14.6328 15.7904L14.6466 15.7997C14.7502 15.8637 15.8694 16.5149 16.1926 15.0606L19.1477 1.00913C19.1518 0.964616 19.1918 0.475349 18.8421 0.186203C18.4747 -0.116035 17.9548 0.0365798 17.8766 0.0530383C17.8651 0.0562485 17.8538 0.0603764 17.8429 0.0653823Z"
                          fill="white" fill-opacity="0.8">
                        </path>
                      </svg>
                      Telegram
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <label class="switch">
              <span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="#ffd43b"><circle r="5" cy="12" cx="12"></circle><path d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z"></path></g></svg></span>
              <span class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"></path></svg></span>   
              <input type="checkbox" class="input" id="checkmode" <?= ($mode == "dark") ? 'checked' : '' ?>>
              <span class="slider"></span>
            </label>
            <a class="header-button" href="#section-form" id="get-custom-website">Get&nbsp;your&nbsp;custom&nbsp;website&nbsp;now!</a>
            <button class="header-burger">
              <svg fill="none" height="49" viewbox="0 0 48 49" width="48" xmlns="http://www.w3.org/2000/svg">
                <path class="animated-line" d="M20 18.5H36" stroke="#667373" stroke-linecap="round" stroke-width="2">
                </path>
                <path d="M12 24.5H36" stroke="#667373" stroke-linecap="round" stroke-width="2">
                </path>
                <path d="M12 30.5H36" stroke="#667373" stroke-linecap="round" stroke-width="2">
                </path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section menu mobile-menu container">
    <div class="menu-wrapper">
      <div class="menu-top">
        <button class="menu-close">
          <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L16.9999 17" stroke="#667373" stroke-linecap="round" stroke-width="2">
            </path>
            <path d="M17 1L1.00013 17" stroke="#667373" stroke-linecap="round" stroke-width="2">
            </path>
          </svg>
        </button>
      </div>
      <div class="menu-list">
        <div class="dropdown-menu">
          <a class="menu-item-children" href="javascript:void(0)">Pricing</a>
          <div class="submenu" style="height: 0px;">
            <ul>
              <li>
                <a href="#website" class="menu-item">
                  <div class="image">
                    <img alt="Icon" src="./img/website.webp" />
                  </div>
                  <span>Website</span>
                </a>
              </li>
              <li>
                <a href="#mobile" class="menu-item">
                  <div class="image">
                    <img alt="Icon" src="./img/mobile.webp" />
                  </div>
                  <span>Mobile</span>
                </a>
              </li>
              <li>
                <a href="#desktop" class="menu-item">
                  <div class="image">
                    <img alt="Icon" src="./img/desktop.webp" />
                  </div>
                  <span>Desktop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <a class="menu-item" href="#section-features">
            Features
          </a>
        </div>
      </div>
      <div class="menu-social">
        <li class="menu-social__link">
          <a href="https://x.com/paprika_digital" target="_blank">
            <svg fill="none" height="64" viewbox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.2422 20L29.1423 33.2374L19.1797 44H21.4219L30.1442 34.5772L37.1915 44H44.8218L34.3646 30.018L43.6378 20H41.3956L33.3628 28.6782L26.8725 20H19.2422ZM22.5395 21.6516H26.0449L41.524 42.3481H38.0186L22.5395 21.6516Z"
                fill="#667373">
              </path>
            </svg>
          </a>
        </li>
        <li class="menu-social__link">
          <a href="https://www.linkedin.com/in/yassine-jalti" target="_blank">
            <svg fill="none" height="30" viewBox="0 0 24 24" width="30"  xmlns="http://www.w3.org/2000/svg">
              <path
                d="M22.227 0H1.773C.792 0 0 .774 0 1.726v20.548C0 23.225.792 24 1.773 24h20.454C23.208 24 24 23.225 24 22.274V1.726C24 .774 23.208 0 22.227 0ZM7.12 20.453H3.554V9.091H7.12v11.362ZM5.337 7.727c-1.141 0-2.067-.926-2.067-2.067 0-1.141.926-2.067 2.067-2.067 1.14 0 2.067.926 2.067 2.067 0 1.141-.927 2.067-2.067 2.067ZM20.445 20.453h-3.566v-5.478c0-1.307-.028-2.985-1.818-2.985-1.821 0-2.1 1.423-2.1 2.892v5.571h-3.565V9.091h3.423v1.547h.048c.478-.903 1.645-1.853 3.39-1.853 3.623 0 4.294 2.385 4.294 5.486v6.183Z"
                fill="#667373">
              </path>
            </svg>
          </a>
        </li>
        <li class="menu-social__link">
          <a href="https://t.me/paprikadigital" target="_blank">
            <svg fill="none" height="64" viewbox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M44.4011 20.0981L18.3847 30.1656C18.3692 30.1716 18.3542 30.1787 18.3398 30.187C18.1289 30.3065 16.6566 31.207 18.7326 32.0144L18.7539 32.0223L24.9489 34.0237C24.9961 34.039 25.0462 34.0439 25.0955 34.0378C25.1448 34.0318 25.1923 34.0151 25.2345 33.9889L40.5998 24.4022C40.6375 24.3786 40.6794 24.3628 40.7232 24.3556C40.937 24.3202 41.5525 24.254 41.1631 24.7484C40.7227 25.3094 30.2276 34.7144 29.0627 35.7574C28.9956 35.8177 28.954 35.9014 28.9466 35.9914L28.4383 42.0511C28.4382 42.1128 28.4525 42.1737 28.4801 42.2289C28.5076 42.2842 28.5477 42.3322 28.597 42.3692C28.6671 42.4134 28.7494 42.4338 28.832 42.4275C28.9145 42.4213 28.9929 42.3886 29.0554 42.3345L32.7362 39.0448C32.7943 38.9929 32.8685 38.9624 32.9464 38.9584C34.0242 38.9544 33.1011 38.9772 33.1643 39.0229L39.5859 43.6856L39.6067 43.6996C39.7621 43.7955 41.4409 44.7724 41.9256 42.5909L46.3582 21.5137C46.3644 21.4469 46.4244 20.713 45.8998 20.2793C45.3488 19.8259 44.5689 20.0549 44.4516 20.0796C44.4343 20.0844 44.4175 20.0906 44.4011 20.0981Z"
                fill="#667373">
              </path>
            </svg>
          </a>
        </li>
      </div>
    </div>
  </section>
  <section class="hero section-progress section" id="section-home">
    <div class="hero__container">
      <div class="hero__content">
        <div class="hero__content-nav">
          <ul class="hero__content-nav-list">
            <li class="hero__content-nav-link">
              <a href="https://www.linkedin.com/in/yassine-jalti" target="_blank">
                <svg fill="none" height="20" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M22.227 0H1.773C.792 0 0 .774 0 1.726v20.548C0 23.225.792 24 1.773 24h20.454C23.208 24 24 23.225 24 22.274V1.726C24 .774 23.208 0 22.227 0ZM7.12 20.453H3.554V9.091H7.12v11.362ZM5.337 7.727c-1.141 0-2.067-.926-2.067-2.067 0-1.141.926-2.067 2.067-2.067 1.14 0 2.067.926 2.067 2.067 0 1.141-.927 2.067-2.067 2.067ZM20.445 20.453h-3.566v-5.478c0-1.307-.028-2.985-1.818-2.985-1.821 0-2.1 1.423-2.1 2.892v5.571h-3.565V9.091h3.423v1.547h.048c.478-.903 1.645-1.853 3.39-1.853 3.623 0 4.294 2.385 4.294 5.486v6.183Z"
                    fill="white" fill-opacity="0.8">
                  </path>
                </svg>
              </a>
            </li>
            <li class="hero__content-nav-link active">
              <a href="https://x.com/paprika_digital" target="_blank">
                <svg fill="none" height="17" viewbox="0 0 19 17" width="19" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0.994315 0.875L7.59441 9.69995L0.952637 16.875H2.44743L8.26229 10.5931L12.9605 16.875H18.0474L11.0759 7.55367L17.2581 0.875H15.7633L10.4081 6.66048L6.08116 0.875H0.994315ZM3.19252 1.97607H5.52943L15.8488 15.7738H13.5119L3.19252 1.97607Z"
                    fill="white">
                  </path>
                </svg>
              </a>
            </li>
            <li class="hero__content-nav-link">
              <a href="https://t.me/paprikadigital" target="_blank">
                <svg fill="none" height="17" viewbox="0 0 21 17" width="21" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.7675 0.940382L1.42323 7.65209C1.41291 7.65607 1.4029 7.66082 1.3933 7.6663C1.25266 7.74598 0.27113 8.34634 1.65514 8.88461L1.66936 8.88984L5.79932 10.2241C5.83083 10.2343 5.8642 10.2376 5.89708 10.2336C5.92997 10.2296 5.96158 10.2184 5.98972 10.2009L16.2333 3.80977C16.2584 3.7941 16.2864 3.78355 16.3156 3.77873C16.4581 3.75516 16.8684 3.71102 16.6088 4.04057C16.3152 4.41462 9.31845 10.6846 8.54191 11.3799C8.49713 11.4201 8.46943 11.476 8.46448 11.5359L8.12558 15.5757C8.12554 15.6169 8.13508 15.6575 8.15346 15.6943C8.17183 15.7311 8.19853 15.7631 8.23144 15.7878C8.27813 15.8172 8.33305 15.8309 8.38807 15.8267C8.4431 15.8225 8.49532 15.8008 8.53705 15.7646L10.9909 13.5715C11.0296 13.5369 11.0791 13.5166 11.131 13.5139C11.1829 13.5113 11.2342 13.5265 11.2763 13.557L15.5573 16.6654L15.5712 16.6747C15.6748 16.7387 16.794 17.3899 17.1172 15.9356L20.0722 1.88413C20.0763 1.83962 20.1164 1.35035 19.7666 1.0612C19.3993 0.758965 18.8794 0.91158 18.8012 0.928038C18.7896 0.931249 18.7784 0.935376 18.7675 0.940382Z"
                    fill="white">
                  </path>
                </svg>
              </a>
            </li>
            <li class="hero__content-nav-link" id="marker" style="top: 153px; width: 70px;">
            </li>
          </ul>
        </div>
        <?php if(isset($_GET["success"]) && !empty($_GET["success"]) && (integer)$_GET["success"] == 1): ?>
          <div class="alert-banner sucess-banner" role="alert" aria-live="assertive">
            <img class="alert-icon" src="img/success.webp" alt="Success Icon">
            <div class="alert-container">
              <span class="alert-text">Your request has been successfully sent!</span>
              <span>We will contact you via email within a maximum of 1 hour.</span>            
            </div>
            <button class="dismiss-btn dismiss-success-btn" id="dismiss">Dismiss</button>
          </div>
        <?php elseif(isset($_GET["success"]) && (integer)$_GET["success"] == 0): ?>
          <div class="alert-banner error-banner" role="alert" aria-live="assertive">
            <img class="alert-icon" src="img/error.webp" alt="Error Icon">
            <div class="alert-container">
              <span class="alert-text">Error!</span>
              <span>We couldn't process your request, please try again.</span>            
            </div>
            <button class="dismiss-btn dismiss-error-btn" id="dismiss">Dismiss</button>
          </div>
        <?php endif ?>
        <h1 class="hero__content-title">
          <span class="hero__content-title-row">
            Create
          </span>
          <span class="hero__content-title-row icon-row">
            Innovative
          </span>
          <span class="hero__content-title-row">
            Digital Products
          </span>
        </h1>
        <div class="hero__content-text">
          Transform Your Ideas into Impactful Digital Products with
          <span class="text-spring-green">
            Custom Solutions
          </span>
          Built for
          <span class="text-viridian-green">
            Your Business Growth
          </span>
        </div>
        <div class="hero__content-action">
          <a class="hero__content-action-button" href="#section-designs">
            Explore designs
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section-addition" id="section-features">
    <h2>Features</h2>
    <p>We can bring your ideas into existence, whether it is a website or mobile application or even desktop application
      we will create it for you!</p>
    <div class="features-highlights">
      <ul>
        <li>
          <strong>Custom-built Solutions</strong>
          <span class="badge badge-custom"><span>Tailored for You</span>&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0" />
              <path
                d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z" />
            </svg></span>
          <p>
            Have a vision? We'll turn it into reality! Whether it's a website, mobile application, or a desktop application, our team can bring any idea you have to life&nbsp;🌱
          </p>
        </li>
        <li>
          <strong>Affordable Pricing</strong>
          <span class="badge badge-innovation"><span>Good price</span>&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0" />
              <path
                d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z" />
            </svg></span>
            <p>
              Many companies charge up to $100,000 for a website. We offer high-quality solutions at affordable prices without compromising on quality&nbsp;⭐
            </p>
        </li>
        <li>
          <strong>Lifetime Support</strong>
          <span class="badge badge-support"><span>Always There</span>&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0" />
              <path
                d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z" />
            </svg></span>
          <p>
            Your success is our priority. That's why we provide lifetime support for your products, ensuring they stay up-to-date and fully functional for years to come&nbsp;🤝
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-addition" id="section-solutions">
    <h2>Pricing</h2>
    <div class="solutions-container">
      <article class="solution-item" id="website">
        <h3>🌐 Website</h3>
        <p id="website-humor-placeholder"></p>
        <div class="group-items">
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Basic Plan</div>
              <div>
                <h2>$500</h2>
              </div>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Fully Functional Website</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>3 responsive pages : Home, About, Contact</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Enhanced UI/UX</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Animated slider, header and footer</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Free hosting plan for 1 year</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><a href="#section-form"><span class="header-button website-button" id="website-basic">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Standard Plan</div>
              <div>
                <h2>$1,200</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Basic</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>4 more customizable pages</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>dynamic content with the latest trends</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>improve the visiblity on search engines</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Advanced UI/UX</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button website-button" id="website-standard">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Premium Plan</div>
              <div>
                <h2>$2,500</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Standard</span>
            </div>
            <div class="check-container ai-integration">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>AI integration</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>8 more customizable pages</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>E-Commerce Features</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>3 months of free maintenance</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button website-button" id="website-premium">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
        </div>
      </article>

      <article class="solution-item" id="mobile">
        <h3>📱 Mobile</h3>
        <p id="mobile-humor-placeholder"></p>
        <div class="group-items">
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Basic Plan</div>
              <div>
                <h2>$3,000</h2>
              </div>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Up to 5 Screens (Android or iOS)</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Simple Navigation System</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Database Integration (Register, Login)</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Enhanced UI/UX</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Integrated Social Media Sharing</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button mobile-button" id="mobile-basic">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Standard Plan</div>
              <div>
                <h2>$6,000</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Basic</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>5 more customizable Screens</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Android and iOS are both supported</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>In-App Messaging & Chat Integration</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>API Integrations (payment gateways)</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button mobile-button" id="mobile-standard">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Premium Plan</div>
              <div>
                <h2>$10,000</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Standard</span>
            </div>
            <div class="check-container ai-integration">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>AI integration</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Complex Features and Advanced UI/UX</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Monetization (ads integration)</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>3 months of free maintenance</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button mobile-button" id="mobile-premium">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
        </div>
      </article>
      
      <article class="solution-item" id="desktop">
        <h3>💻 Desktop</h3>
        <p id="desktop-humor-placeholder"></p>
        <div class="group-items">
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Basic Plan</div>
              <div>
                <h2>$2,000</h2>
              </div>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Up to 5 customizable Pages</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Single Platform (Windows or macOS)</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Enhanced UI/UX</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Advanced Security Features</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button desktop-button" id="desktop-basic">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Standard Plan</div>
              <div>
                <h2>$5,000</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Basic</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Cross-Platform (both Windows & macOS)</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>5 more customizable pages</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Advanced UI/UX</span>
            </div>
            <div class="check-container">&emsp;</div>
            <a href="#section-form"><span class="header-button desktop-button" id="desktop-standard">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
          <div class="item-wrapper">
            <div>
              <div class="plan-name">Premium Plan</div>
              <div>
                <h2>$8,000</h2>
              </div>
            </div>
            <div class="check-container all-color">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Everything in Standard</span>
            </div>
            <div class="check-container ai-integration">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>AI integration</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Real-Time Data Processing</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>Built-in Collaboration Tools</span>
            </div>
            <div class="check-container">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"></path>
              </svg><span>3 months of free maintenance</span>
            </div>
            <a href="#section-form"><span class="header-button desktop-button" id="desktop-premium">
              Get&nbsp;started&nbsp;<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19 12H4.75"></path>
              </svg>
            </span></a>
          </div>
        </div>
      </article>          
    </div>
  </section>

  <section class="section-addition" id="section-designs">
    <h2>Our Recent Designs</h2>
    <div class="design-gallery">
      <ul>
        <li>
          <img src="img/designs/d1.webp" alt="Website Design Example">
        </li>
        <li>
          <img src="img/designs/d2.webp" alt="Mobile App Design Example">
        </li>
        <li>
          <img src="img/designs/d3.webp" alt="Desktop App Design Example">
        </li>
      </ul>
    </div>
  </section>

  <section class="section-addition" id="section-form">
    <h2>Request Your Custom Solution</h2>
    <form id="request-form">
      <div class="form-group">
        <label for="company-name">Your Company Name</label>
        <input type="text" id="company-name" placeholder="Enter your company name">
        <span class="form-err">the company name is required</span>
      </div>

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" placeholder="Enter your full name">
        <span class="form-err">the full name is required</span>
      </div>
      
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" placeholder="Enter your email">
        <span class="form-err">the email is required</span>
        <span class="form-err">please enter a correct email</span>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone Number (Optional)</label>
        <input type="tel" id="phone" placeholder="Enter your phone number">
      </div>
  
      <div class="form-group">
        <label for="project-type">Type of Solution</label>
        <select id="project-type">
          <option value="website" selected>Website</option>
          <option value="mobile-app">Mobile App</option>
          <option value="desktop-app">Desktop App</option>
          <option value="other">Other</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="description">Brief Description</label>
        <textarea id="description" rows="6" placeholder="Describe your project"></textarea>
        <span class="form-err">the brif description is required</span>
      </div>
      
      <label for="description">Your Budget</label>
      <div class="form-group budget">
        <span class="currency">$</span><input 
          type="number" 
          id="budgetMin"  
          placeholder="5000"
          title="Enter a valid minimum budget (e.g., $5000)"
          >
        <span>-</span>
        <span class="currency">$</span><input 
          type="number" 
          id="budgetMax"
          placeholder="10000"
          title="Enter a valid maximum budget (e.g., $10,000)"
          >
      </div>
      <span class="form-err">the budget is required</span>
      <span class="form-err">the maximum budget must be greater than the minimum budget</span>

      <div class="form-group">
        <label for="timeline">Timeline</label>
        <input type="text" id="timeline" placeholder="When do you need the project completed?">
        <span class="form-err">the timeline is required</span>
      </div>
  
      <div class="form-group">
        <label for="preferred">Preferred Platform/Technology (Optional)</label>
        <input type="text" id="preferred" placeholder="e.g., React, iOS, Android">
      </div>
  
      <div class="form-group">
        <label for="file-upload">Attach Files (Optional)</label>
        <input type="file" id="file-upload" accept=".jpg, .jpeg, .webp, .gif, .pdf, .txt, .doc, .docx">        
        <span class="form-err">the maximum file size is 10 Mb</span>
        <span class="form-err">Invalid file type. Allowed types: jpg, jpeg, png, gif, pdf, txt, doc, docx</span>
      </div>
      
      <span id="submit" class="header-button">
        Send&nbsp;request&nbsp;&nbsp;<svg id="send-paper" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
        </svg>
      </span>
    </form>
  </section>

  <footer class="footer-dark">
    <div class="footer-container">
      <div class="footer-content">
        <p>&copy; 2024 <strong>PaprikaDigital</strong>. All rights reserved.</p>
        <em>Crafting digital excellence for a better tomorrow.</em>
      </div>
      <nav class="footer-nav">
        <ul>
          <li><a href="static/about_us.html" target="_blank">About Us</a></li>
          <li><a href="static/privacy_policy.html" target="_blank">Privacy Policy</a></li>
          <li><a href="mailto:contact@paprikadigital.net">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </footer>
  <script src="./js/validation.js?v=4.0"></script>
  <script src="./js/select.js?v=4.0"></script>
  <!-- <script src="./js/currency.js?v=4.0"></script> -->
  <script>
    document.querySelector(".hero__content-nav-list").addEventListener("mouseleave", function() {
        let marker = document.querySelector(".hero__content-nav-link#marker");
        marker.classList.remove("marker-link");
    });

    document.querySelectorAll(".hero__content-nav-list li").forEach(function(item) {
        item.addEventListener("mouseenter", function(event) {
            let marker = document.querySelector(".hero__content-nav-link#marker");
            marker.style.top = event.target.offsetTop + "px";
            marker.style.width = event.target.offsetWidth + "px";
            marker.classList.add("marker-link");
        });
    });
    var f = document.querySelector(".header-burger");
    var g = document.querySelector(".menu-close");
    m = document.querySelector(".menu");

    f.addEventListener("click", function () {
        m.classList.add("active");
    });
    g.addEventListener("click", function () {
        m.classList.remove("active");
    });
    var dropdown = document.querySelector(".menu-item-children");
    var submenu = document.querySelector("div.submenu");

    dropdown.addEventListener("click", function (event) {
        event.preventDefault();
        if (submenu.style.height === "0px" || submenu.style.height === "0") {
            submenu.style.height = submenu.scrollHeight + "px";
            submenu.classList.add("open");
        } else {
            submenu.style.height = "0";
            submenu.classList.remove("open");
        }
    });

    document.querySelectorAll(".menu-item").forEach(function (item) {
        item.addEventListener("click", function () {
            document.querySelector(".menu").classList.remove("active");
        });
    });

    const checkmode = document.getElementById("checkmode");

    checkmode.onclick = function() {
      const currentMode = document.cookie.split('; ').find(row => row.startsWith('mode='))?.split('=')[1];
      let newMode;
      if(currentMode){
        newMode = currentMode === 'dark' ? 'bright' : 'dark';
      }else{
        newMode = 'bright';
      }
      document.cookie = `mode=${newMode}; path=/; max-age=31536000`;
      location.reload();
    }
  </script>
  <script>
    const websiteHumor = [
      "Crafting websites so sleek, even James Bond would approve.",
      "Our designs are so responsive, they'd answer before you ask.",
      "We optimize your site like it's training for a marathon with no finish line.",
      "Building websites faster than your Wi-Fi can load a cat video.",
      "Your site will look so good, it might crash from self-admiration.",
      "We design with such precision, 'Error 404' is left out of the blueprint.",
      "Simplifying your digital presence, because complexity is so last century.",
      "Your website will turn heads faster than a double shot of espresso.",
      "Designing websites cleaner than your desktop after a spring cleaning spree.",
      "Our websites are faster than the office coffee machine on Monday mornings.",
      "We craft interfaces smoother than your favorite jazz playlist.",
      "Your website will have more visitors than a pop-up sale with free pizza.",
      "Our websites stay fresher than a startup’s elevator pitch.",
      "Your site will be so intuitive, even your cat could navigate it (if it cared).",
      "Your site will load so quickly, even your microwave will be impressed.",
      "Creating websites that bring as much joy as finding Wi-Fi at an airport.",
      "Our designs are as engaging as a surprise office party with cake.",
      "Making websites as organized as your dream closet—if it actually existed.",
      "Designing pages compatible with everything—yes, even Internet Explorer (well, sort of).",
      "Your site will shine brighter than your screen’s brightness at 3 AM.",
      "Turning digital laggards into trailblazers of the online world.",
      "Your website will have fewer bugs than a 5-star resort.",
      "Our websites are so intuitive, they'll feel like second nature.",
      "Making your website the star of the digital stage.",
      "Crafting dynamic pages so compelling, even your bounce rate will stick around."
    ];

    const mobileAppHumor = [
      "Building apps so smooth, they swipe right on every user.",
      "Your app will be so intuitive, even a toddler could run a startup with it.",
      "We design mobile apps that fit in your pocket but think like a supercomputer.",
      "Crafting apps so fast, they'll load before your coffee cools down.",
      "Your app will have users hooked faster than the latest viral game.",
      "Our apps are so responsive, they'd reply to your texts in under a second.",
      "Making apps that won't just run on your phone—they’ll run your life.",
      "Designing interfaces so sleek, your screen might feel underdressed.",
      "Apps so engaging, they might just replace your morning scroll.",
      "We optimize mobile apps to work harder than your fitness tracker.",
      "Your app will have downloads faster than a flash sale on Black Friday.",
      "Turning your ideas into mobile apps that spark 'Why didn’t I think of this?' moments.",
      "Our apps are so secure, even your secrets will feel safe sharing them.",
      "Creating mobile experiences smoother than scrolling through memes.",
      "Your app will be the VIP of the app store.",
      "Building apps as dependable as your alarm clock—on weekdays, at least.",
      "Our apps are so captivating, they might win 'App of the Year' by popular vote.",
      "Designing mobile apps that work harder than your thumbs.",
      "Your app will be the digital companion you never knew you needed."
    ];

    const desktopAppHumor = [
      "Building desktop apps so robust, they could survive a coffee spill (well, almost).",
      "Our apps are so reliable, they'd never force you to 'Ctrl+Alt+Del.'",
      "Designing desktop software that works smarter than your office assistant.",
      "Your desktop app will run so fast, you'll forget what a loading screen looks like.",
      "We create software that turns 'Not Responding' into 'Always Delivering.'",
      "Our desktop apps are like fine wine—powerful, timeless, and smooth.",
      "Your app will be so intuitive, even your IT department will be impressed.",
      "Crafting desktop software that multitasks better than your busiest day.",
      "Apps so user-friendly, even your pet might accidentally open them.",
      "We design programs so efficient, they’ll make your old PC feel brand new.",
      "Your app will handle data like a pro and never break a sweat.",
      "Our desktop apps are so secure, hackers will give up before they even try.",
      "Making software so seamless, it feels like part of your operating system.",
      "Designing apps that run faster than your morning caffeine kicks in.",
      "Your desktop app will be so stable, it'll redefine 'rock-solid.'",
      "We build apps that make crashes a thing of the past (knock on wood).",
      "Turning complex software ideas into simple, elegant desktop solutions.",
      "Your app will blend power and precision like a maestro's symphony.",
      "Creating desktop applications so polished, they make other programs blush."
    ];

    const websiteHumorPlaceholder = document.getElementById("website-humor-placeholder");
    const mobileHumorPlaceholder = document.getElementById("mobile-humor-placeholder");
    const desktopHumorPlaceholder = document.getElementById("desktop-humor-placeholder");

    function typeWebsiteHumor(text, callback) {
      websiteHumorPlaceholder.textContent = "";
      let i = 0;
      function type() {
        if (i < text.length) {
          websiteHumorPlaceholder.textContent += text.charAt(i);
          i++;
          setTimeout(type, 25);
        } else if (callback) {
          setTimeout(callback, 500);
        }
      }
      type();
    }

    function updateWebsiteHumor() {
      const randomHumor = websiteHumor[Math.floor(Math.random() * websiteHumor.length)];
      typeWebsiteHumor(randomHumor, () => {
        setTimeout(updateWebsiteHumor, 10000);
      });
    }
    updateWebsiteHumor();

    function typeMobileHumor(text, callback) {
      mobileHumorPlaceholder.textContent = "";
      let i = 0;
      function type() {
        if (i < text.length) {
          mobileHumorPlaceholder.textContent += text.charAt(i);
          i++;
          setTimeout(type, 25);
        } else if (callback) {
          setTimeout(callback, 500);
        }
      }
      type();
    }

    function updateMobileHumor() {
      const randomHumor = mobileAppHumor[Math.floor(Math.random() * mobileAppHumor.length)];
      typeMobileHumor(randomHumor, () => {
        setTimeout(updateMobileHumor, 10000);
      });
    }
    updateMobileHumor();

    function typeDesktopHumor(text, callback) {
      desktopHumorPlaceholder.textContent = "";
      let i = 0;
      function type() {
        if (i < text.length) {
          desktopHumorPlaceholder.textContent += text.charAt(i);
          i++;
          setTimeout(type, 25);
        } else if (callback) {
          setTimeout(callback, 500);
        }
      }
      type();
    }

    function updateDesktopHumor() {
      const randomHumor = desktopAppHumor[Math.floor(Math.random() * desktopAppHumor.length)];
      typeDesktopHumor(randomHumor, () => {
        setTimeout(updateDesktopHumor, 10000);
      });
    }
    updateDesktopHumor();

    const dismiss = document.getElementById("dismiss");
    if(dismiss){
      dismiss.onclick = () => dismiss.parentElement.remove();
    }
  </script>
</body>
</html>