<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/logo/Logo.png" type="image/png">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="./aos-master/dist/aos.css">
    <title>DOUNGUE & PARTNERS | Cabinet d'avocats</title>
    @notiferCss
</head>

<body>
    @include('notifer::notifer')

    {{-- <div class="totop"><img src="./images/tools-icons/arrow-up.svg" alt=""></div> --}}
    <a class="whatsapp" href="https://wa.me/+237657593897" target="_blank">
        <img src="./images/tools-icons/whatsapp-logo.png" alt="">
    </a>
    <header>
        <a href="/" class="logo">
            <img src="./images/logo/Logo1 DOUNGUE&PARTNER.png" alt="logo-doungue-partners">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="/">ACCUEIL</a></li>
                <li><a href="#about">Notre cabinet</a></li>
                <li><a href="#domains">Domaines d’expertise</a></li>
                <li><a href="#activities">Activités</a></li>
            </ul>
            <a href="/carreer" class="carreer">Carrières</a>
        </nav>
        <div class="menu_icon"><img src="./images/tools-icons/bx-menu.svg" alt="" width="30"></div>
    </header>

    <main>
        @yield('content')

        <div class="cookies">
            <div class="top">
                <span><img src="./images/tools-icons/cookies-svgrepo-com.svg" width="50"></span>
                <span>
                    <h2>COOKIES & VIE PRIVEE</h2>
                </span>
            </div>
            <div class="bottom">
                <p>Pour offrir les meilleures expériences, nous utilisons des technologies telles que les cookies pour
                    stocker et/ou accéder aux informations sur l'appareil. Le consentement à ces technologies nous
                    permettra de traiter des données telles que le comportement de navigation ou les identifiants
                    uniques sur ce site. Ne pas consentir ou retirer son consentement peut affecter négativement
                    certaines caractéristiques et fonctions.</p>
            </div>
            <div class="btn">
                <button class="openbtn">Accepter</button>
                <button class="closebtn">Refuser</button>
            </div>
        </div>
    </main>

    <footer>
        <div class="topfooter">
            <div class="social">
                <h3>SUIVEZ-NOUS</h3>
                <ul>
                    <li><a href="https://cm.linkedin.com/company/doungue-partners" target="_blank"><img
                                src="./images/tools-icons/linkedin.svg" width="30"></a></li>
                    <li><a href="https://cm.linkedin.com/in/corentin-doungue-8b9458289" target="_blank"><img
                                src="./images/tools-icons/linkedin.svg" width="30"></a></li>
                    <li><a href="https://www.facebook.com/corentin.doungue?mibextid=LQQJ4d" target="_blank"><img
                                src="./images/tools-icons/facebook.svg" width="30"></a></li>
                </ul>
            </div>
            <div class="plan">
                <h3>MENU</h3>
                <ul>
                    <li><a href="/">ACCUEIL</a></li>
                    <li><a href="#about">Notre cabinet</a></li>
                    <li><a href="#domains">Domaines d’expertise</a></li>
                    <li><a href="#activities">Activités</a></li>
                    <li><a href="./carreer.php" class="carreer">Carrières</a></li>
                </ul>
            </div>
            <div class="contact">
                <h3>COORDONNEES</h3>
                <ul>
                    <li><a href="tel:+237657593897">téléphone : +237 657 593 897</a></li>
                    <li><a href="mailto:dounguelawfirm@gmail.com">E-mail : dounguelawfirm@gmail.com</a></li>
                    <li style="color: #fff;">Adresse : Akwa, Boulevard de la Liberté. Douala</li>
                    <li>Horaires : Du lundi au vendredi de 8h00 à 17h00</li>
                </ul>
            </div>
        </div>
        <div class="bottomfooter">
            <span>© 2024 <a href="/">www.dounguelawfirm.com</a></span>
            <span>Tous droits réservés Cabinet d'avocats DOUNGUE & PARTNERS</span>
        </div>
    </footer>

    <script src="/script.js"></script>
    <script src="/aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @notiferJs
</body>

</html>