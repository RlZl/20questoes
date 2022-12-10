<?php include('../App/Head.php'); ?>

<!--Atividade 14-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $chico = 150;
    $juca = 110;
    $ano = 0;

    while ($juca <= $chico) {
        $chico += 2;
        $juca += 3;
        $anos++;
    }

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Altura de Juca: 1,10m' . '</p>
                    <p class="card-text">' . 'Altura de Chico: 1,50m' . '</p>
                    <p class="card-text">' . 'Anos necessários para que a altura de Juca Passe a de Chico: ' . $anos . '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>