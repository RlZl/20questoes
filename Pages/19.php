<?php include('../App/Head.php'); ?>

<!--Atividade 19-->
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
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">';
    echo $matriz[0][0] . ', ';
    echo $matriz[1][1] . ', ';
    echo $matriz[2][2] . ', ';
    echo $matriz[3][3] . ', ';
    echo $matriz[4][4] . '.';
    echo '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>