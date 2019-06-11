<?php

use src\Controller\IndexController;


//On récupère notre contrôleur
$controller = new IndexController();
//On récupère les données de l'index
$datas = $controller->index();
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
                    <img src="../public/img/upload/cuisine1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
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
        <form>
            <article class="connectez">
                <p>
                    Connectez-vous sur votre espace personnel.
                </p>
            </article>


            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Entrez votre email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Entrez votre mot de passe">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </section>

</main>
<?php require 'inc/footer.php'; ?>
