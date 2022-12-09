<?php include('../App/Head.php'); ?>

<!--Atividade 6-->
<?php
$showForm = $_POST['show'];


if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="n1" class="form-label">Nome do Livro:</label>
                    <input type="text" class="form-control" name="bookName">
                </div>
                <div class="mb-3">
                <label for="n2" class="form-label">Você é:</label>
                <select class="form-control" name="type">
                    <option value="T">Professor</option>
                    <option value="S">Aluno</option>
                </select>
            </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {


    $bookName = $_POST['bookName'];
    $type = $_POST['type'];

    if ($bookName != null || $type != null) {

        if ($type == "T") {
            $result = "10 Dias";
        } else {
            $result = "3 Dias";
        }
        echo '
            <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                    <div class="card-body">
                        <h5 class="card-title">Resultado</h5>
                        <p class="card-text">' . 'Devolução em: ' . $result . '</p>
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