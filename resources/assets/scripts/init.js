$(document).ready(function(){
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