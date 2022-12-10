<?php include('../App/Head.php'); ?>

<!--Atividade 20-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $matriz = [
        [25, 36, 1, 17, 15],
        [12, 45, 4, 77, 19],
        [11, 3, 41, 99, 37],
        [2, 53, 19, 29, 38],
        [6, 64, 72, 33, 46]
    ];

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">';
    echo "<b>Matriz dos Números Pares</b>" . '<br/>';
    for ($i = 0; $i <= count($matriz); $i++) {
        for ($j = 0; $j <= count($matriz[$i]); $j++) {
            if ($matriz[$i][$j] % 2 == 0) {
                echo print_r($matriz[$i][$j]) . '<br>';
            }
        }
    }
    echo '<br/>';
    echo "<b>Matriz dos Números Ímpares</b>" . '<br/>';
    for ($i = 0; $i <= count($matriz); $i++) {
        for ($j = 0; $j <= count($matriz[$i]); $j++) {
            if ($matriz[$i][$j] % 2 != 0) {
                echo '<pre>' . print_r($matriz[$i][$j], true) . '</pre>';
            }
        }
    }
    echo '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>