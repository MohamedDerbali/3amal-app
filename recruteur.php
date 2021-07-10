<?php



session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('127.0.0.1','root','','3amal') or die('Unable To connect');
    $result = mysqli_query($con,"insert into employeur  (id_e,nentreprise_e, sactivit_u,catg_e,taille_e,pays_e,region_e,ville_e,adresse_e,tele_e,prenom_e,nom_e,fonction_e,tel_e,email_e,mdp_e) 
	values('".$_POST["id_e"]."','".$_POST["nentreprise_e"]."','".$_POST["sactivit_e"]."','".$_POST["catg_e"]."','".$_POST["taille_e"]."','".$_POST["pays_e"]."','".$_POST["region_e"]."','".$_POST["ville_e"]."','".$_POST["adresse_e"]."','".$_POST["tele_e"]."','".$_POST["prenom_e"]."','".$_POST["nom_e"]."','".$_POST["fonction_e"]."','".$_POST["tel_e"]."','".$_POST["email_e"]."','".$_POST["mdp_e"]."')");

    header("Location:accueil.php");

}


?>


<html>
<head>
    <title>User Login</title>
    <meta charset="utf-8">
    <link href="css/Login_ins.css" rel="stylesheet" />
    <link href="fonts/josefin-sans/jose.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">


    <div class="row" style="text-align: center;">
        <div class="col-xs-12 col-sm-4" id="cntr">
            <img src="img/avv.png" style="width: 130px;height: 120px;">
            <br>
            <br>
            <br>

            <form  method="post" action="">	
info de l'entreprise
			
            <div class="form__group field">
                    <input type="text" class="form__field" placeholder="nom entreprise " name="nentreprise_e" id='nentreprise_e' required />
                    <label for="nentreprise_e" class="form__label">nom entreprise</label>
                </div>
				 
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="secteur  d'activité" name="sactivit_e" id='sactivit_e' required />
                    <label for="sactivit_e" class="form__label">Secteur d'activité</label>
                </div>
				 <div class="form__group field">
                    <input type="text" class="form__field" placeholder="categorie_e" name="catg_e" id='catg_e' required />
                    <label for="catg_e" class="form__label">Catégorie</label>
                </div>
				
				 <div class="form__group field">
                    <input type="text" class="form__field" placeholder="taille" name="taille_e" id='taille_e' required />
                    <label for="taille_e" class="form__label">Taille</label>
                </div>
				 <div class="form__group field">
                    <input type="text" class="form__field" placeholder="pays " name="pays_e" id='pays_e' required />
                    <label for="pays_e" class="form__label">Pays</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="région " name="region_e" id='région_e' required />
                    <label for="region_e" class="form__label">Region</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="ville " name="ville_e" id='ville_e' required />
                    <label for="ville_e" class="form__label">Ville</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="adresse " name="adresse_e" id='adresse_e' required />
                    <label for="adresse_e" class="form__label">Adresse</label>
                </div class="form__group field">
                    <input type="text" class="form__field" placeholder="téléphone" name="tele_e" id='tele_e' required />
                    <label for="tele_e" class="form__label">Téléphone</label>
                </div>
				A propos de vous
				
				
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="prénom" name="prenom_e" id='prenom_e' required />
                    <label for="prenom_e" class="form__label">Prénom</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="nom " name="nom_e" id='nom_e' required />
                    <label for="nom_e" class="form__label">Nom</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="fonction " name="fonction_e" id='fonction_e' required />
                    <label for="fonction_e" class="form__label">Fonction</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="téléphone " name="tel_e" id='tel_e' required />
                    <label for="tel_e" class="form__label">Téléphone</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="email " name="email_e" id='email_e' required />
                    <label for="email_e" class="form__label">Email</label>
                </div>
				<div class="form__group field">
                    <input type="password" class="form__field" placeholder="mot de passe " name="mdp_e" id='mdp_e' required />
                    <label for="mdp_e" class="form__label">Mot de passe</label>
                </div>
             
              
                <a class="btn btn1" style="border: 2px solid  #3498DB;" ><input type="submit" style="background: none;border: none;" name="submit"  value="Inscription"> </a>


            </form>
              <a href="login.php" id="inscr"  >   
			  
            <h6 style="margin-top: -9px;color:#939699;font-family: Josefin Sans;font-size: 12px;">  vous avez un compte  ?</h6>
           </a>
        </div>

    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<<?php
if(isset($_POST["env"])){
$logo=$_FILES['photo']['name'];

if($logo!=""){
require "uploadImage.php";
if($sortie==false){$logo=$dest_dossier . $dest_fichier;}
else {$logo="notdid";}
}
if($logo!="notdid"){
echo "upload reussi!!!";

}
else{
echo"recommence!!!";
}
}

?>

 
