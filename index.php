<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Creador de Firmas - AIH Group</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
<header class="header-fixed">

	<div class="header-limiter">

		<h1>
    <img style="width: 197px;" class="logo-size" src="images/logo-light.png" alt="">
    </h1>

		<nav>
    <a href="logout.php">Cerrar Sesión</a>
		</nav>

	</div>

</header>

	<?php if( !empty($user) ): ?>

		<!-- <br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br /> -->
		<!-- <a href="logout.php">Logout?</a> -->
		<section class="fullDiv">
      <section class="container">
          <div class="contentForm">
            <div class="form-wrapper">
      
              <form action="" class="form">
                <p class="form-group">
                  <label class="form-label" for="first">Nombre</label>
                  <input id="name" class="form-input" type="text" />
                </p>
                <p class="form-group">
                  <label class="form-label" for="last">Puesto</label>
                  <input id="puesto" class="form-input" type="text" />
                </p>
                <p class="form-group">
                  <label class="form-label" for="color">Teléfono</label>
                  <input id="telefono" class="form-input" type="text" />
                </p>
                <p class="form-group">
                  <label class="form-label-select" for="color">Oficina</label>
                  <select class="form-input" id="pais">
                    <option>México</option>
                    <option>Punta Cana</option>
                    <option>Guadalajara</option>
                    <option>Cancún</option>
                  </select>
                </p> 
              </form>
            </div>
          </div>
        </section>
        <section class="containerFirma">
      
            <div id="firma" class="contentSign">
                <table style="font-size:9pt; font-family:'Montserrat', sans-serif;; line-height:17px; width:800px" width="600"
              cellpadding="0" cellspacing="0" border="0" class="ng-scope">
              <style>
                @font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
              </style>
              <tbody>
                  <tr>
                      <td colspan="2">
                          <span style="font-weight: 800;font-size: 28px;margin-bottom: 1rem;"></span><br><br>
                      </td>
                  </tr>
                  <tr style="text-align: center">
                      <td colspan="2">
                          <span id="nombreFirma" style="font-family:'Montserrat', sans-serif;font-weight: bold;font-size: 28px;margin-bottom: 1rem;color: #243f4a; text-transform: capitalize;">Ramiro Guerrero</span><br>
                          <br>
                          <span id="puestoFirma" style="font-family:'Montserrat', sans-serif;font-weight: 400;color: #243f4a;font-size: 18px;    text-transform: uppercase;">CEO</span>
                      </td>
                  </tr>
          
                  
                  <tr>
                      <td colspan="2">
                          <span style="font-weight: 800;font-size: 28px;margin-bottom: 1rem;"></span>
                          <span style="font-weight: 400;"></span>
                      </td>
                  </tr>
                <tr>
                  <td style="padding:10px; background-color:#fff; vertical-align:top; font-family:'Montserrat', sans-serif; color:#444444;width: 50%;" valign="top">
                      <a style="text-decoration: none;" href="http://bit.ly/31xMacb" target="_blank" rel="noopener">
                        <img border="0" width="35" alt="linkedin icon" style="border:0; height:30px; width:30px;" src="http://aihgroup.com.mx/emailDONTDELETE/fb.png">
                      </a>
                      <a style="text-decoration: none;" href="http://bit.ly/2ZOCJoy" target="_blank" rel="noopener">
                        <img border="0" width="35" alt="linkedin icon" style="border:0; height:30px; width:30px;" src="http://aihgroup.com.mx/emailDONTDELETE/in.png">
                      </a>
                  <td style="padding:10px; background-color:#fff; vertical-align:top; font-family:'Montserrat', sans-serif; color:#444444;width: 50%;text-align: right;padding-right: 3rem;" valign="top">
                      <br>
                      <a id="linkPhone" style="text-decoration: none;" href="tel:+5541983819" target="_blank" rel="noopener">
                        <img border="0" width="20" alt="linkedin icon" style="border:0;height: 13px;width: 13px;margin-right: 2px;" src="http://aihgroup.com.mx/emailDONTDELETE/phone.png">
                        <span id="telefonoFirma" style="font-size: 14px;color: #243f4a;text-decoration: none;"><b>01 55</b> 4198 3819</span>
                      </a>
                  </td>
                  
                </tr>
                <tr ng-if="showField('banner')" class="ng-scope">
                  <td style="width:800px; padding:0px; vertical-align:top" colspan="2" valign="top">
                    <a href="http://bit.ly/2KAns4c" target="_blank" rel="noopener" class="ng-scope">
                      <img id="backPais" border="0" alt="banner" width="480" style="width:800px; height:auto; border:0;" src="http://aihgroup.com.mx/emailDONTDELETE/footer-MEXICO.jpeg">
                    </a>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="font-size: 10px;">
                      Este correo electrónico, así como cualquiera de sus anexos, contiene información confidencial de AIH Group. Su contenido es para uso exclusivo de sus destinatarios, por lo que queda prohibida la difusión, copia o utilización de dicha información por terceros. Si usted lo recibiera por error, por favor, notifíquelo al remitente y destruya el mensaje con todas sus copias.
                    <br>
                      No imprima este correo si no es absolutamente necesario. Piense en el medio ambiente.
                  </td>
                </tr>
               
              </tbody>
            </table>
              </div>
        </section>
  </section>
  
  <button  onclick="copyToClip(document.getElementById('firma').innerHTML)" class="btn">Copiar Firma</button>
	<?php else: ?>
	<script>
window.location.href = "http://generador-de-firmas.aihgroup.com.mx/login.php";
</script>
		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>
	<script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>
</html>