(function ($) {
    $(document).ready(function () {
        $(document).on('submit', 'form#msg_sent_form', function(e){
            e.preventDefault();
            let name    = $('form#msg_sent_form input[name="name"]').val();
            let email   = $('form#msg_sent_form input[name="email"]').val();
            let phone   = $('form#msg_sent_form input[name="phone"]').val();
            let subject = $('form#msg_sent_form input[name="subject"]').val();
            let message = $('form#msg_sent_form textarea[name="message"]').val();

            if (name == '' || email == '' || phone == '' || subject == '' || message == '') {
                $('.mess').html('<p class="alert alert-danger">All fields are required !<button class="close" data-dismiss="alert">&times;</button></p>');
            }else if( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email) == false ){
                $('.mess').html('<p class="alert alert-danger">Invalid email address !<button class="close" data-dismiss="alert">&times;</button></p>');
            } else {
                $.ajax({
                    url : '/event-mail',
                    method : "POST",
                    contentType : false,
                    processData : false,
                    data : new FormData(this),
                    success : function(data){
                        $('.mess').html('<p class="alert alert-success">Your message already sent!<button class="close" data-dismiss="alert">&times;</button></p>');
                        $('form#msg_sent_form')[0].reset();
                    }
                }); 
            }
        });
    });
})(jQuery)