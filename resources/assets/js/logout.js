/***************
****************
****************
* LOGOUT AUTH ADMIN
* @type: Javascript, Jquery
* @author: Pablo Diego Montes Jordan
* @date: 2018-01-12
****************
****************
****************/
$(document).ready(function(){
  $('#logout').on('click', function(){
    try{
      if(typeof(Storage) === 'undefined') throw 'El almacenamiento interno no está soportado por el navegador, intenta con otro';
      localStorage.removeItem('token');
      window.location.href = localStorage.WEB_URL;
    }catch(err){
      Materialize.toast(err, 5000);
    }
  });
});
