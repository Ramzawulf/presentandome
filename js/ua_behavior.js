$(function(){
//Ventanas de dialogo
    $('#ua_session_window').dialog({
        autoOpen: false,
	width: 400,
        closeOnEscape: true,
        position: 'center',
        title: 'Accede a tu cuenta',
        modal: true
    });
    $('#ua_registration_window').dialog({
        autoOpen: false,
	width: 400,
        closeOnEscape: true,
        position: 'center',
        title: 'Regístrate',
        modal: true
    });
    $('#ua_login').click(function(){
        $('#ua_session_window').dialog('open');
	return false;
    });
    $('#ua_reg').click(function(){
        $('#ua_registration_window').dialog('open');
	return false;
    });

//Ajax
    var options = {
            //target:        '#user_activity',
            target:        '#response',
            //beforeSubmit:  showRequest,
            success:       closeForm,
            timeout:   3000
        };
    $('#ajax_login').submit(function() {
        $(this).ajaxSubmit(options);
        $("#user_activity").html("<label> wohoooo </label>");
        return false;
    });

    function closeForm(){
        $('#ua_session_window').dialog('close');
    }

});