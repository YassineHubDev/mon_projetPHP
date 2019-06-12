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

        <div class="cuisine1">
            <img src="img/upload/cuisine1.jpg" alt="Belle_cuisine">
        </div>

        <div>
            <article>

                <br>
                <br>

                <h2 class="coeur">Notre coeur de métier</h2>
                <p class="article1">
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
            </article>
        </div>

    </section>

    <section id="page2">
        <article class="article2">
            <h2>Tout a commencé en 2000...</h2>

            <br>

            <p>
                ... lorsque Ahmed et Denis (AD), amis de longue date et collègue dans la même entreprise ont décidé de
                créer AD-installations for Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corporis
                dolor
                doloremque eius esse, eum excepturi illum, laborum magnam, magni minus natus neque nihil nostrum odit
                pariatur quo
                recusandae vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis fugiat non perferendis
                quos. Ab atque cum dicta eligendi fugit harum iusto, laborum, molestiae necessitatibus qui sed sit,
                tenetur totam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid distinctio est
                et eum eveniet fugit hic minima molestiae molestias, nam nostrum odio, quas quia veniam vitae,
                voluptatum! Harum, voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque
                dignissimos dolorem explicabo harum in incidunt necessitatibus numquam, rerum sapiente similique
                temporibus ullam! Corporis delectus deleniti dolore id vero Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Accusamus adipisci assumenda atque corporis distinctio eveniet fugit minima minus, nam
                natus numquam obcaecati quaerat quas quibusdam, quos reiciendis sapiente voluptate voluptates.
            </p>
        </article>
    </section>

    <section id="page5">
    </section>

    <section id="page6">
    </section>

    <section id="page7">
    </section>

    <section id="page8">
    </section>

    <section id="page10">
        <?php if (isset($success) && $success === 1) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Inscription réussie !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <form method="post" action="/#page10">

            <?php // createInputText('name', 255, "Nom") ?>

            <div class="form-group">
                <label for="surname">Nom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageSurName) && !empty($errorMessageSurName)) ? 'is-invalid' : '' ?>"
                       id="surname" name="surname" value="<?= $_POST['surname'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageSurName ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageFirstName) && !empty($errorMessageFirstName)) ? 'is-invalid' : '' ?>"
                       id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageFirstName ?? "" ?></div>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-10">
                        <p>Vous êtes :</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios1"
                                   value="magasin" checked>
                            <label class="form-check-label" for="gridRadios1">
                                un magasin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="gridRadios2"
                                   value="client">
                            <label class="form-check-label" for="gridRadios2">
                                un client
                            </label>

                            <br>
                            <br>


                            <input type="submit" value="Créer le produit" class="btn btn-outline-success">

        </form>
    </section>

</main>
<?php require 'inc/footer.php'; ?>
