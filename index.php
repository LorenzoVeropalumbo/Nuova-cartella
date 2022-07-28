<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>PetsForLife</title>
</head>
<body>
  <header>
    <h2>Registrati per un 20% di sconto</h2>  
    <div class="container">        
      <form action="welcome.php" method="post">        
        <input type="text" id="name" name="name" placeholder="Nome" required><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input class="btn" type="submit" value="Invia">
      </form>
      <form action="welcome.php" method="post">
        <input class="btn" type="submit" value="Accendi senza registrazione">
      </form>
    </div>
  </header>
</body>
</html>