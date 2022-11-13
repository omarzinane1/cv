<?php
$image_file = $_FILES["image"];
$image_location;
if(isset($image_file) && $image_file["name"]!=""){
    move_uploaded_file(
    $image_file["tmp_name"],
    __DIR__ . "./uploaded_images/" . $image_file["name"]);
    $image_location = "./uploaded_images/" . $image_file["name"];
}
?>
    
    <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width",initial-scale="1.0">
        <title>Respensive CV html & css </title>
        <link rel="stylesheet" type="text/css" href="cv.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script type="text/javascript">
        </script>
    </head>
<body>
    <div class="container">
        <div class="left_side">
        <div class="profile">
            <div class="imagBx">
            
            <img src=<?php echo '"' . $image_location . '"';?> width="100%" height="100%" style="border:solid transparent; border-radius: 50%;">
            </div>
          <h2> <?php echo $_POST["NOM"],"<br>";echo $_POST["PRENOM"],"<br>" ?><br><span></span></h2>
        </div>
        <div class="contact">
            <h3 class="title">COORDONNEES</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text" style="color: dimgray;"><?php echo $_POST["Téléphone"] ,"<br>";?></span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span class="text" style="color: dimgray;"><?php echo $_POST["EMAIL"] ,"<br>";?></span> 
                </li>
                <li>
                    <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <span class="text" style="color: dimgray ;"><?php echo $_POST["Linkedln"] ,"<br>";?></span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span class="text" style="color: dimgray;"><?php echo $_POST["ville"] ,"<br>";?></span> 
                </li>
            </ul>
        </div>
        <div class="compet">
            <h3 class="title">COMPETENCES ET SAVOIR-FAIRE</h3>
            <ul>
                <li>
                  <h5 style="font-size: 15px;"><?php echo $_POST["COMPETENCES"] ,"<br>";?></h5> 
                </li>
            </ul>
        </div>
        <div class="language">
            <h3 class="title">Language</h3>
            <ul>
                <li>
                  Arabe : <span class="percent"><div <?php echo 'style="width:',$_POST["volume"] ,'%;"';?>></div></span>
                </li>
                <li>
                  Froncais : <span class="percent"><div <?php echo 'style="width:',$_POST["volume1"] ,'%;"';?>></div></span>
                </li>
                <li>
                  Englich : <span class="percent"><div <?php echo 'style="width:',$_POST["volume2"] ,'%;"';?>></div></span>
                </li>                
            </ul>
        </div>
    
        </div>
        <div class="right_side">
            <div class="me">
                <h2 class="title2" style="margin: 10px;padding-top: 50px;">PROFIL PERSONNEL</h2>
                <h5 style="margin: 15px;font-size: 15px;"><?php echo $_POST["PROFIL"] ,"<br>";?></h5>
            </div>
            <div class="me">
                <h2 class="title2" style="margin: 10px;">EDUCATION</h2>
                <div class="eduction">
                    <div class="diplome">
                    <h4 style="margin: 1px;padding: 10px;color:darkgreen;"> DIPLOME UNIVERITAIRE</h4>
                    <h5 style="margin: 10px;font-size: 15px;"><?php echo $_POST["diplome"] ,"<br>";?></h5>
                </div>
                <div class="baccala ">
                    <h4 style="margin: 1px; padding: 10px;color:darkgreen;">TYPE BACCALAUREAT</h4>
                    <h5 style="margin: 10px;font-size: 15px;"><?php echo $_POST["EDUCATION"] ,"<br>";?></h5>
                 </div>
              </div>
                <div class="expe">
                    <div class="commerce">
                        <h2 style="margin: 1px;padding-top: 70px;">EXPERIENCE PROFESSIONNELLE</h2>
                        <h5 style="margin: 1px;font-size: 15px;padding-top: 10px;"><?php echo $_POST["EXPERIENCE"] ,"<br>";?></h>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <button type="button" value="Print"
            onclick="window.print()">Imprimer</button>
    </body>
    
</html>    
