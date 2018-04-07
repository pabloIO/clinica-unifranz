/***************
****************
****************
* MIDDLEWARE AUTH ADMIN
* @type: Javascript, Jquery
* @author: Pablo Diego Montes Jordan
* @date: 2018-01-12
****************
****************
****************/;
$(document).ready(function(){
  try{
    if(typeof(Storage) === undefined) throw 'El almacenamiento interno no está soportado por el navegador, intenta con otro';
    if(localStorage.token === null || localStorage.token === undefined) window.location.href = WEB_URL;
    return;
  }catch(err){
    Materialize.toast(err, 5000);
    window.location.href = 'http://localhost:8000/';
    return;
  }
});
