
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Reservation</title>
</head>
<body>
    <?php
      include_once '../traitement/connexion.php';
      include_once '../traitement/curl_create.php';
      include_once '../traitement/getdestination.php';
       $conn = $db->prepare('select * from users');
    //$slo = $db->prepare('select * from users');
    //   //$slo ->excecute();
      $conn->execute();
      $customer = $conn->fetchAll();

      //var_dump($customer)
    ?>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="#"
            alt=""
            width="30"
            height="24"
            class="d-inline-block align-text-top"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                style="color: white"
                >Acceuil</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="#"
              ><button class="btn btn-outline-primary me-2 disabled" type="submit">
                S'incrire
              </button></a
            >
          </form>
          <!-- <form class="d-flex">
            <a href="#"
              ><button class="btn btn-outline-success" type="submit">
                Se connecter
              </button></a
            >
          </form> -->
        </div>
      </div>
    </nav>
    <br>
    <div class="container mb-4">
      <div class="card">
        <div class="card-body" style="text-align: center">
          <h3>Enregister la reservation</h3>
        </div>
      </div>
    </div>























<div id="container">
    <form action="../traitement/curl_create.php" method="POST">
     
      <h3 class="mt-5">Enregistrer votre reservation de billet</h3>
       <label for="voyage">Voyage</label>
       <input type="text" name="voyage" id="voyage" placeholder="ex:aller-retour" pattern="[A-Za-z]*" required="required" >
        
         <label for="cabine">Cabine</label>
         <input type="text" name="cabine" id="cabine" placeholder="ex:Economy"  pattern="[A-Za-z]*" required="required"> 
        

         <label for="passagers">Passagers</label>
         <input type="text" name="passagers" id="passagers" placeholder="1 adulte" pattern="[A-Za-z]*" required="required" >

         <label for="departDe">Départ de <span>*</span> </label>
         <input type="text" name="departDe" id="departDe" placeholder="paris" required="required" >

         <label for="dateVoyage">Date de Voyage <span>*</span> </label>
         <input type="date" name="dateVoyage" id="dateVoyage" placeholder="2020-02-23" required="required" ><br>
         
         <label for="user_id">Clients<span>*</span> </label>
        
        <select name="user_id" id="user_id">
            <option value="" selected="selected" disabled>Client</option>
            <?php foreach($customer as $user) { ?>
               <option value="<?= $user['id']; ?>"><?= $user['firstname']; ?></option>
               <?php } ?>
        </select>

         <label for="destination_id">Destination<span>*</span> </label>

         <select name="destination_id" id="destination_id">
             <option value="" selected="selected" disabled>Destination</option>
             <?php foreach($data as $liste) : ?>
                <option value="<?= $liste->id; ?>"><?= $liste->name; ?></option>
                <?php endforeach; ?>
         </select>
        
         <input type="submit" name="submit"  value="reserver">

         <!-- gestion d'erreur -->

        
         
        </div>
    </form>
</body>
</html>