
<?php
// //init du curl
// $ch = curl_init();
// //lien de mon api qui vas consommée
// $api_url = "http://127.0.0.1:8000/api/destinations";
// //Une fois l'objet initialisé on lui assigne des options en fonctions de nos besoins grâce à la fonction curl_setopt().
// //$test = curl_setopt($ch, CURLOPT_URL, $api_url);

// /*curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     "Cache-Control: no-cache",
//     "content-type:application/json;charset=utf-8"
//   ));*/

//     curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/api/destinations");
//     curl_setopt($ch, CURLOPT_HEADER, false);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
//     curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_MAXREDIRS, 1); #nbre de redirections qu'il doit suivre
//     #curl_setopt($ch, CURLOPT_NOBODY, true); #use le protocle head et not export resouces retournées
//     curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); #verifie ou non la validité du certificat
// //Pour récupérer la ressource appelée et téléchargée par la requête CURL on utilise la méthode curl_exec().
//   $response = curl_exec($ch);

//   if($e = curl_error($ch)){
//       echo $e;
//   }else{
//       $decoded = json_decode($resp);
//       print_r($decoded);
//   }

//   curl_close($ch); //ferme la session

// tu vois
#initialise le curl
$ch = curl_init();
//$path_url = "http://127.0.0.1:8000/api/destinations/"; //lien de votre api a consomée
#
#$test = curl_setopt($ch, CURLOPT_URL, $path_url);
try {
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Cache-Control: no-cache",
        "content-type:application/json;charset=utf-8"
      ));

    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8001/api/destinations/");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 1); #nbre de redirections qu'il doit suivre
    #curl_setopt($ch, CURLOPT_NOBODY, true); #use le protocle head et not export resouces retournées
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); #verifie ou non la validité du certificat
    
    $response = curl_exec($ch); //recupere la resource call et telecharge par le curl initié

    if (curl_errno($ch)) { // curl_erno permet de controler la presence d'une erreur fatale
        echo curl_error($ch); // curl_error permet de connaître le message d'erreur
        die();
    }
    
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //curl_getinfo recupere les informations d'une requete curl
    //il prend en par le curl_init et CURLINFO_HTTP_CODE(represente le code de retour)
    if($http_code == intval(200)){
       // echo " Ressource valide <br >" ;
    }
    else{
        echo "Ressource introuvable : " . $http_code;
    }
} catch (\Throwable $th) {
    throw $th;
} finally {
    curl_close($ch); //fermeture de la requete
    $data = json_decode($response);
   ////faut debuger // je me suis trompe c'est l'autre fichier la 
    //print_r($response);

//    var_dump($data);


   
}
?>
  
