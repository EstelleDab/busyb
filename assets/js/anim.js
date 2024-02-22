$(document).ready(function () { 
    
    $("#hexalist").on("click", function (e) {
    e.preventDefault(); //on empêche le chargement du lien 
    
let chosenOne=e.target.parentNode.getAttribute('id') || e.target.id || e.target.parentNode.parentNode.getAttribute('id') //on repère le 'li'cliqué
console.log(chosenOne);
/*preparation de la recup de l url*/

let url= e.target.parentNode.getAttribute("href") || e.target.href || e.target.parentNode.parentNode.getAttribute('href');
console.log(url);

$("li").toggleClass('fade');
$('#'+chosenOne).removeClass('fade');
$('.fade').fadeOut('slow');
$('#'+chosenOne).addClass('visible');
$('#'+chosenOne).css({'transform': 'scale(30)', 'transition':'all 500ms ease-out'}); // à améliorer...
$('.link').fadeOut(1000,'linear');

$(':root').load(url, function(result) {
   $(':root').html(result);
});

    })})