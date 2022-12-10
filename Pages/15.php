<?php include('../App/Head.php'); ?>

<!--Atividade 15-->
<?php
$showForm = $_POST['show'];

if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="massa" class="form-label">Insira a Massa do Isótopo:</label>
                    <input type="number" class="form-control" name="massa">
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Resultado</button>
            </form>
        </div>
    ';
} else {
    $massa = $_POST['massa'];
    $massaInicial = $massa;
    $tempo = 0.0;

    while ($massa > 0.1) {
        $massa = ($massa * 0.75);
        $tempo++;
    }
    $tempo = $tempo * 0.3;

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Massa do Isótopo: ' . $massaInicial . '</p>
                    <p class="card-text">' . 'Tempo Necessário: ' . $tempo . ' Minutos' . '</p>
                    <a href="' . $_SERVER['REQUEST_URI'] . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>