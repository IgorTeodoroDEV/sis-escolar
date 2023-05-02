<?php
    require_once "../classes/aluno.php";
    require_once "../classes/turma.php";

    $id = $_GET['id'];
    $aluno =  new Aluno($id);

    $turmas =  (new Turma())->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assest/css/style.css">
    <title>Sistema Acadêmico</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Sistema acadêmico</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../diciplina/disciplinas-listar.php">Disciplina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Turma/turmas-listar.php">Turmas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mx-auto m-4 tamanho text-center">
        <h3>Novo Aluno</h3>
    </div>
    <div class="container">
        <form action="aluno-editar-gravar.php" method="post" class="row">
            <input type="hidden" name="id" value="<?= $aluno->id ?>">
            <div class="col-8">
                <label for="descDisciplina">Nome:</label>
                <input class="input-group-text w-100 text-left" type="text" name="nome" value="<?= $aluno->nome ?>">
            </div>
            <div class="col-4">
                <label for="ano">Data de nascimento:</label>
                <input class="input-group-text w-100 text-left" type="date" name="dataNasc" value="<?= $aluno->dataNasc ?>">
            </div>
            <div class="col-8 mt-2">
                <label for="ano">E-mail:</label>
                <input class="input-group-text w-100 text-left" type="text" name="email" value="<?= $aluno->email ?>">
            </div>
            <div class="col-4 mt-2">
                <label for="ano">Telefone:</label>
                <input class="input-group-text w-100 text-left" type="number" name="telefone" value="<?= $aluno->telefone ?>">
            </div>
            <div class="col-4 mt-2">
                <label for="ano">CEP:</label>
                <input class="input-group-text w-100 text-left" type="number" name="cep" value="<?= $aluno->cep ?>">
            </div>
            <div class="col-8 mt-2">
                <label for="ano">Endereço:</label>
                <input class="input-group-text w-100 text-left" type="text" name="endereco" value="<?= $aluno->endereco ?>">
            </div>
            <div class="col-3 mt-2">
                <label for="ano">nº:</label>
                <input class="input-group-text w-100 text-left" type="number" name="numeroCasa" value="<?= $aluno->numeroCasa ?>">
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Bairro:</label>
                <input class="input-group-text w-100 text-left" type="text" name="bairro" value="<?= $aluno->bairro ?>">
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Cidade:</label>
                <input class="input-group-text w-100 text-left" type="Cidade:" name="cidade" value="<?= $aluno->cidade ?>">
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Estado:</label>
                <input class="input-group-text w-100 text-left" type="text" name="estado" value="<?= $aluno->estado ?>">
            </div>
            <div class="form-group form-check mt-2">
                <label class="form-check-label" for="genero">Genero</label>
                <div class="col-2">
                    <input type="radio" class="form-check-input" name="genero" value="M" <?php if($aluno->genero == 'M'){echo"CHECKED";};?>>
                    <label class="form-check-label" for="genero">masculino</label>
                </div>
                <div class="col-2">
                    <input type="radio" class="form-check-input" name="genero" value="F" <?php if($aluno->genero == 'F'){echo"CHECKED";};?>>
                    <label class="form-check-label" for="genero">feminino</label>
                </div>
            </div>
            <div class="col-2 mt-2">
                <div class="form-group">
                    <label for="turma">Turma</label>
                    <select  name="turma"  class="form-control">
                        <?php foreach ($turmas as $turma):?>
                        <option  value="<?php echo $turma['id']?>"><?php echo $turma['descTurma']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-5 mt-3">
            <input class="btn btn-success m-4 " type="submit" value="Gravar">
            <a class="btn btn-danger m-4" href="alunos-listar.php">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>