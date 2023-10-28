/*imagens em transiçoes grafico e pensativa*/

let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextImage();
},5000)

function nextImage(){
    count++;
    if(count>2){
        count = 1;
    }


document.getElementById("radio"+count).checked = true;
}
/*fim das imagens*/
/*hamburguer*/

function clickMenu(){
    if(menu.style.display =='block'){
        menu.style.display ='none'
    }else{
        menu.style.display = 'block'
    }
}
/*fim do hamburguer*/

/*mensagem do botao ajuda*/

function exibirMensagem() {
    var mensagem = document.getElementById("mensagem");
    mensagem.style.display = "block";
  }
  
  function fecharMensagem() {
    var mensagem = document.getElementById("mensagem");
    mensagem.style.display = "none";
  }

/*fim da mensagem do botao ajuda*/

/*botao da soluçao*/
function clickSolu(){
    if(botao.style.display =='block'){
        botao.style.display ='none'
    }else{
        botao.style.display = 'block'
    }
}

/*fim da solucao*/