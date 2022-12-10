<?php include('../App/Head.php'); ?>

<!--Atividade 12-->
<?php
$showForm = $_POST['show'];

if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="palavra" class="form-label">Insira a Palavra:</label>
                    <input type="text" class="form-control" name="palavra">
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Resultado</button>
            </form>
        </div>
    ';
} else {
    $Palavra = $_POST['palavra'];

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center">
                <div class="card-body">';
    for ($i = 0; $i < 4; $i++) {
        if ($i == 0) {
            echo "\n$Palavra";
            echo '<br/>';
        } else if ($i == 1) {
            echo "\n$Palavra $Palavra";
            echo '<br/>';
        } elseif ($i == 2) {
            echo "\n$Palavra $Palavra $Palavra";
            echo '<br/>';
        } elseif ($i == 3) {
            echo "\n$Palavra $Palavra $Palavra $Palavra";
            echo '<br/>';
        }
    }
    echo '<a href="' . '../' . '" class="btn btn-primary mt-3">Voltar</a>
                </div>
            </div>
        </div>
    ';
}
?>

<?php include('../App/Foot.php'); ?>