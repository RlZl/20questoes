<?php include('../App/Head.php'); ?>

<!--Atividade 16-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $nums = array(171, 13, 5, 65, 17, 14, 110, 154, 29, 16, 54, 157, 211, 69, 25);

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] % 2 == 0) {
            $nums[$i] = $nums[$i] . " => " . "Par" . '<br/>';
        } else {
            $nums[$i] = $nums[$i] . " => " . "Impar" . '<br/>';
        }
    }
    $nums = implode("", $nums);

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Números: <br>' . $nums . '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>