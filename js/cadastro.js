
let state = false;
let state2 = false;

const btn = document.getElementById("botao-login");

let nome = document.querySelector('#nome');
let email = document.querySelector('#email');
let senha = document.querySelector('#senha');
let confsenha = document.querySelector('#confsenha');

let labelnome = document.querySelector('#label-nome');
let labelemail = document.querySelector('#label-email');
let labelsenha = document.querySelector('#label-senha');
let labelconfsenha = document.querySelector('#label-confsenha');

let validaNome = false;
let validaEmail = false;
let validaSenha = false;
let validaConfsenha = false;

function mostrar(){
    if(state){
        document.getElementById("senha").setAttribute("type", "password");
        state = false;
    }
    else{
        document.getElementById("senha").setAttribute("type", "text");
        state = true;
    }
}


function mostrarConf(){
    if(state2){
        document.getElementById("confsenha").setAttribute("type", "password");
        state2 = false;
    }
    else{
        document.getElementById("confsenha").setAttribute("type", "text");
        state2 = true;
    }
}

//Valida Nome
nome.addEventListener("keyup", ()=> {

    if(nome.value.length  <3){
        labelnome.setAttribute("style", "color: red");
        labelnome.innerHTML = "<strong>Nome: Precisa ter no Mínimo 3 Caracteres</strong>";
        nome.setAttribute("style", "border-color: red");
        validaNome = false;
    }else{
        labelnome.setAttribute("style", "color: green");
        labelnome.innerHTML = "Nome:";
        nome.setAttribute("style", "border-color: green");
        validaNome = true;
    }
});

//Valida E-mail
email.addEventListener("keyup", ()=> {

    if(email.value.length  <3 || email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1 ||email.value.indexOf(".") - email.value.indexOf("@") == 1){
        labelemail.setAttribute("style", "color: red");
        labelemail.innerHTML = "<strong>E-mail: Precisa ser um E-mail</strong>";
        email.setAttribute("style", "border-color: red");
        validaEmail = false;
    }else{
        labelemail.setAttribute("style", "color: green");
        labelemail.innerHTML = "E-mail:";
        email.setAttribute("style", "border-color: green");
        validaEmail = true;
    }
});

//Valida Senha
senha.addEventListener("keyup", ()=> {

    if(senha.value.length  <6){
        labelsenha.setAttribute("style", "color: red");
        labelsenha.innerHTML = "<strong>Senha: Precisa ter no Mínimo 6 Caracteres</strong>";
        senha.setAttribute("style", "border-color: red");
        validaSenha = false;
    }else{
        labelsenha.setAttribute("style", "color: green");
        labelsenha.innerHTML = "Senha:";
        senha.setAttribute("style", "border-color: green");
        validaSenha = true;
    }
});

//Valida Confirmação de Senha
confsenha.addEventListener("keyup", ()=> {

    if(confsenha.value != senha.value){
        labelconfsenha.setAttribute("style", "color: red");
        labelconfsenha.innerHTML = "<strong>Confirmar Senha: Precisa ser Igual à Senha</strong>";
        confsenha.setAttribute("style", "border-color: red");
        validaConfsenha = false;
    }else{
        labelconfsenha.setAttribute("style", "color: green");
        labelconfsenha.innerHTML = "Confirmar Senha:";
        confsenha.setAttribute("style", "border-color: green");
        validaConfsenha = true;
    }
});

function logar(){
    if(validaNome && validaEmail && validaSenha && validaConfsenha){
        alert("Cadastro Realizado");
    }
    else{    
        alert("Erro no Preenchimento");
        preventDefault();
    }
}

document.addEventListener("keypress", function(e){
    if(e.key === "Enter"){
        logar();
    }
});

