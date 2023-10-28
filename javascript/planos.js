var carousel = $(".carousel"),
    currdeg  = 0;

$(".next").on("click", { d: "n" }, rotate);
$(".prev").on("click", { d: "p" }, rotate);

function rotate(e){
  if(e.data.d=="n"){
    currdeg = currdeg - 60;
  }
  if(e.data.d=="p"){
    currdeg = currdeg + 60;
  }
  carousel.css({
    "-webkit-transform": "rotateY("+currdeg+"deg)",
    "-moz-transform": "rotateY("+currdeg+"deg)",
    "-o-transform": "rotateY("+currdeg+"deg)",
    "transform": "rotateY("+currdeg+"deg)"
  });
}
let index = 0;

function setPositionByIndex() {
    currentTranslate = index * -window.innerWidth;
    prevTranslate = currentTranslate;
    slider.style.transform = `translateX(${currentTranslate}px)`;
}

function animation() {
    if (isDragging) requestAnimationFrame(animation);
    const movedBy = currentTranslate - prevTranslate;
    const momentum = movedBy * 0.9;
    currentTranslate += momentum;
    prevTranslate = currentTranslate;
    slider.style.transform = `translateX(${currentTranslate}px)`;
}

window.addEventListener('resize', setPositionByIndex);
