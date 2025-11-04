<?php
$currentPage = $_SERVER['REQUEST_URI'];

// Remove ".php" from the end of the URL
$lastSegment = basename($currentPage);
$currentPageWithoutPhp = preg_replace('/\.php$/', '', $lastSegment);
?>

<div class="container">
    <div class="secondTitle text-center" data-aos="fade-up">
        <span>See what <span class="bold">Lending Logik</span> can do for you </span>
    </div>
    <div class="row pb-5">
        <div class="col-md-7">
            <div class="left d-flex flex-wrap">
                <div class="serviceCard" data-aos="fade-right" data-aos-delay="300">
                    <div class="serviceCardInner">
                        <div class="serviceImg">
                            <img src="<?php echo $base_url?>/img/advisory.svg" alt="icon">
                        </div>
                        <div class="cardTitle">
                            <span>Salesforce Consulting <br> & Advisory</span>
                        </div>
                        <div class="serviceInfo">
                            <span>Helping you make informed decisions in this complex and ever-changing lending industry</span>
                            <div class="serviceBtn">
                                <a href="<?php echo $base_url;?>service-offerings#advisory" class="d-flex align-items-center justify-content-center"><span class="me-2">Learn
                                        more</span> <img src="<?php echo $base_url?>/img/learnMore.svg" alt="learn more"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="serviceCard" data-aos="fade-right">
                    <div class="serviceImg">
                        <img src="<?php echo $base_url?>/img/salesforce_implementation.svg" alt="icon">
                    </div>
                    <div class="cardTitle">
                        <span>Salesforce <br>
                            Implementation</span>
                    </div>
                    <div class="serviceInfo">
                        <span>Simplifying the way, you manage loans using Salesforce-enabled process flows, making lending easier.</span>
                        <div class="serviceBtn">
                            <a href="<?php echo $base_url;?>service-offerings#implementation" class="d-flex align-items-center justify-content-center"><span class="me-2">Learn
                                    more</span> <img src="<?php echo $base_url?>/img/learnMore.svg" alt="learn more"></a>
                        </div>
                    </div>
                </div>
                <div class="serviceCard" data-aos="fade-right" data-aos-delay="300">
                    <div class="serviceImg">
                        <img src="<?php echo $base_url?>/img/salesforce-development.svg" alt="icon">
                    </div>
                    <div class="cardTitle">
                        <span>Salesforce <br> Development</span>
                    </div>
                    <div class="serviceInfo">
                        <span> Designing workflows to help you originate, score, decide, and document your lending deals with Salesforce.</span>
                        <div class="serviceBtn">
                            <a href="<?php echo $base_url;?>service-offerings#development" class="d-flex align-items-center justify-content-center"><span class="me-2">Learn
                                    more</span> <img src="<?php echo $base_url?>/img/learnMore.svg" alt="learn more"></a>
                        </div>
                    </div>
                </div>
                <div class="serviceCard" data-aos="fade-right">
                    <div class="serviceCardInner">
                        <div class="serviceImg">
                            <img src="<?php echo $base_url?>/img/managed-services.svg" alt="icon">
                        </div>
                        <div class="cardTitle">
                            <span>Managed <br> Services</span>
                        </div>
                        <div class="serviceInfo">
                            <span> Ensuring your continued wins after Salesforce implementation with streamlined loan management journeys.</span>
                            <div class="serviceBtn">
                                <a href="<?php echo $base_url;?>service-offerings#manageService" class="d-flex align-items-center justify-content-center"><span class="me-2">Learn
                                        more</span> <img src="<?php echo $base_url?>/img/learnMore.svg" alt="learn more"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5" data-aos="fade-left">
            <div class="remoteTeamInner">
                <img src="<?php echo $base_url?>/img/sales-cloud/remoteTeam.png" class="remoteTeamBg">
                <div class="teamTitle">
                    Remote Salesforce Team
                </div>
                <ul class="remoteTeamDis d-flex justify-content-center flex-wrap">
                    <li><img src="<?php echo $base_url?>/img/teamTick.svg" alt="tick"> Salesforce Certified</li>
                    <li><img src="<?php echo $base_url?>/img/teamTick.svg" alt="tick"> Flexible</li>
                    <li><img src="<?php echo $base_url?>/img/teamTick.svg" alt="tick"> Cost Effective</li>
                </ul>
                <div class="teamDisBottomInner align-items-center flex-wrap">
                    <div class="teamImgInner">
                        <img src="<?php echo $base_url?>/img/remote-salesforce-team.png" alt="Hire salesforce developer India">
                    </div>
                    <div class="teamInfoInner">
                        <div class="team-dis"><span class="bold">Hire Salesforce Developers </span>and
                            <span class="bold">Hire Salesforce Admins </span>to work remote, as dedicated Full
                            Time or Shared
                            resources.
                        </div>
                        <div class="btnGroup">
                            <a href="<?php echo $base_url;?>remote-sales-team" class="btn btn-outline-primary">Learn More <img src="<?php echo $base_url?>/img/btnArrow-outline.svg" alt="arrow"></a>
                            <button class="btn btn-primary green" data-bs-toggle="modal" data-calling-page="<?=$currentPageWithoutPhp;?>" data-bs-target="#contactUsPopup">Contact Us Now <img src="<?php echo $base_url?>/img/btnArrow.svg" alt="arrow">
                            
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "contact-modal.php";
?>