function clickMenu(){
    if(menu.style.display =='block'){
        menu.style.display ='none'
    }else{
        menu.style.display = 'block'
    }
}
/*botao da soluçao*/
function clickSolu(){
    if(botao.style.display =='block'){
        botao.style.display ='none'
    }else{
        botao.style.display = 'block'
    }
}

/*fim da solucao*/

/*olho visivel/invisivel*/
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordBtn = document.querySelector(".show-password");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showPasswordBtn.innerHTML = "&#128064;"; // Altere o ícone para um "olho fechado"
    } else {
      passwordInput.type = "password";
      showPasswordBtn.innerHTML = "&#128065;"; // Altere o ícone para um "olho aberto"
    }
  }
  /*sessao*/
  document.getElementById('CadasTro').addEventListener('submit' , function(event){
    event.preventDefault();
    const email= document.getElementById('email').value;
    const password = document.getElementById('password').value;
    localStorage.setItem('email' , email);
    localStorage.setItem('password', password);
    window.location.href = 'login.html';
  });