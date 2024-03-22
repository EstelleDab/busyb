<?php
    include '../inc.connexion.php';
    include '../inc.functions.php';
    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Travaillons Ensemble</title>
    <link href="../assets/css/travaillons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include '../inc.head.php';?>
</head>

<body class="bg-dark">

    <?php include '../inc.header.php';?>

    <main class='bg-light'>


        <h1 class='bg-dark text-primary px-5'>Travaillons ensemble</h1>
        <section id='ads '>
            <h2 class="px-5">Nous recherchons...</h2>


            <!-- section recherche -->
            <section class="m-5 d-flex justify-content-center p-2">

                <div class="bg-secondary-subtle rounded p-3">
                    <h3>Que recherchez vous ?</h3>
                    <form class="col-3" method="POST" action="">

                        <div class="form-group form-check p-2">

                            <div class="form-check p-1">
                                <input class="form-check-input" type="checkbox" name="categorie[]" id="cdi" value="cdi">
                                <label for="cdi" class="form-check-label">CDI</label>
                            </div>

                            <div class="form-check p-1">
                                <input class="form-check-input" type="checkbox" name="categorie[]" id="cdd" value="cdd">
                                <label for="cdd" class="form-check-label">CDD</label>
                            </div>

                            <div class="form-check p-1">
                                <input class="form-check-input" type="checkbox" name="categorie[]" id="stage"
                                    value="stage">
                                <label for="stage" class="form-check-label">Stage</label>
                            </div>
                        </div>

                        <div class="p-1">
                            <input class="btn btn-primary" type="submit" value="Rechercher">
                        </div>
                </div>

                </form>
                </div>

                <div class="col-8 p-3">
                    <h3 class="pb-2">Pourquoi nous rejoindre ?</h3>
                    <p>Bienvenue chez Busy B, là où les idées prennent vie et la créativité prospère ! En tant qu'agence
                        de communication digitale dynamique, nous sommes constamment à la recherche de nouveaux talents
                        pour rejoindre notre équipe passionnée. Chez Busy B, nous croyons fermement en la puissance de
                        l'innovation et de la collaboration pour créer des expériences numériques exceptionnelles qui
                        captivent et inspirent. Si vous êtes un esprit créatif, ambitieux et désireux de repousser les
                        limites du possible dans le monde numérique, alors vous êtes au bon endroit. Découvrez nos
                        opportunités de carrière et rejoignez-nous dans notre mission de façonner l'avenir de la
                        communication digitale.</p>
                </div>


            </section><!--eof section recherche-->

            <div class="container mt-5 ">
                <div class="card-deck">
                    <?php 
                getAds();
            ?>
                </div>
            </div>
        </section><!--eof ads-->

        <section id='avis' class='bg-light'>
            <div id="myCarousel" class="pt-2 pb-2 carousel slide  m-auto " data-bs-ride="carousel">
                <div class="carousel-inner d-flex justify-content-between align-items-center m-auto bg-secondary ">
                    <?php 
                getReviews();
                ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn btn-secondary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn btn-secondary" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div><!--eof carousel-->
        </section>

    </main>

    <?php include '../inc.footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="../assets/libraries/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/anim.js"></script>
    <script src="../assets/js/rating.js"></script>
</body>