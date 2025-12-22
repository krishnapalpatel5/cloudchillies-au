 $("a.read_more_btn").click(function () {
      console.log("click event triggered");
      var storyId = $(this).data("id");
      if (storyId) {
        $("form#downloadPdf #company-name").val(storyId);
      }
  });

  
const navbarMenu = document.getElementById("navbar");
const burgerMenu = document.getElementById("burger");
const overlayMenu = document.querySelector(".overlay");

// Show and Hide Navbar Function
const toggleMenu = () => {
   navbarMenu.classList.toggle("active");
   overlayMenu.classList.toggle("active");
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
   navbarMenu
      .querySelector(".menu-dropdown.active .submenu")
      .removeAttribute("style");
   navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
   if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
      e.preventDefault();
      const menuDropdown = e.target.parentElement;

      // If Dropdown is Expanded, then Collapse It
      if (menuDropdown.classList.contains("active")) {
         collapseSubMenu();
      } else {
         // Collapse Existing Expanded Dropdown
         if (navbarMenu.querySelector(".menu-dropdown.active")) {
            collapseSubMenu();
         }

         // Expanded the New Dropdown
         menuDropdown.classList.add("active");
         const subMenu = menuDropdown.querySelector(".submenu");
         subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
   }
};

// Fixed Resize Window Function
const resizeWindow = () => {
   if (window.innerWidth > 992) {
      if (navbarMenu.classList.contains("active")) {
         toggleMenu();
      }
      if (navbarMenu.querySelector(".menu-dropdown.active")) {
         collapseSubMenu();
      }
   }
};

function changeHeading(heading) {
  let modalTitle = document.querySelector(".modal-title");
  if (modalTitle) {
      modalTitle.innerHTML = heading;
  } else {
      console.error("Element with class 'modal-title' not found");
  }
}


// Initialize Event Listeners
burgerMenu.addEventListener("click", toggleMenu);
overlayMenu.addEventListener("click", toggleMenu);
navbarMenu.addEventListener("click", toggleSubMenu);
window.addEventListener("resize", resizeWindow);


  // add active class on menu
$('.nav-link').click(function(e) {
    e.preventDefault(); // Prevent default if it's a navigation link

    console.log("Hello hi");
    
    // Remove active class from all nav links
    $('.nav-link').removeClass('active');
    
    // Add active class to clicked link
    $(this).addClass('active');
    
    // If there's a href attribute and it's not #, navigate to it
    const href = $(this).attr('href');
    if (href && href !== '#') {
        window.location.href = href;
    }
});

var header = document.getElementById("header");
var scrollThreshold = 200; // Adjust this value to control when the header becomes sticky


window.addEventListener("scroll", function () {
  if (window.pageYOffset >= scrollThreshold) {
    header.classList.add("sticky-header");
  } else {
    header.classList.remove("sticky-header");
  }
});

  $("#downloadPdf").on("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission
    
    let isValid = true; // renamed for clarity

    let name = $("#downloadPdf").find("#fname").val().trim();
    let email = $("#downloadPdf").find("#email").val().trim();
    let company = $("#downloadPdf").find("#company-name").val().trim();

    // Name validation
    let namePattern = /^[a-zA-Z\s]+$/; // simple pattern for name
    if (name === "" || !namePattern.test(name)) {
      $("#downloadPdf").find("#fnameError").show();
      isValid = false;
    } else {
      $("#downloadPdf").find("#fnameError").hide();
    }

    // List of personal email domains to restrict
    const personalEmailDomains = [
      "gmail.com", "outlook.com", "hotmail.com", "live.com", "yahoo.com",
      "icloud.com", "me.com", "mac.com", "protonmail.com", "gmx.com",
      "zoho.com", "aol.com", "yandex.com", "mail.com", "tutanota.com",
      "fastmail.com", "hushmail.com", "rediffmail.com", "india.com",
      "mail.ru", "web.de", "gmx.de", "laposte.net"
    ];

    // Email validation
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    if (email === "" || !emailPattern.test(email)) {
      $("#downloadPdf").find("#emailError").html("Please enter a valid email address").show();
      isValid = false;
    } else {
      // Check if the email domain is a personal email domain
      const domain = email.split('@')[1].toLowerCase();
      if (personalEmailDomains.includes(domain)) {
        $("#downloadPdf").find("#emailError").html("Please use a company email address").show();
        isValid = false;
      } else {
        $("#downloadPdf").find("#emailError").hide();
      }
    }

    // If everything is valid → AJAX + download
    if (isValid) {
    let formData = new FormData(this);
    formData.append("subject", "download_pdf");
    formData.append("company_name", company);

    // Show loader and hide form
    $("#downloadPdf").hide();
    $("#form-loader").fadeIn();
    $("#form-message").hide();

    // Disable submit button
    $("#downloadPdf button[type='submit']").prop('disabled', true);

    // Add timeout handling
    const timeout = 30000; // 30 seconds timeout
    const ajaxPromise = $.ajax({
        type: "POST",
        url: "../downloadpdf.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Parse response if it's JSON
            let result = response;
            try {
                result = JSON.parse(response);
            } catch(e) {}

            // Hide loader with fade
            $("#form-loader").fadeOut();
            
            // Show success message
            $("#form-message")
                .removeClass('alert-danger')
                .addClass('alert-success')
                .html('Thank you! The Success Story has been sent to your email address. You should receive it shortly.')
                .fadeIn();
            
            // Reset form
            $("#downloadPdf")[0].reset();
            
            // Hide message and close modal after delay
            setTimeout(() => {
                $("#form-message").fadeOut();
                $("#ss-model").hide();
                $('body').removeClass('modal-open').css({"overflow": "auto", "padding-right": "0px"});
                $('.modal-backdrop').remove();
                $("#downloadPdf").fadeIn();
                // Re-enable submit button
                $("#downloadPdf button[type='submit']").prop('disabled', false);
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Hide loader
            $("#form-loader").fadeOut();
            $("#downloadPdf").fadeIn();
            
            // Show error message
            $("#form-message")
                .removeClass('alert-success')
                .addClass('alert-danger')
                .html('Error submitting form. Please try again.')
                .fadeIn();
            
            // Re-enable submit button
            $("#downloadPdf button[type='submit']").prop('disabled', false);
            
            console.error("AJAX Error:", error);
        }
    });

    // Handle timeout
    const timeoutPromise = new Promise((resolve, reject) => {
        setTimeout(() => {
            reject(new Error('Request timed out'));
        }, timeout);
    });

    // Race between ajax and timeout
    Promise.race([ajaxPromise, timeoutPromise])
        .catch(error => {
            if (error.message === 'Request timed out') {
                $("#form-loader").fadeOut();
                $("#downloadPdf").fadeIn();
                $("#form-message")
                    .removeClass('alert-success')
                    .addClass('alert-danger')
                    .html('Request is taking longer than expected. Please try again.')
                    .fadeIn();
                $("#downloadPdf button[type='submit']").prop('disabled', false);
            }
        });
}
  });


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      const headerHeight = document.querySelector('header').offsetHeight;
      console.log(headerHeight,"headerHeight======>")
      
      window.scrollTo({
        top: targetElement.offsetTop - headerHeight,
        behavior: 'smooth'
      });
    }
  });
}); 

// mobile menu

var hamburgerButton = document.getElementById("hamburgerButton");
var overlay = document.getElementById("overlay");
var closeButton = document.getElementById("closeButton");
var body = document.body;



// Add touch event for swiping on overlay
var touchStartX = 0;
var touchEndX = 0;
var overlay = document.getElementById("overlay");

if (overlay) {
  overlay.addEventListener("touchstart", function (event) {
    touchStartX = event.touches[0].clientX;
  });

  overlay.addEventListener("touchmove", function (event) {
    touchEndX = event.touches[0].clientX;
  });

  overlay.addEventListener("touchend", function () {
    // Check if the swipe distance is sufficient to trigger closing the menu
    if (touchEndX - touchStartX > 1) {
      closeMenu();
    }
  });
}



$(document).ready(function() {
  // Check if the device is a desktop based on media query
  const isDesktop = window.matchMedia('(min-width: 991px)').matches;

  // If it's a desktop, enable dropdown functionality
  if (isDesktop) {
    $('#navbarNav').on('click', function(e) {
      $(this).find('.dropdown-menu').toggle();
      e.stopPropagation();
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('#navbarNav').length) {
        $('.dropdown-menu').hide();
      }
    });
  }
});


$(".full-slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
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

// success story

  var itemCount = $(".multiItem .item").length;
  // console.log(itemCount,"item count ============>");
  $(".multiItem").owlCarousel({
    items: 1,
    loop: itemCount > 3,
    dots: false,
    nav: true,
    margin:40,
    autoplay: itemCount > 3,
    autoPlaySpeed: 50000,
    autoPlayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      900: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  // saleforce partner of leading company
  $(".partnerItem").owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    nav: true,
    loop: true,
    margin:20,
    autoplay: true,
    autoPlaySpeed: 50000,
    autoPlayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      900: {
        items: 5,
      },
      1300: {
        items: 7,
      },
    },
  });

  $(".logoSlider").owlCarousel({
    items: 7,
    loop: true,
    dots: false,
    nav: true,
    margin:20,
    autoplay: false,
    autoPlaySpeed: 5000,
    autoPlayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      900: {
        items: 5,
      },
      1300: {
        items: 7,
      },
    },
  });
  // stop on click menu






