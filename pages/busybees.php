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
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Nisi lacus sed viverra tellus in hac. Aliquet enim tortor at auctor urna. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra. 
                    Nec dui nunc mattis enim. Sit amet consectetur adipiscing elit ut aliquam purus. Felis eget nunc lobortis mattis. 
                    In hendrerit gravida rutrum quisque non. Nisi porta lorem mollis aliquam. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. 
                    Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. At risus viverra adipiscing at. Mattis aliquam faucibus purus in massa tempor nec. Ut morbi tincidunt augue interdum velit euismod. Sit amet dictum sit amet justo donec. Dictum non consectetur a erat nam at.
                    Orci sagittis eu volutpat odio facilisis mauris. Mattis vulputate enim nulla aliquet porttitor lacus. Porta lorem mollis aliquam ut porttitor leo a diam. Interdum consectetur libero id faucibus nisl tincidunt. Accumsan tortor posuere ac ut. Metus aliquam eleifend mi in nulla. Risus quis varius quam quisque id. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Aliquet risus feugiat in ante metus. Mattis rhoncus urna neque viverra justo nec ultrices dui. Auctor elit sed vulputate mi sit amet mauris commodo. Sodales ut eu sem integer vitae justo. Tortor condimentum lacinia quis vel eros donec ac odio tempor. </p>
            </div>
           <div class='h-50 mb-4 mt-4 hexaline d-flex flex-row  '>
                <div class='d-flex flex-column w-10'> 
                    <div class='carte'>
                        <div  id='js-ama' class='carte__inner'>
                                <div class="carte__face carte__face--front d-flex align-items-center justify-content-center">
                                    <img src="../assets/images/amanda.jpg" alt="photo-amandine">
                                </div>
                                <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                        <div class='carte__header'>
                                            <h3>Amandine<h3>
                                        </div>
                                        <div class='carte__body'>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                                    labore et dolore magna aliqua. Nisi lacus sed viverra tellus in hac. 
                                                    Nec dui nunc mattis enim. Sit amet consectetur adipiscing elit ut aliquam purus. 
                                                    Felis eget nunc lobortis mattis. 
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
                                <img src="../assets/images/estelle.jpeg" alt="photo-stella">
                            </div>
                            <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                    <div class='carte__header'>
                                        <h3>Estelle<h3>
                                     </div>
                                    <div class='carte__body'>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                            labore et dolore magna aliqua. Nisi lacus sed viverra tellus in hac. 
                                            Nec dui nunc mattis enim. Sit amet consectetur adipiscing elit ut aliquam purus. 
                                            Felis eget nunc lobortis mattis. 
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
                                <img src="../assets/images/fra.png" alt="photo-francis">
                            </div>
                            <div class="carte__face carte__face--back d-flex flex-column align-items-center justify-content-center bg-primary">
                                <div class='carte__content d-flex flex-column align-items-center justify-content-center '>
                                    <div class='carte__header'>
                                        <h3>Françis<h3>
                                    </div>
                                    <div class='carte__body'>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                            labore et dolore magna aliqua. Nisi lacus sed viverra tellus in hac. 
                                            Nec dui nunc mattis enim. Sit amet consectetur adipiscing elit ut aliquam purus. 
                                            Felis eget nunc lobortis mattis. 
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
