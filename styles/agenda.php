body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background: linear-gradient(45deg, #fbda61, #29ace0);
}

.calendario {
    text-align: center;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    width: 100%; /* Faz o calendário ocupar 100% da largura */
    margin: auto; /* Centraliza o calendário na tela */
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.header button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.header button:hover {
    background-color: #0056b3;
}

.dias-semana {
    display: flex;
    justify-content: space-around;
    background-color: #f7f7f7;
    padding: 10px;
    font-weight: bold;
    border-radius: 5px;
    margin-bottom: 10px;
}

.dias div {
    display: inline-block;
    width: 14%;
    margin: 5px;
    padding: 10px;
    border: none;
    background-color: #fff;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius: 5px;
    box-sizing: border-box;
}

.dias-semana, .dias {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.hoje {
    background-color: #007bff;
    color: #007bff;
}

.eventoModal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #fefefe;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.fechar {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #007bff;
}

input[type="date"] {
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"] {
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.criarEventoForm {
    text-align: center;
    margin-top: 20px;
}

.criarEventoForm span {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.criarEventoForm span:hover {
    background-color: #0056b3;
}

@media (max-width: 600px) {
    .calendario {
        width: 100%;
    }

    .dias div {
        width: 100%;
    }

    .criarEventoForm span {
        width: calc(100% / 7); /* Distribui os números em uma grade de uma semana */
        margin: 2px; /* Adiciona um pequeno espaçamento entre os números */
    }
}

