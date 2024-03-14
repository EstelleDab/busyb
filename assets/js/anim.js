
$(document).ready(function () { 
    
    // animation
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


    // popup 1

        $(".projet1").on("click", function () {
            popup1(); // Appelle la fonction popup
        })

        function popup1() {
            $(".popup1").toggle(); // pour ouvrir le popup
        }
    
        $(".popup1").on("click", function () {   // Pour fermer le popup
            $(".popup1").toggle();
            clear();
        })

    // popup 2

        $(".projet2").on("click", function () {
            popup2(); // Appelle la fonction popup
        })

        function popup2() {
            $(".popup2").toggle(); // pour ouvrir le popup
        }
    
        $(".popup2").on("click", function () {   // Pour fermer le popup
            $(".popup2").toggle();
            clear();
        })

    // popup 3

        $(".projet3").on("click", function () {
            popup3(); // Appelle la fonction popup
        })

        function popup3() {
            $(".popup3").toggle(); // pour ouvrir le popup
        }
    
        $(".popup3").on("click", function () {   // Pour fermer le popup
            $(".popup3").toggle();
            clear();
        })

    // popup 4

        $(".projet4").on("click", function () {
            popup4(); // Appelle la fonction popup
        })

        function popup4() {
            $(".popup4").toggle(); // pour ouvrir le popup
        }

        $(".popup4").on("click", function () {   // Pour fermer le popup
            $(".popup4").toggle();
            clear();
        })

    
});
