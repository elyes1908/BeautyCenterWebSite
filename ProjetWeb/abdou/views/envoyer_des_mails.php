<?php
include "../config.php";



if(isset($_POST['mailform']))

$header="MIME-Version: 1.0\r\n";
$header.='From:"CoeurdeMarie.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="https://lh3.googleusercontent.com/cYcUCVkSIVFYfKxBITdBnQyarJbigadimSlRVzxwEvpmVohITOwqftia_2DHg-7p88JMx-bS=w1080-h608-p-no-v0"/>
			<br />
			Chére client 
			Nous vous informe q\'un nouveau produit et disponible dans notre centre 
			Pour plus d\'info visiter notre site au contacter nous Par télèphone
			<br />
			
		</div>
	</body>
</html>
';

mail("aa6291771@gmail.com , abdessalem.smirani@esprit.tn", "Salut tout le monde !", $message, $header);
header('location: afficherProduit.php')
?>
