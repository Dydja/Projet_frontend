<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Reservation</title>
  </head>
  <body>

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
          <h3>Bienvenue sur la plateforme airline'kyad</h3>
        </div>
      </div>
    </div>
     

  <!-- <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/photo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/photo3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>--> 





   <?php include_once 'curl.php'; ?>





    <!-- <table class="table mb-4" style="width: 50; height: 50px;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Pays</th>
          <th scope="col">Distance</th>
        </tr>
      </thead>
      <tbody>
      <?php //foreach($data as $liste) : ?>
        <tr>
          <th scope="row">1</th>
          <td>  <?php //echo $liste->name; ?></td>
          <td> <?php //echo $liste->pays; ?> </td>
          <td> <?php //echo $liste->distance; ?> </td>
          <?php //endforeach ?>
        </tr>
      </tbody>
    </table> --> <h5 class="card-title"></h5>
        <p class="card-text"></p>


 
    <div class="card">
  <div class="card-body">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Reservation</th>
      <th scope="col">Date d'enregistrement</th>
     
    </tr>
  </thead>
  <?php foreach($data as $liste) : ?>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $liste->name; ?></td>
      <td><?php echo $liste->pays; ?></td>
      <td><button type="button" class="btn btn-outline-primary">Reserver</button></td>
      <td><?php echo $liste->created_at; ?></td>

      <!-- <td>@mdo</td> -->
    </tr>
   
  </tbody>
  <?php endforeach ?>
</table>
       
      </div>
    </div>
  </div>
  </div>
  
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
