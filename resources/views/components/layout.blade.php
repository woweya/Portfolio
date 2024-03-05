<!DOCTYPE html>
<html style="overflow-x:hidden;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Vina+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dark" >
    <x-navbar></x-navbar>
    {{ $slot }}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        AOS.init();

        $(document).ready(function() {
    var nav = $("#navbar");
    var scrollThreshold = 200;

    $(window).scroll(function () {
       if ($(this).scrollTop() > scrollThreshold) {
          nav.addClass("scrolled");
       } else {
          nav.removeClass("scrolled");
       }
    });
 });

 document.addEventListener("DOMContentLoaded", function() {
    var nav = document.getElementById("navbar-list");
    var nightMode = document.getElementById("toggle");

    // Aggiungi un evento al caricamento della pagina per ripristinare lo stato del tema
    var isDarkModeActiveString = sessionStorage.getItem("isDarkModeActive");
    var isDarkModeActive = isDarkModeActiveString === "true";

    if (isDarkModeActive) {
        document.body.classList.add("dark");
        nightMode.checked = true;
    }

    nightMode.addEventListener("click", function() {
        // Cambia lo stato del tema
        var isDarkModeActive = nightMode.checked;

        // Aggiorna la classe 'dark' sul body in base allo stato del tema
        document.body.classList.toggle("dark", isDarkModeActive);

        // Salva lo stato del tema nella sessionStorage
        sessionStorage.setItem("isDarkModeActive", isDarkModeActive.toString());
    });

    // Aggiungi la classe 'active' quando un elemento viene cliccato
    nav.addEventListener("click", function(event) {
        var clickedElement = event.target;

        if (clickedElement.tagName === "A") {
            // Rimuovi la classe active da tutti gli elementi
            nav.querySelectorAll("a").forEach(function(element) {
                element.classList.remove("active");
                element.style.color = "#908e8e";
            });

            // Aggiungi la classe active all'elemento cliccato
            clickedElement.classList.add("active");
            clickedElement.style.color = "#EC2637";
        }
    });
});
            document.addEventListener("DOMContentLoaded", function() {
                var backEndElement = document.getElementById('back-end');
                var frontEndElement = document.getElementById('front-end');
                var card = document.getElementById('card');
                if (window.innerWidth < 576) {

        // Remove 'aos-init' class
        backEndElement.classList.remove('aos-init');
        card.classList.remove('aos-init');
        frontEndElement.classList.remove('aos-init');
    } else {
        // Add 'aos-init' class
        backEndElement.classList.add('aos-init');
        card.classList.add('aos-init');
        frontEndElement.classList.add('aos-init');
    }
            })

      </script>
</body>
</html>
