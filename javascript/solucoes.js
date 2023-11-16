function toggleAccordion(id) {
    var descricao = document.getElementById("descricao" + id);
    descricao.style.display = (descricao.style.display === "block") ? "none" : "block";
}
