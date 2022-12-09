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
                    <input type="number" class="form-control" name="n1">
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {


    $n1 = $_POST['n1'];

    if ($n1 != null || $n1 < 1 || $n1 > 12) {
        $months = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        $result = $months[$n1-1];
        echo '
            <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">'.$result.'</p>
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