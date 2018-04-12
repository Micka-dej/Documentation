<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Smok'Tech</title>
<body>
<header class="header">
    <nav class="navBar">
        <div class="navBar-left">
            <a href="login.php"><img src="./assets/imgs/navLogo.svg" alt="" class="navLogo"></a>
        </div>
        <div class="navBar-right">
            <div class="navItems"><a href="products.php">produits</a></div>
            <div class="navItems">personnaliser</div>
            <div class="navItems">packs</div>
            <div class="navShoppingBag">
                <img src="./assets/imgs/shopping-bag.svg" alt="" class="shoppingBagImg">
            </div>

            <<div class="modalShoppingBag">
                <div class="modalShoppingBag-content">
                    <img src="./assets/imgs/cross.svg" alt="" class="crossImg">
                    <div class="modalShoppingBag-product">
                        <div class="modalShoppingBag-left">
                            <div class="modalShoppingBag-head" >
                                <p class="modalShoppingbag-title">Gecko</p>
                                <img src="./assets/imgs/shoppingBagStars.svg" alt="" class="modalShoppingbag-img">
                            </div>
                            <div class="modalShoppingBag-sub">
                                <div class="modalShoppingBag-textContent">
                                    <p class="modalShoppingBag-text">La cigarette la plus apprécié selon nos utilisateurs.</p>
                                </div>
                                <div class="modalShoppingBag-priceContent"><span class="modalShoppingBag-price">69 €</span></div>
                            </div>
                        </div>
                        <div class="modalShoppingBag-right">
                            <button class="modalShoppingBag-btn">paiement</button>
                            <button class="modalShoppingBag-btn">supprimer</button>
                        </div>
                    </div>

                    <div class="modalShoppingBag-product">
                        <div class="modalShoppingBag-left">
                            <div class="modalShoppingBag-head" >
                                <p class="modalShoppingbag-title">Gecko</p>
                                <img src="./assets/imgs/shoppingBagStars.svg" alt="" class="modalShoppingbag-img">
                            </div>
                            <div class="modalShoppingBag-sub">
                                <div class="modalShoppingBag-textContent">
                                    <p class="modalShoppingBag-text">La cigarette la plus apprécié selon nos utilisateurs.</p>
                                </div>
                                <div class="modalShoppingBag-priceContent"><span class="modalShoppingBag-price">69 €</span></div>
                            </div>
                        </div>
                        <div class="modalShoppingBag-right">
                            <button class="modalShoppingBag-btn">paiement</button>
                            <button class="modalShoppingBag-btn">supprimer</button>
                        </div>
                    </div>
                    <p class="totalPrice">TOTAL : 168 €</p>
                </div>
            </div>

            <div class="navBurgerMenu">
                <div class="navBurgerLine">
                    <div class="navBurgerLine-item"></div>
                    <div class="navBurgerLine-item middle"></div>
                    <div class="navBurgerLine-item"></div>
                </div>
                <p class="navBurgerText">menu</p>
            </div>

        </div>
    </nav>

</header>

<section class="promo">

    <div class="login">
        <img src="./assets/imgs/login.svg" alt="" class="loginImg">
        <p class="loginText"><?=$_SESSION['prenom']?></p>
    </div>

    <div class="modalLogin">
        <div class="modalLogin-contentLeft">
            <p class="loginSubText">Bonjour <?=$_SESSION['prenom']?>, bienvenue sur votre espace client </p>
        </div>
        <div class="modalLogin-contentRight">
            <div class="headTitleRight">

                <img src="./assets/imgs/cross.svg" alt="" class="crossImg">
            </div>

            <form action="deconnexion.php" class="headFormRight" method="post">
                <button type="submit" class="loginBtn">
                    <p>Déconnexion</p>
                </button>
            </form>
        </div>

    </div>

    <article class="articleContainer">
        <div class="article">
            <div class="articleTitle">Cigarette Electronique</div>
            <div class="articleText"> La cigarette électronique est un appareil capable de vaporiser du eliquide arômatisé nicotiné ou non destiné à être inhalé. Ce dispositif produit une vapeur ressemblant visuellement à la fumée produite par la combustion du tabac.</div>
        </div>
        <div class="middlerec"></div>
        <div class="articleImg">
            <img src="./assets/imgs/imgSection.jpg" alt="">
        </div>
    </article>

</section>

<section class="citeSection">
    <div class="citeTitle">Smo’tech</div>
    <div class="citeText">Une maison de vente pour cigarette éléctronique pour les clients débutant / intermédiaire et aussi pour les experts.</div>
</section>


<section class="packs">
    <div class="packsContainer">
        <a href="add_Comment.php">
            <div class="packsItem personalized">
                <h1 class="packsItemTitle personalizedTitle">Pack personnalisable</h1>
                <p class="packsItemDesc">Pour les plus créatifs.</p>
                <p class="packsItemPrice"></p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem novice">
                <h1 class="packsItemTitle">Pack débutant</h1>
                <p class="packsItemDesc">Rien de mieux pour un début</p>
                <p class="packsItemPrice">29 €</p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem medium">
                <h1 class="packsItemTitle">Pack Intermédiaire</h1>
                <p class="packsItemDesc">Pour les fumeurs régulier.</p>
                <p class="packsItemPrice">49 €</p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem expert">
                <h1 class="packsItemTitle">Pack Avancé</h1>
                <p class="packsItemDesc">Pour les puristes et experts.</p>
                <p class="packsItemPrice">89 €</p>
            </div>
        </a>
    </div>
</section>



<section class="recommandation">
    <h1 class="recommandationText">Recommandée pour vous</h1>
    <div class="recommandationContainer">

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="assets/imgs/product1.png" alt="img">
            <p class="recommandationItemPrice">19 €</p>
            <div class="recommandationItemDot"></div>
        </div>

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="assets/imgs/product2.png" alt="img">
            <p class="recommandationItemPrice">29 €</p>
            <div class="recommandationItemDot"></div>
        </div>

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="assets/imgs/product3.png" alt="img">
            <p class="recommandationItemPrice">39 €</p>
            <div class="recommandationItemDot"></div>
        </div>

    </div>
</section>

<section class="footer">
    <div class="footerContainer">
        <div class="footerContainer-items">
            <p class="footerText">livraison offerte</p>
            <p class="footerText-sub">À partir de 30 euros</p>
        </div>
        <div class="footerContainer-items">
            <p class="footerText">contactez-nous</p>
            <p class="footerText-sub">01.46.20.02.00</p>
        </div>
        <div class="footerContainer-items">
            <p class="footerText">avis certifiés</p>
            <p class="footerText-sub">
                <img src="./assets/imgs/stars.png" alt="" class="stars">
            </p>
        </div>
    </div>

    <div class="footerCopyright">
        <p class="footerCopyright-mention">Mentions légales</p>
        <p class="footerCopyright-text">Copyright © 2018 - SMO’TECH</p>
    </div>

</section>

<script src="js/loginModal.js"></script>
<script src="js/bagMarketModal.js"></script>
</body>
</html>