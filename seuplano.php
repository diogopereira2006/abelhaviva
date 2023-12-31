<?php
session_start();




     


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Plano Bee Alive</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: linear-gradient(45deg, #fbda61, #29ace0);
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .plan-info {
            margin-top: 20px;
        }

        .upgrade-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upgrade-button:hover {
            background-color: #0056b3;
        }

        /* Estilizando os botões do modal */
        #upgradeModal button {
            margin: 10px;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #upgradeModal button.confirm {
            background-color: #28a745;
            color: #fff;
        }

        #upgradeModal button.confirm:hover {
            background-color: #218838;
        }

        #upgradeModal button.cancel {
            background-color: #dc3545;
            color: #fff;
        }

        #upgradeModal button.cancel:hover {
            background-color: #c82333;
        }
        @media (max-width: 600px) {
            /* Ajustes para telas menores */
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seu Plano Bee Alive</h1>

        <div class="plan-info">
            <p><strong>Plano Atual:</strong> Plano Premium Anual</p>
            <p><strong>Status:</strong> Ativo</p>
        </div>

        <button class="upgrade-button" onclick="openUpgradeModal()">Upgrade de Plano</button>

        <!-- Modal de Upgrade (inicialmente oculto) -->
        <div id="upgradeModal" style="display: none;">
            <h2>Opções de Upgrade</h2>
            <p>Escolha outro plano de assinatura que se conecte mais a sua realidade e aproveite seus recursos e benefícios.</p>
            <select id="upgradeOptions">
                <option value="plano-avancado">Plano Básico Semestral</option>
                <option value="plano-premium">Plano Premium Semestral</option>
                <option value="plano-premium">Plano Premium Anual</option>
            </select>
            <button onclick="confirmUpgrade()">Confirmar</button>
            <button onclick="closeUpgradeModal()">Cancelar</button>
        </div>

        <script>
            function openUpgradeModal() {
                var upgradeModal = document.getElementById('upgradeModal');
                upgradeModal.style.display = 'block';
            }

            function closeUpgradeModal() {
                var upgradeModal = document.getElementById('upgradeModal');
                upgradeModal.style.display = 'none';
            }

            function confirmUpgrade() {
                var selectedOption = document.getElementById('upgradeOptions').value;
                alert('Upgrade para ' + selectedOption + ' confirmado!');
             window.location.href = 'plaginaposlogin.php';
            }
        </script>
    </div>
</body>
</html>

