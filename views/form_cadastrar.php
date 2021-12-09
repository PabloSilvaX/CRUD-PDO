<div class="container card">
    <form class="mt-4" method="POST" action="<?= $base_url ?>models/cadastrar.php">
        <div class="text-center">
            <h1>Cadastrar Usuario</h1>
            <p>Cadastre preenchendo os campos abaixo.</p>
        </div>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input type="text" name="nome" id="form3Example1" class="form-control" required/>
            <label class="form-label" for="form3Example1">Primeiro Nome</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input type="text" name="sobrenome" id="form3Example2" class="form-control" required/>
            <label class="form-label" for="form3Example2">Ultimo Nome</label>
        </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="form3Example3" class="form-control" required/>
        <label class="form-label" for="form3Example3">Endereço de Email</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="senha" id="form3Example4" class="form-control" required/>
        <label class="form-label" for="form3Example4">Senha</label>
    </div>

    <!-- Submit button -->
    <div class="col-8 mx-auto">
    <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
    </div>

    </form>
</div>