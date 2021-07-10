<?php



session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('127.0.0.1','root','','3amal') or die('Unable To connect');
    $result = mysqli_query($con,"insert into user  (id_u,nom_u ,prenom_u,age_u,datnais_u,email_u,tel_u ,adr_u,codpost_u,cv_u,mdp_u, nomcomp_u, domaine_u) 
	values('".$_POST["id_u"]."','".$_POST["nom_u"]."','".$_POST["prenom_u"]."','".$_POST["age_u"]."','".$_POST["datnais _u"]."' ,'".$_POST["email_u"]."' , '".$_POST["tel_u"]."', '".$_POST["adr_u"]."','".$_POST["codpost_u"]."','".$_POST["cv_u"]."','".$_POST["mdp_u"]."','".$_POST["nomcomp_u"]."' , '".$_POST["domaine_u"]."')");

    header("Location:login.php");

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

             
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="nom" name="nom_u" id='nom_u' required />
                    <label for="nom_u" class="form__label">nom</label>
                </div>
				
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="prenom" name="prenom_u" id='prenom_u' required />
                    <label for="prenom_u" class="form__label">Prenom</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="age" name="age_u" id='age_u' required />
                    <label for="age_u" class="form__label">Age</label>
                </div>
				<div class="form__group field">
                    <input type="Date" class="form__field" placeholder="date de naissance" name="datnais_u" id='datnais_u' required />
                    <label for="datnais_u" class="form__label"> Date de naissance</label>
                </div>
				
				
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="email" name="email_u" id='email_u' required />
                    <label for="email_u" class="form__label">Email</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="telephone" name="tel_u" id='tel_u' required />
                    <label for="tel_u" class="form__label">Telephone</label>
                </div>
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="adesse" name="adr_u" id='adr_u' required />
                    <label for="adr_u" class="form__label">Adresse</label>
                </div>
				
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="code postale" name="codpost_u" id='codpost_u' required />
                    <label for="codpost_u" class="form__label">code postale</label>
                </div>
				<div class="form__group field">
                    
				
  
				
				<div class="form__group field">
                    <input type="password" class="form__field" placeholder="Mot de passe" name="mdp_u" id='mdp_u' required />
                    <label for="mdp_u" class="form__label">Mot de passe</label>
					 </div>
					 <div class="form__group field">
                    <input type="password" class="form__field" placeholder=" confirmation Mot de passe" name="mdp_u" id='mdp_u' required />
                    <label for="mdp_u" class="form__label"> Confirmation de mot de passe</label>
					 </div>
					 
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="nom complet" name="nomomp_u" id='nomcomp_u' required />
                    <label for="nomcomp_u" class="form__label">Nom complet</label>
                </div>
                
				<div class="form__group field">
               
				<div class="form__group field">
                    <input type="text" class="form__field" placeholder="domaine" name="domaine_u" id='domaine_u' required />
                    <label for="domaine_u" class="form__label">Domaine</label>
                </div>
					<div class="form__group field">
                    <input type="text" class="form__field" placeholder="niveau d'etude" name= nvetude_u" id='nvetude_u' required />
                    <label for="nvetude_u" class="form__label">Niveau d'etude</label>
                </div>
				<div class="form__group field">
                    <input type="file" class="form__field" placeholder="ajouter votre cv" name="cv_u" id='cv_u' required />
                    <label for="cv_u" class="form__label">Ajouter votre cv</label>
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

 
