<?php
  $notCensored = 'Avevo messo un\'altra frase ma non mi sembrava consono pusharla sul mio github :)';
  $censored = str_replace($_GET["censoredWord"], '***', $notCensored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Intro</title>
</head>
<body>
  <h2>Frase senza censura</h2>
  <p><?php echo $notCensored; ?></p>
  <p>Numero di caratteri:<?php echo strlen($notCensored); ?></p>

  <h2>Frase con censura</h2>
  <p><?php echo $censored ?></p>
  <p>Numero di caratteri:<?php echo strlen($censored) ?></p>
</body>
</html>