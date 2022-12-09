<?php include('../App/Head.php'); ?>

<!--Atividade 1-->
<?php
$showForm = $_POST['show'];


if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="n1" class="form-label">1º Valor:</label>
                    <input type="number" class="form-control" name="n1">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">2º Valor:</label>
                    <input type="number" class="form-control" name="n2">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">3º Valor:</label>
                    <input type="number" class="form-control" name="n3">
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {


    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if ($n1 != null || $n2 != null || $n3 != null) {
        if ($n1 + $n2 > $n3 && $n1 + $n3 > $n2 && $n3 + $n2 > $n1) {
            if ($n1 == $n2 && $n1 == $n3) {
                $result = 'Equilátero';
            }
            else if ($n1 == $n2 || $n1 == $n3 || $n2 == $n3) {
                $result = 'Isósceles';
            }
            else {
                $result = 'Escaleno';
            }
        }
        echo '
            <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">'.'Triângulo: '.$result.'</p>
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