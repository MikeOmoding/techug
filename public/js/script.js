jQuery(function ($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#send-contact-message,#submit-application').on('click', '', function (event) {
        const method = "POST";
        const url = "/contact-message";
        let form = $('.contact-form');
        makeAjaxRequest(method, url, form);
        event.preventDefault();
    });
    $('.volunteer-submit').on('click', '', function (event) {
        event.preventDefault();
        console.log("volunteer");
        const method = "POST";
        const url = "/volunteering";
        let form = $('.volunteer-form');
        makeAjaxRequest(method, url, form);

    });

    function makeAjaxRequest(method, url, form, clear = true) {
        $('.progress').removeClass('hidden')
        $.ajax({
            type: method,
            url: url,
            dataType: 'json',
            data: form.serialize(),
            success: function (a, b, c) {
                if (c.responseJSON.message === "success") {
                    $('.progress').addClass('hidden')
                    $('.alert-success').removeClass('hidden').html("<b>Thank you for contacting us</b>");
                    setTimeout(function () {
                        $('.alert-success').addClass('hidden');
                    }, 2000); // <-- time in milliseconds

                } else {
                    $('.progress').addClass('hidden')
                    $('.alert-danger').removeClass('hidden').html("<b>" + c.responseJSON.message + "</b>");
                    setTimeout(function () {
                        $('.alert-danger').addClass('hidden');
                    }, 2000); // <-- time in milliseconds

                }

            },
            error: function (a, b, c) {
                console.log(b);
            }
        });

        if (clear) {
            form.trigger('reset');
        }

    }

    const current = location.pathname;

    $('.nav-link').each(function () {
        const $this = $(this);
        if (($this.attr('href')) === current) {
            $this.addClass('active');
        }
    });
});
