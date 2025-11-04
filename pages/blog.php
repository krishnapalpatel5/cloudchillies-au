<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17533579353"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-17533579353');
    </script>

    <?php

    include("./" . $addHomeInUrl . "/header.php")
    ?>


    <div class="mainBanner npo-section position-relative ss-Banner">
        <div class="banner-shap">
            <img src="<?php echo $base_url?>img/banner-shade.png" alt="">
        </div>
        <section class="heroSection ">
            <div class="heroBanner pt-4 heroBanner-inner">
                <div class="container header-container">
                    <div class="row ">
                        <div class="col-lg-6 col-xl-5 d-flex  flex-column justify-content-center left ">
                            <div class="hero-text home-content">
                                <h1 class="home-title-inner f-56 aiHeroBannerTitle">
                                    <span class="text-gradient">Success</span>
                                    Stories</span>
                                </h1>
                                <p class="mb-5">
                                    Amplified growth-Salesforce catalyzed success stories, fostering innovation and
                                    expansion
                                </p>

                                <!-- <div class="d-flex banner-btn">
                                    <a href="/contact" class="btn btnStarted  position-relative" data-bs-toggle="modal"
                                        data-bs-target="#contactUsPopup">
                                        Talk to Our Salesforce Specialist
                                        <img src="<?php echo $base_url?>img/arrow-white.png" alt="arrow icon"
                                            class="ml-2">

                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 ss-banner-right ">
                            <img src="<?php echo $base_url?>img/ss-baner-img.png" alt="hero image"
                                class="img-fluid ss-banner-img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="blogList">
        <div class="container">
            <div class="row pb-5">





                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/smart-group-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Digitizing salary packaging, leasing, and payroll
                            services for Smartgroup with Salesforce and Azure
                        </div>
                        <div class="stroyDis">
                            Digitizing and streamlining salary packaging, novated leasing, and fleet management
                            processes. The project aimed to integrate quoting, credit checks, and application portals
                            seamlessly, simplify claims and vehicle administration for employees, and build a unified
                            CRM for lead capture, finance, and payroll coordination.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="smart-group"> Learn
                                more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/brickworks-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Digitizing new product development and plant onboarding for
                            Australia's largest brick manufacturer Brickworks
                        </div>
                        <div class="stroyDis">
                            Brickworks Limited is Australia’s largest
                            brickmaker with operations in the U.S. and NZ. It offers building
                            products and services, backed by design studios and a modern
                            digital stack including Salesforce and JD Edwards.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="brickworks"> Learn
                                more <img src="<?php echo $base_url?>img/blogLearnMore.svg"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/alsco-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Empowering Alsco customers with a
                            self-service portal for recurring, onetime, and direct sales orders
                        </div>
                        <div class="stroyDis">
                            Alsco is a global leader in uniform and linen rental, serving
                            healthcare, hospitality, automotive, and manufacturing with
                            tailored rental and hygiene services across Australia, North
                            America, Europe, Asia, and South America.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="alsco"> Learn more <img src="<?php echo $base_url?>img/blogLearnMore.svg"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/abc-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Assisting Australian Business Credit to give Rent Roll Loans & Trail Book Loans with
                            Salesforce
                        </div>
                        <div class="stroyDis">
                            Australian Business Credit achieves process automation in data collection, customer
                            onboarding, and lead management using Salesforce products and custom development to ensure
                            fast approval of loans for businesses, especially commission-based businesses.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-target="#ss-model" data-bs-toggle="modal"
                                data-id="abc"> Learn more <img src="<?php echo $base_url?>img/blogLearnMore.svg"> </a>
                        </div>
                    </div>
                </div>

                <!-- <div class="storyList">
                <div class="storyImg">
                    <img src="<//?php echo $base_url?>img/blog/moneyspot.jpg" alt="story image" class="w-100">
                </div>
                <div class="titleStoryDis d-flex flex-column">
                    <div class="title">
                        Enabling MoneySpot to run End-to-End Loan Management in multiple countries (* USA * Australia * South Africa) with Salesforce
                    </div>
                    <div class="stroyDis">
                        MoneySpot improves its loan origination, loan processing and payment workflows, and delivers a digital-first service to its customers to boost customer satisfaction and for faster service rollouts.
                    </div>
                    <div class="learnMore d-flex align-items-center">
                        <a href="<//?php echo $base_url; ?>success-stories/moneyspot" target="_blank"> Learn more
                             <img src="<//?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                    </div>
                </div>
            </div> -->
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/thn-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Helping THN Capital offer Invoice Factoring/ Invoice Loans with Salesforce
                        </div>
                        <div class="stroyDis">
                            THN Capital extends lending facilities to many more small businesses based on their
                            outstanding invoices, without the pressure of administrative challenges.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="thn">
                                Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/swift-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Enhancing Swift Loans’ ability to provide fast easy Pay Day Loans with Salesforce
                        </div>
                        <div class="stroyDis">
                            Swift Loans achieving prosperity in a dynamic market through tailored solutions leveraging
                            Salesforce products.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="swift"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>




                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/capify-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Empowering Capify to extend Business Loans in Australia & UK with Salesforce
                        </div>
                        <div class="stroyDis">
                            Capify needed a way to streamline the partner onboarding process, enhance the overall
                            partner experience, and increase business process efficiencies.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="capify"> Learn more <img src="<?php echo $base_url?>img/blogLearnMore.svg"
                                    alt="arrow"> </a>
                        </div>
                    </div>
                </div>
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/homevestors-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Helping America’s No. 1 home buyer optimize & simplify its processes using Salesforce
                        </div>
                        <div class="stroyDis">
                            Homevestors of America moves to a simplified and seamless way to manage its franchisees on a
                            single platform and be more effective in its markets.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="homevestors"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/oz-cash-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Facilitating OZ Cash Loans’ underwriting & disbursal of Personal Loans with Salesforce
                        </div>
                        <div class="stroyDis">
                            Oz Cash Loans pursues paperless processing to staying agile and relevant in a dynamic
                            financial market.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="oz-cash"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/regents-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Redefining Regents Capital’s Equipment Financing & Leasing business with Salesforce
                        </div>
                        <div class="stroyDis">
                            Regents Capital innovates its business and automates decision making for loan applications
                            using real-time aggregated data to meet the growing needs of Financial Services markets with
                            our Salesforce solutions.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="regents"> Learn
                                more <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/speedy-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Helping Speedy Business Finance grant Businesses Loans at speed with Salesforce
                        </div>
                        <div class="stroyDis">
                            Speedy Business Finance grants business loans through strategic incorporation of technology
                            integrations and solutions.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="speedy"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>
                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/ift-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Driving IFT Solutions’ Auto Lending & Auctioning business with Salesforce
                        </div>
                        <div class="stroyDis">
                            Integrated Financial Technologies streamlines processes with a custom servicing solution
                            designed for lenders.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="ift"> Learn more <img src="<?php echo $base_url?>img/blogLearnMore.svg"
                                    alt="arrow"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/caritas-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Compassion at Scale-Fueled by Salesforce
                        </div>
                        <div class="stroyDis">
                            Caritas Australia is a Catholic international aid agency
                            supporting over 1.5 million people across 36 countries. It
                            focuses on poverty, education, health, and social justice, with
                            outreach through dioceses, schools, and parishes nationwide.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="caritas"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/raise-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Digitizing Mentorship. Empowering Youth. Powered by
                            Salesforce.
                        </div>
                        <div class="stroyDis">
                            Raise Foundation is Australia’s leading provider of youth mentoring programs, offering early
                            intervention in schools to connect young people with trained mentors for improved wellbeing
                            and life outcomes.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="raise"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>


                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/obk-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Enabling Our Big Kitchen to scale
                            volunteer and food delivery impact with
                            Salesforce
                        </div>
                        <div class="stroyDis">
                            Our Big Kitchen (OBK) is a community-run industrial kitchen
                            based in Sydney, Australia. OBK has empowered thousands of
                            volunteers to prepare and distribute 250,000+ meals everyday
                            to individuals and families in need.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="obk"> Learn
                                more <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/mnd-img.jpg" alt="story image" class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Reducing Admin Burden to Improve MND Care with Salesforce


                        </div>
                        <div class="stroyDis">
                            MND of NSW, an NDIS registered provider, has been providing benefits for
                            and services to members of the Association with Motor Neurone Disease, their families and
                            carers without discrimination in NSW, ACT & NT.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="mnd"> Learn
                                more <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="storyList">
                    <div class="storyImg">
                        <img src="<?php echo $base_url?>img/ss-img/smart-leasing-img.jpg" alt="story image"
                            class="w-100">
                    </div>
                    <div class="titleStoryDis d-flex flex-column">
                        <div class="title">
                            Assisting Smart Leasing to manage Automobile Leasing smartly with Salesforce
                        </div>
                        <div class="stroyDis">
                            Smartleasing streamlines leasing procedures to provide a more efficient, user-friendly, and
                            customer-focused experience for all parties involved.
                        </div>
                        <div class="learnMore d-flex align-items-center">
                            <a class="read_more_btn" href="#" data-bs-toggle="modal" data-bs-target="#ss-model"
                                data-id="smart-leasing"> Learn more
                                <img src="<?php echo $base_url?>img/blogLearnMore.svg" alt="arrow"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </body>

</html>