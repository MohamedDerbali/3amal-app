<?php

session_start();
if(isset($_SESSION)){
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1','root','','3amal') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM user WHERE email_u ='" . $_POST["email_u"] . "' and mdp_u = '". $_POST["mdp_u"]."'");

//    echo(mysqli_error($con));
    $row  = mysqli_fetch_array($result);
if(!empty($row)){



$_SESSION["email_u"] = $row['email_u'];

$_SESSION["mdp_u"] = $row['mdp_u'];


   header("Location:accueil.php");

} else {
$message = "Invalid Username or Password !";
}
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
<img src="img/avv.png" style="width: 140px;height: 140px;">
        <br>
        <br>
        <br>

        <form name="frmUser" method="post" action="">
            <?php if(!empty($message)){ ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $message; ?>
    </div>

<?php } ?>
            <div class="form__group field">
                <input type="text" class="form__field" placeholder="Email" name="email_u" id='email_u' required />
                <label for="email_u" class="form__label">Email</label>
            </div>
            <div class="form__group field">
                <input type="password" class="form__field" placeholder="Mot de passe" name="mdp_u" id='mdp_u' required />
                <label for="mdp_u" class="form__label">Mot de pass</label>
            </div>

 <a class="btn btn1" style="border: 2px solid  #3498DB;" ><input type="submit" style="background: none;border: none;" name="submit"  value="Se connecter"> </a>

</form>
        
		<h6 style="margin-top: -9px;color:#939699;font-family: Josefin Sans;font-size: 12px;">  vous n'avez pas de compte  ?</h6>
    <a href="insertionn.php" id="inscr"  >Inscrivez-vous </a>
</div>

</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>

</html><?php }
else    header("Location:accueil.php");
?>