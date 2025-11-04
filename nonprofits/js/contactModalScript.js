
function showToaster(color, message) {
    var toaster = document.getElementById("toaster");

    // Set dynamic color and message
  
    toaster.classList.add("open");
    $('#toaster').css({backgroundColor:color});
    $('#msg').text(message);
  

    setTimeout(function() {
          toaster.classList.remove("open");
      }, 3000);
  }


function populateCountries() {
    $.getJSON("/countries.json", function (data) {
        var states = data["countries"];
        var selectState = $('#country');
        selectState.empty();
        selectState.append($('<option>', {
                value: "",
                text: "Choose your Country"
            }));
        for (var i = 0; i < states.length; i++) {
            selectState.append($('<option>', {
                value: states[i],
                text: states[i]
            }));
        }
    });
}
0



var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LePgc4rAAAAALyCV_jDBpjZmUa-LRtOcK_GqBpz'
        });
      };


    $(document).ready(function () {
       
        $('#contactUsPopup').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var callingPage = button.data('calling-page'); // Extract info from data-* attributes
            populateCountries();
            // Update the hidden input value
            $('#callingPageInput').val(callingPage);
        });
    });
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;;
    const NamePattern = /^[A-Za-z- ]+$/;
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    const mobilePattern = /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;


    function checkElement(id, errId, condition) {
        let element = $(`#${id}`).val();

        if (element && condition.test(element)) {
            console.log("here hiding")
            $(`#${errId}`).hide();
            return true;
        }
        console.log('showing',errId);
        $(`#${errId}`).show();
        return false;
    }
    
    function checkSelection(id, errId) {
        // console.log("here ==========>");
        let element = $(`#${id}`).val();
        if (element.length > 0) {
            $(`#${errId}`).hide();
            return true;
        }
        $(`#${errId}`).show();
        return false;
    }

    function checkCaptcha(){
        if(grecaptcha.getResponse().length === 0){
            $('#captchError').show();
            return false;
        }
        $('#captchError').hide();
        return true;
    }

    $("#myForm").submit(function (event) {
        event.preventDefault();
    
        let fn = checkElement("fname", "fnameError", NamePattern);
        //let cn = checkElement("cname", "cnameError", NamePattern);
        let email = checkElement("email", "emailError", emailPattern);
        let mn = checkElement("phone", "phoneError", mobilePattern);
        //let country = checkSelection("country", "countryError");
        //let question = checkSelection("question", "QuestionError");
        let modalTitle = document.querySelector(".modal-title").innerText;
	let captcha = checkCaptcha()
    
        if (fn && email && mn && checkCaptcha()) {
            $('#submitBtn').prop('disabled', true);
            var formData = $(this).serializeArray();
            formData.push({ name: "subject", value: modalTitle });
    
            $.ajax({
                type: "POST",
                url: "https://cloudchillies.com.au/nonprofits/formSubmit.php",
                data: formData,
                success: function (response) {
                    console.log("Success:", response);
                    showToaster('#198754', "Thanks for getting in touch! We'll be in touch with you soon.");
    
                    // Wait until modal is fully hidden
                    $('#contactModal').one('hidden.bs.modal', function () {
                        // Cleanup modal effects
                        $('.modal-backdrop').remove();
                        $('body').removeClass('modal-open').css({
                            'overflow': '',
                            'padding-right': ''
                        });
    
                        // Reset form
                        document.getElementById("myForm").reset();
    
                        // Reset CAPTCHA
                        if (typeof grecaptcha !== 'undefined') {
                            grecaptcha.reset();
                        }
    
                        // Keep submit button disabled until CAPTCHA is solved again
                        $('#submitBtn').prop('disabled', true);
                    });
    
                    // Hide the modal
                    $('#contactModal').modal('hide');
                },
                error: function (error) {
                    $('#submitBtn').prop('disabled', false);
                    console.log("Error:", error);
                    showToaster('#dc3545', 'Something went wrong. Please try again.');
                }
            });
        } else {
            document.getElementById("submitBtn").disabled = false;
            console.log("Validation failed");
            showToaster('#dc3545', 'Please fill all Details properly');
        }
    });
    
    

    function showToaster(bgColor, message) 
    {
        const toast = document.getElementById("toast");
        const toastMessage = document.getElementById("toast-message");
    
        if (!toast || !toastMessage) 
        {
            console.error("Toast element not found!");
            return;
        }
    
        toast.classList.add("show");
        toast.style.backgroundColor = bgColor;
        toastMessage.innerText = message;
    
      // Increase toast delay to 8 seconds (8000 ms)
        const bsToast = new bootstrap.Toast(toast, { delay: 5000 });
        bsToast.show();
    }
    
    


    
