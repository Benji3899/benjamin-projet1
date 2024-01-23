<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function getMessage()

{
    $messageVisiteur = null;
    $message = "visiteur";

    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $messageVisiteur = htmlspecialchars($_GET['name']);
    }

    if ($messageVisiteur){

    }
    return $message;

}

?>
<h4>Bonjour <?= getMessage() ?></h4>

<form action="index.php" method="get">
    <div><input type="text" name="name" id="" placeholder="name"></div>
    <div>
        <button type="submit">OK</button>
    </div>
</form>
</body>
</html>
