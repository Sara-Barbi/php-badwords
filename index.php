<?php
  $paragrafoTesto="ambaraba-cci-ccoccò tre civette sul comò che facevano l'amore con la figlia del dottore op";
  $arrayCreato=explode(" ",$paragrafoTesto);


  $lunghezzaParagrafo = count($arrayCreato);
  $lunghezzaStringa = strlen($paragrafoTesto);
?>



<div>
  <h3> <?php echo $paragrafoTesto; ?></h3>
  <p>lunghezza filastrocca : <?php echo $lunghezzaStringa ?> lettere e spazi</p>
  <p>lunghezza filastrocca : <?php echo $lunghezzaParagrafo ?> parole</p>


</div>
