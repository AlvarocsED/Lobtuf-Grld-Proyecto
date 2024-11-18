<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fútbol Trivia Grid</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .table thead th {
      background-color: #343a40;
      color: white;
      text-align: center;
    }
    .flag {
      width: 30px;
      height: 20px;
      object-fit: cover;
    }
    .team-logo {
      width: 40px;
      height: 40px;
      object-fit: cover;
      border-radius: 5px;
    }
    .guess-cell {
      height: 70px;
      text-align: center;
      vertical-align: middle;
      background-color: #f8f9fa;
      cursor: pointer;
      border: 1px solid #ddd;
    }
    .guess-cell:hover {
      background-color: #e9ecef;
    }
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="header">
      <h1>Fútbol Trivia Grid</h1>
      <p>Adivina un jugador para cada celda</p>
    </div>

    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th></th>
          <th><img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/53/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" alt="Barcelona" class="team-logo"></th>
          <th><img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_United_FC_crest.svg/1200px-Manchester_United_FC_crest.svg.png" alt="Man Utd" class="team-logo"></th>
          <th><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a1/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png" alt="Real Madrid" class="team-logo"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Argentina.svg" alt="Argentina" class="flag"></td>
          <td class="guess-cell" data-team="Barcelona" data-country="Argentina"></td>
          <td class="guess-cell" data-team="Man Utd" data-country="Argentina"></td>
          <td class="guess-cell" data-team="Real Madrid" data-country="Argentina"></td>
        </tr>
        <tr>
          <td><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg" alt="Brazil" class="flag"></td>
          <td class="guess-cell" data-team="Barcelona" data-country="Brazil"></td>
          <td class="guess-cell" data-team="Man Utd" data-country="Brazil"></td>
          <td class="guess-cell" data-team="Real Madrid" data-country="Brazil"></td>
        </tr>
        <tr>
          <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" alt="Spain" class="flag"></td>
          <td class="guess-cell" data-team="Barcelona" data-country="Spain"></td>
          <td class="guess-cell" data-team="Man Utd" data-country="Spain"></td>
          <td class="guess-cell" data-team="Real Madrid" data-country="Spain"></td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    // Ejemplo de interacción: haz clic en una celda para ingresar el nombre de un jugador
    document.querySelectorAll('.guess-cell').forEach(cell => {
      cell.addEventListener('click', () => {
        const playerName = prompt("Ingresa el nombre del jugador:");
        if (playerName) {
          cell.textContent = playerName;
        }
      });
    });
  </script>
</body>
</html>
