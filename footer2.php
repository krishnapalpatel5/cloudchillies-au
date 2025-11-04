    <!------------------------------>
    <!-- Footer Start -->
    <!------------------------------>
    <?php
    if($currentPageWithoutPhp == "fintech"){
        echo "<footer  class ='mt-0'>";
    }else{
        echo "<footer>";
    }
    ?>
    <div class="container pb-4">
        <div class="row ">

            <div class="col-md-12 footerTop d-flex justify-content-between">
                <div class="footerBox1">
                    <div class="map">
                        <img src="<?php echo $base_url?>img/map.png" alt="logo">
                    </div>
                    <div class="footerLeftLogo">
                        <div class="companyLogo"> <img src="<?php echo $base_url?>img/logo.svg" alt="logo">
                        </div>
                        <div class="details">
                            <div class="emailDetails contactDetails">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17"
                                    fill="none">
                                    <path
                                        d="M3.49414 0.561523H17.4941C18.2633 0.561523 19.0011 0.867278 19.5449 1.41113C20.0888 1.95499 20.3945 2.69279 20.3945 3.46191V13.4619C20.3945 14.231 20.0888 14.9688 19.5449 15.5127C19.0011 16.0566 18.2633 16.3623 17.4941 16.3623H3.49414C2.72501 16.3623 1.98721 16.0566 1.44336 15.5127C0.899504 14.9688 0.59375 14.231 0.59375 13.4619V3.46191C0.59375 2.69279 0.899504 1.95499 1.44336 1.41113C1.98721 0.867277 2.72501 0.561523 3.49414 0.561523ZM18.4346 3.63184L11.0342 9.18164C10.8784 9.29848 10.6889 9.3623 10.4941 9.3623C10.2994 9.3623 10.1099 9.29848 9.9541 9.18164L2.55371 3.63184L2.39453 3.51172V13.4619C2.39453 13.7537 2.51051 14.033 2.7168 14.2393C2.92309 14.4455 3.2024 14.5615 3.49414 14.5615H17.4941C17.7859 14.5615 18.0652 14.4455 18.2715 14.2393C18.4778 14.033 18.5938 13.7537 18.5938 13.4619V3.51172L18.4346 3.63184ZM4.10449 2.54199L10.4346 7.29199L10.4941 7.33691L10.5537 7.29199L16.8838 2.54199L17.124 2.3623H3.86426L4.10449 2.54199Z"
                                        fill="#0A122E" fill-opacity="0.8" stroke="white" stroke-width="0.2" />
                                </svg>

                                <a href="mailto:info@cloudchillies.com">
                                    <img src="img/emailid.svg"></a>

                            </div>

                            <div class="contactDetails">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"
                                    fill="none">
                                    <path
                                        d="M18.6663 16.0944L19.1953 16.6264L18.6653 16.0944H18.6663ZM6.06031 13.9384L6.58831 13.4064L6.05931 13.9384H6.06031ZM1.93431 3.34639L1.40631 2.81539L1.93531 3.34739L1.93431 3.34639ZM13.8723 13.1024L14.3293 12.6494L13.2703 11.5854L12.8163 12.0384L13.8723 13.1024ZM15.8583 12.4594L17.7693 13.4984L18.4843 12.1804L16.5743 11.1424L15.8583 12.4594ZM18.1363 15.5624L16.7163 16.9754L17.7733 18.0384L19.1933 16.6264L18.1363 15.5624ZM15.8503 17.4294C14.4003 17.5654 10.6503 17.4444 6.58831 13.4064L5.53031 14.4694C9.96231 18.8764 14.1813 19.0924 15.9903 18.9234L15.8493 17.4294H15.8503ZM6.58831 13.4064C2.71731 9.55639 2.07531 6.31939 1.99531 4.91439L0.497314 4.99939C0.597314 6.76739 1.39231 10.3554 5.53031 14.4694L6.58831 13.4064ZM7.96331 7.22639L8.25031 6.94039L7.19431 5.87739L6.90731 6.16239L7.96431 7.22539L7.96331 7.22639ZM8.47831 3.30539L7.21831 1.62139L6.01731 2.52139L7.27731 4.20439L8.47831 3.30539ZM2.97731 1.25439L1.40731 2.81439L2.46531 3.87839L4.03431 2.31839L2.97731 1.25439ZM7.43531 6.69439C6.90531 6.16239 6.90531 6.16239 6.90531 6.16439H6.90331L6.90031 6.16839C6.8531 6.21657 6.81057 6.26914 6.77331 6.32539C6.71931 6.40539 6.66031 6.51039 6.61031 6.64339C6.48854 6.9867 6.45822 7.3558 6.52231 7.71439C6.65631 8.57939 7.25231 9.72239 8.77831 11.2404L9.83631 10.1764C8.40731 8.75639 8.06731 7.89239 8.00431 7.48439C7.97431 7.29039 8.00531 7.19439 8.01431 7.17239C8.01931 7.15839 8.02131 7.15739 8.01431 7.16639C8.0055 7.18025 7.99546 7.1933 7.98431 7.20539L7.97431 7.21539C7.97108 7.21849 7.96775 7.2215 7.96431 7.22439L7.43431 6.69439H7.43531ZM8.77831 11.2404C10.3053 12.7584 11.4543 13.3504 12.3203 13.4824C12.7633 13.5504 13.1203 13.4964 13.3913 13.3954C13.5429 13.3393 13.6846 13.2597 13.8113 13.1594C13.8285 13.145 13.8452 13.13 13.8613 13.1144L13.8683 13.1084L13.8713 13.1054L13.8723 13.1034C13.8723 13.1034 13.8733 13.1024 13.3443 12.5704C12.8143 12.0384 12.8173 12.0374 12.8173 12.0374L12.8193 12.0354L12.8213 12.0334L12.8273 12.0284L12.8373 12.0184C12.8493 12.0076 12.862 11.9976 12.8753 11.9884C12.8853 11.9814 12.8823 11.9844 12.8683 11.9904C12.8433 11.9994 12.7453 12.0304 12.5483 12.0004C12.1343 11.9364 11.2643 11.5964 9.83631 10.1764L8.77831 11.2404ZM7.21831 1.62039C6.19831 0.260386 4.19431 0.0443857 2.97731 1.25439L4.03431 2.31839C4.56631 1.78939 5.51031 1.84439 6.01731 2.52139L7.21731 1.62039H7.21831ZM1.99631 4.91539C1.97631 4.56939 2.13531 4.20739 2.46531 3.87939L1.40631 2.81539C0.869314 3.34939 0.446314 4.10539 0.497314 4.99939L1.99631 4.91539ZM16.7163 16.9754C16.4423 17.2494 16.1463 17.4034 15.8513 17.4304L15.9903 18.9234C16.7253 18.8544 17.3263 18.4844 17.7743 18.0394L16.7163 16.9754ZM8.25031 6.94039C9.23531 5.96139 9.30831 4.41439 8.47931 3.30639L7.27831 4.20539C7.68131 4.74439 7.62131 5.45139 7.19331 5.87839L8.25031 6.94039ZM17.7703 13.4994C18.5873 13.9434 18.7143 14.9894 18.1373 15.5634L19.1953 16.6264C20.5353 15.2934 20.1223 13.0704 18.4853 12.1814L17.7703 13.4994ZM14.3293 12.6504C14.7133 12.2684 15.3313 12.1744 15.8593 12.4604L16.5753 11.1434C15.4913 10.5534 14.1473 10.7164 13.2713 11.5864L14.3293 12.6504Z"
                                        fill="#0A122E" fill-opacity="0.8" />
                                </svg>
                                <ul>

                                    <li><span class="country">Australia :</span>
                                        +61-280-155-723</li>
                                    <!-- <li><span class="country">USA : </span>+1-732-654-9056
                                    </li> -->
                                    <!-- <li><span class="country">India :</span>
                                        +91-731-292-7999</li> -->


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerBox2 d-flex align-items-center gap-4">
                    <img src="<?php echo $base_url?>img/iso-img.jpg" alt="salesforce partner">
                    <img src="<?php echo $base_url?>img/salesforce-partner.png" alt="salesforce partner">
                </div>
            </div>
        </div>



        <!-- <div class="row copywrite" data-aos-delay="1300">
                <div class="copywriteInner">
                    © Copyright 2023 <span class="bold">Lending Logik</span>. All Rights Reserved.
                </div>
            </div> -->
    </div>

    <div class="footer-link">
        <a class="nav-link" href="<?php echo $base_url?>privacy-policy">Privacy Policy</a>
    </div>

    <!-- <div class="container-fluid" style="border-top: 1px solid rgb(41 72 100 / 20%);">
        <div class="row">
            <div class="col-md-12">
                <div class="footerBottom d-flex justify-content-center align-items-center flex-column">
                    <ul>
                        <li><a href="<?php echo $base_url?>privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    </footer>
    <div id="overlay" class="overlay"></div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog videoDialog">
            <div class="modal-content">
                <div class="modal-body videoContainer">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <iframe src="https://www.youtube.com/embed/zCpsw10xZvE?si=ux1bNz5DwT-nA1Bw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taylorModal" tabindex="1" aria-labelledby="taylorModalLabel" aria-hidden="true">
        <div class="modal-dialog videoDialog">
            <div class="modal-content">
                <div class="modal-body videoContainer">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cR_h3pK1VhA?si=27tPUe58cdeVyuWv"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
_linkedin_partner_id = "8755729";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
(function(l) {
    if (!l) {
        window.lintrk = function(a, b) {
            window.lintrk.q.push([a, b])
        };
        window.lintrk.q = []
    }
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";
    b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
})(window.lintrk);
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=8755729&fmt=gif" />
    </noscript>

    </body>



    <script src="<?php echo $base_url?>js/jquery-3.6.4.min.js"></script>
    <script src="<?php echo $base_url?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $base_url?>js/owl.carousel.min.js"></script>

    <script src="<?php echo $base_url?>js/custom.js"></script>
    <script src="<?php echo $base_url?>js/contactModalScript.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>`
    <script src="<?php echo $base_url?>js/wow.min.js"></script>
    <script>
AOS.init({
    disable: 'mobile',
    duration: 1200,
    once: true
});



new WOW().init();
    </script>

    </html>
    <!------------------------------>
    <!-- Footer End -->
    <!------------------------------>