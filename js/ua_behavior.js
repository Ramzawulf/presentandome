$(function(){

    $('#ua_session_window').dialog({
        autoOpen: false,
	width: 400,
        closeOnEscape: true,
        position: 'top',
        title: 'Accede a tu cuenta',
        modal: true
    });
    $('#ua_registration_window').dialog({
        autoOpen: false,
	width: 400,
        closeOnEscape: true,
        position: 'top',
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

});