<?php include('../App/Head.php'); ?>

<!--Atividade 13-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $nums = array(157, 13, 5, 65, 125, 187, 36, 102, 17, 115, 111, 0, 174, 29, 16, 54, 157, 21, 69, 24);
    $numsEntre = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] > 100 && $nums[$i] < 200) {
            $numsEntre += 1;
        } else if ($nums[$i] == 0) {
            break;
        }
    }
    $numsS = array(157, 13, 5, 65, 125, 187, 36, 102, 17, 115, 111, 0, 174, 29, 16, 54, 157, 21, 69, 24);
    $numsS = implode(", ", $nums) . '.';

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Números: ' . $numsS . '</p>
                    <p class="card-text">Foram digitados ' . $numsEntre . ' números entre 100 e 200, antes do número 0 ser lido.</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>