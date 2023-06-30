
function submitForm() {
    $.ajax({
        type: 'POST',
        url: 'acciones/reguser.php',
        data: $('#signin').serialize(),
        success: function(response) {
    var data = JSON.parse(response);
    if (data.success) {
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: data.message,
            showConfirmButton: false,
            //timer: 2500
        });
        $('#errorCont').html(data.message).addClass('success-message');
        $('#signin1').modal('hide');
    } else {
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: data.message
        });
        $('#errorCont').html(data.message).addClass('error-message');
        $('#signin1').modal('hide');
    }
}
    });
}

function submitFormReset() {
    $.ajax({
        type: 'POST',
        url: 'acciones/reset-password.php',
        data: $('#reset_pass').serialize(),
        success: function(response) {
    var data = JSON.parse(response);
    if (data.success) {
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: data.message,
            showConfirmButton: false,
            //timer: 2500
        });
        
        $('#forgetPasswordModal').modal('hide');
    } else {
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: data.message
        });
        
        $('#forgetPasswordModal').modal('hide');
    }
}
    });
}



