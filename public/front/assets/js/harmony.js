$(document).ready(function () {
    $("#subscribers").validate({
        // initialize the plugin
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 11,
                maxlength: 11,
            },
            password: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "لطفا نام خود را وارد کنید",
            },
            phone: {
                required: "لطفا شماره تماس خود را وارد کنید",
                minlength: "شماره تماس وارد شده معتبر نیست",
                maxlength: "شماره تماس وارد شده معتبر نیست",
            },
            password: {
                required: "لطفا پسورد خود را وارد کنید",
            },
        },
        submitHandler: function () {
            form_otp();
            timerSendSms();
        },
    });

    $("#subscribers_confirm").validate({
        // initialize the plugin
        rules: {
            confirm: {
                required: true,
                minlength: 3,
                maxlength: 4,
            },
        },
        messages: {
            confirm: {
                required: "لطفا  کد ارسال شده  را وارد کنید",
                minlength: " کد وارد شده معتبر نیست",
                maxlength: " کد وارد شده معتبر نیست",
            },
        },
        submitHandler: function () {
            form_submit();
        },
    });

    $("#login").validate({
        // initialize the plugin
        rules: {
            login_phone: {
                required: true,
                minlength: 11,
                maxlength: 11,
            },
        },
        messages: {
            login_phone: {
                required: "لطفا شماره تماس خود را وارد کنید",
                minlength: "شماره تماس وارد شده معتبر نیست",
                maxlength: "شماره تماس وارد شده معتبر نیست",
            },
        },
        submitHandler: function () {
            form_otp();
            timerSendSms();
        },
    });
});

(function ($) {
    $.QueryString = (function (a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i) {
            var p = a[i].split("=");
            if (p.length != 2) continue;
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
        }
        return b;
    })(window.location.search.substr(1).split("&"));
})(jQuery);

var utm_source = jQuery.QueryString["utm_source"];
var utm_medium = jQuery.QueryString["utm_medium"];
var utm_campaign = jQuery.QueryString["utm_campaign"];
var utm_term = jQuery.QueryString["utm_term"];
var utm_content = jQuery.QueryString["utm_content"];

if (location.search != "") {
    // query string exists
    sessionStorage.setItem("utm_source", utm_source);
    sessionStorage.setItem("utm_medium", utm_medium);
    sessionStorage.setItem("utm_campaign", utm_campaign);
    sessionStorage.setItem("utm_term", utm_term);
    sessionStorage.setItem("utm_content", utm_content);
}

/*===================================== persianNumbers =====================================*/
var persianNumbers = [
        /۰/g,
        /۱/g,
        /۲/g,
        /۳/g,
        /۴/g,
        /۵/g,
        /۶/g,
        /۷/g,
        /۸/g,
        /۹/g,
    ],
    arabicNumbers = [/٠/g, /١/g, /٢/g, /٣/g, /٤/g, /٥/g, /٦/g, /٧/g, /٨/g, /٩/g],
    persianToEnglish = function (str) {
        if (typeof str === "string") {
            for (var i = 0; i < 10; i++) {
                str = str.replace(persianNumbers[i], i).replace(arabicNumbers[i], i);
            }
        }
        return str;
    };

/*===================================== copy_right =====================================*/
$(".copyright a").hover(
    function () {
        let logo = $(".copyright .hover-company");
        logo.addClass("active");
    },
    function () {
        let logo = $(".copyright .hover-company");
        logo.removeClass("active");
    }
);

/*===================================== stickyHeader =====================================*/
jQuery(function ($) {
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100 && $(this).scrollTop() < 3000) {
            $("header").addClass("stickyHeader");
        } else {
            $("header").removeClass("stickyHeader");
        }
    });
});

/*===================================== swiper =====================================*/
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: true,
    grabCursor: true,
    loop: true,
    // effect: "fade",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // device's width >= 640
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // device's width >= 768
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        // device's width >= 1024
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});

// Click event for any anchor tag that's href starts with #
// $("a").click(function (event) {
//   // The id of the section we want to go to.
//   var id = $(this).attr("href");

//   // An offset to push the content down from the top.
//   var offset = 200;

//   // Our scroll target : the top position of the
//   // section that has the id referenced by our href.
//   var target = $(id).offset().top - offset;

//   // The magic...smooth scrollin' goodness.
//   $("html, body").animate({ scrollTop: target }, 0);

//   //prevent the page from jumping down to our section.
//   event.preventDefault();
// });

/*===================================== Aos animation =====================================*/
// AOS.init();

/*===================================== setTimeout =====================================*/
// const showContent = setTimeout(myGreeting, 2000);
// function myGreeting() {
//   console.log("setTimeout");
// }
/*===================================== clipboard =====================================*/
// var clipboard = new ClipboardJS(".clipboard");
// clipboard.on("success", function (e) {
//   $(".copyMsg").text("لینک کپی شد");

//   setTimeout(function () {
//     $(".copyMsg").empty();
//   }, 2500);
// });

/*========================= pause video on click btn-close ==============================*/
// $(".motion").on("hidden.bs.modal", function () {
//   $(".motionVideo video").trigger("pause");
// });

/*========================= scripts just for mobile view ==============================*/
// if (window.matchMedia("(max-width: 768px)").matches) {
//   console.log("mobile_view");
// }

/*===================================== form_otp =====================================*/
function form_otp() {
    var formDataOtp = {
        name: persianToEnglish($("#subscribers #name").val()),
        phone: persianToEnglish($("#subscribers #phone").val()),
        password: persianToEnglish($("#subscribers #password").val()),
    };
    $.ajax({
        type: "POST",
        url: "panel/otp.php",
        data: formDataOtp,
        dataType: "json",
        encode: true,
    }).done(function (data) {
        if (data["success"] == true) {
            $(".errorValidateOtp").hide();
            $("#registerModal .step1").hide();
            $("#registerModal .step2").fadeIn();
            $(".enteredPhone").html($("#subscribers #phone").val());
        } else {
            $(".errorValidateOtp").show();
            $(".errorValidateOtp").html(data["message"]);
        }
    });
}

/*===================================== form_submit =====================================*/
function form_submit() {
    var formDataSubscriber = {
        confirm: persianToEnglish($("#subscribers_confirm #confirm").val()),
        utm_source: sessionStorage.getItem("utm_source"),
        utm_campaign: sessionStorage.getItem("utm_medium"),
        utm_medium: sessionStorage.getItem("utm_campaign"),
        utm_term: sessionStorage.getItem("utm_term"),
        utm_content: sessionStorage.getItem("utm_content"),
        referrer: document.referrer,
    };
    $.ajax({
        type: "POST",
        url: "panel/process.php",
        data: formDataSubscriber,
        dataType: "json",
        encode: true,
    }).done(function (data) {
        if (data["success"] == true) {
            $(".errorValidate").hide();
            $("#registerModal").modal("toggle");
        } else {
            $(".errorValidate").show();
            $(".errorValidate").html(data["message"]);
        }
    });
}

/*===================================== timerSendSms =====================================*/
function timerSendSms(el) {
    $("" + el + " #sendAgain").hide();
    var timer2 = "2:01";
    $("" + el + " #smsTimer").show();
    var interval = setInterval(function () {
        var timer = timer2.split(":");
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = seconds < 0 ? --minutes : minutes;
        if (minutes < 1) {
            clearInterval(interval);
            $("" + el + " #smsTimer").hide();
            $("" + el + " #sendAgain").show();
            clearInterval(interval);
            $("" + el + " #editMobile").show();
        }

        seconds = seconds < 0 ? 59 : seconds;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $("" + el + " #smsTimer").html(minutes + ":" + seconds);
        timer2 = minutes + ":" + seconds;
    }, 1000);
}

/*===================================== Send Sms Again =====================================*/
$("#subscribers_confirm #sendAgain").click(function () {
    form_otp();
    timerSendSms("#registerModal");
    $("#subscribers_confirm #confirm").val("");
});

/*===================================== edit phone number =====================================*/
$("#editMobile").click(function () {
    $("#registerModal .step2").hide();
    $("#registerModal .step1").fadeIn();
});

/*===================================== login_btn =====================================*/
$(".login_btn").click(function () {
    $("#registerModal .step1").hide();
    $("#registerModal .step3").fadeIn();
});

/*===================================== signup_btn =====================================*/
$(".signup_btn").click(function () {
    $("#registerModal .step3").hide();
    $("#registerModal .step1").fadeIn();
});

/*===================================== login_with_code =====================================*/
$(".login_with_code").click(function () {
    $("#registerModal .step3").hide();
    $("#registerModal .step4").fadeIn();
});

/*===================================== login_with_code =====================================*/
$(".problem_code").click(function () {
    $("#registerModal .step3").hide();
    $("#registerModal .step4").fadeIn();
});

/*===================================== send link with phone =====================================*/
$(".send_to_email").click(function () {
    $("#registerModal .step6").fadeIn();
    $("#registerModal .step7").hide();
});
/*===================================== send link with email =====================================*/
$(".send_to_phone").click(function () {
    $("#registerModal .step7").fadeIn();
    $("#registerModal .step6").hide();
});
