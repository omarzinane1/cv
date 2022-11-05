<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar">
        <ul>
            <div class="logo" style="margin-right: 500px; color: white;font-size: 50px;">Free Cv</div>
            <li><a href="#">Home</a></li>
            <li><a href="#formulaire">formulaire</a></li>
            <li><a href="https://www.modeles-de-cv.com/exemples-cv/">Exemple cv</a></li>
            <li><a href="#">Choose form</a></li>
        </ul>
    </nav>
    <section id="home">
        <div class="image"><img src="images.png" alt="omar"></div>
        <div class="main">
            <h1 class="headings"> Create a professional CV</h1>
            <button class="btn">
                <a href="#formulaire"> Create CV </a>
            </button>
        </div>
    </section>
    <section id="about">
        <div id="pic">
            <h1 class="headings"> </h1>
            <img src="https://www.jobseeker.com/assets/images/cv-simplified.png" alt="test" style="margin-left: 320px;">
            <div id="intro">
                <h2></h2>
                <p> </p>
            </div>
        </div>
    </section>

    <section id="formulaire">
        <h1 class="headings">formulaire</h1>
        <div class="gallery">
            <form method="post" action="cv.php" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*"> <!--the input accept images only-->
             <br>
             <br>
                <br><label for="nom">First name:</label><br>
                <input type="text" name="NOM" styla="color: lightgrey;"><br>
                <label for="prenom">Last name:</label><br>
                <input type="text" name="PRENOM"><br>
                <label for="tele"> Phone Number :</label><br>
                <input type="text" name="Téléphone"><br>
                <label for="email"> E-MAIL :</label><br>
                <input type="email" name="EMAIL"> <br>
                <label for="tele"> Linkedln :</label><br>
                <input type="text" name="Linkedln"><br>
                <label for="ville"> City :</label><br>
                <input type="text" name="ville"> <br>

                <label for="tele"> Arabe :</label><br>
                <input type="range" id="volume" name="volume" style=" width: 450px;"><br>
                <label for="tele"> Français :</label><br>
                <input type="range" id="volume1" name="volume1" style=" width: 450px;"><br>
                <label for="tele"> Englais:</label><br>
                <input type="range" id="volume2" name="volume2" style=" width: 450px;"><br>


                <label for="COMP"> COMPETENCES :</label><br>
                <textarea type="text" name="COMPETENCES" style="width: 500px;height: 80px;"></textarea><br>
                <label for="Edu"> EDUCATION :</label><br>
                <label for="dip">TYPE BACCALAUREAT</label><br>
                <textarea type="text" name="EDUCATION" style="width: 500px;height: 80px;"></textarea><br>
                <label for="dip">DIPLOME UNIVERITAIRE</label><br>
                <textarea type="text" name="diplome" style="width: 500px;height: 80px;"></textarea><br>
                <label for="pro"> EXERIENCE :</label><br>
                <textarea type="text" name="EXPERIENCE" style="width: 500px; height: 100px;" row=4></textarea><br>
                <label for="pro"> PROFIL :</label><br>
                <textarea type="text" name="PROFIL" style="width: 500px; height: 150px;" row=4></textarea><br>
                <br>

                <input id='valid' type="reset" value="Clear" style="margin-right: 70px; width:150px">
                <input id='valid' type="submit" value="valider" style="margin-left: 70px;width:150px">

            </form>
        </div>




</body>

</html>