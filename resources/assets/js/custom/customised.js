window.onload = function () {
    window.startLoader = function () {
        $(".infy-loader").show();
    };

    window.stopLoader = function () {
        $(".infy-loader").hide();
    };

    // infy loader js
    stopLoader();
};

function togglePassword() {
    $('[data-toggle="password"]').each(function () {
        var input = $(this);
        var eye_btn = $(this).parent().find(".input-icon");
        eye_btn.css("cursor", "pointer").addClass("input-password-hide");
        eye_btn.on("click", function () {
            if (eye_btn.hasClass("input-password-hide")) {
                eye_btn
                    .removeClass("input-password-hide")
                    .addClass("input-password-show");
                eye_btn
                    .find(".bi")
                    .removeClass("bi-eye-slash-fill")
                    .addClass("bi-eye-fill");
                input.attr("type", "text");
            } else {
                eye_btn
                    .removeClass("input-password-show")
                    .addClass("input-password-hide");
                eye_btn
                    .find(".bi")
                    .removeClass("bi-eye-fill")
                    .addClass("bi-eye-slash-fill");
                input.attr("type", "password");
            }
        });
    });
}


toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
};


function tooltip() {
    let tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

function resizeWindow() {
    $(window).resize(function () {
        if ($(window).width() < 768) {
            $(".createInvoiceBtn").html('<i class="far fa-file-alt"></i>');
            $(".fullScreenBtn").addClass("d-none");
        } else {
            $(".createInvoiceBtn").html(
                Lang.get("messages.invoice.new_invoice")
            );
            $(".fullScreenBtn").removeClass("d-none");
        }
    });
    $(window).trigger("resize");
}

window.currencyAmount = function (amount) {
    if ($("#currency_position").val() == 1) {
        return " " + number_format(amount) + " " + $("#currency").val();
    }
    return " " + $("#currency").val() + " " + number_format(amount);
};

listenChange(".image-upload", function (event) {
    event.preventDefault();
    let ext = $(this).val().split(".").pop().toLowerCase();
    if ($.inArray(ext, ["png", "jpg", "jpeg"]) == -1) {
        displayErrorMessage("The image must be a file of type: jpg, png, jpeg");
        $(this).val("");
    }
});
