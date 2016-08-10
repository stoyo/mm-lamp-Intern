$('.carousel').carousel({
    interval: 5000 //changes the speed
});

$('.item:first-of-type').addClass('active');

$('#contacts').submit(function (event) {

    var name = $('input[name=name]');
    var email = $('input[name=email]');
    var phone = $('input[name=phone]');
    var message = $('textarea[name=message]');

    event.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: './contacts',
        data: {name: name.val(), email: email.val(), phone: phone.val(), message: message.val()},
        success: function () {

            $("#alertAfter").after('<div class="alert alert-success alert-dismissable">' +
                    '<button type="button" class="close" ' +
                    'data-dismiss="alert" aria-hidden="true">' +
                    '&times;' +
                    '</button>' +
                    'Successfully sent email. Thank you!' +
                    '</div>');
            
            name.val("");
            email.val("");
            phone.val("");
            message.val("");

        }, error: function () {
            
            $("#alertAfter").after('<div class="alert alert-warning alert-dismissable">' +
                    '<button type="button" class="close" ' +
                    'data-dismiss="alert" aria-hidden="true">' +
                    '&times;' +
                    '</button>' +
                    'Something went wrong.' +
                    '</div>');
            
            name.val("");
            email.val("");
            phone.val("");
            message.val("");
            
        }
    });
});
