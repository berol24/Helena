<?php  require_once "../page_header/my_header.php"; 

echo '<link rel="stylesheet" href="../page_header/Css-header/my_header.css">';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css-section/AccessoirePage.css">
  
</head>
    <body>

        <button class="tablink" onclick="openPage('Vetements',this,'white','#9e4b75')" id="defaultOpen">Vetements</button>
        <button class="tablink" onclick="openPage('Accessoire',this, 'white','#9e4b75')">Accessoire</button>

      <div class="elsection">
        <div id="Vetements" class="tabcontent">
                  <ul>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                  </ul>
            </div>

            <div id="Accessoire" class="tabcontent">
                  <ul>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                    <li><a href="#"><img src="images-section/model-vetement-article (3).jpg" alt=""></a></li>
                  </ul>
            </div>
      </div>
  
<?php require_once "../page_footer/my_footer.php" ; 
echo '<link rel="stylesheet" href="../page_footer/my_footer.css">';?>
     

        <script src="JS-section/AccessoirePage.js"></script>
    </body>
</html>