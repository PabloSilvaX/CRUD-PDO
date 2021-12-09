<div class="container">
    <div class="card bg-white p-3">
        <form class="mt-4" method="POST" action="<?= $base_url ?>models/edita_model.php?id=<?= $usuario['id'] ?>">
            <div class="text-center">
                <h1>Editar Usuario</h1>
                <p>Edite o usuário preenchendo os campos abaixo.</p>
            </div>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text" value="<?= $usuario['nome'] ?>" name="nome" id="form3Example1" class="form-control" required/>
                <label class="form-label" for="form3Example1">Primeiro Nome</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text" value="<?= $usuario['sobrenome'] ?>" name="sobrenome" id="form3Example2" class="form-control" required/>
                <label class="form-label" for="form3Example2">Ultimo Nome</label>
            </div>
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" value="<?= $usuario['email'] ?>" name="email" id="form3Example3" class="form-control" required/>
            <label class="form-label" for="form3Example3">Endereço de Email</label>
        </div>

        <!-- Password input -->
        <div class="text-center mb-4">
          <button type="button" class="btn btn-warning" id="alteraSenha">Alterar Senha</button>
        </div>

        <div class="form-outline mb-4" style="display:none" id="editSenha">
            <input type="password" value="<?= $usuario['senha'] ?>" name="senha" id="form3Example4" class="form-control" required/>
            <label class="form-label" for="form3Example4">Nova Senha</label>
        </div>

        <!-- Submit button -->
        <div class="col-8 mx-auto">
        <button type="submit" class="btn btn-primary btn-block mb-4">Editar</button>
        </div>

        </form>
    </div>
</div>
