<?php include('./App/Head.php'); ?>
<div class="container w-100 pt-5 d-flex flex-wrap justify-content-center">
    <?php
    $qtdPages = count(glob('./Pages/*'));

    for ($i = 1; $i < $qtdPages + 1; $i++) {
        $page = './Pages/' . strval($i) . '.php';
        $pageName = $i;
        echo '  <div class="card bg-dark text-white m-3" style="width: 15rem;">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <h5 class="card-title">'.$pageName.'º Exercício'.'</h5>
                        <a href="'.$page.'" class="btn btn-primary">Acessar</a>
                    </div>
                </div>';
    }
    ?>
</div>
<div style="height: 100px;"></div>

<?php include('./App/Foot.php'); ?>