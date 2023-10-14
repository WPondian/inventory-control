let campo = {
    usuario: document.querySelector('#login'),
    senha: document.querySelector('#senha'),
}

let btn = {
    login: document.querySelector('#btnLogar'),
    cadastro: document.querySelector('#btnCadastrar'),
}


btn.login.addEventListener('click', () => {
    let dadosRequisicao = {
        login: campo.usuario.value,
        senha: campo.senha.value
    }
    dadosRequisicao = JSON.stringify(dadosRequisicao);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
           let response = JSON.parse(xhr.responseText);

           if(response.erro){
                return;
           }

           window.location = 'http://localhost:8000/inicio';
        }
    };
    xhr.open("POST", "/login/valida_login", true);
    xhr.setRequestHeader("Accept", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(dadosRequisicao);
});


function realizarLogin() {

}