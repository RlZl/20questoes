<?php include('../App/Head.php'); ?>

<!--Atividade 10-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $nums = array(-10, 13, 5, 65, -25, -17, 66, -2, 17, -25, -11, 84, 74, 29, 16, 54, 57, 21, 69, 14);
    $soma = 0;
    $totNeg = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] > 0) {
            $soma += $nums[$i];
        } else if ($nums[$i] < 0) {
            $totNeg += 1;
        }
    }
    $nums = implode(", ", $nums) . '.';

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Números ' . $nums . '</p>
                    <p class="card-text">' . 'Soma dos Números Positivos: ' . $soma . '</p>
                    <p class="card-text">' . 'Quantidade de Números Negativos: ' . $totNeg . '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>