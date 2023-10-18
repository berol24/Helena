<?php require_once "../page_header/my_headerCompteConnexion.php";

echo '<link rel="stylesheet" href="../page_header/Css-header/my_headerCompteConnexion.css">'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css-section/MesInformationsComptePage.css">
</head>

<body>


    <button class="tablink" onclick="openPage('MesInformations', this, 'white', '#9e4b75')" id="defaultOpen">Mes Informations</button>
    <button class="tablink" onclick="openPage('MesCommandes', this, 'white', '#9e4b75')" >Mes
        Commandes</button>
    <button class="tablink" onclick="openPage('ChangerLeMotDePasse', this, 'white', '#9e4b75')">Changer le mot
        depasse</button>
    <button class="tablink" onclick="openPage('BesoinDaide', this, 'white', '#9e4b75')">Besoin d'aide ?</button>

    <div class="elsection">
        <div id="MesInformations" class="tabcontent">
            <section class="formulaireConnexion clearfix">
                <form action="">

                    <div class="container">
                        <div class="item">
                            <label for="nom">NOM</label><br>
                            <input type="text" placeholder="Berol">
                        </div>
                        <div class="item">
                            <label for="prenom">PRENOM</label><br>
                            <input type="text" placeholder="Junior">
                        </div>
                        <div class="item">
                            <label for="pseudo">PSEUDO</label><br>
                            <input type="text" placeholder="BJ">
                        </div>
                        <div class="item">
                            <label for="telephone">TELEPHONE</label><br>
                            <input type="text" placeholder="123456789">
                        </div>
                        <div class="item">
                            <label for="email">E-MAIL</label><br>
                            <input type="text" placeholder="beroljunior@gmail.com">
                        </div>
                        <div class="item">
                            <label for="adresse">ADRESSE</label><br>
                            <input type="text" placeholder="Brazzadouala">
                        </div>
                    </div>
                    <p class="info">N'hésitez pas à modifier vos coordonnées ci-dessus pour que votre compte soit
                        parfaitement à jour.
                        (* Indique un champ obligatoire).</p>

                    <button class="" type="submit">SAUVEGARDER</button>
                </form>

            </section>

        </div>

        <div id="MesCommandes" class="tabcontent">
            <div class="CommandeContent">
                <div class="blocks">
                    <div class="block1">
                        <p>STATUT DE LA COMMANDE : </p>
                        <p>DATE D'EXPIRATION : </p>
                        <p>QUANTITE : </p>
                    </div>
                    <div class="block2">
                        <p>Livré</p>
                        <p>12/05/2023</p>
                        <p>10</p>
                    </div>
                </div>
                <div class="imageArticle">
                    <p>ARTICLE : </p>
                    <img src="images-section/model-vetement-article.jpg" alt="">
                </div>
            </div>

        </div>

        <div id="ChangerLeMotDePasse" class="tabcontent">

            <div class="changePassword">
                <form action="#">
                    <div class="form-group motDePasseActuel">
                        <label for="motDePasseActuel">MOT DE PASSE ACTUEL</label>
                        <input type="password" id="motDePasseActuel" name="motDePasseActuel">
                    </div>
                    <div class="form-group nouveauMotDePasse">
                        <label for="nouveauMotDePasse">NOUVEAU MOT DE PASSE</label>
                        <input type="password" id="nouveauMotDePasse" name="nouveauMotDePasse">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="sauvegarder">SAUVEGARDER</button>
                    </div>
                </form>
            </div>



        </div>

        <div id="BesoinDaide" class="tabcontent">

            <div class="help">
                <h2>Questions fréquentes </h2>
                <div class="infoHelp">
                    <div>
                        <a href="#">
                            <p>Quelle est votre politique de retour ?</p>
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                    </div>
                    <hr>
                    <div>
                        <a href="#">
                            <p>Est-il possible de modifier ma commande ?</p>
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                    </div>
                    <hr>
                    <div>
                        <a href="#">
                            <p>Comment votre service de livraison fonctionne-t-il ?</p>
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                    </div>
                    <hr>
                    <div>
                        <a href="#">
                            <p>Comment puis-je obtenir un code de réduction ?</p>
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="JS-section/MesInformationsComptePage.js"></script>
</body>

</html>