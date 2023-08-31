<?php $estudantes = $_REQUEST["estudante"]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="text-center">
            <img src="https://diariodainclusaosocialdotcom.files.wordpress.com/2017/11/acessibilidade.jpg"
                alt="ilustração gráfica dos tipos de pessoas que necessitam de acessibilidade">
        </div>
        <br>
        <a href="/aula03/?controller=Estudante&acao=salvar"class= "btn btn-success"> Cadastrar Estudante </a>
        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                    <tr>
                        <td>
                            <?php echo $estudanteAtual["id"]; ?>
                        </td>
                        <td>
                            <?php echo $estudanteAtual["nome"]; ?>
                        </td>
                        <td>
                            <?php echo $estudanteAtual["idade"]; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>




</body>

</html>