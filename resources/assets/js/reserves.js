/***************
****************
****************
* RESERVES ADMIN
* @type: Javascript, Jquery
* @author: Pablo Diego Montes Jordan
* @date: 2018-01-12
****************
****************
****************/
$(document).ready(function(){
  var reserves = [];

  $.ajax({
    method: 'GET',
    url: localStorage.API_URL + 'reserves'
  }).done(function(data){
    console.log(data);
    if(data.success){
      for (var i = 0; i < data.reserves.length; i++) {
        var table = $('#reservesTable');
        table.after('<tr>' +
                      '<td>' + data.reserves[i].nombres + '</td>' +
                      '<td>' + data.reserves[i].apat + '</td>' +
                      '<td>' + data.reserves[i].amat + '</td>' +
                      '<td>' + data.reserves[i].correo + '</td>' +
                      '<td>' + data.reserves[i].telefono + '</td>' +
                      '<td>' + data.reserves[i].celular + '</td>' +
                      '<td>' + data.reserves[i].fecha_nacimiento + '</td>' +
                      '<td>' + data.reserves[i].dni + '</td>' +
                      '<td>' + data.reserves[i].fecha_creacion + '</td>' +
                      '<td>' + data.reserves[i].estado_civil + '</td>' +
                      '<td>' + data.reserves[i].genero + '</td>' +
                      '<td>' + data.reserves[i].servicios + '</td>' +
                    '</tr>'
                  );
      }
    }else{
      Materialize.toast(data.msg, 5000);
    }
  });
});
