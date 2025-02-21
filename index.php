<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>SOCIETE NEW AUTONOBILE hadjimi rachid </title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
  <div class="container-fluid ">
    <a class="navbar-brand h1" href="#"><span class="text-primary">NEW</span> <span class="text-dark  ">AUTOMOBILE</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-4 text-center" id="l1 ">
      <ul class="navbar-nav mx-auto mb-2  my-4 ">
        <li class="nav-item active">
          <a class="nav-link  h3 text-dark" aria-current="page" href="#">ACCUEIL</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  h3 text-dark  " href="#vehicules">VEHICULE</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link h3 text-dark" href="service.php">SERVICE</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link   h3 text-dark " href="#"> Contact</a>
        </li>
        <li  > <div class="ms-5"><img src="images/im.jpg" alt="image" class=" img-fluid ms-5" style="max-width:1000px; height:100px;"></div></li>
      </ul>
      
     
    </div>
  </div>
</nav>
<style>
    .nav-link {
        margin-right:90px;
        color:black;
    }
    .nav-link: hover {
        color:blue;
    }
    .accueil{
        height:100vh;
    }
    .fit-img{
        object-fit: cover;
        height: 250px; 
    }
</style>

<section id="Accueil" class="accueil">
 <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-6 ">
            <h1>Bienvenue sur <span class="text-danger">notre site de ventes</span> du véhicule</h1>
           <h5> <p>Découvrez notre collection de buggati chiron , l'incarnation de l'ingenieur de pointe , de la performance inégalée et du desgin iconique  chaque chiron disponible sur notre site offre une expérience de conduite incomparable fussionnant harmonieusement performance et elegance. parcourez notrz sélection soigneusement choisie et trouver la buggati chiron de vos réves , prete a vous emmener vers de nouveaux horizons avec style et raffinement</p></h5>
        </div>   
        <div class="col-6">
           <div id="c1" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/im1.jpg" class="d-block w-100" style="height:500px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/im2.jpg" class="d-block w-100" style="height:500px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/im6.jpg" class="d-block w-100" style="height:500px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/im4.png" class="d-block w-100" style="height:500px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/im5.jpg" class="d-block w-100" style="height:500px">
                    </div>

                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="4"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#c1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>   
                <button class="carousel-control-next" type="button" data-bs-target="#c1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>    


            </div>
        </div>    
         
       



    </div>
        </div>
    
    </div>        
    

 </div>
</section>


<section id="vehicules">
    <div class="container">
    <h2 class="section-title text-center mb-5">Nos Vehicules</h2>
       <div class="row mt-5 mb-5 text-center">
        <div class="col-4" >
            <div class="card" >
                <img src="images/im7.jpg" class="card-img-top fit-img"alt="im7">
                <div class="card body flex-grow-1">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>
            </div>

        </div>
        <div class="col-4" >
            <div class="card ">
                <img src="images/im9.jpg" class="card-img-top fit-img"alt="im7" >
                <div class="card body flex-grow-1">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>

        </div>
        <div class="col-4" >
            <div class="card " >
                <img src="images/im7.jpg" class="card-img-top fit-img"alt="im7">
                <div class="card body flex-grow-1">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>

        </div>
                           
       </div>
    </div>
    <div class="container">
     <div class="row mt-5 text-center">
        <div class="col-4" >
            <div class="card" >
                <img src="images/im7.jpg" class="card-img-top fit-img"alt="im7">
                <div class="card body">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>
            </div>

        </div>
        <div class="col-4" >
            <div class="card" >
                <img src="images/im9.jpg" class="card-img-top fit-img"alt="im7" >
                <div class="card body">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>

        </div>
        <div class="col-4" >
            <div class="card"  >
                <img src="images/im7.jpg" class="card-img-top fit-img"alt="im7" >
                <div class="card body">
                    <h2 class="card-title">Buggati</h2>
                    <p class="card-text">2.000.000.00 €</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>

        </div>
                           
      </div>
    </div>  
<hr>
</section>
<section id="services" class="mt-5 container">
<div class="row mt-5 text-center">
        <div class="col-4" >
            <div class="card" style="max-width:550px; heigth:350px;">
                <div class="card-header bg-success">Réparation</div>
                <div class="card body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, Lorem, ipsum dolor sit amet consectetur . Debitis illo expedita reiciendis. Quae deserunt, provident temporibus ut omnis quibusdam officia.</et></p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>
            </div>

        </div>
        <div class="col-4" >
            <div class="card" style="max-width: 550px; heigth:350px;">
                <div class="card-header bg-success">Tolerié</div>
                <div class="card body">
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, voluptatum! Lorem ipsum t. Consectetur harum aspernatur veniam necessitatibus eveniet hic enim delectus assumenda magni. Obcaecati?</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>

        </div>
        <div class="col-4">
            <div class="card" style="max-width: 550px; heigth:350px;" >
            <div class="card-header bg-success">Dépannage</div>
                <div class="card body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aperiam. Lorem ipsum, dolor sit adipisicing elit. Laudantium dolor vel quod praesentium placeat quaerat possimus sunt, et blanditiis dolores.</p>
                    <a href="#" class="btn btn-danger">Acheter mainetenant</a>
                </div>    
            </div>
:
        </div>
                           
    </div>

</section>
    <section>_
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Notre Adresse</h1>
                    <iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42011.98300692274!2d2.3746970594498653!3d48.843927392409405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1715947911781!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0"></iframe>

                </div>
                        <div class="col-6">
                            <div>
                                <form action="">
                                    <div>
                                        <label for="inputnom">Nom</label>
                                        <input type="text" name="nom" id="inputnom">

                                    </div>
                                        <div>
                                            <label for="inputprenom">Prenom</label>
                                            <input type="text" name="prenom" id="inputprenom">
                                        </div>
                                    
                                </form>
                            </div>
            </div><label for="">Nom</label>

        </div>
    </section>

























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
