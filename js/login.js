var state = false;

let email = document.querySelector('#email');
let labelemail = document.querySelector('#label-email');
let validaEmail = false;

let senha = document.querySelector('#senha');
let labelsenha = document.querySelector('#label-senha');
let validaSenha = false;

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

function cadastro(){
    if(validaEmail && validaSenha){
        alert("Sucesso")
    }
    else{    
        alert("Erro no Preenchimento");
        preventDefault();
    }
}

document.addEventListener("keypress", function(e){
    if(e.key === "Enter"){
        cadastro();
    }
});