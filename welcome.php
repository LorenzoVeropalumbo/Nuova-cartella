<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  
  <?php 
    require_once __DIR__ . '/UtenteNonRegistrato.php';
    require_once __DIR__ . '/UtenteRegistrato.php'; 
    require_once __DIR__ . '/Croccantini.php';
    require_once __DIR__ . '/Accessori.php';
  ?>

  <?php if(!empty($_POST)){ ?>
    <?php 
      // Create new user
      $newUser = new UtenteRegistrato($_POST['name'], $_POST['email']);
      // adding the user in the users Array(users already registered)
      $Users[] = $newUser;
      var_dump($newUser);
    ?>
  <?php } else {?> 
    <h3><?php 
      // Create new guest
      $newUser = new UtenteNonRegistrato("Guests", null);
      var_dump($newUser);
    ?></h3>
  <?php }?>

  <?php 
    $Friskies = new Croccantini('Friskies', 'croccantini per cani', 7.99 ,'https://www.purinashop.it/media/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/0/7/07613287237125_c1l1_friskies_dog_with_beef_cereals_and_vegetables_7kg_44069008.jpg',1);
    $Whiskas = new Croccantini('Whiskas', 'croccantini per gatti', 4.99 ,'https://www.zooexpert.it/2009-thickbox_default/whiskas-gatto-croccantini-2-12-mesi-junior-pollo-950-gr.jpg', 0.3);
      
  ?>  


  <section>
    <div class="login"> 
      <div class="space">
        <h1>Pets For Life</h1>
      </div>
      <div class="space">
        <h2>Benvenuto</h2>   
        <h3><?php echo $newUser->nome ?></h3>
        <h3><?php echo $newUser->email ?></h3>
      </div>    
    </div>
    <main>
      <div class="container">
        <h1>cibo</h1>
        <div class="row">
          <div class="col" onclick="$newUser->aggiungiProdotto($Friskies)">
            <div class="card-content">
              <img src="<?php echo $Friskies->image; ?>" alt="<?php echo $Friskies->Tipologia; ?>">     
              <span class="text-tile"><?php echo $Friskies->getInfo(); ?></span>           
              </div>          
            </div>
          </div>
        </div>  
      </div>
    </main>     
  </section>
</body>
</html>