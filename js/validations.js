/**
 * Created by AdamB on 24.2.2016.
 */


$('.js_password_check').blur(function(){
    var mainPassword = $('#mainPassword').val().trim()

    if(mainPassword == null || mainPassword == ""){
        Materialize.toast('You must type your password', 4000);
        $('#Password_reg').addClass('invalid');
        return
    }

    var correctpattern = /^(?=.*[0-9])^(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,100}$/.test(mainPassword)
    if(!correctpattern){
        Materialize.toast('Your password has to contain at least 1 uppercase, 1 lowercase, 1 number and be 6 characters long', 6000);
        $('#Password_reg').addClass('invalid');
        return
    }


    var retypePassword = $('#retypePassword').val().trim()
    if (retypePassword == ""){
        return
    }

    if(mainPassword != retypePassword){
        Materialize.toast('Your passwords do not match', 6000);
        $('#Password_reg').addClass('invalid');
        return
    }

});
