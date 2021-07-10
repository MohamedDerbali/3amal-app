<?php
//Base de donnée

	session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('127.0.0.1','root','','3amal') or die('Unable To connect');
    $result = mysqli_query($con,"select into user  (id_u,nom_u, cv_u) 
	values('".$_POST["id_u"]."','".$_POST["nom_u"]."','".$_POST["email_u"]."',, '".$_POST["cv_u"]."')");

    header("Location:acceuil.php");

?>


<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="contact.css" />
		<script type="text/javascript" src="contact.js"></script>
	</head>
	<body>
		<div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		    <h3>Formulaire de contact</h3>
		    <label>Nom: <span>*</span></label>
		    <input type="text" id="name_u" name="name_u" placeholder="Nom"/>
		    <label>Email: <span>*</span></label><span id="email_u" class="info"></span>
		    <input type="text" id="email_u" name="email_u" placeholder="Email"/>
		    <label>cv: <span>*</span></label>
		    <input type="text" id="cv_u" name="cv_u" placeholder="cv"/>
		    <label>Message:</label>
		    <textarea id="message" name="message" placeholder="Message..."></textarea>
		    <input type="submit" name="send" value="Envoyer le message"/>
			<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
		  </form>
	    </div>
		 
	</body>
</html>
