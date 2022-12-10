<?php include('../App/Head.php'); ?>

<!--Atividade 17-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $nums = array(157, 13, 5, 65, 125, 187, 36, 102, 17, 115, 111, 440, 174, 29, 16, 54, 157, 21, 69, 24);
    $numpar;
    $quantpar;
    $percentpar;
    $somatot;
    $media;

    for ($i = 0; $i <= count($nums); $i++) {
        if ($nums[$i] % 2 == 0) {
            $numpar = count($nums);
            $quantpar += $numpar;
            $percentpar = $quantpar * 100 / count($nums);
        }
        $somatot += $nums[$i];
        $media = $somatot / count($nums);
    }
    $maior = max($nums);
    $menor = min($nums);
    $nums = implode(", ", $nums) . '.';

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Números: ' . $nums . '</p>
                    <p class="card-text">' . 'Maior Valor: ' . $maior . '</p>
                    <p class="card-text">' . 'Menor Valor: ' . $menor . '</p>
                    <p class="card-text">' . 'Percentual Valores Par: ' . $percentpar . '</p>
                    <p class="card-text">' . 'Média de todos os valores: ' . $media . '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>