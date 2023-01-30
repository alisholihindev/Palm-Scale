$(document).ready(function($) {

    $('.password').on('change', function () {
        checkPassword($(this).val(), $('.confirm-password').val());
    });

    $('.confirm-password').on('change', function () {
        checkPassword($('.password').val(), $(this).val());
    });

    function checkPassword(password, confirm_password) {
      if (password !== confirm_password) {
        $(".btn-submit").attr('disabled','disabled');
        $('.confirm-password').css('border-color','red');
        $('.pesan-error').show();
      }else {
        $(".btn-submit").removeAttr('disabled');
        $('.confirm-password').css('border-color','');
        $('.pesan-error').hide();
      }    
    }
});