$(function (){

    $('img[alt~=\'payment-option\']').on('click',function (){

        let option = $(this);

        let chosen = $('.chosen');

        let payment_input = $('input#payment-method-chosen');

        if(option.hasClass('paypal')){

            chosen.html('Paypal');
            payment_input.val('Paypal');

        } else if(option.hasClass('mtn')){

            chosen.html('Mtn Mobile money');
            payment_input.val('Mtn');

        } else {
            chosen.html('Airtel Money');
            payment_input.val('Airtel');
        }
    });
});
