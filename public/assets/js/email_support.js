function support_email() {
    var email_data = $('#email_data').val();
    var user_id = $('#user_id').val();

    $.ajax({
            url: "/staff/support_email",
            type: "post",
            data: { 
                email_data: email_data,
                user_id: user_id
            },
            success: function (response) {
            
                console.log(response);
                console.log("hit success!!");
                $('#success_email').show();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("hit error");
                $('#error_email').show();
            }
        });
    
}