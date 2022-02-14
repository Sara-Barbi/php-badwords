<?php
  $paragrafoTesto="ambaraba-cci-ccoccò tre civette sul comò che facevano l'amore con la figlia del dottore op";
  $arrayCreato=explode(" ",$paragrafoTesto);
  $lunghezzaParole = count($arrayCreato);
  $lunghezzaLettere = strlen($paragrafoTesto);
  $censura = $_GET["censurare"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
  <h3> <?php echo str_replace($censura,"***",$paragrafoTesto); ?>  </h3>
  <p>lunghezza filastrocca : <?php echo $lunghezzaLettere ?> lettere e spazi</p>
  <p>lunghezza filastrocca : <?php echo $lunghezzaParole ?> parole</p>

</div>

  
</body>
</html>

