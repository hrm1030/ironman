$(document).ready(function() {
    $('#language').select2({
        placeholder: "Select an language",
    });

    
    $('#country').select2({
        placeholder: "Select an city",
    });

    $('#btn_save').click(function() {
        var id = $('#id').val();
        var username = $('#name').val();
        var email = $('#email').val();
        var language = $('#language').val();
        var country = $('#country').val();
        var password = $('#password').val();
        $.ajax({
            url:'profile/save',
            method:'post',
            dataType: 'json',
            data: {
                id:id,
                name:username,
                email:email,
                language:language,
                country:country,
                password:password
            },
            success : function(data) {
                if(data['msg'] == 'password incorrect') 
                {
                    toastr['error']('Password incorrect.');
                }
                if(data['msg'] == 'success')
                {
                    toastr['success']('Successfully saved.');
                }
            },
            error : function () {
                toastr['error']('Errors in server.', 'Error');
            }
        });
        $('#photo_form').submit();
        
    })
});