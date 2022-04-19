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

<div id="container">
    <form  method="post">
     
      <h3 class="mt-5">Connexion</h3>
       <label for="firstname">Username</label>
       <input type="email" name="email" id="email" placeholder="ex:mory" required>
        
         <label for="password">Mot de passe</label>
         <input type="password" name="password" id="password" placeholder="ex:toto" required> 

         
         <input type="submit" name="submit" value="Se connecter">

         <!-- gestion d'erreur -->
         <?php
         if(isset($_GET['erreur'])){
             $error = $_GET['erreur'];
             if($error == 1 || $error == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
         }
         ?>
        </div>
    </form>
</body>
</html>

<?php  include_once '../traitement/connexion.php'; 
       include_once '../traitement/control.php';
?>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    try
    {
        // Souvent on identifie cet objet par la variable $conn ou $db pour tarcker les erreurs via le try
        $db = new PDO('mysql:host=localhost;dbname=api_projet;charset=utf8', 'root', 'root');
        // $connexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $connexion->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    if(isset($_POST['submit'])) {
    $password = control($_POST['password']);
    $email = control($_POST['email']);
     
    // $sql = "SELECT * FROM users where firstname=:firstname AND password=:password";
    // $stm = $connexion->prepare($sql);

    $conn = $db->prepare("SELECT * FROM users where email= ? AND password=?");
    
        $conn->execute([$email,$password]);
        $user = $conn->fetch(PDO::FETCH_OBJ);
        // die(var_dump($user));
        if($user){
            header('location: ./formulaire.php');
        }else{
            echo "Utilisateur Inconnu";
        }

    }

?>


//$