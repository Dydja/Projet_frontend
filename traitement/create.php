 <?php


//  include('curl_create.php');


// // if (isset($_POST)) {
// //   if (isset($_POST['voyage']) && isset($_POST['cabine']) && isset($_POST['passagers']) && isset($_POST['departDe']) && isset($_POST['dateVoyage']) && isset($_POST['destination_id']) ) {
// //     if (!empty($_POST['voyage']) && !empty($_POST['cabine']) && !empty($_POST['passagers']) && !empty($_POST['departDe']) && !empty($_POST['dateVoyage'])  && !empty($_POST['destination_id'])) {
// //       $userInformation = json_encode($_POST);
// //       $call = new CallApi("POST", "http://localhost:8000/api/tickets", $userInformation);
// //       $userCreated = $call->sendRequest();
// //       $_SESSION['success'] = 'Compte crée avec succes!';
// //       return header("Location: ".'../formulaire.php');
// //     }

// //     $_SESSION['error']  = "Veuillez renseigner toutes les informations";
// //     return header("Location: ".'../login.php');
// //   }
// // }



// //$voyage = htmlspecialchars(trim($_POST['voyage']));
// //     $cabine = htmlspecialchars(trim($_POST['cabine']));
// //     $passagers = htmlspecialchars(trim($_POST['passagers']));
// //     $departDe = htmlspecialchars(trim($_POST['departDe']));
// //     $dateVoyage = htmlspecialchars(trim($_POST['dateVoyage']));
// //     $destination_id



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
//     var_dump($response);
//   }
// } 