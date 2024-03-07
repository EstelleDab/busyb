<!DOCTYPE html>
<html>
<head>
    <title>Page contact</title>
    <?php include 'inc.head.php';?>
</head>
<body class="vw-auto h-100">
<?php include 'inc.header.php';?>

<div class="container mt-5">
    <h1>Contact</h1>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="fname" class="form-label">
                Prénom
            </label>
            <input type="text" class="form-control" id="fname" required>
        </div>

        <div class="col-md-6">
            <label for="lname" class="form-label">
                Nom
            </label>
            <input type="text" class="form-control" id="lname" required>
        </div>

        <div class="col-md-8">
            <label for="email" class="form-label">
                Adresse email
            </label>
            <input type="email" class="form-control" id="email" required>
        </div>

        <div class="col-md-4">
            <label for="phone" class="form-label">
                Numéro de téléphone
            </label>
            <input type="text" class="form-control" id="phone">
        </div>

        <div class="col-md-12 mb-3">
            <label for="message" class="form-label">
                Message
            </label>
            <textarea class="form-control" id="message" rows="3" required></textarea>
        </div>
            
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Envoyer
            </button>
        </div>
    </form>
    
</div>

    <?php include 'inc.footer.php';?>
</body>
</html>