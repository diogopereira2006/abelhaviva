<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/vereventos.css">
  <title>Verificação de Eventos</title>
</head>
<body>
<div class="container">
<h2>Meus eventos</h2>
<hr>

<ul id="event-list"></ul>
</div>
<style>
  body{
    background: linear-gradient(45deg, #fbda61, #29ace0 )no-repeat;
    height: 29vw;
  }
.container{
    background-color: transparent;
    box-shadow: 1px 1px 1px 1px black;
    margin:0 auto;
    margin-top: 16%;
    max-width: 50%;
    max-width: 400px;
}
.container h2{
    text-align:center;
    font-size: 200%;
}
#event-list{
        letter-spacing: 3px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 24px;
    }
@media (max-width:768px){
    .container{
        margin: 0 auto;
        margin-top: 65%;
    }
    #event-list{
        letter-spacing: 3px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    body{
      height: 131vw;
    }
}
 </style>   
<script>
  // Recuperar os eventos armazenados em localStorage
  const storedEvents = JSON.parse(localStorage.getItem('events')) || [];

  const eventList = document.getElementById('event-list');
  storedEvents.forEach(event => {
    const listItem = document.createElement('li');
    listItem.textContent = `${event.date}: ${event.description}`;
    eventList.appendChild(listItem);
  });
</script>



</body>
</html>