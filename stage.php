<?php



session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('localhost','root','','3amal') or die('Unable To connect');
    $result = mysqli_query($con,"insert into stage (id_s ,nom_s,email_s,cv_s) values('".$_POST["id_s"]."','".$_POST["nom_s"]."','".$_POST["email_s"]."','".$_POST["cv_s"]."')");

    header("Location:accueil.php");

}


?>
<html>
<head>
    <title>User Login</title>
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
                    <input type="text" class="form__field" placeholder="nom" name="nom_s" id='nom_s' required />
                    <label for="nom_s" class="form__label">Nom</label>
                </div>
				  <div class="form__group field">
                    <input type="text" class="form__field" placeholder="email_s" name="email_s" id='email_s' required />
                    <label for="email_s" class="form__label">Email</label>
                </div>   
				<div class="form__group field">
                    <input type="file" class="form__field" placeholder="cv_s" name="date fin_s" id='cv_s' required />
                    <label for="cv_s" class="form__label">Postuler votre cv</label>
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