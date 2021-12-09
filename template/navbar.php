<nav class="navbar navbar-dark bg-secondary mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $base_url ?>"><i class="fas fa-home"></i> CRUD - PDO</a>
    <form class="d-flex input-group w-auto">
      <input
        id="busca" 
        onkeyup="buscarUsuario()" 
        onfocus="buscarUsuario()" 
        onblur="buscarUsuario()" 
        type="search"
        class="form-control rounded"
        placeholder="Buscar Usuario"
        aria-label="Buscar usuario"
        aria-describedby="search-addon" 
        autocomplete="off"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>
  </div>
  <div class="resultado" id="resBusca">
        
    </div>
</nav>
    