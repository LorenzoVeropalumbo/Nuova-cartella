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
    ?>
  <?php } else {?> 
    <h3><?php 
      // Create new guest
      $newUser = new UtenteNonRegistrato("Guests", null);
    ?></h3>
  <?php }?>

  <?php 
    $Friskies = new Croccantini('Friskies', 'croccantini per cani', 7.99 ,'https://www.purinashop.it/media/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/0/7/07613287237125_c1l1_friskies_dog_with_beef_cereals_and_vegetables_7kg_44069008.jpg',1);
    $Whiskas = new Croccantini('Whiskas', 'croccantini per gatti', 4.99 ,'https://www.zooexpert.it/2009-thickbox_default/whiskas-gatto-croccantini-2-12-mesi-junior-pollo-950-gr.jpg', 0.15);
    $Cesar = new Croccantini('Cesar', 'scatolette per cani', 0.99 ,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1RVe_cIM5riM-ErmDyy5U44Jme5DXjPT_Xg&usqp=CAU',1);
    $migliorGatto = new Croccantini('migliorGatto', 'scatolette per gatti', 1.90 ,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqJXIvMvmdbMJpYqfTcPWxbNSZhMrbAYKg5Xt4aarirbHxIurOGxwZzm0HnLCD6XuG8xc&usqp=CAU', 0.4);
    $Collare = new Accessori('Seresto', 'Collare antiparassitario', 25.99 ,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwnevrgmz9dEeWIP_esYrhuiEVz71WUYr-2A&usqp=CAU');
    $Tiragaraffi = new Accessori('zooplus', 'Tiragaraffi', 17.72 ,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbB_BWczVMB2gtrqGtD-l1l_5frwT9nMJ4AQ&usqp=CAU');
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
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $Friskies->image; ?>" alt="<?php echo $Friskies->Tipologia; ?>">     
              <span class="text-tile"><?php echo $Friskies->getInfo(); ?></span>           
            </div>          
          </div>
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $Whiskas->image; ?>" alt="<?php echo $Whiskas->Tipologia; ?>">     
              <span class="text-tile"><?php echo $Whiskas->getInfo(); ?></span>           
            </div>          
          </div>
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $Cesar->image; ?>" alt="<?php echo $Cesar->Tipologia; ?>">     
              <span class="text-tile"><?php echo $Cesar->getInfo(); ?></span>           
            </div>          
          </div>
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $migliorGatto->image; ?>" alt="<?php echo $migliorGatto->Tipologia; ?>">     
              <span class="text-tile"><?php echo $migliorGatto->getInfo(); ?></span>           
            </div>          
          </div>
        </div>  
      </div>
      <div class="container">
        <h1>Accessori</h1>
        <div class="row">
          <div class="col">
            <div class="card-content">
              <img src="<?php echo $Collare->image; ?>" alt="<?php echo $Collare->Tipologia; ?>">     
              <span class="text-tile"><?php echo $Collare->getInfo(); ?></span>           
            </div>          
          </div>
            <div class="col">
              <div class="card-content">
                <img src="<?php echo $Tiragaraffi->image; ?>" alt="<?php echo $Tiragaraffi->Tipologia; ?>">     
                <span class="text-tile"><?php echo $Tiragaraffi->getInfo(); ?></span>           
              </div>          
            </div>
          </div>
        </div>  
      </div>
      <div class="checkout">
        <?php 
          $newUser->aggiungiProdotto($Cesar);
          $newUser->aggiungiProdotto($Tiragaraffi);
          if($newUser->effettuaPagamento() > 0) {
            echo 'Grazie per aver completato il tuo acquisto' ." hai pagato " .$newUser->effettuaPagamento();
          } 
        ?>
      </div> 
    </main>     
  </section>
  
</body>
</html>

 