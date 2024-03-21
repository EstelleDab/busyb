<!DOCTYPE html>
<html>
    <head>
        <title>Page équipe</title>
        <link href="../assets/css/busybees.css" rel="stylesheet">
        <?php include '../inc.head.php';?>
    </head>
<body class="bg-dark">
    
    <?php include '../inc.header.php';?>
   
    <main class='bg-light'>
        <h1 class='bg-dark text-primary px-5' >L'ÉQUIPE DE BUSY</h1>
        <h2 class='text-secondary px-5'>Présentation de l'équipe</h2>
        <div class='d-flex flex-column justify-content-start'>
            <div class='px-5'>
                <p >Agence digitale jeune et dynamique, BusyB est spécialisée dans la création de solutions numériques innovantes. Notre équipe de passionnés est composée d’experts multidisciplinaires, chacun apportant son savoir-faire unique pour répondre aux besoins de nos clients. Nos collaborateurs sont des créatifs, des codeurs, des stratèges et des visionnaires. Ils maîtrisent les dernières technologies et sont constamment à l’affût des tendances du marché. Que ce soit pour la conception d’un site web, le développement d’une application mobile ou la mise en place d’une stratégie de marketing digital, nous mettons notre expertise au service de votre succès </p>
            </div>
           <div class='h-50 mb-4 mt-4 hexaline d-flex flex-row  '>
                <div class='d-flex flex-column w-10'> 
                    <div class='carte'>
                        <div  id='js-ama' class='carte__inner'>
                                <div class="carte__face carte__face--front d-flex align-items-center justify-content-center">
                                    <img src="../assets/images/busybees/amanda.jpg" alt="photo-amandine">
                                </div>
                                <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                        <div class='carte__header'>
                                            <h3>Amandine<h3>
                                        </div>
                                        <div class='carte__body'>
                                                <p class="px-4">Passionnée par le web et la tech, spécialisée dans le développement front-end. Son expertise en webdesign et en graphisme lui permettent de créer des interfaces utilisateur à la fois esthétiques et fonctionnelles. 
                                                </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
             
                <div class='d-flex flex-column w-10 mt-9'>
                    <div class='carte mt-5'>
                        <div id='js-ste' class='carte__inner'>
                            <div class="carte__face carte__face--front d-flex align-items-center justify-content-center">
                                <img src="../assets/images/busybees/estelle.jpeg" alt="photo-stella">
                            </div>
                            <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                    <div class='carte__header'>
                                        <h3>Stella<h3>
                                     </div>
                                    <div class='carte__body'>
                                        <p>La plus jeune de la team est développeuse full-stack avec une forte appétence pour le front-end. En quete permanente d'optimisation, elle saura mener à bien votre projet avec efficacité et efficience! 
                                        </p>        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class='d-flex flex-column w-10 mb-5'>
                    <div class='carte mb-5'>
                        <div id='js-fra' class='carte__inner'>
                            <div class="carte__face carte__face--front d-flex align-items-center justify-content-center">
                                <img src="../assets/images/busybees/fra.png" alt="photo-francis">
                            </div>
                            <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                    <div class='carte__header'>
                                        <h3>Françis<h3>
                                    </div>
                                    <div class='carte__body'>
                                        <p>Francis est un passionné de dév, spécialisé dans le back-end. Accro aux défis il ne recule devant aucun problème complexe. Que ce soit pour la mise en place d’architectures robustes, la gestion des bases de données ou l’optimisation des requêtes, Francis excelle dans son domaine. 
                                        </p>        
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            

            <div class='d-flex flex-column mt-9 w-10'>
                <div class='carte mt-5 bg-info'>
                        <div id='js-fra' class='carte__inner'>
                            <div class="pink carte__face carte__face--front d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                </div>
            </div>
        </div>

    
              
</main>
    <?php include '../inc.footer.php';?> 

    <script src="../assets/libraries/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/anim.js"></script>	
   

</body>
</html>
