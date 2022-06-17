document.addEventListener("keypress", function(entrar){
    if(entrar.key === "Enter"){

        const confirma = document.querySelector(".principal a");

        confirma.click();
    }
});