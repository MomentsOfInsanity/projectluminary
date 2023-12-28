function sechedule_call() {
    var phone_num = $('#phone_num').val();
    var call_desc = $('#call_des').val();
    var time_zn = $('#time_zn').val();
    var call_time = $('#call_time').val();
    var kt_datepicker_1 = $('#kt_datepicker_1').val();
    var user_id = $('#user_id').val();

    if(phone_num == '' || call_desc == '' || time_zn == '' || call_time == '' || kt_datepicker_1 == '' || user_id == '') {
        $('#need_all_fields').show();
    }
    else {

    $.ajax({
            url: "/staff/schedule_call",
            type: "post",
            data: { 
                date: kt_datepicker_1,
                time: call_time,
                time_zone: time_zn,
                phone_num: phone_num,
                call_desc: call_desc,
                resolved: 0,
                user_id: user_id
            },
            success: function (response) {
                if(response == 1) {
                    $('#need_all_fields').hide();
                    $('#success_schedule').show();
                }
                else {
                    $('#need_all_fields').hide();
                    $('#success_schedule').hide();
                    $('#error_schedule').show();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
}