<div class="container">
    <div class="card bg-white p-3 text-center">
        <p>Nome: <?= $usuario['nome'] ?></p>
        <p>Sobrenome: <?= $usuario['sobrenome'] ?></p>
        <p>Email: <?= $usuario['email'] ?></p>
        <div class="gerenciar">
        
        <a href="<?= $base_url ?>editar.php?id=<?= $usuario['id'] ?>">
        <button class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
        </a>
        <a href="<?= $base_url ?>models/deleta_model.php?id=<?= $usuario['id'] ?>">
        <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
        </a>

        </div>
    </div>
</div>