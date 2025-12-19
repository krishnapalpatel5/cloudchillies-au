<!-- <?php
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
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PQ9Z8LHLME"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-PQ9Z8LHLME');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Chillies Nonprofits</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lending-logik-responsive.css">
    <!-- <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
    function enableSubmitBtn() {
        document.getElementById("submitBtn").disabled = false;
    }

    // Traccker code//

    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "s116e2t2wn");
    </script>
</head>

<body>
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
                <span class="burger-line"></span>.
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
                        <a class="nav-link" href="https://cloudchillies.com.au/financial-services">Fintech</a>
                    </li>

                    <li class="menu-item">
                        <a class="nav-link active" href="https://cloudchillies.com.au/nonprofits">Nonprofit
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

    <div class="mainBanner npo-section">
        <!-- <header id="header" class="header1 headerInner  ">
            <section class="container header-container pt-4">
                <a href="https://cloudchillies.com.au/"><img src="img/logo.svg" alt="Logo" width="240"></a>
            </section>
        </header> -->



        <section class="heroSection " id="homePage">
            <!-- 
            <div class="heroBanner py-4">
                <div class="container header-container">
                    <div class="row ">
                        <div class="col-lg-6 col-xl-6 d-flex  flex-column justify-content-center left ">
                            <div class="hero-text home-content">
                                <h1 class="home-title f-56"><span class="text-gradient">20+Years</span> of
                                    Empowering Leading
                                    <span class="text-gradient">Australian Nonprofits</span> achieve
                                    their goals and drive impact with
                                </h1>

                                <div class="d-flex powered-by">
                                    <div>
                                        <img src="img/ai-sf-logo.svg" class="sf-logo">
                                         <img src="img/ai-sf-logo-mobile.png" class="mobile-b" > 
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-xl-6 heroright">
                            <div class="servicesContainer  desktop ai-img">
                                <img src="img/portrait-volunteer-group-holding-box.png" alt="logo">
                            </div>

                        </div>
                    </div>


                </div>
            </div> -->


            <div class="owl-carousel home-banner owl-theme p-0">

                <div class="item">
                    <div class="container header-container first-slide">
                        <div class="row">
                            <div class="col-md-6 d-flex  flex-column justify-content-center left ">
                                <div class="hero-text home-content">
                                    <h1 class="home-title f-56"><span class="text-gradient">20+ Years</span> of
                                        Empowering Leading
                                        <span class="text-gradient">Australian Nonprofits</span> achieve
                                        their goals and drive impact with
                                    </h1>
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
                                    <img src="img/portrait-volunteer-group-holding-box.png">
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

                                <div class="c-logo mb-3">
                                    <img src="img/trust-us/obk-logo.png" alt="" style="width:135px;">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Feeding Communities with Salesforce</span>

                                    </h1>

                                    <p class="banner-des">
                                        From pantry to portal, we enabled OBK to manage people, meals, and donations on
                                        Salesforce — turning compassion into operations. 
                                    </p>

                                    <div class="d-flex powered-by">
                                        <a href="#contactUsPopup" class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="obk">Read More
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
                                    <img src="img/obk-banner.png" alt="logo">
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

                                <div class="c-logo mb-3">
                                    <img src="img/trust-us/caritas-aus.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Compassion at Scale-Fueled by Salesforce</span>

                                    </h1>
                                    <p class="banner-des">
                                        Helping Caritas Australia reach millions of lives with AI-driven fundraising,
                                        outreach & program systems.
                                    </p>

                                    <div class="d-flex powered-by">
                                        <a href="#contactUsPopup" class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="caritas">Read
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
                                    <img src="img/caritas-banner.png" alt="logo">
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

                                <div class="c-logo mb-3">
                                    <img src="img/trust-us/raise.png" alt="" style="width:210px;">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Digitizing Mentorship. Empowering Youth. Powered by
                                            Salesforce.</span>

                                        <p class="banner-des">
                                            With Tailored Salesforce Development, Raise can say ‘yes’ more often 
                                        </p>

                                    </h1>

                                    <div class="d-flex powered-by">
                                        <a href="#contactUsPopup" class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="raise">Read
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
                                    <img src="img/raise-banner.png" alt="logo">
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

                                <!-- <div class="c-logo mb-3">
                                    <img src="img/trust-us/logo1.png" alt="">
                                </div> -->
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Sending Powerful Messages to Pope-Powered by
                                            Salesforce</span>

                                    </h1>
                                    <p class="banner-des">
                                        Enabling Hope through Prayers & Donations.
                                    </p>


                                    <div class="d-flex powered-by">
                                        <a href="#contactUsPopup" class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="pope">Read
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
                                    <img src="img/pop-banner.png" alt="logo">
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

                                <div class="c-logo mb-3">
                                    <img src="img/trust-us/mnd-aus.png" alt="">
                                </div>
                                <div class="hero-text">
                                    <h1 class="line1 ">

                                        <span class="bannerText2">Reducing Admin Burden to Improve MND Care with
                                            Salesforce</span>

                                    </h1>
                                    <p class="banner-des">
                                        Enabling Hope through Prayers & Donations.
                                    </p>


                                    <div class="d-flex powered-by">
                                        <a href="#contactUsPopup" class="btn btnStarted read_more_btn "
                                            data-bs-toggle="modal" data-bs-target="#ss-model" data-id="mnd">Read
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
                                    <img src="img/mnd-Banner.png" alt="logo">
                                </div>
                                <!-- <div class="mobile mobileInfo text-center">
                                    <img src="img/lending-banner-img.png">
                                </div> -->
                            </div>
                        </div>


                    </div>
                </div>







            </div>






        </section>


    </div>

    <section class="section position-relative sction-innerShadow">
        <div class="circle-wave-shape">
            <img src="img/circle-waves.svg" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-offring">
                        <div class="service-left">
                            <div class="sectionTitle mb-4">
                                <span class="bold">Salesforce Service Offerings</span>
                                <span class="lightWeight">For</span>
                                <span class="bold text-gradient">Nonprofits</span>
                            </div>
                            <p class="text-start">Whether you’re just starting with NPSP or optimizing a global org, we
                                bring 20+ years of experience across the full Salesforce ecosystem.</p>
                            <div class="mt-3 sfp-logo">
                                <img src="img/salesforcePartner.png" alt="salesforce partner" />
                            </div>
                        </div>

                        <!-- Left side -->
                        <div class="service-right">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="so-box">
                                        <div class="d-flex sf-points gap-4">
                                            <img src="img/cross-cloud-implementation.svg" alt="">
                                            <div>
                                                <h2 class="bold">Multi-Cloud Implementation </h2>
                                            </div>
                                        </div>
                                        <p class="mb-0">
                                            Nonprofit Cloud, Experience Cloud, Marketing Cloud — set up right, the first
                                            time.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="so-box">
                                        <div class="d-flex sf-points gap-4">
                                            <img src="img/integrations-that-just-work.svg" alt="">
                                            <h2 class="bold text-start">Integrations That Just Work</h2>
                                        </div>
                                        <p class="mb-0">
                                            Connect your donation platforms, email tools, grant portals, and case
                                            systems.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="so-box">
                                        <div class="d-flex sf-points gap-4">
                                            <img src="img/custom-development.svg" alt="">
                                            <h2 class="bold text-start">Custom Development</h2>
                                        </div>
                                        <p class="mb-0">
                                             Automate the manual, connect the disconnected, and build what off-the-shelf
                                            can’t.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="so-box">
                                        <div class="d-flex sf-points gap-4">
                                            <img src="img/managed-services.svg" alt="">
                                            <h2 class="bold text-start">Managed Services</h2>
                                        </div>
                                        <p class="mb-0">
                                            Get admin, enhancement, and data support — without hiring in-house.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="so-box">
                                        <div class="d-flex sf-points gap-4">
                                            <img src="img/org-healthcheck.svg" alt="">
                                            <h2 class="bold text-start">Org Health check & Optimization</h2>
                                        </div>
                                        <p class="mb-0">
                                            Clean up messy Salesforce orgs, legacy workflows, and access chaos.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action si d-flex align-items-center justify-content-between">

                        <div class=" flex-column">
                            <h2 class="bold text-start">
                                <div><span class="lightWeight">Learn how to</span> Maximize Your Mission’s</div>
                                <div> Impact <span class="lightWeight">with </span> Salesforce
                                </div>
                            </h2>
                        </div>

                        <a href="/salesforce" class="btn btn-primary " data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup">Show Me How
                            <img src="img/arrow-white.svg" alt="arrow icon" class="ml-2">
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>


    <section class="npo-ai-powered-sol npo-banner p-5 position-relative">
        <div class="container ">

            <div class="row">
                <div class="col-xl-8 text-center">

                    <div class="sectionTitle mb-3 text-start">
                        <span class="bold primary-text text-gradient">NDIS-Ready</span> <span
                            class="bold primary-text "> Salesforce
                            Solutions</span>
                    </div>

                    <div class="ai-powered-description b">
                        We understand the NDIS lifecycle — from onboarding participants to rostering, service delivery,
                        audits, and outcomes reporting. Whether you're an NDIS provider or a community partner, we help
                        you stay compliant, connected, and in control.
                    </div>

                    <div class="d-flex align-items-center nd-text">
                        <div class="d-flex align-items-center ndis-text">
                            <img src="img/tick-blue.svg" alt="">
                            <span class="ms-2">Support Coordination</span>
                        </div>

                        <div class="d-flex align-items-center ndis-text">
                            <img src="img/tick-blue.svg" alt="">
                            <span class="ms-2">Participant Profiles + Case History</span>
                        </div>

                        <div class="d-flex align-items-center ndis-text">
                            <img src="img/tick-blue.svg" alt="">
                            <span class="ms-2">NDIA Billing & Audits</span>
                        </div>

                    </div>

                    <div class="d-flex align-items-center nd-text">

                        <div class="d-flex align-items-center ndis-text">
                            <img src="img/tick-blue.svg" alt="">
                            <span class="ms-2">Service Agreements + Outcome Tracking</span>
                        </div>

                        <div class="d-flex align-items-center ndis-text">
                            <img src="img/tick-blue.svg" alt="">
                            <span class="ms-2">Community Portal & Mobile Access</span>
                        </div>


                    </div>

                    <div class="call-to-action si b d-flex align-items-center justify-content-between">

                        <div class=" flex-column">
                            <h2 class="bold text-start">
                                <div><span class="lightWeight"> See How </span> It Can Work for You</div>


                            </h2>
                        </div>

                        <a href="/salesforce" class="btn btn-primary btnStarted " data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup">Contact Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                fill="none">
                                <path d="M11.5664 6.7124L22.0224 17.1684L11.5664 27.6245" stroke="white"
                                    stroke-width="3.70531" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="col-xl-4 ndis-img">
                    <img src="img/ndis.png" alt="" srcset="" width="100%">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                </div>
            </div>

        </div>
    </section>






    <section class=" npo-banner p-5 position-relative">
        <div class="container ">
            <div class="ai-robot">
                <img src="img/ai-robot.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <div class="sectionTitle mb-3 text-start">
                        <span class="bold primary-text text-gradient">Leverage AI,</span> <span
                            class="lightWeight">That</span> <span class="bold primary-text "> Solve What Matters Most to
                            Nonprofits</span>
                    </div>

                    <div class="ai-powered-description">
                        From fundraising to reporting, we help nonprofits apply AI where it actually helps-reducing
                        manual effort, surfacing insights, and keeping people engaged.
                    </div>


                    <div class="row ai-points-wrap cta">




                        <div class="col-md-12">

                            <div class="row-ai-points mw-1000">
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/predictive-donor-insights.png"
                                            class="img-fluid" alt="" srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Fundraising & Donor Engagement</h2>
                                        <p>Availability is a concern with volunteers</p>
                                        <span>Donors are there but unengaged. AI helps you prioritise outreach,
                                            personalise asks, and re-engage supporters who’ve gone quiet.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/smart-volunteer.png" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Volunteer Management</h2>
                                        <p>Schedules shift. Follow-ups slip.</p>
                                        <span>AI matches roles, flags disengagement, and keeps volunteers in the
                                            loop.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/impact-reports.png" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Marketing & Communication</h2>
                                        <p>Build smarter 2-step campaigns, faster.</p>
                                        <span>AI assists with content, timing, and targeting — no heavy lifting.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/impact-reports.png" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold ">Impact Reporting</h2>
                                        <p>The data’s there — the time isn’t.</p>
                                        <span>AI drafts dashboards and insights so your story gets shared, not
                                            shelved.</span>
                                    </div>
                                </div>
                                <div class="d-flex ai-points">
                                    <div class="points-img"><img src="img/risk-alerts.png" class="img-fluid" alt=""
                                            srcset=""></div>
                                    <div class="d-flex flex-column text-start">
                                        <h2 class="bold">Program Delivery & Casework</h2>
                                        <p>High volumes. Limited bandwidth.</p>
                                        <span>AI streamlines intake, detects urgency, and routes tasks instantly.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row cta">
                        <div class="col-md-12">
                            <div class="call-to-action ai d-flex align-items-center justify-content-between">

                                <div class="d-flex">
                                    <h2 class="lightWeight text-start"> <span class="bold">Find Out</span> What <span
                                            class="bold">AI</span> Can Do for You</h2>
                                </div>

                                <a href="/ai-contact" class="btn btn-primary btnStarted " data-bs-toggle="modal"
                                    data-bs-target="#contactUsPopup">Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                        fill="none">
                                        <path d="M11.5664 6.7124L22.0224 17.1684L11.5664 27.6245" stroke="white"
                                            stroke-width="3.70531" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>


                            </div>
                        </div>
                    </div>



                </div>

    </section>


    <!------------------------------>
    <!-- They Trust US -->
    <!------------------------------>

    <section class="client-section bt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="sectionTitle text-center  mb-4">
                        <span class="lightWeight"> They </span> <span class="bold text-gradient">Trust Us</span>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trustLogo ">
                                <ul class="d-flex align-items-center flex-wrap justify-content-center pb-0">
                                    <li>
                                        <img src="img/trust-us/caritas-aus.png" alt="logo">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/raise.png" alt="logo" style="width:200px;">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/united-way.png" alt="logo">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/big-kitchen.png" alt="logo">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/mnd-aus.png" alt="logo">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/huntington-aus.png" alt="logo">
                                    </li>
                                    <li>
                                        <img src="img/trust-us/neuroblastoma-aus.png" alt="logo">
                                    </li>
                                </ul>
                            </div>
                        </div>
    </section>

    <!-- <section class="section8-Inner" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-6 left " data-aos="fade-right" data-aos-delay="1000">
                    <div class="clientTestiContainer">
                        <div class="clientTestiInner">
                            <div class="sectionTitle text-center">
                                Clients <span class="bold">Love Us </span>
                            </div>
                            <div class="clientTestiSubHeading text-center">
                                Don't just take our word for it
                            </div>
                            <div class="owl-carousel full-sliderb owl-theme p-0">

                                <div class="item">
                                    <div class="testiItem">
                                        <div class="testiItemInner d-flex">
                                            <div class="left">
                                                <div class="modelTestimonial2">
                                                    <img src="img/client-thumbnail.png"
                                                        class="img-fluid testimonialCover" alt="" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h4 class="mb-0 bold">Rabbi Dr Dovid Slavin</h4>
                                                    <p>CEO at Our Big Kitchen</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="text-right"><img src="img/testiDot.svg" alt="img">
                        </div>
                    </div>





                </div>

                <div class="col-6 right offeringTalkBg" data-aos="fade-left" data-aos-delay="1000">
                    <div><img src="img/testiDotTop.svg" class="talkContainerImg" alt="img"></div>
                    <div class="talkContainer ss-container">

                        <div class="sectionTitle text-center aboutHeading">
                            Success <span class="bold">Stories</span>
                        </div>

                        <div class="owl-carousel full-slider1 owl-theme p-0">

                            <div class="item">
                                <div class="ss-img-container">
                                    <div class="ss-img-inner position-relative">
                                        <img src="img/npo-1.png" alt="img">
                                        <div class="ss-img-inner-content">
                                            Helping OBK Feed Communities Smarter-with Streamlined Volunteer & Donation
                                            Systems
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ss-img-container">
                                    <div class="ss-img-inner position-relative">
                                        <img src="img/npo-2.png" alt="img">
                                        <div class="ss-img-inner-content">
                                            Helping Caritas Australia Empower 1.5 Million Lives-with AI-Powered
                                            Fundraising, Outreach & Program Management
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="item">
                                <div class="ss-img-container">
                                    <div class="ss-img-inner position-relative">
                                        <img src="img/npo-3.jpg" alt="img">
                                        <div class="ss-img-inner-content">
                                            Transforming Youth Mentorship with Raise Foundation — Powered by Salesforce
                                            + AI
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
                                src="https://www.youtube.com/embed/QGjOKUj8fu8?si=QR1xhig9XDEKflAb"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

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
                            <img src="img/ss/obk-banner.jpg">
                            <div class="sliderContent bg-1 ">
                                <div class="ss-shape">
                                    <img src="img/ss-shape.svg" alt="">
                                </div>
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/obk-white-logo.png" alt="" srcset="" class="obk">
                                    </div>

                                    <div class="line2">Feeding Communities with Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="obk"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/caritas-banner.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/caritas-white-logo.png" alt="" srcset="">
                                    </div>

                                    <div class="line2">Compassion at Scale — Fueled by Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="caritas"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/raise-banner.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/raise-logo-white.png" alt="" srcset="">
                                    </div>
                                    <div class="line2">Raise Foundation: Digitizing Mentorship. Empowering Youth.
                                        Powered by Salesforce.
                                    </div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="raise"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/pope-banner.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>

                                    <div class="line2">Sending Powerful Messages to Pope - Powered by Salesforce</div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="pope"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sliderItem">
                            <img src="img/ss/mnd-banner.jpg">
                            <div class="sliderContent bg-3">
                                <div class="sliderContentInner">
                                    <div class="line1"> Success <span class="bold">Stories</span></div>
                                    <div class="c-logo">
                                        <img src="img/ss/mnd-logo-white.png" alt="" srcset="">
                                    </div>

                                    <div class="line2">Reducing Admin Burden to Improve MND Care with Salesforce
                                    </div>
                                    <a class="btn btn-secondry read_more_btn" data-bs-toggle="modal"
                                        data-bs-target="#ss-model" data-id="mnd"><span>Read
                                            more</span> <img src="img/arrow-right-b.svg" alt="arrow" width="24px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <!-- <div class="storiesBtn text-center">
                <a href="./success-stories" class="btn btn-primary-outline ">View All Success Stories <img
                        src="img/lending-logik-imgs/arrow-green.svg" class="ms-2"></a>
            </div> -->
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
                        <a href="" class="btn btnStarted  position-relative" data-bs-toggle="modal"
                            data-bs-target="#contactUsPopup">Show Me
                            How
                            <img src="img/arrow-white.png" alt="arrow icon" class="ml-2">
                        </a>
                    </div>


                </div>

            </div>
        </div>


        </div>


    </section>

    <!-- 
    <section class="pt-4 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-bg">
                        <h2 class="sectionTitle text-center">
                            <div><span class="lightWeight">Clients</span> <span class="bold text-gradient">Love
                                    Us</span></div>
                        </h2>
                        <div class="client-description">Dont Just Take Our Words, Hear From Them</div>
                        <div class="client-testimonials">
                            <div class="client-thumbnail position-relative">
                                <img src="img/play-btn.svg" class="play-btn" alt="">
                                <img src="img/client-thumbnail.png" class="img-fluid testimonialCover" alt=""
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                            </div>
                            <div class="client-details">
                                <img src="img/trust-us/big-kitchen.png" class="img-fluid" alt="logo">
                                <span class="client-name">Wayne Peterson</span>
                                <span class="client-designation">Director of IT at Marathon</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section8">
        <div class="container">
            <div class="row">
                <div class="sectionTitle text-center aos-init aos-animate mt-5 mb-5" data-aos="fade-up">
                    <span class="lightWeight">Why Choose Us as Your </span>
                    <span class="bold text-gradient">Salesforce Partner?</span>
                </div>
                <div class="wrap-layout">
                    <div class="d-flex flex-column a">
                        <div class="d-flex">
                            <div class="wrap-layout-area wrap-layout-1" data-aos="fade-up">
                                <div class="gridInner">
                                    <div class="gridInner-content">
                                        <div class="gridTitle">
                                            100% Nonprofit-Focused
                                        </div>
                                        <div class="discription">
                                            Salesforce solutions built for fundraising, grants, volunteers & programs.
                                        </div>
                                    </div>
                                    <!-- <div class="no"><img src="img/one.svg"></div> -->
                                    <div class="icon"><img src="img/Nonprofit-Focused.svg" class="img-fluid" alt="Icon">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-layout-area wrap-layout-2" data-aos="fade-up">
                                <div class="gridInner">
                                    <div class="gridInner-content">
                                        <div class="gridTitle">
                                            20+ Years in the Nonprofits Sector
                                        </div>
                                        <div class="discription">
                                            Deep experience across education, health, community, and youth orgs.
                                        </div>
                                    </div>
                                    <!-- <div class="no"><img src="img/one.svg"></div> -->
                                    <div class="icon"><img src="img/Sector.svg" class="img-fluid" alt="Icon">
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
                                    <div class="discription">
                                        Across NPSP, Experience Cloud, and Marketing Cloud.
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/salesforce-certifications.svg" class="img-fluid"
                                        alt="Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column b">
                        <div class="wrap-layout-area wrap-layout-3" data-aos="fade-up">
                            <div class="gridInner">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        AI-Enabled Impact
                                    </div>
                                    <div class="discription">
                                        From donor predictions to automated reports - built into your CRM.
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/AI-Enabled Impact.svg" class="img-fluid" alt="Icon">
                                </div>
                            </div>
                        </div>
                        <div class="wrap-layout-area wrap-layout-6" data-aos="fade-up">
                            <div class="gridInner">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Strategy + Delivery
                                    </div>
                                    <div class="discription">
                                        Advisory + execution in one team — no handoffs, no delays.
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/Strategy + Delivery.svg" class="img-fluid" alt="Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column c">
                        <div class="wrap-layout-area wrap-layout-4" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Nonprofit Cloud Experts
                                    </div>
                                    <div class="discription">
                                        Certified consultants with real-world program expertise.
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/nonprofit-cloud.svg" class="img-fluid" alt="Icon">

                                </div>
                            </div>
                        </div>


                        <div class="wrap-layout-area wrap-layout-7" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        ISO 27001 certified
                                    </div>
                                    <div class="discription">
                                        ISO 27001 certified — because donor trust matters
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/iso_svgrepo.com.svg" class="img-fluid iso" alt="Icon">
                                </div>
                            </div>
                        </div>
                        <div class="wrap-layout-area wrap-layout-8" data-aos="fade-up">
                            <div class="gridInner flex-row">
                                <div class="gridInner-content">
                                    <div class="gridTitle">
                                        Flexible Engagement Models
                                    </div>
                                    <div class="discription">
                                        Scale your Salesforce team up/down with our dedicated or shared resource models.
                                    </div>
                                </div>
                                <!-- <div class="no"><img src="img/one.svg"></div> -->
                                <div class="icon"><img src="img/flexible-engagement-models.svg" class="img-fluid"
                                        style="min-width: 45px;" alt="Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section9 npo-bg">
        <div class="container contactUs">
            <div class="row">
                <div class="left col-md-7 pt-4">
                    <div class="leftInner">
                        <div class="title aos-init aos-animate" data-aos="fade-right">
                            Let’s Talk About Your Mission
                        </div>
                        <div class="helpPara aos-init aos-animate" data-aos="fade-right">
                            <div>For your unique Nonprofit goals, let’s build purpose-driven</div>
                            <div>solutions powered by</div>
                        </div>
                        <img src="img/ai-sf-footer.png" alt="icon">
                        <div class="talkAbout d-flex align-items-center flex-wrap aos-init aos-animate mt-4"
                            data-aos="fade-right">
                            <a href="/contact" class="btn btn-primary btnStarted" data-bs-toggle="modal"
                                style="font-size: 22px !important;" data-bs-target="#contactUsPopup">Talk to Our
                                Nonprofits Experts

                                <img src="img/users-group.png" alt="" srcset="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 34 34"
                                    fill="none">
                                    <path d="M11.5664 6.7124L22.0224 17.1684L11.5664 27.6245" stroke="white"
                                        stroke-width="3.70531" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="right aos-init aos-animate col-md-5" data-aos="zoom-in">
                    <img src="img/talkPeople-npo.png" class="talk-people" alt="talk people">
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
            <div class="modal-header">
                <h5 class="modal-title">Client's Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

                <div class="videoContainer">

                    <iframe width="100%" height="500"
                        src="https://www.youtube.com/embed/QGjOKUj8fu8?si=tou3QquKTlgzqN3K" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/contact-modal.php'; ?>

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


<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
<script src="../js/jquery-3.6.4.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
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

$(".full-slider").owlCarousel({
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

$(".full-slider1").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
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
                    iframe.setAttribute('src', src.replace("autoplay=1", "autoplay=0"));
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
