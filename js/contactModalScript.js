function showToaster(color, message) {
  var toaster = document.getElementById("toaster");

  // Set dynamic color and message

  toaster.classList.add("open");
  $("#toaster").css({ backgroundColor: color });
  $("#msg").text(message);

  setTimeout(function () {
    toaster.classList.remove("open");
  }, 3000);
}

function populateCountriesforContactModal() {
  $.getJSON("countries.json", function (data) {
    var states = data["countries"];
    var selectState = $("#country");
    selectState.empty();
    selectState.append(
      $("<option>", {
        value: "",
        text: "Choose your Country",
      })
    );
    for (var i = 0; i < states.length; i++) {
      selectState.append(
        $("<option>", {
          value: states[i],
          text: states[i],
        })
      );
    }
  });
}

// Keep the rendered widget id so we can reset it later
var contactCaptchaWidget = null;
var onloadCallback = function () {
  try {
    if (typeof grecaptcha !== "undefined" && grecaptcha.render) {
      contactCaptchaWidget = grecaptcha.render("html_element", {
        sitekey: "6LetXv0rAAAAALmgRme6MDqlaruUz-QNWhev0FUp",
      });
    }
  } catch (e) {
    console.warn("reCAPTCHA render failed on load:", e);
  }
};

$(document).ready(function () {
  $("#contactUsPopup").on("show.bs.modal", function (event) {
    let modal = this;

    // 1. Reset form first
    let form = modal.querySelector("form");
    if (form) form.reset();
    populateCountriesforContactModal();

    let button = event.relatedTarget; // Button that triggered the modal
    let subject = button.getAttribute("data-subject");
    let section = button.getAttribute("data-section");

    let subjectInput = modal.querySelector("#callingPageInput");
    if (subjectInput) {
      try {
        if ("value" in subjectInput) subjectInput.value = subject;
        else subjectInput.innerText = subject;
      } catch (e) {
        // fallback to jQuery if available
        if (typeof $ !== "undefined" && $("#callingPageInput").length)
          $("#callingPageInput").val(subject);
      }
    } else {
      // element may be outside modal or missing — try jQuery fallback
      if (typeof $ !== "undefined" && $("#callingPageInput").length)
        $("#callingPageInput").val(subject);
    }

    let sectionInput = modal.querySelector("#modalSectionInput");
    if (sectionInput) {
      try {
        if ("value" in sectionInput) sectionInput.value = section;
        else sectionInput.innerText = section;
      } catch (e) {
        if (typeof $ !== "undefined" && $("#modalSectionInput").length)
          $("#modalSectionInput").val(section);
      }
    } else {
      if (typeof $ !== "undefined" && $("#modalSectionInput").length)
        $("#modalSectionInput").val(section);
    }

    // Reset or re-render captcha when modal opens
    try {
      if (typeof grecaptcha !== "undefined") {
        if (contactCaptchaWidget !== null && grecaptcha.reset) {
          try {
            grecaptcha.reset(contactCaptchaWidget);
          } catch (e) {
            try {
              grecaptcha.reset();
            } catch (err) {}
          }
        } else if (grecaptcha.render) {
          // Try rendering (if element exists)
          if (document.getElementById("html_element")) {
            try {
              contactCaptchaWidget = grecaptcha.render("html_element", {
                sitekey: "6Ldz9b4rAAAAALbxtDvN0FFyVVgCyAGnjNDxKdul",
              });
            } catch (e) {}
          }
        }
      }
    } catch (e) {
      // ignore captcha errors
    }
  });
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const NamePattern = /^[A-Za-z]{2,}(?: [A-Za-z]+)*$/; // At least 2 chars, no double spaces, no trailing/leading spaces
  const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  const mobilePattern = /^[0-9]{10,15}$/; // Only digits, 10-15 characters
  // Not empty or only spaces and must 10 to 200 characters long
  const questionPattern = /^\s*(?:\S+(?:\s+|$)){10,2000}\s*$/;

  function checkElement(id, errId, condition) {
    let element = $(`#${id}`).val();
    // Trim to handle spaces
    element = element ? element.trim() : "";

    // Check for empty or only spaces
    if (!element) {
      $(`#${errId}`).text("This field is required").show();
      return false;
    }

    // Check for leading/trailing spaces
    if (element !== element.trim()) {
      $(`#${errId}`).text("Remove leading or trailing spaces").show();
      return false;
    }

    // Check against the pattern
    if (!condition.test(element)) {
      let errorMessage;
      switch (id) {
        case "fname":
        case "cname":
          errorMessage = "Only letters allowed, minimum 2 characters";
          break;
        case "email":
          errorMessage = "Please enter a valid email address";
          break;
        case "phone":
          errorMessage = "Please enter 10-15 digits only";
          break;
        case "question":
          errorMessage = "Please enter between 10 to 2000 characters";
          break;
        default:
          errorMessage = "Invalid input";
      }
      $(`#${errId}`).text(errorMessage).show();
      return false;
    }

    // Additional rule: only accept work-related emails (reject common free providers)
    if (id === "email") {
      try {
        const domain = element.split("@")[1]?.toLowerCase() || "";
        const publicDomains = [
          "gmail.com",
          "yahoo.com",
          "yahoo.co.uk",
          "outlook.com",
          "hotmail.com",
          "live.com",
          "icloud.com",
          "me.com",
          "aol.com",
          "proton.me",
          "protonmail.com",
          "gmx.com",
          "yandex.com",
          "yandex.ru",
          "zoho.com",
          "mail.com",
          "pm.me",
        ];
        const isPublic = publicDomains.some(
          (d) => domain === d || domain.endsWith(`.${d}`)
        );
        if (isPublic) {
          $(`#${errId}`).text("Work email required only").show();
          return false;
        }
      } catch (e) {
        // fall through; if parsing fails, keep default behavior
      }
    }

    $(`#${errId}`).hide();
    return true;
  }

  function checkSelection(id, errId) {
    let element = $(`#${id}`).val();
    element = element ? element.trim() : "";

    if (!element) {
      $(`#${errId}`).text("Please select an option").show();
      return false;
    }

    $(`#${errId}`).hide();
    return true;
  }
  function checkCaptcha() {
    if (grecaptcha.getResponse().length === 0) {
      $("#captchError").show();
      return false;
    }
    $("#captchError").hide();
    return true;
  }

  $("#myForm").submit(function (event) {
    event.preventDefault();
    document.getElementById("submitBtn").disabled = true;
    let fn = checkElement("fname", "fnameError", NamePattern);
    //let cn = checkElement("cname", "cnameError", NamePattern);
    let email = checkElement("email", "emailError", emailPattern);
    let mn = checkElement("phone", "phoneError", mobilePattern);
    //let country = checkSelection("country", "countryError");
    // let question = checkElement("question", "QuestionError", questionPattern);
    var response = checkCaptcha();
    let modalTitleElem = document.querySelector("#callingPageInput");
    let modalTitle = modalTitleElem
      ? modalTitleElem.value || modalTitleElem.innerText || ""
      : "";
    let subjectElem = document.querySelector("#modalSectionInput");
    let subject = subjectElem
      ? subjectElem.value || subjectElem.innerText || ""
      : "";

    // Serialize form data
    if (fn && email && mn && response) {
      var formData = $(this).serializeArray(); // Converts form data into an array

      // Append additional field
      formData.push({ name: "callingPage", value: modalTitle });
      formData.push({ name: "subject", value: subject });
      $.ajax({
        type: "POST",
        //url: "http://20.20.20.204/
        // -2025/formSubmit.php",
        url: "https://cloudchillies.com.au/formSubmit.php",
        dataType: "json",
        data: formData,
        success: function (response) {
          // Parse response if it's a string
          let res = response;
          if (typeof response === "string") {
            try {
              res = JSON.parse(response);
            } catch (e) {
              console.error("Failed to parse response:", e);
            }
          }

          // Check if the response indicates success
          if (res && res.success === true) {
            // Success case: show success message and close modal
            showToaster(
              "#198754",
              res.message ||
                "Thanks for getting in touch! We'll be in touch with you soon."
            );

            // Reset captcha if available
            try {
              if (typeof grecaptcha !== "undefined" && grecaptcha.reset) {
                if (contactCaptchaWidget !== null)
                  grecaptcha.reset(contactCaptchaWidget);
                else grecaptcha.reset();
              }
            } catch (e) {
              // ignore
            }

            // Close modal and reset form
            $("#contactUsPopup").modal("hide");
            document.getElementById("submitBtn").disabled = false;
          } else {
            // Error case: handle validation errors
            document.getElementById("submitBtn").disabled = false;

            // Show error message
            const errorMessage =
              res && res.message
                ? res.message
                : "Please correct the errors in your submission.";
            showToaster("#dc3545", errorMessage);

            // Display field-specific errors
            if (res && res.errors && typeof res.errors === "object") {
              // Hide all error messages first (hide specific error elements)
              $(
                "#emailError, #fnameError, #phoneError, #cnameError, #QuestionError, #countryError"
              ).hide();

              // Show specific field errors
              if (res.errors.email) {
                $("#emailError").text(res.errors.email).show();
              }
              if (res.errors.full_name) {
                $("#fnameError").text(res.errors.full_name).show();
              }
              if (res.errors.phone_no) {
                $("#phoneError").text(res.errors.phone_no).show();
              }
              if (res.errors.company_name) {
                $("#cnameError").text(res.errors.company_name).show();
              }
              if (res.errors.question) {
                $("#QuestionError").text(res.errors.question).show();
              }
              if (res.errors.country) {
                $("#countryError").text(res.errors.country).show();
              }
            }
          }
        },
        error: function (xhr, status, error) {
          document.getElementById("submitBtn").disabled = false;

          // Try to parse error response if available
          let errorMessage =
            "Sorry, there was an error processing your request.";
          try {
            if (xhr.responseText) {
              const errorRes = JSON.parse(xhr.responseText);
              if (errorRes && errorRes.message) {
                errorMessage = errorRes.message;

                // Display field-specific errors if available
                if (errorRes.errors && typeof errorRes.errors === "object") {
                  // Hide all error messages first
                  $(
                    "#emailError, #fnameError, #phoneError, #cnameError, #QuestionError, #countryError"
                  ).hide();

                  if (errorRes.errors.email) {
                    $("#emailError").text(errorRes.errors.email).show();
                  }
                  if (errorRes.errors.full_name) {
                    $("#fnameError").text(errorRes.errors.full_name).show();
                  }
                  if (errorRes.errors.phone_no) {
                    $("#phoneError").text(errorRes.errors.phone_no).show();
                  }
                  if (errorRes.errors.company_name) {
                    $("#cnameError").text(errorRes.errors.company_name).show();
                  }
                  if (errorRes.errors.question) {
                    $("#QuestionError").text(errorRes.errors.question).show();
                  }
                  if (errorRes.errors.country) {
                    $("#countryError").text(errorRes.errors.country).show();
                  }
                }
              }
            }
          } catch (e) {
            console.error("Error parsing error response:", e);
          }

          showToaster("#dc3545", errorMessage);
        },
      });
    } else {
      document.getElementById("submitBtn").disabled = false;

      showToaster("#dc3545", "Please fill all Details properly");
    }
  });
});
