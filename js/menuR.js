$(document).ready(main); 
var contador = 1;
function main(){
    $('.menu_responsive').click(function(){
        if(contador == 1){
            $('nav').toggleClass('muestraMenu');
            $('.menu_responsive').addClass('menufix lineMenuR');
            contador = 0;
        } else {
            contador = 1;
             $('nav').toggleClass('muestraMenu');
            $('.menu_responsive').removeClass('menufix lineMenuR');
        }
 
    });
};