<?php include('../App/Head.php'); ?>

<!--Atividade 1-->
<?php
$showForm = $_POST['show'];


if ($showForm == null) {
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <form method="post">
                <div class="mb-3">
                    <label for="n1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">Idade:</label>
                    <input type="number" class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">Sexo:</label>
                    <select class="form-control" name="sex">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <button type="submit" name="show" value="1" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    ';
} else {

    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $name = $_POST['name'];

    if ($age != null || $name != null) {
        if ($age < 25 && $sex == 'F') {
            $result = '<p class="card-text text-success">Aceita.</p>';
        }
        else if($sex == 'Feminino'){
            $result = '<p class="card-text text-warning">Não Aceita.</p>';
        }
        else {
            $result = '<p class="card-text text-warning">Apenas Mulheres.</p>';
        }
    }
    else{
        $result = 'Insira um número válido!';
    }
    echo '
        <div class="container vh-100 vw-100 d-flex justify-content-center align-items-center">
            <div class="card bg-dark text-white d-flex justify-content-center align-items-center text-center">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    ' . $result . '
                    <a href="' . $_SERVER['REQUEST_URI'] . '" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
  ';
}
?>

<?php include('../App/Foot.php'); ?>