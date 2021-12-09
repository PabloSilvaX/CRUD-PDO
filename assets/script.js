// constante
const base = "http://localhost/PHP-PDO/";

const botaoEditSenha = document.querySelector('button#alteraSenha');

if(botaoEditSenha){
    botaoEditSenha.addEventListener('click', ()=>{
        EditarSenha();
    })
}


EditarSenha = ()=>{
    const campoEditSenha = document.querySelector('div#editSenha');
    const inputSenha = document.querySelector('input#form3Example4');

    let senAtual = prompt('Digite a Senha Atual');
    if(senAtual == inputSenha.value){
        botaoEditSenha.style.display = 'none';
        campoEditSenha.style.display = '';
        inputSenha.value = '';
        inputSenha.focus();
    }else{
        alert('As senhas não coincidem !')
    }
    

}

async function buscarUsuario(){
    var valorBusca = document.querySelector('input#busca').value;
    var res = document.querySelector('div#resBusca');
    
    if(valorBusca == ''){
        res.style.display = 'none';
    }else{
        // fazendp requisição fetch se der certo retorna o arquivo para variavel data
        var data = await fetch(`${base}models/busca_model.php?busca=${valorBusca}`).
        then(function(response){
            return response.blob();
        });

        // extraindo texto do arquivo de data
        data.text().then(function(text) {
            if(text == ''){
                res.innerHTML = `0 Resultados Para "${valorBusca}"`;
            }else{
                res.innerHTML = text;
            }
            
        });

        res.style.display = 'block';
    }
}