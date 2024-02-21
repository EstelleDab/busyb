$(document).ready(function () { 
    
    $("#hexalist").on("click", function (e) {
    e.preventDefault(); //on empêche le chargement du lien 
    
let chosenOne=e.target.parentNode.getAttribute('id') || e.target.id || e.target.parentNode.parentNode.getAttribute('id') //on repère le 'li'cliqué

/*preparation de la recup de l url*/

let url= e.target.parentNode.getAttribute("href") || e.target.href || e.target.parentNode.parentNode.getAttribute('href');


$("li").toggleClass('fade');
$('#'+chosenOne).removeClass('fade');
$('.fade').fadeOut('slow');
$('#'+chosenOne).addClass('visible');
$('#'+chosenOne).css({'transform': 'scale(15)', 'transition':'all 5s ease-in-out'}); // à améliorer...
$('span.lien').fadeOut(1000,'linear');
    })})