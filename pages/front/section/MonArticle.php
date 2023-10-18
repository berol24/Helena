<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="Css-section/MonArticleCss.css">
</head>

<body>
    <section class="blocks">
        <div class="blockImage">

        </div>
        <div class="block-right">
            <div class="blockArticle">

                <div class="DescPrix">
                    <h1>T-shirt noir</h1>
                    <span class="prix">99 €</span>
                </div>


                <div class="container">
                    <div class="taille" >
                        <span>Taille:</span>
                        <span>M</span>
                    </div>
                    <div class="quantiteStock" >
                        <span>Quantité en stock :</span>
                        <span>12</span>
                    </div>
                    <div class="quantité" >
                        <span>Quantité :</span>
                        <div class="quantite-arrow">
                            <div class="quantite-number">
                            <span class="qte">12</span>
                            </div>
                            <div class="arrow">
                                <span style="margin-bottom:4px" class="arrow-up" ><span class="material-symbols-outlined">expand_less</span></span>
                                <span class="arrow-down"><span class="material-symbols-outlined">expand_more</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="description">

                    <p class="myDesc" >Description :</p>
                    <div class="descArticle">
                        <p>T-shirt de bonne qualité </p>
                    </div>

                </div>

            </div>

            <div class="ajoutPanier">
                <button>Ajouter au panier</button>
            </div>
        </div>
    </section>



    <script>
        let $arrowUp = document.querySelector(".arrow-up");
        let $arrowDown = document.querySelector(".arrow-down");
        let $qte = document.querySelector(".qte");
        let $qteValue = Number($qte.textContent);

        console.log($qteValue)

        $arrowUp.addEventListener('click' , function(){
            $qteValue+=1 ;
            $qte.textContent =  $qteValue;
         
        })

        $arrowDown.addEventListener('click' , function(){
          if ($qteValue > 0 ) {
            $qteValue-=1 ;
            $qte.textContent =  $qteValue;
          }
         
        })

    </script>
</body>

</html>