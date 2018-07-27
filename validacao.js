const selector = document.querySelector.bind(document);
const id = document.getElementById.bind(document);
function mascara(o,f){
    obj=o
    fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    obj.value=fun(obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");                  //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1)$2");  //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
window.onload = ()=>{
    id("telefone").onkeyup = function(){
        mascara( this, mtel );
    }
}

function validacao(telefone){
    //retira todos os caracteres menos os numeros
    telefone = telefone.replace(/\D/g,'');
    //verifica se tem a quantidade de numeros correta
    if(!(telefone.length >= 10 && telefone.length <= 11)) return false;
    //Verifica se o DDD é válido
    if(parseInt(telefone.substring(0, 1)) == 0 || parseInt(telefone.substring(1, 2)) == 0) return false;
    //Se tiver 11 caracteres, verificar se começa com 9
    if(telefone.length == 11 && parseInt(telefone.substring(2, 3)) != 9) return false;
    //Se tiver 11 caracteres, verifica se o 4° digito está correto
    if(telefone.length == 11 && [6, 7, 8, 9].indexOf(parseInt(telefone.substring(3, 4))) == -1) return false;
    //Se tiver 10 caracteres, verifica se o 3° digito está correto
    if(telefone.length == 10 && [2, 3, 4, 5].indexOf(parseInt(telefone.substring(2, 3))) == -1) return false;
    return true;
}
cadastro.onsubmit = function(){
    let numero = id("telefone");
    if(numero.value != "" && validacao(numero.value) == false){
        id('msg-erro').style.display = "block";
        id('msg-erro').innerHTML = "O número digitado não existe"
        return false;
    }else{id('msg-erro').style.display = "none";}
    return true;
}