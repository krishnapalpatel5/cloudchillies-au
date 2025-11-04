<!-- Modal -->


<div class="modal fade" id="contactUsPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row mb-0" method="post" id="myForm" action="javascript:void(0);">
                    <div class="mb-4 col-md-12 position-relative">
                        <input type="text" class="form-control" id="fname" name="full_name" placeholder="Full Name*">
                        <span class="error" id="fnameError">Please enter valid name</span>
                    </div>
                    
                    <div class="mb-4 col-md-12 position-relative">
                        <input type="Email" class="form-control" id="email" name="email" placeholder="Work Email*">
                        <span class="error" id="emailError">Please enter your valid email</span>
                    </div>
                    <div class="mb-4 col-md-12 position-relative">
                        <input type="number" class="form-control" id="phone" name="phone_no"
                            placeholder="Phone Number*">
                        <span class="error" id="phoneError">Please enter valid Phone No</span>
                    </div>
                    <div class="mb-4 col-md-12 position-relative">
                        <textarea class="form-control" name="question" id="question" placeholder="How can we help? (Optional)"
                            id="" style="height: 100px"></textarea>
                        <span class="error" id="QuestionError">Please enter your query to proceed </span>
                    </div>
                    <input type="hidden" id="callingPageInput" name="callingPage" value="">
                    <input type="hidden" id="modalSectionInput" name="section">
                    <div class="mb-4 col-md-12 position-relative">

                        <div id="html_element"></div>

                        <span id="captchError" class="error">Please click the captcha checkbox</span>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="submitBtn"
                            class="btn btn-primary green w-100 btnStarted">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



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
                        <!-- <label for="fname">Full Name*</label> -->
                        <input type="text" class="form-control custom-input" id="fname" name="name"
                            placeholder="Full Name*">
                        <span class="error" id="fnameError">Please enter valid name</span>
                    </div>

                    <div class="col-md-12 position-relative mb-2">
                        <!-- <label for="email">Company Email*</label> -->
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
