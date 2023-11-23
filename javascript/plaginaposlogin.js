function irParaOutraPagina() {
    window.location.href = 'seuplano.html'; // Substitua pelo destino desejado}
}

    function previewImage(event) {
        var input = event.target;
        var profileImage = document.getElementById('

    function previewImage(event) {
        var input = event.target;
        var profileImage = document.getElementById('profileImage');

        var reader = new FileReader();

        reader.onload = function () {
            profileImage.src = reader.result;
        };

        reader.readAsDataURL(input.files[0]);
        showContent();
    }

    function showButtons() {
        var content = document.querySelector('.c

    }

    function previewImage(event) {
        var input = event.target;
        var profileImage = document.getElementById('profileImage');

        var reader = new FileReader();

        reader.onload = function () {
            profileImage.src = reader.result;
        };

        reader.readAsDataURL(input.files[0]);
        showContent();
    }

    function showButtons() {
        var content = document.querySelector('.content');
        content.classList.toggle('active');
    }