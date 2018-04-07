/***************
****************
****************
* LOGIN ADMIN
* @type: Javascript, Jquery
* @author: Pablo Diego Montes Jordan
* @date: 2018-01-12
****************
****************
****************/

$(document).ready(function(){
  $('#alert-form').hide();

  $('#loginForm').on('click', function(){
    var creds = {
      username: $('#username').val(),
      password: $('#pass').val(),
      _token: $('#_token').val(),
    };
    $.ajax({
      method: 'POST',
      url: localStorage.API_URL + 'login',
      data: creds
    }).done(function(data){
      if(data.success){
        try{
          if(typeof(Storage) === 'undefined') throw 'El almacenamiento interno no está soportado por el navegador, intenta con otro';
          localStorage.setItem('token', data.token);
          window.location.href = localStorage.WEB_URL + 'admin/dashboard';
        }catch(err){
          Materialize.toast(err, 5000);
        }
      }else{
        $('#alert-form').show('slow');
        $('#alert-form').html($('<span></span>')
                                .addClass('center white-text')
                                .text(data.msg));
        return;
      }
    });
  });
});
