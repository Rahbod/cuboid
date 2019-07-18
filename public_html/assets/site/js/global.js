$(document).ready(function () {

    $('form.contactUsForm').on('submit', function (e) {
        e.preventDefault();
        var form = $(e.target);
        var formMethod = $(e.target).attr('method');
        var url = form.attr('action');
        var formData = new FormData(this);

        $.ajax({
            url: url,
            method: formMethod,
            processData: false,
            contentType: false,
            data: formData,
            success: function (success) {
                toaster('success', success.title, success.message);
                form.trigger('reset');
            },
            error: function (error) {
                console.log(error);
                $.each(error.responseJSON.errors, function (key, value) {
                    // $('#' + key).parents('.form-group').find('.invalid-tooltip').show().html(value[0]);
                    toaster('error', key, value);
                });
            },
            fail: function (fail) {
                console.log(fail);
                toaster('error', 'error', 'error');
            }

        })

    });
    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    toastr.options = {
        "closeButton": false,
        "rtl": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "4000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $('.renewCaptchaImage').on('click', function () {
        $.ajax({
            type: 'get',
            url: '/captcha-image',
            success: function (response) {
                $('.captchaImageContainer').html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});

function toaster(type, title, message) {
    toastr[type](message, title)
}
