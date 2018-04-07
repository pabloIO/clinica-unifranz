$(document).ready(function(){
    $('select').material_select();
    $('.datepicker').pickadate({
      format: 'yyyy-mm-dd',
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Hoy',
      clear: 'Limpiar',
      close: 'Ok',
      closeOnSelect: false // Close upon selecting a date,
    });
    $(".button-collapse").sideNav();
    $('.slider').slider();
    checkSize();
    window.onresize = function(event){
        checkSize();
    }
});

function checkSize(){
    if($(window).width() > 1000){
        $('#biggerScreen').show();
    }else{
        $('#biggerScreen').hide();
    }
}
function closeNav(){
    $('#mobile').sideNav('destroy');
}
