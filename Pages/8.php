<?php include('../App/Head.php'); ?>

<!--Atividade 6-->
<?php
$showForm = $_POST['show'];


if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="n1" class="form-label">Valor:</label>
                    <input type="number" class="form-control" name="value">
                </div>
            </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {


    $value = $_POST['value'];

    if ($value != null) {
        $product = 1;
        $nums = array();
        for ($i = 0; $i < $value; $i++) {
            $nums[$i] = $i + 1;
            $product = $product * ($i + 1);
        }
        $result = $product;
        $nums = implode(", ", $nums) . '.';
        echo '
            <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">' . 'Números Multiplicados: ' . $nums . '</p>
                        <p class="card-text">' . 'Produto da multiplicação: ' . $result . '</p>
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