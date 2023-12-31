function clickMenu(){
    if(menu.style.display =='block'){
        menu.style.display ='none'
    }else{
        menu.style.display = 'block'
    }
  }
  /*fim do hamburguer*/
  
  /*botao da soluçao*/
  function clickSolu(){
    if(botao.style.display =='block'){
        botao.style.display ='none'
    }else{
        botao.style.display = 'block'
    }
  }
  
  /*fim da solucao*/
  
  /*slider*/
  const wrapper = document.querySelector(".wrapper");
  const carousel = document.querySelector(".carousel");
  const firstCardWidth = carousel.querySelector(".card").offsetWidth;
  const arrowBtns = document.querySelectorAll(".wrapper i");
  const carouselChildrens = [...carousel.children];
  
  let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;
  
  // Get the number of cards that can fit in the carousel at once
  let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);
  
  // Insert copies of the last few cards to beginning of carousel for infinite scrolling
  carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
      carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
  });
  
  // Insert copies of the first few cards to end of carousel for infinite scrolling
  carouselChildrens.slice(0, cardPerView).forEach(card => {
      carousel.insertAdjacentHTML("beforeend", card.outerHTML);
  });
  
  // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
  carousel.classList.add("no-transition");
  carousel.scrollLeft = carousel.offsetWidth;
  carousel.classList.remove("no-transition");
  
  // Add event listeners for the arrow buttons to scroll the carousel left and right
  arrowBtns.forEach(btn => {
      btn.addEventListener("click", () => {
          carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
      });
  });
  
  const dragStart = (e) => {
      isDragging = true;
      carousel.classList.add("dragging");
      // Records the initial cursor and scroll position of the carousel
      startX = e.pageX;
      startScrollLeft = carousel.scrollLeft;
  }
  
  const dragging = (e) => {
      if(!isDragging) return; // if isDragging is false return from here
      // Updates the scroll position of the carousel based on the cursor movement
      carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  }
  
  const dragStop = () => {
      isDragging = false;
      carousel.classList.remove("dragging");
  }
  
  const infiniteScroll = () => {
      // If the carousel is at the beginning, scroll to the end
      if(carousel.scrollLeft === 0) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
          carousel.classList.remove("no-transition");
      }
      // If the carousel is at the end, scroll to the beginning
      else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.offsetWidth;
          carousel.classList.remove("no-transition");
      }
  
      // Clear existing timeout & start autoplay if mouse is not hovering over carousel
      clearTimeout(timeoutId);
      if(!wrapper.matches(":hover")) autoPlay();
  }
  
  const autoPlay = () => {
      if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
      // Autoplay the carousel after every 2500 ms
      timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
  }
  autoPlay();
  
  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("mousemove", dragging);
  document.addEventListener("mouseup", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);
  
  /*mensagem do botao ajuda*/
  /*butao do perfil 1 = caio*/
  function saiba() {
      var mensagem = document.getElementById("mensagem");
      mensagem.style.display = "block";
    }
    
    function fechar() {
      var mensagem = document.getElementById("mensagem");
      mensagem.style.display = "none";
    }
  /*fim*/
  /*butao perfil 2 = anna araujo*/
  function saiba2() {
      var mensagem = document.getElementById("mensagem2");
      mensagem.style.display = "block";
    }
    
    function fechar2() {
      var mensagem = document.getElementById("mensagem2");
      mensagem.style.display = "none";
    }
    /*fim*/
    /* botao perfil 3 = fabio Souza*/
    function saiba3() {
      var mensagem = document.getElementById("mensagem3");
      mensagem.style.display = "block";
    }
    
    function fechar3() {
      var mensagem = document.getElementById("mensagem3");
      mensagem.style.display = "none";
    }
    /*fim*/
     /* botao perfil 4 = isabelle Rocha*/
     function saiba4() {
      var mensagem = document.getElementById("mensagem4");
      mensagem.style.display = "block";
    }
    
    function fechar4() {
      var mensagem = document.getElementById("mensagem4");
      mensagem.style.display = "none";
    }
    /*fim*/
    /*perfil 5 = kauan souza*/
    function saiba5(){
      var mensagem = document.getElementById("mensagem5");
      mensagem.style.display = "block"
    }
    function fechar5(){
      var mensagem = document.getElementById ("mensagem5");
      mensagem.style.display = "none"
  
    }
    /*fim*/
    /*perfil 6 = otavio*/
    function saiba6(){
      var mensagem = document.getElementById("mensagem6");
      mensagem.style.display = "block"
    }
    function fechar6(){
      var mensagem = document.getElementById("mensagem6");
      mensagem.style.display = "none"
    }
  
  
  
  /*fim da mensagem do botao ajuda*/
  
  //colocando o numero de telefone//

  function conectarTelefone() {
    // Obter o valor do campo de telefone
    var numeroTelefone = document.getElementById("telefoneInput").value;

    // Remover caracteres não numéricos do número de telefone
    var numeroLimpo = numeroTelefone.replace(/\D/g, '');

    // Número do WhatsApp
    var numeroWhatsApp = "14988393894"

    // Construir a URL do WhatsApp com o número preenchido
    var urlWhatsApp = "https://api.whatsapp.com/send?phone=" + numeroWhatsApp;

    // Redirecionar para o WhatsApp
    window.location.href = urlWhatsApp;
}
