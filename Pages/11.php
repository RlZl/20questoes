<?php include('../App/Head.php'); ?>

<!--Atividade 11-->
<?php
$showForm = $_POST['show'];

if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="result" class="form-label">Insira um Valor:</label>
                    <input type="number" class="form-control" name="result">
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {
    $result = $_POST['result'];
    $values = array();

    for ($i = 0; $i <= 10; $i++) {
        $values[$i] = "{$result} * {$i} = " . ($result * $i) . '<br/>';
    }
    $values = implode('', $values);

    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <p class="card-text">' . 'Tábuada do ' . $result . '</p>
                    <p class="card-text">' . $values . '</p>
                    <a href="' . '../' . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    ';

}
?>

<?php include('../App/Foot.php'); ?>