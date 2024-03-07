
$(document).ready(function () { 
    
    $(".hex-nav").on("click", function (e) {
    e.preventDefault(); //on empêche le chargement du lien 
  
        let mylink= e.target.querySelector("a") || e.target; 
        let myurl=mylink.getAttribute("href");
        let myHexa=e.target.parentNode.getAttribute('id') || e.target.id || e.target.parentNode.parentNode.getAttribute('id') //on repère le 'li'cliqué

        $("li").toggleClass('fade');
        $('#'+myHexa).removeClass('fade');
        $('.fade').fadeOut('slow');
        $('#'+myHexa).css({'transform': 'scale(30)', 'transition':'all 500ms ease-out'});
        $('a').fadeOut(500);
        $('.link').fadeOut(1000,function(){
            window.location.href=myurl;  
        });
    });


    $(".carte__inner").on("click", function (e){
    let mycard=e.target.parentNode.getAttribute('id') || e.target.id || e.target.parentNode.parentNode.getAttribute('id'); 
    $('#'+mycard).toggleClass('is-flipped');
    })
});
