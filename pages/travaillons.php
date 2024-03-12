<?php
    include '../inc.connexion.php';
    include '../inc.functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Travaillons Ensemble</title>
    <link href="../assets/css/travaillons.css" rel="stylesheet">
    <?php include '../inc.head.php';?>
</head>

<body class="bg-light">
    <header class='bg-dark'>
        <?php include '../inc.header.php';?>
    </header>
    <main>


    <h1 class='bg-dark text-primary px-5'>Travaillons ensemble</h1>
        <section id='avis' class='bg-light'>
            <div id="myCarousel" class="pt-2 pb-2 carousel slide  m-auto w-50" data-bs-ride="carousel">
                <div class="carousel-inner align-items-center m-auto w-50 h-100 bg-secondary ">
                    <?php getReviews();
                    ?>
                </div><!--eof avis--> 
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
        <section id='ads'>
            <div class='works d-flex flex-column'>

            <?php 
         getAds();
            ?>
        </div>

      

            
</main>
<footer class='bg-dark'>
    <?php include '../inc.footer.php';?> 
</footer >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="../assets/libraries/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/anim.js"></script>	
</body>