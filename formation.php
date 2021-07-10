<?php



session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('127.0.0.1','root','','3amal') or die('Unable To connect');
    $result = mysqli_query($con,"insert into formation (id_f,nom_f ,email_f,cv_f) values('".$_POST["id_f"]."','".$_POST["nom_f"]."','".$_POST["email__f"]."','".$_POST["cv_f "]."')");

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
                    <input type="text" class="form__field" placeholder="nom" name="nom_f" id='nom_f' required />
                    <label for="nom_f" class="form__label">Nom</label>
                </div>
				  <div class="form__group field">
                    <input type="text" class="form__field" placeholder="email" name="email_f" id='email_f' required />
                    <label for="email_f" class="form__label">Email</label>
                </div>   
				<div class="form__group field">
                    <input type="file" class="form__field" placeholder="cv" name="cv_f" id='cv_f' required />
                    <label for="cv_f" class="form__label">Postuler cv</label>
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