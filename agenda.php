<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/agenda.css">
  <title>Calendário Interativo Estilizado</title>
</head>
<body>
<div class="calendar">
  <div class="calendar-header">
    <button onclick="prevMonth()">❮</button>
    <span id="month-year">Dezembro 2023</span>
    <button onclick="nextMonth()">❯</button>
  </div>
  <table class="calendar-table">
    <thead>
      <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        
    
<th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
      </tr>
    </thead>
    <tbody id="calendar-body">
      <!-- Preencha os dias do mês aqui -->
    </tbody>
  </table>
</div>

<div class="evento">
    <a href="vereventos.php">Ver meus eventos</a>
  </div>


<div id="event-input" class="event-input">
  <h3>Adicionar Evento</h3>
  <hr>
  <label for="event-date">Data:</label>
  <input type="text" id="event-date"  readonly>
  <br>
  <label for="event-description">Evento:</label>
  <textarea id="event-description" placeholder="Inscrição do evento" ></textarea>
  <br>
  <button onclick="addEvent()">Adicionar Evento</button>
  <button onclick="finishAddingEvents()">Concluir</button>
</div>
<script src="javascript/agenda.js"></script>
</body>
</html>

 