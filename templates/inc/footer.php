<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {

        $('.dropdown-item, .navbar-brand, .nav-link').on('click', function () { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
            return false;
        });
    });
</script>

</body>
</html>