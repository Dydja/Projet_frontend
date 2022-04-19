<?php
if(isset($_POST)){

		extract($_POST); 
		if (isset($voyage) && isset($cabine) && isset($passagers) && isset($departDe) && isset($dateVoyage) && isset($user_id)  && isset($destination_id) ) {
			if (!empty($voyage) && !empty($cabine) && !empty($passagers) && !empty($departDe) && !empty($dateVoyage) && !empty($user_id) && !empty($destination_id) ) {
	   
				$ch = curl_init();
				$data = json_encode($_POST);//es données qu'on envoi a l'api
				//var_dump($data);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					"Cache-Control: no-cache",
					"content-type:application/json;charset=utf-8"
				  ));
		// var_dump($data);
				curl_setopt($ch, CURLOPT_URL,"http://localhost:8000/api/tickets");//met url de ton api a call ici
				curl_setopt($ch,CURLOPT_POST, true);
				curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
				$response= curl_exec($ch); ///excution de la requete Http
				//Normalement si u enleve les reuire au niveau de ton controller api il doit plus avoir erreur de champ requis.
                  
				// var_dump($response); //deburg de la reponse
				 print_r($response);
				//var_dump($response); // dada tu as oublie user_id oubien c'est deburg ça dbr il ne recupere toujours  
				die();
		  }else{
			  echo null; ///j'ai mis en commentairele form_data du coup quand je remplir le formulaire il,me retourne la valeur
			  
		  }
	    } 
	} 

























	
// il recupere plusieurs elements dh 

// tu as ecris departDe deux fois change par la vrai variable tu as modifie deja
	// il recupre voyage oui ouic'est destination_id qu'il  ne recupere pas vue que j'ai fait un vardump sur les autres variables dada tu es la
  //var_dump($_POST);

    // $form_data = array([
    //    'voyage'=>$voyage,
    //    'cabine'=> $cabine,
    //    'passagers'=>$passagers,
    //    'departDe' => $departDe,
    //    'dateVoyage'=>$dateVoyage,
    //    'destination_id'=>$destination_id,
	//    'user_id'=> $user_id,
       
    // ]);

    //echo "<pre>";
    //print_r($form_data);

  // debut de la consommation avec curl
    //$str = http_build_query($form_data);//recupere nos data dans une variable
    
    //init curl_init
//     $ch = curl_init();
//     try {

// 		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 			"Cache-Control: no-cache",
// 			"content-type:application/json;charset=utf-8"
// 		  ));

// 		curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/api/tickets/");
// 		curl_setopt($ch, CURLOPT_POST, true);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
		
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
// 		curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
// 		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// 		curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
// 		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
// 		$response = curl_exec($ch);
		
// 	    if (curl_errno($ch)) {
// 			echo curl_error($ch);
// 			die();
// 		}
		
// 		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// 		if($http_code == intval(200)){
// 			echo $response;
// 		}
// 		else{
// 			echo "Ressource introuvable : " . $http_code;
// 		}
// 	} catch (\Throwable $th) {
// 		throw $th;
// 	} finally {
// 		curl_close($ch);
		
//         //echo $response;
// 		var_dump($response);
		
// 	}
// }


// class CallApi
// {

//   public $method, $url, $data;

//   public function __construct(string $method = 'GET', string $url, $data = [])
//   {
//     $this->method = $method;
//     $this->url = $url;
//     $this->data = $data;
//   }

//   public function sendRequest()
//   {
//     $ch = curl_init();

//     $test = curl_setopt($ch, CURLOPT_URL, $this->url);
//     //Quand il s'agit d'une requete en POST

//     if($this->method == 'POST'){
//       curl_setopt($ch,CURLOPT_POST, true);
//       curl_setopt($ch,CURLOPT_POSTFIELDS, $this->data);
//       curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
//       $response = curl_exec($ch);
//       return $response;
//     }

//     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//       "Cache-Control: no-cache",
//       "content-type:application/json;charset=utf-8"
//     ));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);
//     return json_decode($response);
// 	var_dump($response);
//   }
// }

