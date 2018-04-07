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
// CONSTANTE URL DE LA API EN LARAVEL
try{
  if(typeof(Storage) === undefined) throw 'El almacenamiento interno no está soportado por el navegador, intenta con otro';
  localStorage.setItem('API_URL', 'http://localhost:8000/api/v1/');
  localStorage.setItem('WEB_URL', 'http://localhost:8000/');
}catch(err){
  Materialize.toast(err, 5000);
}
