<?php
    // Read the countries.json file
    $countriesJson = file_get_contents('countries.json');

    // Decode JSON data into PHP array
    $countries = json_decode($countriesJson, true);
    // Check if decoding was successful
    if ($countries) {
        $option = "";
        foreach ($countries['countries'] as $country) {
            $option .= '<option value="' . htmlspecialchars($country) . '">' . htmlspecialchars($country) . '</option>';
        }
    } else {
        echo 'Unable to load countries.';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Chillies Financial Services</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lending-logik-responsive.css">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap">

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">

    
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    function enableSubmitBtn() {
        document.getElementById("submitBtn").disabled = false;
    }

    // Traccker code//

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-M4TFV8J1JQ');

    //////////////////

    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "rc32v9vz9w");
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M4TFV8J1JQ"></script>





</head>

<body>
    <div class="mainBanner">

        <!-- <header id="header" class="header1 headerInner  ">
            <section class="container header-container pt-4">
                <a href="index.html"><img src="img/logo.svg" alt="Logo" width="240"></a>
            </section>
        </header> -->

        <?php echo $currentnav?>

        <header id="header" class="header1 ">

            <section class="wrapper container header-container">

                <a class="navbar-brand stickyLogo" href="https://cloudchillies.com.au/">
                    <img src="img/logo.svg" alt="logo" width="240">

                </a>
                <a class="navbar-brand" href="https://cloudchillies.com.au/">
                    <img src="img/logo.svg" alt="logo" width="240" class="logo-default">
                </a>

                <div class="burger" id="burger">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>

                <span class="overlay"></span>

                <nav class="navbar" id="navbar">
                    <ul class="menu" id="menu">

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/salesforce">Salesforce</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/ai">AI</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link active"
                                href="https://cloudchillies.com.au/financial-services">Fintech</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/nonprofits">Nonprofit
                                Organization</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/success-stories">Success Stories</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/about-us">About Us</a>
                        </li>

                        <li class="menu-item">
                            <a class="nav-link" href="https://cloudchillies.com.au/contact">Contact Us</a>
                        </li>

                    </ul>
                </nav>
            </section>

        </header>

        <section class="heroSection" id="homePage">
            <div class="owl-carousel home-banner owl-theme p-0">
                <div class="item">
                    <div class="container header-container">
                        <div class="row">
                            <div class="col-md-6 d-flex  flex-column justify-content-center left ">
                                <div class="hero-text">
                                    <h1 class="line1 ">
                                        <span class="bannerText1 text-gradient">20+ Years</span>
                                        <span class="bannerText2"> of Delivering Transformational Value to</span>
                                        <span class="bannerText3 text-gradient">Australian Financial Companies</span>
                                    </h1>
                                    <h1 class="line2"><span class="primary-text bold">with</span></h1>
                                    <div class="d-flex powered-by">
                                        <div>
                                            <img src="img/ai-sf-logo.png">
                                            <!-- <img src="img/ai-sf-logo-mobile.png" class="mobile-b" > -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 heroright">
                                <div class="servicesContainer text-center desktop fin-img">
                                    <img src="img/bannerImg.png" alt="logo">
                                </div>
                                <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo2.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Enabling Capify to extend Business Loans in Australia
                                            & UK with Salesforce</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a  class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="capify">Read More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/capify-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo14.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Redefining Regents Capital’s Equipment Financing &
                                            Leasing business with Salesforce.</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a  class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="regents">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/regents-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/smartGroup.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Digitizing salary packaging, leasing, and payroll
                                            services for Smartgroup with Salesforce and Azure</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a  class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="smart-group">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/smart-group-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo1.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Assisting Australian Business Credit to give Rent Roll
                                            Loans & Trail Book Loans with Salesforce</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a  class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="abc">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/abc-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo4.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Enhancing Swift Loans’ ability to provide fast, easy
                                            Pay Day Loans with Salesforce</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a href="#contactModal" class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="swift-loans">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/swift-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo10.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Facilitating OZ Cash Loans’ underwriting & disbursal
                                            of Personal Loans with Salesforce</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a href="#contactModal" class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="oz-cash">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/ozcash-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

                <div class="item">
                    <div class="container header-container banner-container">
                        <div class="row">
                            <div class="col-md-5 d-flex  flex-column justify-content-center left ">

                                <div class="c-logo-a mb-3">
                                    <img src="img/trust-us/logo9.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Helping Speedy Business Finance grant Businesses Loans
                                            at speed with Salesforce</span>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a href="#contactModal" class="btn btnStarted read_more_btn"
                                            data-bs-toggle="modal" data-bs-target="#ss-model"
                                            data-id="speedy-finance">Read
                                            More
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                                    viewBox="0 0 15 25" fill="none">
                                                    <path
                                                        d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7 heroright">
                                <div class="servicesContainer text-center desktop ai-img">
                                    <img src="img/speedy-finance-banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>

            </div>



            <!------------------------------>
            <!-- They Trust US -->
            <!------------------------------>

            <section class="client-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="sectionTitle text-center  mb-4">
                                <span class="lightWeight"> They </span> <span class="bold">Trust Us</span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="trustLogo ">
                                        <ul class="d-flex align-items-center flex-wrap justify-content-center">
                                            <li>
                                                <img src="img/trust-us/smartGroup.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo2.png" alt="logo" class="capify-logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo1.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/compareClub.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo4.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo6.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo3.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/lifeInsurance.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/autopia.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo13.png" alt="logo">
                                            </li>


                                            <li>
                                                <img src="img/trust-us/logo7.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo10.png" alt="logo">
                                            </li>

                                            <li>
                                                <img src="img/trust-us/logo17.png" alt="logo" class="blend">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo21.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo22.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo16.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo19.png" alt="logo">
                                            </li>

                                            <li>
                                                <img src="img/trust-us/flexEquip.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo14.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/paySmart.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/treysta.png" alt="logo" class="blend">
                                            </li>

                                            <li>
                                                <img src="img/trust-us/logo20.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo15.png" alt="logo" class="blend">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/bullrun.png" alt="logo">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo9.png" alt="logo">
                                            </li>

                                            <li>
                                                <img src="img/trust-us/cellulant.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/crcleBlack.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/homeVestors.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/nomupay.png" alt="logo" class="blend">
                                            </li>

                                            <li>
                                                <img src="img/trust-us/pennCapital.png" alt="logo"
                                                    style="mix-blend-mode: darken;">
                                            </li>
                                            <li>
                                                <img src="img/trust-us/logo18.png" alt="logo" class="blend">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
            </section>

        </section>
    </div>
    <section class="ai-powered-sol p-5 position-relative">

        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-md-12 text-center">

                    <div class="sectionTitle mb-3 text-start">
                        <span class="bold primary-text text-gradient">Leverage AI,</span> <span
                            class="lightWeight">That</span> <span class="bold primary-text ">Solve What Matters Most to
                            Financial Services</span>
                    </div>

                    <div class="ai-powered-description">
                        From credit approvals to risk analysis, we help financial institutions apply AI where it truly
                        delivers — reducing manual efforts, increasing accuracy, and scaling smarter decisions.
                    </div>


                    <div class="row ai-points-wrap">

                        <div class="col-md-8">

                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex ai-points">
                                        <img src="img/cd-icon.svg" alt="" srcset="">
                                        <h2 class="bold text-start">Credit Decisioning</h2>
                                    </div>
                                    <div class="d-flex ai-points">
                                        <img src="img/lm-icon.svg" alt="" srcset="">
                                        <h2 class="bold text-start">Lender Matching</h2>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex ai-points">
                                        <img src="img/sv-icon.svg" alt="" srcset="">
                                        <h2 class="bold text-start">Statement Visualization</h2>
                                    </div>
                                    <div class="d-flex ai-points">
                                        <img src="img/bda-icon.svg" alt="" srcset="">
                                        <h2 class="bold text-start">Bad Debt Analysis </h2>
                                    </div>

                                </div>
                            </div> -->

                            <div class="row-ai-points mw-1000">
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/cd-icon.svg" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Credit Decisioning Logik</h2>
                                        <p>Traditional credit checks are slow and rigid.</p>
                                        <span>AI accelerates approvals with dynamic scoring, alternative data, and
                                            real-time risk signals.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/sv-icon.svg" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Lender Matching Logik</h2>
                                        <p>Finding the right lending product for every borrower can be complex.</p>
                                        <span>AI automates matching based on borrower profiles, needs, and risk
                                            appetite.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/lm-icon.svg" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Statement Visualization Logik</h2>
                                        <p>High-volume financial data is often messy and unreadable.</p>
                                        <span>AI transforms statements into clear, actionable dashboards with anomaly
                                            detection.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/bda-icon.svg" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold ">Bad Debt Analysis Logik</h2>
                                        <p>Collections and defaults strain margins.</p>
                                        <span>AI predicts high-risk accounts, flags early warning signs, and suggests
                                            mitigation strategies.</span>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-to-action ai d-flex align-items-center justify-content-between">

                                <div class=" flex-column">
                                    <h2 class="lightWeight text-start">Give Your Business an </h2>
                                    <h2 class="bold text-start">Unf<span class="orangeText">AI</span>r Advantage</h2>
                                </div>

                                <a class="btn btn-primary btnStarted" data-bs-toggle="modal"
                                    data-bs-target="#contactUsPopup" data-subject="Financial Services Page" data-section="Lets make AI work for you" onclick="gtag('event', 'cta_click', {
                                                'event_category': 'CTA',
                                                'event_label': 'CTA - Make AI Work'
                                            });">Lets make AI work for you
                                    <img src="img/arrow-white.svg" alt="arrow icon" class="ml-2">

                                </a>


                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>

        <div class="ai-powered-img">
            <img src="img/ai-sol-bg.jpg" alt="">
        </div>



    </section>

    <section class="sf-investment section position-relative">
        <div class="circle-wave-shape">
            <img src="img/circle-waves.svg" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-5 left">
                    <div>
                        <div class="sectionTitle mb-4">
                            <span class="lightWeight"> Maximize Value from Your</span>
                            <span class="bold">Salesforce</span>
                            <span class="lightWeight">Investment</span>

                        </div>
                        <p class="text-start">Too many financial organizations invest in Salesforce-but never realize
                            its full potential. From underutilized features to disconnected workflows- we help financial
                            institutions get more from Salesforce, with solutions designed around how your business
                            actually works.</p>

                    </div>
                    <div class="mt-3 sfp-logo">
                        <img src="img/salesforcePartner.png" alt="salesforce partner" />
                    </div>
                </div>

                <!-- Left side -->
                <div class="col-md-12 col-xl-7">
                    <h4 class="sub-sectionTitle mb-4 ">
                        <span class="lightWeight"> Our </span><span class="bold">Salesforce Solution Offerings</span>
                    </h4>
                    </h4>
                    <div class="row bdr-btm">
                        <div class="col-md-6 pb-4">
                            <div class="so-box">
                                <div class="d-flex sf-points gap-4 mb-4">
                                    <img src="img/sf-icon-a.svg" alt="">
                                    <div>
                                        <h2 class="bold mb-0">Salesforce </h2>
                                        <h2 class="bold mb-0">Consulting & Advisory</h2>
                                    </div>
                                </div>
                                <p>
                                    Helping you make informed architectural decisions that align Salesforce with your
                                    lending, insurance, or wealth operations- no guesswork, just domain-aligned
                                    guidance.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 pb-4">
                            <div class="so-box">
                                <div class="d-flex sf-points gap-4 mb-4">
                                    <img src="img/sf-icon-b.svg" alt="">
                                    <h2 class="bold text-start">Salesforce Implementation</h2>
                                </div>
                                <p>
                                    Helping you simplify onboarding, servicing, claims, or loan management with tailored
                                    Salesforce-enabled process flows that reduce friction and improve outcomes.
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 pb-4 pt-4">
                            <div class="so-box">
                                <div class="d-flex sf-points gap-4 mb-4">
                                    <img src="img/sf-icon-c.svg" alt="">
                                    <h2 class="bold text-start">Salesforce
                                        Development</h2>
                                </div>
                                <p>
                                    Helping you design and build custom workflows, decision logic, and user interfaces
                                    that reflect the way your finance teams actually operate — not how the default
                                    system behaves.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 pb-4 pt-4">
                            <div class="so-box">
                                <div class="d-flex sf-points gap-4 mb-4">
                                    <img src="img/sf-icon-d.svg" alt="">
                                    <h2 class="bold text-start">Managed<br>
                                        Services</h2>
                                </div>
                                <p>
                                    Ensuring your continued wins after Salesforce implementation with streamlined loan
                                    management journeys.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action si d-flex align-items-center justify-content-between">

                        <div class=" flex-column">
                            <h2 class="bold text-start">
                                <div><span class="lightWeight">Let’s unlock the</span> full potential of</div>
                                <div> Salesforce <span class="lightWeight">for your business</span>
                                </div>
                            </h2>
                        </div>

                        <button class="btn btn-primary btnStarted " data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup" data-subject="Finicial Service Page" data-section="Let's unlock the full potential of Salesforce for your business" onclick="gtag('event', 'cta_click', {
     'event_category': 'CTA', 'event_label': 'CTA - Show Me How' });">Show Me How
                            <img src="img/arrow-white.svg" alt="arrow icon" class="ml-2">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section industries">
        <div class="sectionTitle mb-4 text-center">
            <span class="bold">Financial Companies</span><span class="lightWeight"> We Help</span>
        </div>

        <div class="industries-container ">
            <div class="box box1">
                <div class="box-content">
                    <h5 class="mb-4">Lending</h5>
                    <div class="box-img1">
                        <img src="img/ind-1.png" alt="">
                    </div>

                </div>
            </div>

            <div class="box box2">
                <div class="box-content">
                    <h5 class="mb-4">
                        <div>Employee</div>
                        <div> Benefits & Salary</div>
                        <div>Packaging</div>
                    </h5>
                    <div class="box-img2">
                        <img src="img/ind-2.png" alt="">
                    </div>

                </div>

            </div>

            <div class="box box3">
                <div class="box-content">
                    <h5 class="mb-4">Wealth
                        Management</h5>
                    <div class="box-img3">
                        <img src="img/ind-3.png" alt="">
                    </div>
                </div>

            </div>


            <div class="box box4">
                <div class="box-content">
                    <h5 class="mb-4">Fintech</h5>
                    <div class="box-img4">
                        <img src="img/ind-4.png" alt="">
                    </div>
                </div>

            </div>

            <div class="box box5">
                <div class="box-content">
                    <h5 class="mb-4">Insurance</h5>
                    <div class="box-img5">
                        <img src="img/ind-5.png" alt="">
                    </div>
                </div>

            </div>

            <div class="box box6">
                <div class="box-content">
                    <h5 class="mb-4">Banking</h5>
                    <div class="box-img6">
                        <img src="img/ind-6.png" alt="">
                    </div>
                </div>

            </div>

        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action fc d-flex align-items-center justify-content-between">

                        <div class=" flex-column">
                            <h2 class="bold text-start"><span class="lightWeight">Let's</span> Maximise the ROI <span
                                    class="lightWeight">for your</span> Finance Business</h2>
                        </div>

                        <a href="/expert-contact" class="btn btn-primary btnStarted talkTo" data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup" data-subject="Finicial Service Page" data-section="Talk
                            to an Expert" onclick="gtag('event', 'cta_click', {
     'event_category': 'CTA',
     'event_label': 'CTA - Talk to Expert'
   });">Talk to an Expert
                            <img src="img/arrow-white.svg" alt="arrow icon" class="ml-2">
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </section>


    <!-- Testimonial Videos -->
    <section class="sectionSix section">
        <div class="container-fluid">
            <div class="row">
                <div class="sectionFiveHeading text-center mb-3"><span class="lightWeight">Clients</span><span
                        class="text-gradient"> Love Us</span></div>
                <div class="sectionFiveSubHeading text-center mb-5">Don't Just Take Our Words, Hear From Them</div>
            </div>

            <div class="row clientSlider">
                <div class="owl-carousel clientFeeback owl-theme p-0">

                    <div class="item">
                        <div class="iframe-container">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/dnCH_qoqaAo?si=2RM6crqZFKUVlRrd"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>


                    <div class="item">
                        <div class="iframe-container">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/skIZ--vTJ84?si=VD9on_1hNJV-zQ_2"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="iframe-container">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/Z4TTjm6lz7g?si=IXpPMLcR_HwbXjX3"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="iframe-container">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/GCGEs6DdkHY?si=7KQkEN7cRUvLPPIG"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item">
                        <div class="iframe-container">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/b9COwfiylxA?si=lXRByMRr1piOmr40"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!------------------------------>
    <!-- Success Stories Start -->
    <!------------------------------>
    <section class="section6 position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel full-slider home-slider owl-theme p-0">
                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-1.jpg">
                            <div class="sliderContent bg-1 ">
                               <!-- <div class="ss-shape">
                                    <img src="img/ss-shape.svg" alt="">
                                </div> -->
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/capify-white-log0.png" alt="" srcset="">
                                    </div>
                                    <div class="line2">Enabling Capify to extend Business Loans in Australia & UK with
                                        Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="capify"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-2.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/regents-white-logo.png" alt="" srcset="">
                                    </div>
                                    <div class="line2">Redefining Regents Capital’s Equipment Financing & Leasing
                                        business with Salesforce.</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="regents"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-3.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/smartgroup-logo-white.png" alt="" srcset="" class="sg">
                                    </div>
                                    <div class="line2">Digitizing salary packaging, leasing, and payroll services for
                                        Smartgroup with Salesforce and Azure</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="smart-groups"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-4.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/bac-white-logo.png" alt="" srcset="" class="sg">
                                    </div>

                                    <div class="line2">Assisting Australian Business Credit to give Rent Roll Loans &
                                        Trail Book Loans with Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="abc"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-5.jpg">

                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/swift-loan-logo-white.png" alt="" srcset="" class="sl">
                                    </div>
                                    <div class="line2">Enhancing Swift Loans’ ability to provide fast, easy Pay Day
                                        Loans with Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="swift-loans"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-6.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/ozcash-logo.png" alt="" srcset="" class="sl">
                                    </div>

                                    <div class="line2">Facilitating OZ Cash Loans’ underwriting & disbursal of Personal
                                        Loans with Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="oz-cash"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/fs-ss-banner-7.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/speedy-logo-white.png" alt="" srcset="">
                                    </div>

                                    <div class="line2">Helping Speedy Business Finance grant Businesses Loans at speed
                                        with Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="speedy-finance"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px"></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>

        <div class="container cta-ss-container">

            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action ss d-flex align-items-center justify-content-between">

                        <div class="cta-pattern">
                            <img src="img/FW-hero-crop 1.png" alt="">
                        </div>

                        <div class=" flex-column">
                            <h2 class="bold text-start">
                                <div><span class="lightWeight">Let’s Turn Your</span> Challenges Into Success <br>
                                    Stories.
                                </div>
                        </div>
                        </h2>
                        <button class="btn btnStarted position-relative" data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup" data-subject="Salesforce page"
                            data-section="Show me">Show Me
                            How
                            <img src="img/arrow-white.png" alt="arrow icon" class="ml-2">
                        </button>
                    </div>


                </div>

            </div>
        </div>


        </div>


    </section>



    <!-- clients Achievement Section -->

    <section class="sectionNineContainer section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainHeading text-center mb-3">
                        <span class="lightWeight">See What</span>
                        <span class="bold text-gradient">Our Clients Have Achieved!</span>
                    </div>
                </div>
            </div>
            <div class="row sectionNine">
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="img">
                            <img src="img/leftImg.png" alt="image">
                        </div>
                        <div class="grid-container mb-5">
                            <div class="items">
                                <p class="ben-ponits dark-blue bold">
                                    <span class="light-blue "> Manual <br>Workload </span>
                                    decreased
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">Up to </span> 70% <img src="img/arrow-down.png" alt="">
                                </div>

                            </div>
                            <div class="items">
                                <p class="ben-ponits dark-blue bold">
                                    <span class="light-blue "> Customer/Client Satisfaction </span>
                                    increased
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">Up to </span> 70% <img src="img/arrow-up.png" alt="">
                                </div>
                            </div>
                            <div class="items bdr-none">
                                <p class="ben-ponits dark-blue bold ">
                                    <span class="light-blue "> Revenue <br>Growth Rate </span>
                                    increased
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">Up to </span> 20% <img src="img/arrow-up.png" alt="">
                                </div>
                            </div>
                            <div class="items">
                                <p class="ben-ponits dark-blue bold">
                                    <span class="light-blue "> Operational Cost </span><br>
                                    decreased
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">By </span> 20% <img src="img/arrow-down.png" alt="">
                                </div>
                            </div>
                            <div class="items">
                                <p class="ben-ponits dark-blue bold">
                                    <span class="light-blue "> Process Efficiency </span>
                                    increased
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">Up to </span> 83% <img src="img/arrow-up.png" alt="">
                                </div>
                            </div>
                            <div class="items">
                                <p class="ben-ponits dark-blue bold">
                                    <span class="light-blue "> Time-to-Market </span>
                                    reduced
                                </p>
                                <div class="ben-result dark-blue bold">
                                    <span class="lightWeight">By </span> 30% <img src="img/arrow-down.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 showToHow section3">
                <div class="innerSection d-flex bannerHeight margin0">
                    <div class="lightWeight left">Want to <span class="bold">Achieve Results </span>like these?
                    </div>
                    <button class="btn btn-primary btnStarted" data-bs-toggle="modal"
                        data-bs-target="#contactUsPopup"  data-subject="Financial Services Page" data-section="Want to Achieve Results">Let’s Talk
                        <img src="img/users-group.png" alt="">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25"
                                fill="none">
                                <path
                                    d="M0.690674 0.690674C1.41418 -0.032833 2.58631 -0.0328331 3.30981 0.690674L13.7659 11.1467C14.489 11.8703 14.4893 13.0425 13.7659 13.7659L3.30981 24.2219C2.58642 24.9453 1.4142 24.9451 0.690674 24.2219C-0.0328294 23.4984 -0.0328215 22.3263 0.690674 21.6028L9.83716 12.4563L0.690674 3.30981C-0.032833 2.58631 -0.0328331 1.41418 0.690674 0.690674Z"
                                    fill="white"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------>
    <!-- Why Choose Start -->
    <!------------------------------>
    <section class="position-relative why-choose section">

        <div class="container">
            <div class="row">
                <div class="sectionTitle text-center aos-init aos-animate  mb-5" data-aos="fade-up">
                    <span class="lightWeight">Why Choose Us as Your </span> <span class="bold text-gradient">Salesforce
                        Partner?
                </div>
                <div class="wrap-layout">
                    <div class="d-flex flex-column a">
                        <div class="d-flex">
                            <div class="wrap-layout-area wrap-layout-1" data-aos="fade-up">
                                <div class="gridInner">
                                    <div class="gridInner-content">
                                        <div class="gridTitle">
                                            Finance-Focused Expertise

                                        </div>
                                        <p>
                                            Specialized Salesforce solutions for financial enterprises
                                        </p>

                                    </div>
                                    <!-- <div class="no"><img src="img/one.svg"></div> -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                            viewBox="0 0 60 60" fill="none">
                                            <g clip-path="url(#clip0_160_320)">
                                                <path
                                                    d="M34.0898 14.0253C32.6697 13.636 31.1953 13.4387 29.7076 13.4387C20.5865 13.4387 13.166 20.8592 13.166 29.9803C13.166 39.1014 20.5865 46.5219 29.7076 46.5219C38.8287 46.5219 46.2492 39.1014 46.2492 29.9803C46.2492 28.4926 46.0518 27.0182 45.6626 25.598C45.3951 24.6224 45.9693 23.6147 46.9449 23.3473C47.9199 23.08 48.9282 23.654 49.1956 24.6296C49.6713 26.3653 49.9126 28.1655 49.9126 29.9803C49.9126 41.1213 40.8486 50.1853 29.7076 50.1853C18.5665 50.1853 9.50255 41.1213 9.50255 29.9803C9.50255 18.8392 18.5665 9.77526 29.7076 9.77526C31.5225 9.77526 33.3226 10.0165 35.0582 10.4923C35.8719 10.7153 36.4063 11.4532 36.4061 12.258C36.4061 12.4182 36.3848 12.581 36.3405 12.743C36.0732 13.7186 35.0657 14.2931 34.0898 14.0253ZM55.5368 20.4142C54.5668 20.7014 54.0131 21.7204 54.3004 22.6905C54.9979 25.0466 55.3515 27.4991 55.3515 29.9803C55.3515 44.1204 43.8477 55.6242 29.7076 55.6242C15.5675 55.6242 4.06363 44.1204 4.06363 29.9803C4.06363 15.8402 15.5675 4.33634 29.7076 4.33634C32.1889 4.33634 34.6414 4.68997 36.997 5.3874C37.9671 5.67475 38.9861 5.12088 39.2733 4.15099C39.3246 3.97755 39.3491 3.80274 39.3491 3.63067C39.3494 2.84017 38.8336 2.11058 38.0369 1.87463C35.3434 1.07715 32.5411 0.672916 29.7076 0.672916C21.8793 0.672916 14.5195 3.72145 8.98406 9.25677C3.44875 14.7923 0.400208 22.152 0.400208 29.9803C0.400208 37.8086 3.44875 45.1684 8.98406 50.7038C14.5194 56.2392 21.8793 59.2877 29.7076 59.2877C37.5359 59.2877 44.8955 56.2391 50.4311 50.7038C55.9664 45.1684 59.0149 37.8086 59.0149 29.9803C59.0149 27.147 58.6106 24.3445 57.8131 21.6506C57.526 20.6806 56.5067 20.1274 55.5368 20.4142ZM29.7076 22.6534C29.977 22.6534 30.249 22.6683 30.5162 22.6976C31.5222 22.8083 32.4265 22.0822 32.5367 21.0767C32.647 20.0711 31.9213 19.1664 30.9157 19.0562C30.5162 19.0122 30.1099 18.99 29.7076 18.99C23.6475 18.99 18.7173 23.9202 18.7173 29.9803C18.7173 36.0404 23.6475 40.9706 29.7076 40.9706C35.7677 40.9706 40.6978 36.0404 40.6978 29.9803C40.6978 28.9686 39.8778 28.1486 38.8661 28.1486C37.8545 28.1486 37.0344 28.9686 37.0344 29.9803C37.0344 34.0204 33.7476 37.3071 29.7076 37.3071C25.6675 37.3071 22.3807 34.0204 22.3807 29.9803C22.3807 25.9402 25.6675 22.6534 29.7076 22.6534ZM39.0601 18.0376L39.9725 8.88516C40.0144 8.4641 40.2008 8.07074 40.4999 7.7716L47.0624 1.20938C47.5679 0.70394 48.321 0.538743 48.9917 0.786138C49.6622 1.03353 50.1277 1.64853 50.1837 2.36118L50.704 8.98396L57.3267 9.50416C58.0393 9.56015 58.6543 10.0256 58.9017 10.6962C59.1491 11.3668 58.9839 12.1201 58.4785 12.6255L51.9162 19.1877C51.6171 19.4869 51.2237 19.6733 50.8027 19.7152L41.6504 20.628L31.0028 31.2755C30.6451 31.6332 30.1764 31.812 29.7076 31.812C29.2387 31.812 28.7701 31.6332 28.4124 31.2754C27.697 30.5601 27.697 29.4003 28.4124 28.685L39.0601 18.0376ZM42.8625 16.8256L49.7882 16.1348L53.0778 12.8452L48.8571 12.5137C47.9586 12.443 47.2451 11.7294 47.1744 10.831L46.8429 6.60995L43.553 9.8997L42.8625 16.8256Z"
                                                    fill="#33384B" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_160_320">
                                                    <rect width="58.6147" height="58.6147" fill="white"
                                                        transform="translate(0.400391 0.67334)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-layout-area wrap-layout-2" data-aos="fade-up">
                                <div class="gridInner">
                                    <div class="gridInner-content">
                                        <div class="gridTitle">
                                            20+ Years of Experience
                                        </div>
                                        <p>Proven track record in global financial services
                                        </p>

                                    </div>
                                    <!-- <div class="no"><img src="img/one.svg"></div> -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="63"
                                            viewBox="0 0 64 63" fill="none">
                                            <path
                                                d="M35.3779 5.96924C36.0742 5.96924 36.7219 5.96714 37.2617 6.01123C37.7555 6.05157 38.2979 6.13816 38.8428 6.37158L39.0762 6.48096L39.4004 6.6626C40.0311 7.04959 40.5616 7.58015 40.9482 8.21045L41.1299 8.53369V8.53467C41.4468 9.157 41.5535 9.78499 41.5996 10.3491C41.6437 10.8889 41.6416 11.5369 41.6416 12.2329V23.7173C41.6413 24.8703 40.7067 25.8061 39.5537 25.8062C38.4007 25.8061 37.4661 24.8703 37.4658 23.7173V12.2329C37.4658 11.4682 37.4635 11.0193 37.4365 10.689C37.4233 10.5266 37.407 10.4452 37.3994 10.4146C37.3517 10.3286 37.2816 10.2577 37.1963 10.2104C37.1659 10.2029 37.0847 10.1876 36.9219 10.1743C36.5915 10.1473 36.1431 10.145 35.3779 10.145H12.4082C11.6431 10.145 11.1947 10.1473 10.8643 10.1743C10.5897 10.1968 10.5482 10.2279 10.5889 10.2104C10.5037 10.2578 10.4331 10.3284 10.3857 10.4136C10.4034 10.3726 10.3721 10.414 10.3496 10.689C10.3226 11.0194 10.3203 11.4682 10.3203 12.2329V52.9507H16.585V47.2085C16.585 43.1724 19.8566 39.9002 23.8926 39.8999C27.9289 39.8999 31.2011 43.1722 31.2012 47.2085V55.0386C31.2009 56.1916 30.2663 57.1274 29.1133 57.1274H8.23242C7.07937 57.1274 6.14479 56.1916 6.14453 55.0386V12.2329C6.14453 11.5369 6.14247 10.8889 6.18652 10.3491C6.23261 9.78498 6.33932 9.15702 6.65625 8.53467L6.83789 8.21045C7.28925 7.47472 7.93667 6.87505 8.70996 6.48096L8.94336 6.37158C9.48821 6.13818 10.0307 6.05157 10.5244 6.01123C11.0643 5.96714 11.712 5.96924 12.4082 5.96924H35.3779ZM49.9941 45.1206C54.7511 45.1207 58.6074 48.9769 58.6074 53.7339V55.0386C58.6072 56.1915 57.6725 57.1273 56.5195 57.1274H39.5537C38.4007 57.1274 37.4661 56.1916 37.4658 55.0386V53.7339C37.4658 48.9769 41.3221 45.1206 46.0791 45.1206H49.9941ZM23.8926 44.0767C22.163 44.0769 20.7608 45.4788 20.7607 47.2085V52.9507H27.0254V47.2085C27.0253 45.4787 25.6224 44.0767 23.8926 44.0767ZM46.0791 49.2964C43.8959 49.2964 42.0819 50.8738 41.7119 52.9507H54.3604C53.9903 50.8739 52.1773 49.2964 49.9941 49.2964H46.0791ZM47.9062 29.4595C51.2215 29.4596 53.9092 32.1481 53.9092 35.4634C53.9088 38.7784 51.2213 41.4661 47.9062 41.4663C44.5911 41.4663 41.9027 38.7785 41.9023 35.4634C41.9023 32.148 44.5908 29.4595 47.9062 29.4595ZM47.9062 33.6362C46.8973 33.6362 46.0791 34.4544 46.0791 35.4634C46.0795 36.4721 46.8975 37.2905 47.9062 37.2905C48.9149 37.2904 49.733 36.472 49.7334 35.4634C49.7334 34.4545 48.9151 33.6364 47.9062 33.6362ZM18.6729 32.0698C19.8259 32.0698 20.7605 33.0047 20.7607 34.1577C20.7605 35.3107 19.8259 36.2466 18.6729 36.2466H16.0625C14.9096 36.2465 13.9749 35.3106 13.9746 34.1577C13.9748 33.0048 14.9095 32.07 16.0625 32.0698H18.6729ZM31.7236 32.0698C32.8766 32.07 33.8113 33.0048 33.8115 34.1577C33.8113 35.3106 32.8765 36.2464 31.7236 36.2466H29.1133C27.9602 36.2466 27.0256 35.3107 27.0254 34.1577C27.0256 33.0047 27.9602 32.0698 29.1133 32.0698H31.7236ZM18.6729 24.2397C19.826 24.2398 20.7606 25.1745 20.7607 26.3276C20.7605 27.4806 19.8259 28.4155 18.6729 28.4155H16.0625C14.9096 28.4154 13.9749 27.4806 13.9746 26.3276C13.9747 25.1746 14.9095 24.2399 16.0625 24.2397H18.6729ZM31.7236 24.2397C32.8766 24.2399 33.8114 25.1746 33.8115 26.3276C33.8113 27.4805 32.8765 28.4154 31.7236 28.4155H29.1133C27.9602 28.4155 27.0256 27.4806 27.0254 26.3276C27.0255 25.1745 27.9601 24.2398 29.1133 24.2397H31.7236ZM18.6729 16.4097C19.8261 16.4097 20.7607 17.3444 20.7607 18.4976C20.7605 19.6505 19.8259 20.5854 18.6729 20.5854H16.0625C14.9096 20.5853 13.9749 19.6505 13.9746 18.4976C13.9746 17.3444 14.9094 16.4098 16.0625 16.4097H18.6729ZM31.7236 16.4097C32.8767 16.4098 33.8115 17.3444 33.8115 18.4976C33.8113 19.6504 32.8765 20.5853 31.7236 20.5854H29.1133C27.9602 20.5854 27.0257 19.6505 27.0254 18.4976C27.0254 17.3443 27.9601 16.4097 29.1133 16.4097H31.7236Z"
                                                fill="#33384B" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-layout-area wrap-layout-5" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        100+ Salesforce Certifications
                                    </div>
                                    <p>
                                        Expertise spanning strategy, execution & support
                                    </p>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="55" viewBox="0 0 54 55"
                                        fill="none">
                                        <path
                                            d="M42.4189 3.56396C45.8498 3.56396 48.6309 6.34508 48.6309 9.77588V40.8354C48.6309 44.2663 45.8498 47.0474 42.4189 47.0474H39.5723L35.2275 51.3921C34.5344 52.0852 33.4109 52.0852 32.7178 51.3921L26.9121 45.5874L21.1084 51.3921C20.7756 51.7249 20.3242 51.9125 19.8535 51.9126C19.3828 51.9126 18.9315 51.7249 18.5986 51.3921L14.2539 47.0474H11.3594C7.92858 47.0474 5.14746 44.2663 5.14746 40.8354V9.77588C5.14746 6.34506 7.92856 3.56396 11.3594 3.56396H42.4189ZM16.0879 43.8618L19.8535 47.6274L23.4053 44.0747C21.7444 43.3197 20.3704 42.0443 19.4961 40.4536L16.0879 43.8618ZM34.2988 40.4233C33.4309 42.0178 32.0622 43.2984 30.4053 44.0601L33.9717 47.6265L37.7373 43.8618L34.2988 40.4233ZM11.3594 7.11279C9.88902 7.11279 8.69629 8.30553 8.69629 9.77588V40.8354C8.69629 42.3058 9.88901 43.4976 11.3594 43.4976H11.8418C11.91 43.1713 12.07 42.8602 12.3232 42.6069L18.46 36.4692C18.4598 36.4458 18.459 36.4224 18.459 36.3989C18.459 31.7429 22.2327 27.9685 26.8887 27.9683C31.5449 27.9683 35.3193 31.7427 35.3193 36.3989C35.3193 36.4071 35.3184 36.4152 35.3184 36.4233L41.5029 42.6069C41.7562 42.8602 41.9162 43.1713 41.9844 43.4976H42.4189C43.8894 43.4976 45.0811 42.3059 45.0811 40.8354V9.77588C45.0811 8.30551 43.8893 7.11279 42.4189 7.11279H11.3594ZM26.8887 31.5181C24.1931 31.5183 22.0078 33.7033 22.0078 36.3989C22.008 39.0917 24.189 41.2743 26.8809 41.2788H26.9219C29.6024 41.2612 31.7703 39.0836 31.7705 36.3989C31.7705 33.7032 29.5844 31.5181 26.8887 31.5181ZM37.9824 20.2026C38.9625 20.2028 39.7568 20.9979 39.7568 21.978C39.7567 22.958 38.9624 23.7522 37.9824 23.7524H15.7959C14.8159 23.7523 14.0216 22.958 14.0215 21.978C14.0215 20.9979 14.8158 20.2028 15.7959 20.2026H37.9824ZM33.5449 12.438C34.525 12.438 35.3192 13.2323 35.3193 14.2124C35.3193 15.1926 34.5251 15.9878 33.5449 15.9878H20.2334C19.2532 15.9878 18.459 15.1926 18.459 14.2124C18.4592 13.2323 19.2533 12.438 20.2334 12.438H33.5449Z"
                                            fill="#33384B" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column b">
                        <div class="wrap-layout-area wrap-layout-3" data-aos="fade-up">
                            <div class="gridInner">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        AI-Powered Impact
                                    </div>
                                    <p>
                                        Purpose-built automations & Solutions for financial enterprises
                                    </p>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 63 63"
                                        fill="none">
                                        <path
                                            d="M16.7996 10.5C16.7996 8.17909 14.9209 6.2998 12.6 6.2998C10.2816 6.2998 8.40039 8.17909 8.40039 10.5C8.40039 12.2615 9.48714 13.7653 11.025 14.3884V27.3002H14.175V14.3884C15.7128 13.7659 16.7996 12.2628 16.7996 10.5Z"
                                            fill="#33384B" />
                                        <path
                                            d="M54.5996 10.5C54.5996 8.17909 52.721 6.2998 50.3994 6.2998C48.0817 6.2998 46.1992 8.17909 46.1992 10.5C46.1992 12.2615 47.2866 13.7653 48.8244 14.3884V27.3002H51.9744V14.3896C53.5123 13.7659 54.5996 12.2628 54.5996 10.5Z"
                                            fill="#33384B" />
                                        <path
                                            d="M44.1 29.4004C36.3233 32.0955 27.308 32.3047 18.9 29.4004C16.952 32.6247 15.75 37.0788 15.75 42.001C15.75 44.3207 22.7984 46.2006 31.5 46.2006C40.1978 46.2006 47.25 44.3207 47.25 42.001C47.25 37.0788 46.0486 32.6247 44.1 29.4004ZM23.625 42.001C22.1741 42.001 21.0004 40.8273 21.0004 39.3752C21.0004 37.9256 22.1741 36.7506 23.625 36.7506C25.0759 36.7506 26.2496 37.9256 26.2496 39.3752C26.2496 40.8273 25.0759 42.001 23.625 42.001ZM39.375 42.001C37.9228 42.001 36.7498 40.8273 36.7498 39.3752C36.7498 37.9256 37.9228 36.7506 39.375 36.7506C40.8272 36.7506 42.0002 37.9256 42.0002 39.3752C42.0002 40.8273 40.8272 42.001 39.375 42.001Z"
                                            fill="#33384B" />
                                        <path
                                            d="M31.5008 14.7002C17.5841 14.7002 6.30078 26.9197 6.30078 42.0006C6.30078 50.1219 17.5841 56.6998 31.5008 56.6998C45.4219 56.6998 56.7008 50.1219 56.7008 42.0006C56.7008 26.9197 45.4219 14.7002 31.5008 14.7002ZM31.5008 52.5002C19.1251 52.5002 10.5004 46.9669 10.5004 42.0006C10.5004 29.2626 19.9208 18.8998 31.5008 18.8998C43.0796 18.8998 52.5006 29.2626 52.5006 42.0006C52.5006 46.9669 43.8778 52.5002 31.5008 52.5002Z"
                                            fill="#33384B" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-layout-area wrap-layout-6" data-aos="fade-up">
                            <div class="gridInner">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Trusted Salesforce Partner
                                    </div>
                                    <p>
                                        Certified Partner with Deep platform expertise for financial institutions
                                    </p>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66"
                                        fill="none">
                                        <path
                                            d="M65.5859 24.8112L63.8667 21.8334C63.5108 21.217 62.7229 21.0057 62.1059 21.3616C61.4893 21.7175 61.2781 22.5059 61.6341 23.1224L63.3533 26.1002C63.444 26.2572 63.4238 26.4067 63.4037 26.4819C63.3836 26.557 63.3262 26.6968 63.1692 26.7874L58.6231 29.4121C58.3825 29.5505 58.0745 29.4679 57.9358 29.2279L48.7902 13.3876C48.6515 13.1473 48.7341 12.839 48.9744 12.7002L53.5204 10.0756C53.7606 9.93715 54.0692 10.0194 54.2078 10.2597L55.8335 13.0755C56.1895 13.6922 56.9779 13.9035 57.5943 13.5473C58.2108 13.1914 58.4221 12.403 58.0661 11.7865L56.4404 8.97064C55.591 7.49948 53.7031 6.99328 52.2315 7.84287L47.6853 10.4676C46.9947 10.8664 46.5168 11.494 46.2919 12.1999H33.4043C31.5949 12.1999 29.8937 12.9045 28.6141 14.184L27.2937 15.5044C26.1359 15.2285 24.9497 15.0865 23.7568 15.0865H19.7552C19.5553 14.3143 19.0586 13.6192 18.3148 13.1897L13.7687 10.565C13.0559 10.1534 12.2252 10.0443 11.4306 10.2572C10.6356 10.4702 9.97113 10.9801 9.55967 11.6928L0.414187 27.5332C0.00273103 28.2459 -0.106707 29.0763 0.106239 29.8714C0.319186 30.6664 0.829123 31.3308 1.54195 31.7423L6.08808 34.367C6.5721 34.6464 7.10099 34.7792 7.62343 34.7792C7.81382 34.7792 8.00318 34.7608 8.18931 34.7262L11.9102 38.4472C11.8532 38.7397 11.8237 39.0397 11.8237 39.3444C11.8237 40.583 12.3061 41.7476 13.182 42.6234C14.0206 43.4619 15.1031 43.9109 16.2033 43.9716C16.1864 44.1332 16.1773 44.2964 16.1773 44.4612C16.1773 45.6999 16.6596 46.8644 17.5355 47.7402C18.4114 48.6161 19.5759 49.0984 20.8145 49.0984C20.8482 49.0984 20.8814 49.0967 20.9149 49.096C20.9142 49.1295 20.9125 49.1627 20.9125 49.1964C20.9125 50.4351 21.3948 51.5996 22.2707 52.4754C23.1466 53.3513 24.3111 53.8336 25.5497 53.8336C25.5834 53.8336 25.6166 53.832 25.6501 53.8312C25.6494 53.8647 25.6477 53.898 25.6477 53.9316C25.6477 55.1702 26.1301 56.3349 27.0059 57.2106C27.8818 58.0864 29.0463 58.5689 30.285 58.5689C31.5236 58.5689 32.6882 58.0865 33.564 57.2106L35.3977 55.377C35.9354 54.8393 36.3118 54.201 36.5298 53.5225C37.3444 54.1237 38.3125 54.4244 39.2809 54.4243C40.4682 54.4241 41.6561 53.9722 42.5599 53.0682C43.1008 52.5273 43.491 51.8763 43.7109 51.1659C44.4571 51.6538 45.3288 51.9162 46.2411 51.9162C47.4797 51.9162 48.6444 51.4339 49.5201 50.558C50.171 49.907 50.6041 49.0967 50.7839 48.2151C51.2495 48.3692 51.7414 48.4506 52.246 48.4506C53.4846 48.4506 54.6494 47.9682 55.5252 47.0922C57.3332 45.2841 57.3332 42.3421 55.5252 40.534L52.5166 37.5254L58.0082 32.0338C58.1302 32.0484 58.253 32.0566 58.3764 32.0566C58.8988 32.0566 59.4278 31.9239 59.9117 31.6445L64.4578 29.02C65.1705 28.6084 65.6805 27.944 65.8936 27.1489C66.1066 26.3539 65.9973 25.5239 65.5859 24.8112ZM2.83085 29.5097C2.67384 29.419 2.61661 29.2794 2.5965 29.2042C2.57639 29.129 2.55616 28.9795 2.6469 28.8224L11.7924 12.9818C11.883 12.8248 12.0227 12.7676 12.0979 12.7475C12.13 12.739 12.1756 12.7303 12.2295 12.7303C12.3021 12.7303 12.3896 12.7459 12.4796 12.7977L17.0257 15.4225C17.2658 15.5612 17.3486 15.8695 17.2099 16.1098L8.06441 31.9502C7.92558 32.1903 7.6175 32.2731 7.3771 32.1344L2.83085 29.5097ZM14.4018 39.3443C14.4018 38.7941 14.616 38.2771 15.005 37.8881L16.1174 36.7756C16.5188 36.3741 17.0462 36.1734 17.5737 36.1734C18.1009 36.1734 18.6283 36.3742 19.0297 36.7756C19.4188 37.1646 19.633 37.6817 19.633 38.2317C19.633 38.7817 19.4188 39.2989 19.0297 39.6878L17.9173 40.8002C17.1144 41.6033 15.8079 41.6031 15.005 40.8002C14.616 40.4114 14.4018 39.8943 14.4018 39.3443ZM20.8146 46.5204C20.2645 46.5204 19.7475 46.3061 19.3586 45.9172C18.9695 45.5283 18.7553 45.0112 18.7553 44.4612C18.7553 43.9111 18.9695 43.394 19.3586 43.0051L21.1922 41.1714C21.5936 40.77 22.1209 40.5693 22.6483 40.5693C23.1757 40.5693 23.7031 40.77 24.1045 41.1714C24.4935 41.5603 24.7077 42.0775 24.7077 42.6275C24.7077 43.1776 24.4935 43.6947 24.1045 44.0836L22.2708 45.9172C21.8818 46.3063 21.3647 46.5204 20.8146 46.5204ZM25.5499 51.2557C24.9997 51.2557 24.4827 51.0415 24.0938 50.6526C23.7048 50.2637 23.4905 49.7465 23.4905 49.1965C23.4905 48.6465 23.7048 48.1293 24.0938 47.7403L25.9274 45.9067C26.3288 45.5053 26.8562 45.3046 27.3835 45.3046C27.9108 45.3046 28.4383 45.5053 28.8397 45.9068C29.2287 46.2957 29.443 46.8129 29.443 47.3629C29.443 47.9129 29.2287 48.4301 28.8397 48.819L27.0061 50.6526C26.6172 51.0415 26.1 51.2557 25.5499 51.2557ZM33.5749 53.5542L31.7412 55.3879C31.3523 55.7768 30.8352 55.9911 30.2851 55.9911C29.7349 55.9911 29.2179 55.7768 28.829 55.3879C28.44 54.9989 28.2257 54.4819 28.2257 53.9319C28.2257 53.3817 28.44 52.8647 28.829 52.4757L30.6626 50.642C31.064 50.2405 31.5914 50.0398 32.1189 50.0398C32.6461 50.0398 33.1735 50.2406 33.5749 50.6419C34.3779 51.4447 34.3779 52.7512 33.5749 53.5542ZM53.7025 45.2695C53.3135 45.6585 52.7964 45.8728 52.2463 45.8728C51.6963 45.8728 51.1792 45.6585 50.7902 45.2695L38.4865 32.9658C37.9831 32.4626 37.1672 32.4624 36.6634 32.9658C36.1601 33.4692 36.1601 34.2854 36.6634 34.7887L47.6975 45.8229C48.0865 46.2118 48.3007 46.7289 48.3007 47.279C48.3007 47.829 48.0865 48.3461 47.6975 48.7352C47.3086 49.1241 46.7915 49.3383 46.2414 49.3383C45.6912 49.3383 45.1742 49.1241 44.7853 48.7352L31.5263 35.4762C31.0229 34.9729 30.2067 34.9729 29.7032 35.4762C29.1999 35.9795 29.1999 36.7957 29.7032 37.2991L40.7373 48.3333C41.1263 48.7222 41.3405 49.2393 41.3405 49.7893C41.3405 50.3394 41.1263 50.8565 40.7373 51.2454C39.9345 52.0483 38.628 52.0486 37.825 51.2454L35.3983 48.8187C35.3949 48.8153 35.3912 48.8125 35.3878 48.8093C34.4595 47.8865 33.2349 47.4393 32.0186 47.4655C32.0193 47.4313 32.021 47.3973 32.021 47.3629C32.021 46.1243 31.5387 44.9596 30.6628 44.0837C29.7333 43.1542 28.504 42.704 27.2832 42.7301C27.284 42.696 27.2857 42.6619 27.2857 42.6277C27.2857 41.3889 26.8033 40.2244 25.9274 39.3485C24.9109 38.332 23.5359 37.8871 22.2056 38.0136C22.1524 36.857 21.6769 35.777 20.8527 34.9528C19.0446 33.1447 16.1025 33.1451 14.2944 34.9528L13.182 36.0652C13.1807 36.0665 13.1794 36.068 13.1781 36.0692L10.3157 33.2068L19.289 17.6646H23.7567C24.1945 17.6646 24.631 17.6878 25.0652 17.7329L23.5917 19.2064C22.7158 20.0823 22.2335 21.2469 22.2335 22.4855C22.2335 23.7243 22.7158 24.8888 23.5917 25.7647C24.4958 26.6687 25.6834 27.1207 26.8707 27.1207C28.0583 27.1207 29.2459 26.6688 30.1499 25.7647L33.6297 22.2848L53.7024 42.3573C54.5053 43.1601 54.5053 44.4667 53.7025 45.2695ZM41.3178 26.3267C43.1936 24.9691 44.3434 22.7783 44.3434 20.3981C44.3434 19.6862 43.7662 19.1091 43.0544 19.1091C42.3426 19.1091 41.7654 19.6862 41.7654 20.3981C41.7654 22.0819 40.8759 23.6178 39.4569 24.4658L34.5472 19.5562C34.0437 19.0529 33.229 19.0397 32.7255 19.5431L28.3269 23.9416C27.524 24.7445 26.2176 24.7444 25.4146 23.9416C25.0256 23.5527 24.8114 23.0355 24.8114 22.4855C24.8114 21.9355 25.0256 21.4183 25.4146 21.0293L30.4371 16.0069C31.2296 15.2144 32.2833 14.7779 33.4043 14.7779H46.6161L55.7031 30.5172C55.7246 30.5544 55.748 30.5899 55.7709 30.6258L50.6939 35.7028L41.3178 26.3267Z"
                                            fill="#33384B" />
                                        <path
                                            d="M59.8496 18.7441C60.1886 18.7441 60.5199 18.6062 60.761 18.3664C61.0006 18.1254 61.1387 17.7941 61.1387 17.4551C61.1387 17.1148 61.0007 16.7835 60.761 16.5424C60.5199 16.3027 60.1886 16.166 59.8496 16.166C59.5093 16.166 59.178 16.3027 58.9382 16.5424C58.6972 16.7835 58.5605 17.1148 58.5605 17.4551C58.5605 17.7941 58.6972 18.1254 58.9382 18.3664C59.178 18.6063 59.5093 18.7441 59.8496 18.7441Z"
                                            fill="#33384B" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column c">
                        <div class="wrap-layout-area wrap-layout-4" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Certified Salesforce Experts
                                    </div>
                                    <p>
                                        200+ certifications & Skilled across core and industry-specific clouds
                                    </p>

                                </div>

                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59"
                                        fill="none">
                                        <g clip-path="url(#clip0_160_296)">
                                            <path
                                                d="M52.0154 40.7257C53.737 39.42 54.8516 37.3535 54.8516 35.031C54.8516 31.0915 51.6465 27.8865 47.707 27.8865C43.7675 27.8865 40.5625 31.0915 40.5625 35.031C40.5625 37.3528 41.6764 39.4186 43.397 40.7244C41.9692 41.3137 40.6699 42.1936 39.5843 43.3195C38.3672 40.913 36.3137 38.9987 33.8084 37.9608C35.53 36.655 36.6445 34.5885 36.6445 32.2661C36.6445 28.3266 33.4395 25.1216 29.5 25.1216C25.5605 25.1216 22.3555 28.3266 22.3555 32.2661C22.3555 34.5885 23.47 36.655 25.1916 37.9608C22.6863 38.9987 20.6329 40.913 19.4157 43.3195C18.3301 42.1934 17.0308 41.3137 15.603 40.7244C17.3236 39.4186 18.4375 37.3528 18.4375 35.031C18.4375 31.0915 15.2325 27.8865 11.293 27.8865C7.35345 27.8865 4.14844 31.0915 4.14844 35.031C4.14844 37.3535 5.26298 39.42 6.98459 40.7257C2.88881 42.4225 0 46.462 0 51.1639V57.8475C0 58.4838 0.515904 58.9998 1.15234 58.9998H19.3594H39.6406H57.8477C58.4841 58.9998 59 58.4838 59 57.8475V51.1639C59 46.462 56.1112 42.4225 52.0154 40.7257ZM6.45312 35.031C6.45312 32.3623 8.62426 30.1912 11.293 30.1912C13.9617 30.1912 16.1328 32.3623 16.1328 35.031C16.1328 37.6998 13.9617 39.8709 11.293 39.8709C8.62426 39.8709 6.45312 37.6998 6.45312 35.031ZM18.207 48.3989V56.6951H2.30469V51.1639C2.30469 46.2076 6.33685 42.1756 11.293 42.1756C14.1516 42.1756 16.8123 43.5242 18.5078 45.8065C18.3114 46.6393 18.207 47.5071 18.207 48.3989ZM24.6602 32.2661C24.6602 29.5974 26.8313 27.4263 29.5 27.4263C32.1687 27.4263 34.3398 29.5974 34.3398 32.2661C34.3398 34.9348 32.1687 37.106 29.5 37.106C26.8313 37.106 24.6602 34.9348 24.6602 32.2661ZM38.4883 56.6951H36.2028V53.0621C36.2028 52.4258 35.6869 51.9098 35.0505 51.9098C34.4141 51.9098 33.8981 52.4258 33.8981 53.0621V56.6951H20.5117V48.3989C20.5117 43.4427 24.5439 39.4106 29.5 39.4106C34.4561 39.4106 38.4883 43.4427 38.4883 48.3989V56.6951ZM42.8672 35.031C42.8672 32.3623 45.0383 30.1912 47.707 30.1912C50.3757 30.1912 52.5469 32.3623 52.5469 35.031C52.5469 37.6998 50.3757 39.8709 47.707 39.8709C45.0383 39.8709 42.8672 37.6998 42.8672 35.031ZM56.6953 56.6951H40.793V48.3989C40.793 47.5071 40.6886 46.6393 40.4922 45.8065C42.1877 43.5242 44.8484 42.1756 47.707 42.1756C52.6631 42.1756 56.6953 46.2076 56.6953 51.1639V56.6951Z"
                                                fill="#33384B" />
                                            <path
                                                d="M40.9155 3.54945C40.4656 3.09934 39.7359 3.09946 39.2858 3.54945L35.3316 7.5036C34.8816 7.95359 34.8816 8.68326 35.3316 9.13336C35.5567 9.3583 35.8516 9.47088 36.1466 9.47088C36.4415 9.47088 36.7365 9.35842 36.9614 9.13336L40.9155 5.17921C41.3655 4.72922 41.3655 3.99956 40.9155 3.54945Z"
                                                fill="#33384B" />
                                            <path
                                                d="M23.6675 7.50356L19.7134 3.54941C19.2634 3.09942 18.5337 3.09942 18.0836 3.54941C17.6335 3.9994 17.6336 4.72906 18.0836 5.17917L22.0379 9.13332C22.263 9.35837 22.5578 9.47084 22.8527 9.47084C23.1476 9.47084 23.4426 9.35837 23.6675 9.13332C24.1175 8.68333 24.1175 7.95366 23.6675 7.50356Z"
                                                fill="#33384B" />
                                            <path
                                                d="M29.5 0C28.8636 0 28.3477 0.515904 28.3477 1.15234V3.62838C28.3477 4.26482 28.8636 4.78073 29.5 4.78073C30.1364 4.78073 30.6523 4.26482 30.6523 3.62838V1.15234C30.6523 0.515904 30.1364 0 29.5 0Z"
                                                fill="#33384B" />
                                            <path
                                                d="M38.4539 13.0163C38.2522 12.3955 37.7256 11.9518 37.0798 11.858L32.8968 11.2501L31.0261 7.45958C30.7372 6.87431 30.1524 6.51074 29.4997 6.51074C28.847 6.51074 28.2622 6.87431 27.9733 7.45958L26.1026 11.2501L21.9197 11.858C21.2738 11.9518 20.7473 12.3956 20.5455 13.0163C20.3439 13.637 20.5088 14.3055 20.9762 14.7612L24.0031 17.7116L23.2886 21.8777C23.1782 22.5209 23.4376 23.1589 23.9656 23.5426C24.2639 23.7594 24.6131 23.8695 24.9644 23.8695C25.235 23.8695 25.5069 23.8043 25.7582 23.6723L29.4997 21.7052L33.2411 23.6721C33.8188 23.9759 34.5057 23.9262 35.0338 23.5426C35.5618 23.1589 35.8212 22.5209 35.7108 21.8778L34.9963 17.7116L38.0232 14.7612C38.4906 14.3055 38.6555 13.637 38.4539 13.0163ZM33.1607 16.2825C32.7596 16.6736 32.5766 17.2366 32.6712 17.7891L33.2329 21.0642L30.2918 19.5179C30.0438 19.3875 29.7718 19.3224 29.4997 19.3224C29.2276 19.3224 28.9556 19.3875 28.7076 19.5179L25.7665 21.0642L26.3282 17.789C26.4228 17.2368 26.2398 16.6736 25.8386 16.2825L23.4591 13.9632L26.7473 13.4853C27.3021 13.4048 27.7812 13.0566 28.0291 12.5541L29.4997 9.57436L31.0982 12.8133C31.266 13.1532 31.5903 13.3889 31.9654 13.4436L35.5402 13.9631L33.1607 16.2825Z"
                                                fill="#33384B" />
                                            <path
                                                d="M35.8655 47.7598C35.65 47.5455 35.3538 47.4233 35.0508 47.4233C34.7466 47.4233 34.4504 47.5455 34.2361 47.7598C34.0206 47.9753 33.8984 48.2713 33.8984 48.5757C33.8984 48.8787 34.0206 49.1761 34.2361 49.3903C34.4504 49.6047 34.7466 49.728 35.0508 49.728C35.3538 49.728 35.65 49.6047 35.8655 49.3903C36.0798 49.1749 36.2031 48.8787 36.2031 48.5757C36.2031 48.2726 36.0798 47.9753 35.8655 47.7598Z"
                                                fill="#33384B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_160_296">
                                                <rect width="59" height="59" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </div>


                        <div class="wrap-layout-area wrap-layout-7" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        ISO 27001 certified
                                    </div>
                                    <p>
                                        Enterprise-grade security built by design
                                    </p>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.8777 12.7949H17.8777C12.3548 12.7949 7.87769 17.2721 7.87769 22.7949V37.7949C7.87769 43.3177 12.3548 47.7949 17.8777 47.7949H42.8777C48.4004 47.7949 52.8777 43.3177 52.8777 37.7949V22.7949C52.8777 17.2721 48.4004 12.7949 42.8777 12.7949Z"
                                            stroke="#30353A" stroke-width="1.75" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M34.3974 30.2684C34.3829 29.2332 33.5317 28.4057 32.4962 28.4202C31.4609 28.4347 30.6332 29.2859 30.6479 30.3214L34.3974 30.2684ZM38.9502 36.5449L38.9604 34.6699C38.9482 34.6699 38.9362 34.6699 38.9242 34.6702L38.9502 36.5449ZM40.7852 36.2949L40.2819 34.4887L40.2739 34.4912L40.7852 36.2949ZM47.2527 30.3092C47.2604 29.2737 46.4272 28.4279 45.3917 28.4199C44.3562 28.4122 43.5104 29.2454 43.5027 30.2809L47.2527 30.3092ZM43.5029 30.3214C43.5174 31.3569 44.3687 32.1844 45.4042 32.1697C46.4394 32.1552 47.2672 31.3039 47.2524 30.2684L43.5029 30.3214ZM38.9502 24.045L38.9399 25.9199C38.9522 25.9199 38.9642 25.9199 38.9762 25.9197L38.9502 24.045ZM37.1152 24.295L37.6177 26.1014L37.6264 26.0989L37.1152 24.295ZM30.6452 30.2807C30.6374 31.3162 31.4704 32.1619 32.5059 32.1699C33.5414 32.1779 34.3872 31.3447 34.3952 30.3092L30.6452 30.2807ZM17.2527 24.045C17.2527 23.0094 16.4132 22.17 15.3777 22.17C14.3422 22.17 13.5027 23.0094 13.5027 24.045H17.2527ZM13.5027 36.5449C13.5027 37.5804 14.3422 38.4199 15.3777 38.4199C16.4132 38.4199 17.2527 37.5804 17.2527 36.5449H13.5027ZM28.2527 25.9199C29.2882 25.9199 30.1277 25.0805 30.1277 24.045C30.1277 23.0094 29.2882 22.17 28.2527 22.17V25.9199ZM24.1277 24.045L24.0542 25.9184C24.0787 25.9194 24.1032 25.9199 24.1277 25.9199V24.045ZM20.7527 27.1699L18.879 27.0994C18.8772 27.1464 18.8772 27.1937 18.879 27.2407L20.7527 27.1699ZM24.1277 30.2949V28.4199C24.1032 28.4199 24.0787 28.4204 24.0542 28.4214L24.1277 30.2949ZM24.8777 30.2949V32.1699C24.9022 32.1699 24.9267 32.1694 24.9511 32.1684L24.8777 30.2949ZM28.2527 33.4199L30.1264 33.4907C30.1282 33.4437 30.1282 33.3964 30.1264 33.3494L28.2527 33.4199ZM24.8777 36.5449L24.9511 34.6714C24.9267 34.6704 24.9022 34.6699 24.8777 34.6699V36.5449ZM20.7527 34.6699C19.7172 34.6699 18.8777 35.5094 18.8777 36.5449C18.8777 37.5804 19.7172 38.4199 20.7527 38.4199V34.6699ZM30.6479 30.3214C30.7119 34.8574 34.4402 38.4829 38.9762 38.4197L38.9242 34.6702C36.4587 34.7044 34.4322 32.7339 34.3974 30.2684L30.6479 30.3214ZM38.9399 38.4199C39.7367 38.4242 40.5299 38.3162 41.2964 38.0989L40.2739 34.4912C39.8467 34.6122 39.4044 34.6724 38.9604 34.6699L38.9399 38.4199ZM41.2884 38.1012C44.7922 37.1249 47.2252 33.9462 47.2527 30.3092L43.5027 30.2809C43.4879 32.2449 42.1739 33.9617 40.2819 34.4887L41.2884 38.1012ZM47.2524 30.2684C47.1884 25.7327 43.4602 22.1071 38.9242 22.1701L38.9762 25.9197C41.4417 25.8854 43.4682 27.8562 43.5029 30.3214L47.2524 30.2684ZM38.9604 22.17C38.1637 22.1657 37.3704 22.2738 36.6039 22.491L37.6264 26.0989C38.0537 25.9777 38.4959 25.9177 38.9399 25.9199L38.9604 22.17ZM36.6127 22.4886C33.1077 23.4635 30.6729 26.6427 30.6452 30.2807L34.3952 30.3092C34.4102 28.3447 35.7249 26.6279 37.6177 26.1014L36.6127 22.4886ZM13.5027 24.045V36.5449H17.2527V24.045H13.5027ZM28.2527 22.17H24.1277V25.9199H28.2527V22.17ZM24.2011 22.1714C22.8416 22.1181 21.5167 22.6076 20.5184 23.532L23.0662 26.2837C23.334 26.0357 23.6895 25.9042 24.0542 25.9184L24.2011 22.1714ZM20.5184 23.532C19.5201 24.4563 18.9303 25.7397 18.879 27.0994L22.6264 27.2407C22.6401 26.8759 22.7984 26.5317 23.0662 26.2837L20.5184 23.532ZM18.879 27.2407C18.9303 28.6002 19.5201 29.8837 20.5184 30.8079L23.0662 28.0564C22.7984 27.8084 22.6401 27.4642 22.6264 27.0994L18.879 27.2407ZM20.5184 30.8079C21.5167 31.7324 22.8416 32.2219 24.2011 32.1684L24.0542 28.4214C23.6895 28.4357 23.334 28.3044 23.0662 28.0564L20.5184 30.8079ZM24.1277 32.1699H24.8777V28.4199H24.1277V32.1699ZM24.9511 32.1684C25.3159 32.1542 25.6714 32.2857 25.9392 32.5337L28.4869 29.7819C27.4887 28.8577 26.1637 28.3682 24.8042 28.4214L24.9511 32.1684ZM25.9392 32.5337C26.2069 32.7817 26.3652 33.1259 26.3789 33.4907L30.1264 33.3494C30.0752 31.9897 29.4852 30.7064 28.4869 29.7819L25.9392 32.5337ZM26.3789 33.3494C26.3652 33.7142 26.2069 34.0584 25.9392 34.3064L28.4869 37.0579C29.4852 36.1337 30.0752 34.8502 30.1264 33.4907L26.3789 33.3494ZM25.9392 34.3064C25.6714 34.5544 25.3159 34.6857 24.9511 34.6714L24.8042 38.4184C26.1637 38.4719 27.4887 37.9824 28.4869 37.0579L25.9392 34.3064ZM24.8777 34.6699H20.7527V38.4199H24.8777V34.6699Z"
                                            fill="#30353A" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-layout-area wrap-layout-8" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Flexible Engagement Models
                                    </div>
                                    <p>
                                        Scale teams up or down based on your demand
                                    </p>

                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45"
                                        fill="none">
                                        <g clip-path="url(#clip0_160_328)">
                                            <mask id="mask0_160_328" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="45">
                                                <path d="M0 0.942383H43.8516V44.7939H0V0.942383Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_160_328)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M25.5801 10.0781C25.5801 9.06903 26.3981 8.25098 27.4072 8.25098H34.7158C35.725 8.25098 36.543 9.06903 36.543 10.0781V17.3867C36.543 18.3958 35.725 19.2139 34.7158 19.2139C33.7067 19.2139 32.8887 18.3958 32.8887 17.3867V11.9053H27.4072C26.3981 11.9053 25.5801 11.0872 25.5801 10.0781Z"
                                                    fill="#33384B" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M36.0078 8.78613C36.7213 9.49969 36.7213 10.6566 36.0078 11.3701L28.6992 18.6787C27.9857 19.3922 26.8287 19.3922 26.1152 18.6787C25.4017 17.9652 25.4017 16.8083 26.1152 16.0947L33.4238 8.78613C34.1373 8.07259 35.2942 8.07259 36.0078 8.78613Z"
                                                    fill="#33384B" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 10.0781C0 5.0493 4.10692 0.942383 9.13574 0.942383H34.7158C39.7447 0.942383 43.8516 5.0493 43.8516 10.0781V35.6582C43.8516 40.6871 39.7447 44.7939 34.7158 44.7939H30.8788C29.8697 44.7939 29.0517 43.9759 29.0517 42.9668C29.0517 41.9577 29.8697 41.1396 30.8788 41.1396H34.7158C37.7264 41.1396 40.1973 38.6688 40.1973 35.6582V10.0781C40.1973 7.0675 37.7264 4.59668 34.7158 4.59668H9.13574C6.12511 4.59668 3.6543 7.0675 3.6543 10.0781V13.9151C3.6543 14.9242 2.83625 15.7423 1.82715 15.7423C0.818042 15.7423 0 14.9242 0 13.9151V10.0781Z"
                                                    fill="#33384B" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.13574 22.8682C6.12511 22.8682 3.6543 25.339 3.6543 28.3496V35.6582C3.6543 38.6688 6.12511 41.1396 9.13574 41.1396H16.4443C19.4549 41.1396 21.9258 38.6688 21.9258 35.6582V28.3496C21.9258 25.339 19.4549 22.8682 16.4443 22.8682H9.13574ZM0 28.3496C0 23.3207 4.10692 19.2139 9.13574 19.2139H16.4443C21.4732 19.2139 25.5801 23.3207 25.5801 28.3496V35.6582C25.5801 40.6871 21.4732 44.7939 16.4443 44.7939H9.13574C4.10692 44.7939 0 40.6871 0 35.6582V28.3496Z"
                                                    fill="#33384B" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_160_328">
                                                <rect width="43.8516" height="43.8516" fill="white"
                                                    transform="translate(0 0.942383)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="section9">
        <div class="container contactUs">
            <div class="row">
                <div class="left col-md-7 pt-4">
                    <div class="leftInner">
                        <div class="title aos-init ">
                            Let’s Talk About You
                        </div>
                        <div class="helpPara mb-3">
                            <div>For your Unique Finance Business</div>
                            <div>let us build Cutting-Edge Tailored Solutions Powered by </div>
                        </div>
                        <img src="img/ai-sf-footer.png" alt="icon">
                        <div class="talkAbout d-flex align-items-center flex-wrap aos-init aos-animate mt-4"
                            data-aos="fade-right">
                            <a href="/contact" class="btn btn-primary btnStarted" data-bs-toggle="modal"
                                data-bs-target="#contactUsPopup" onclick="gtag('event', 'cta_click', {
     'event_category': 'CTA',
     'event_label': 'CTA - Contact Us Now'
   });">Contact Us Now
                                <img src="img/users-group.png" alt="" srcset="">
                                <img src="img/arrow-white.svg" alt="arrow icon" class="ml-2"></a>
                        </div>
                    </div>
                </div>
                <div class="right aos-init aos-animate col-md-5" data-aos="zoom-in">
                    <img src="img/talkPeople.png" alt="talk people">
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row ">

                <div class="col-md-12 footerTop d-flex justify-content-between">
                    <div class="footerBox1">
                        <div class="map">
                            <img src="img/map.png" alt="logo">
                        </div>
                        <div class="footerLeftLogo">
                            <div class="companyLogo"> <img src="img/logo.svg" alt="logo"></div>
                            <div class="details">
                                <div class="emailDetails"><a href="mailto:info@cloudchillies.com"><img
                                            src="img/email-id.svg" alt="email Image"></a></div>
                                <div class="contactDetails">
                                    <img src="img/call-Icon.svg" alt="call Icon">
                                    <ul>

                                        <li><span class="country">Australia :</span>
                                            +61-280-155-723</li>
                                        <!-- <li><span class="country">USA :</span>+1-732-654-9056
                                        </li> -->


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footerBox2 d-flex align-items-center gap-4">
                        <img src="img/iso-img.jpg" alt="salesforce partner">
                        <img src="img/salesforce-partner.svg" alt="salesforce partner">
                    </div>
                </div>
            </div>

            <!-- <div class="row copywrite" data-aos-delay="1300">
                    <div class="copywriteInner">
                        © Copyright 2023 <span class="bold">Lending Logik</span>. All Rights Reserved.
                    </div>
                </div> -->
        </div>
    </footer>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-link">
                    <a class="nav-link" href="https://cloudchillies.com.au/privacy-policy">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.youtube.com/iframe_api"></script>
</body>

<!-- Modal 1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog videoDialog">
        <div class="modal-content">
            <div class="modal-body videoContainer">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/dnCH_qoqaAo?si=N7ZrA4aeEMMuJETd"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="taylorModalLabel" aria-hidden="true">
    <div class="modal-dialog videoDialog">
        <div class="modal-content">
            <div class="modal-body videoContainer">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/skIZ--vTJ84?si=OrH-sVICxmPp1RCD"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<?php include '../component/contact-modal.php'; ?>

<!-- SS modal -->
 
<!-- SS modal -->
<div class="modal fade" id="ss-model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">
                    <span class="title-highlight">Download Success Story</span>
                </h5>
                <button type="button" class="btn-close rounded-circle" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body pt-2">
                <p class="modal-subtitle mb-4">Please fill in your details to access the success story</p>

                <div id="form-message" class="alert" style="display: none;"></div>

                <div id="form-loader" class="loader-container" style="display: none;">
                    <div class="spinner-wrapper">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="loading-text">Please wait for a while, we are processing your request.</p>
                    </div>
                </div>

                <form class="row g-3" method="post" id="downloadPdf" action="javascript:void(0);">
                    <div class="col-md-12 position-relative mb-2">
                        <label for="fname">Full Name*</label>
                        <input type="text" class="form-control custom-input" id="fname" name="name"
                            placeholder="Full Name*">
                        <span class="error" id="fnameError">Please enter valid name</span>
                    </div>

                    <div class="col-md-12 position-relative mb-2">
                        <label for="email">Company Email*</label>
                        <input type="text" class="form-control custom-input" id="email" name="company_email"
                            placeholder="Company Email*">
                        <span class="error" id="emailError">Please enter valid email</span>
                    </div>

                    <input type="hidden" value="" id="company-name">

                    <div class="col-12 mt-4">
                        <button type="submit" id="submitBtn" class="btn btn-primary w-100 btnStarted ">
                            <span class="btn-text">Download </span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div id="toast" class="toast align-items-center text-white border-0 position-fixed bottom-0 end-0 m-3" role="alert"
    aria-live="assertive" aria-atomic="true" style="z-index: 1056;">
    <div class="d-flex">
        <div id="toast-message" class="toast-body">
            <!-- Message will be inserted dynamically -->
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"></button>
    </div>
</div>


<script src="../js/jquery-3.6.4.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="js/custom.js" defer></script>
<script src="../js/contactModalScript.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/wow.min.js"></script>
<script>
AOS.init({
    disable: 'mobile',
    duration: 1200,
    once: true
});

//=====  WOW active

new WOW().init();


$(".home-banner").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: false,
    autoPlaySpeed: 50000,
    autoPlayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});


$('.clientFeeback').owlCarousel({
    loop: true,
    center: true,
    nav: true,
    dot: true,
    margin: 30,
    responsive: {
        0: {
            items: 1,
        },
        500: {
            items: 1,
        },
        1000: {
            items: 3,
        },
    },
});

$(".full-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: false,

    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});


document.addEventListener("DOMContentLoaded", function() {
    const modals = document.querySelectorAll('.modal');

    modals.forEach(modal => {
        // Pause YouTube iframe when modal is hidden
        modal.addEventListener('hidden.bs.modal', function() {
            const iframes = modal.querySelectorAll('iframe');
            iframes.forEach(iframe => {
                iframe.contentWindow.postMessage(
                    '{"event":"command","func":"pauseVideo","args":""}', '*');
            });
        });

        // Remove autoplay=1 on open (optional safety)
        modal.addEventListener('show.bs.modal', function() {
            const iframes = modal.querySelectorAll('iframe');
            iframes.forEach(iframe => {
                let src = iframe.getAttribute('src');
                if (src.includes("autoplay=1")) {
                    iframe.setAttribute('src', src.replace("autoplay=1",
                        "autoplay=0"));
                }
            });
        });
    });
});
</script>

</html>
<!------------------------------>
<!-- Footer End -->
<!------------------------------>'
