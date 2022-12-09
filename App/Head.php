<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $pageName = rtrim(basename($_SERVER['PHP_SELF']), '.php');
        if (strlen($pageName) < 5) {
            echo 'Exercício Nº' . $pageName;
        } else {
            echo '20 Exercícios';
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/bvcr3V0/donkey-silhouette-1445006716-Ws8-removebg-preview.png" type="image/x-icon">
</head>
<body class="bg-dark text-white">
    