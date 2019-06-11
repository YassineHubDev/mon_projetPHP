<?php
use src\Controller\RegisterController;


//On récupère notre contrôleur
$controller = new RegisterController();
//On récupère les données de l'index
$datas = $controller->register();
//On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';
?>

<main class="container">


    <section id="page1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/upload/cuisine1.jpg" class="d-block w-90" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/upload/cuisine2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/upload/cuisine3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div>
            <article>
                <h2 class="coeur">Notre coeur de métier</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi beatae commodi harum minus
                    molestias nam praesentium sed sint tenetur. Autem deleniti id ipsam non optio praesentium reiciendis
                    sit tempore? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at commodi
                    consequuntur dolore doloremque esse illum, iure libero mollitia nemo odit porro ratione sit suscipit
                    tempore ullam veniam voluptas voluptates.lorem
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur cumque, explicabo
                    illum maxime praesentium qui quia quibusdam, quo reprehenderit sequi vel. Ad adipisci assumenda
                    neque nesciunt quibusdam sit tenetur?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi, atque debitis, doloremque
                    ducimus ea eius enim excepturi, harum iusto maxime molestias nisi nobis nulla obcaecati quibusdam
                    temporibus? Accusantium, ea.
                </p>

                <br>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dolores in non placeat velit.
                    Adipisci assumenda consequuntur doloribus ex incidunt, magni nostrum numquam praesentium quasi quos
                    saepe sint suscipit unde.
                </p>
            </article>
        </div>

    </section>

    <section id="page2">
    </section>

    <section id="page3">
    </section>

    <section id="page4">
    </section>

    <section id="page5">
    </section>

    <section id="page6">
    </section>

    <section id="page7">
    </section>

    <section id="page8">
    </section>

    <section id="page9">
    </section>

    <section id="page10">
        <?php if(isset($success) && $success === 1) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Inscription réussie !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <form method="post" action="/#page10">

            <?php  // createInputText('name', 255, "Nom") ?>

            <div class="form-group">
                <label for="username">Pseudo</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageUserName) && !empty($errorMessageUserName)) ? 'is-invalid' : '' ?>"
                       id="name" name="name" value="<?= $_POST['name']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageUserName ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="surname">Nom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageSurName) && !empty($errorMessageSurName)) ? 'is-invalid' : '' ?>"
                       id="name" name="name" value="<?= $_POST['name']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageSurName ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageFirstName) && !empty($errorMessageFirstName)) ? 'is-invalid' : '' ?>"
                       id="name" name="name" value="<?= $_POST['name']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageFirstName ?? "" ?></div>
            </div>



            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="name" name="email" value="<?= $_POST['email']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>




            <input type="submit" value="Créer le produit" class="btn btn-outline-success">

        </form>
    </section>

</main>
<?php require 'inc/footer.php'; ?>
