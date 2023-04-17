<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center">
    <h1>RISULTATO FORM</h1>
    
    <div>
       <p><?php echo $_GET['randomText'] ?></p>
       <div><?php echo "Le lettere in questo testo sono: " .strlen($_GET['randomText']) ?></div>
    </div>

    <div style="margin-top: 20px">
       <?php 
         echo str_replace($_GET['censoredWord'], "***", $_GET['randomText']);
        ?>
    </div>

    <div>
        <?php 
          echo "Le lettere in questo testo sono: " .strlen(str_replace($_GET['censoredWord'], "***", $_GET['randomText']));
        ?>
    </div>


</body>
</html>