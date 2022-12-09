<?php include('../App/Head.php'); ?>

<!--Atividade 6-->
<?php
$showForm = $_POST['show'];


if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="n1" class="form-label">Número de Repetições:</label>
                    <input type="number" class="form-control" name="value">
                </div>
                <div class="mb-3">
                    <label for="n1" class="form-label">Palavra:</label>
                    <input type="text" class="form-control" name="word">
                </div>
            </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {


    $value = $_POST['value'];
    $word = $_POST['word'];

    if ($value != null) {
        $result = array();
        for ($i = 0; $i < $value; $i++) {
            $result[$i] = $word;
        }
        $result = implode(", ", $result) . '.';
        echo '
            <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">' . 'Número de Repetições: ' . $value . '</p>
                        <p class="card-text">' . 'Palavra Repetida: ' . $result . '</p>
                        <a href="' . $_SERVER['REQUEST_URI'] . '" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        ';
    } else {
        $result = 'Insira um número válido!';
    }
}
?>

<?php include('../App/Foot.php'); ?>