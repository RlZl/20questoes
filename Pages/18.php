<?php include('../App/Head.php'); ?>

<!--Atividade 18-->
<?php
$showForm = null;

if ($showForm != null) {
} else {
    $vetor1 = [34, 25, 36, 78, 87, 45, 65, 74, 99, 12];
    $vetor2 = [74, 78, 15, 75, 10, 49, 36, 45, 12, 99];

    $vetorDfr = array_diff($vetor1, $vetor2);
    $result = array();
    for ($i=0; $i < count($vetorDfr); $i++) { 
        $result[$i] = $vetorDfr[$i];
    }

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Diferença dos Vetores: ' . print_r($vetorDfr, true) . '</p>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>