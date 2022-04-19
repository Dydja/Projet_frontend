<?php  include_once '../traitement/connexion.php'; 
       include_once '../traitement/control.php';
?>
<?php
session_start();



if(isset($_POST['submit'])) {
   $password = control($_POST['password']);
   $email = control($_POST['email']);

   $sql = "SELECT * FROM users where email=:email AND passwords=:passwords";
   $stm = $connexion->prepare($sql);
    
    $stm->execute([ ':email'=>$email, ':passwords' => $password]);
    $user = $stm->fetch(PDO::FETCH_OBJ);
    // die(var_dump($user));
    if($user){
        header('location: ./formulaire.php');
    }else{
        echo "Utilisateur Inconnu";
    }

}

?>


