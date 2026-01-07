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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    :root {
        --primary-color: #222b5d;
        --secondary-color: #364593;
        --text-color: #333;
        --light-bg: #f8f9fa;
        --border-color: #e0e0e0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        line-height: 1.6;
        color: var(--text-color);
    }

    .contact-header {
        /* background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); */
        color: white;
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(248deg, #F5FBFF 32.07%, #E0F3FF 89.11%, #E7F6FF 109.33%);
        margin-top: 20px;
    }

    .contact-header::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 600px;
        height: 100%;
        background: url('img/banner-pattern.png') no-repeat center right;
        opacity: 0.1;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }

    .header-content {
        max-width: 600px;
    }

    .header-title {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #00458C;
    }

    .header-subtitle {
        font-size: 20px;
        opacity: 0.9;
        color: #00458C;
    }

    .contact-section {
        padding: 20px 0;
        background: #fff;
        position: relative;
        z-index: 0;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 60px;
        align-items: start;
    }

    .contact-info {
        background: var(--light-bg);
        padding: 40px 40px 0 40px;
        border-radius: 12px;
    }

    .info-title {
        font-size: 24px;
        color: var(--primary-color);
        margin-bottom: 30px;
        font-weight: 600;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .info-icon {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: var(--primary-color);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .info-content h3 {
        font-size: 18px;
        margin-bottom: 5px;
        color: var(--primary-color);
    }

    .info-content p {
        color: #666;
        font-size: 16px;
    }

    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
    }

    .form-title {
        font-size: 24px;
        color: var(--primary-color);
        margin-bottom: 30px;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: var(--primary-color);
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--secondary-color);
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    .submit-btn {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background: var(--secondary-color);
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        text-decoration: none;
        transition: transform 0.3s;
    }

    .social-link:hover {
        transform: translateY(-3px);
    }
.info-content table tr td{
    padding: 5px;
}
    @media (max-width: 992px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .header-title {
            font-size: 36px;
        }

        .contact-info,
        .contact-form {
            padding: 30px;
        }

        #myContactForm .btn-primary {
            width: 100% !important;
        }

        .contact-section {
            padding: 20px 0;
            background: #fff;
        }
    }
  @media (max-width: 767px) {
         .contact-form {
        padding: 16px;
    }
    .contact-grid {
        display: flex;
        grid-template-columns: none;
        flex-direction: column;
    }
}
@media (max-width: 667px) {
    .contact-form button#submitBtn {
        width: 100% !important;
    }
    .contact-info {
        width: 100%;
    }
}

    </style>
</head>

<body>
    <div class="mainBanner npo-section position-relative contact-banner">
        <div class="banner-shap">
            <img src="img/banner-shade.png" alt="">
        </div>
        <section class="heroSection " id="homePage">
            <div class="heroBanner pt-4 heroBanner-inner">
                <div class="container header-container">
                    <div class="row ">
                        <div class="col-lg-6 col-xl-6 d-flex  flex-column justify-content-center left ">
                            <div class="hero-text home-content">
                                <h1 class="home-title-inner f-56 aiHeroBannerTitle">
                                    Get in <span class="text-gradient">Touch</span>
                                </h1>
                                <p class="mb-5 ">
                                    Have questions? We'd love to hear from you. Send us a message and we'll
                                    respond as soon as possible.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 contact-img">
                            <img src="img/contact-hero.png" alt="hero image" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- <header class="contact-header">
        <div class="container">
            <div class="header-content" data-aos="fade-up">
                <h1 class="header-title">Get in Touch</h1>
                <p class="header-subtitle">Have questions? We'd love to hear from you. Send us a message and we'll
                    respond as soon as possible.</p>
            </div>
        </div>
    </header> -->

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <h2 class="info-title">Contact Information</h2>

                    <!-- <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Office Location</h3>
                            <p>123 Business Street<br>Sydney, NSW 2000, Australia</p>
                        </div>
                    </div> -->

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Phone</h3>
                            <div>
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <!-- <tr>
                                        <td> USA: </td>
                                        <td> +1 732 654 9056</td>
                                    </tr> -->
                                    <tr>
                                        <td> Australia: </td>
                                        <td> +61 280 155 723</td>
                                    </tr>
                                </table>


                            </div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>info@cloudchillies.com</p>
                        </div>
                    </div>

                    <!-- <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Weekend: Closed</p>
                        </div>
                    </div> -->

                    <!-- <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>

                <div class="contact-form" data-aos="fade-left">

                    <h2 class="form-title">Send us a Message</h2>

                    <form class="row mb-0" method="post" id="myForm" action="javascript:void(0);">
                        <div class="mb-3 col-md-12 position-relative">
                            <input type="text" class="form-control" id="fname" name="full_name"
                                placeholder="Full Name*">
                            <span class="error" id="fnameError">Please enter valid name</span>
                        </div>
                        
                        <div class="mb-3 col-md-12 position-relative">
                            <input type="Email" class="form-control" id="email" name="email"
                                placeholder="Work Email*">
                            <span class="error" id="emailError">Please enter your valid email</span>
                        </div>
                        <div class="mb-3 col-md-12 position-relative">
                            <input type="number" class="form-control" id="phone" name="phone_no"
                                placeholder="Phone Number*">
                            <span class="error" id="phoneError">Please enter valid Phone No</span>
                        </div>
                        <div class="mb-3 col-md-12 position-relative">
                            <textarea class="form-control" name="question" id="question" placeholder="How can we help? (Optional)"
                                id="" style="height: 100px"></textarea>
                            <span class="error" id="QuestionError">Please enter your query to proceed </span>
                        </div>
                        <input type="hidden" id="callingPageInput" name="callingPage" value="">
                        <div class="mb-3 col-md-12 position-relative">

                            <div id="html_element"></div>

                            <span id="captchError" class="error">Please click the captcha checkbox</span>
                        </div>
                        <input type="hidden" id="callingPageInput" value="Contact page" name="pagename">
                        <input type="hidden" value="Contact us" id="modalSectionInput" name="section">
                         <!-- Anti-bot Honeypot -->
                    <input type="text" name="website_url_fake" id="website_url_fake" style="display:none !important;">

                    <!-- Anti-bot Timestamp -->
                    <input type="hidden" id="form_start_time" name="form_start_time">
                        <div class="col-md-12">
            
                            
                            <button type="submit" id="submitBtn"
                                class="btn btn-primary green w-100 btnStarted">
                                <span id="submitBtnText">Submit</span>
                                <div id="submitBtnSpinner" class="spinner-border spinner-border-sm ms-2" role="status" style="display: none;">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>

                    <!-- <form id="contactForm" action="formSubmit.php" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
                    </form> -->

                </div>
            </div>
        </div>
    </section>



</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form_start_time").value = Math.floor(Date.now() / 1000);
});
</script>

</html>
