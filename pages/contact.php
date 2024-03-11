<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page contact</title>
    <?php include '../inc.head.php';?>
</head>

<body class="vw-auto h-100 bg-primary">
    <?php include '../inc.header.php';?>

    <div class="container mt-5 mb-5 p-5 bg-white border-0 rounded">
        <h1>Contact</h1>
        <div class="row">

            <!-- Formulaire de contact -->
            <form class="col-md-6" id="contact-form" method="post" action="contact-form.php" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname" class="form-label">
                            Prénom
                        </label>
                        <input type="text" class="form-control" id="fname" name="fname" required>

                    </div>

                    <div class="col-md-6">
                        <label for="lname" class="form-label">
                            Nom
                        </label>
                        <input type="text" class="form-control" id="lname" name="lname" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label for="email" class="form-label">
                            Adresse email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="col-md-4">
                        <label for="phone" class="form-label">
                            Numéro
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="message" class="form-label">
                            Message
                        </label>
                        <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
                    </div>

                    <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary">
                    Envoyer
                    </button>
                    </div>
                </div>
            </form>

            <!-- Map -->
            <div class="col-md-6">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11120.036499578886!2d1.2393689024155017!3d45.83109956580797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fecb4cc3db6173%3A0xca1e4e2ee524a8c1!2sUniversit%C3%A9%20de%20Limoges%20-%20Campus%20La%20Borie!5e0!3m2!1sen!2sza!4v1709799830661!5m2!1sen!2sza"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- eof map -->
            </div><!-- eof container map col-md-6 -->

        </div><!-- eof row -->
    </div><!-- eof container form + map -->


    <?php include '../inc.footer.php';?>
</body>

</html>