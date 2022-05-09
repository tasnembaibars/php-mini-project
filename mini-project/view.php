<?php session_start();
// session_unset()
?>
<!doctype html>
<html lang="en">
  <head>
    <title>mini-project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  -->
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#faeff2;  ">
  <a class="navbar-brand" href="#"><img src="image/logo.png" height=100px ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/php-mini-project/mini-project/add.php">Add product<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/php-mini-project/mini-project/view.php">view products</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="background-color:#faeff2;">Search</button>
    </form>
  </div>
</nav>



     
    

<?php


// if(isset($_POST['add'])){


$name =explode("<br>",$_SESSION['name']);
$price =explode("<br>",$_SESSION['price']);
$description =explode("<br>",$_SESSION['description']);
$image =explode("<br>",$_SESSION['image']);

// for($i=0;$i<count($name)-1;$i++ ){
// echo
// '<div style="display: inline-block;"> <div class="col-md-4 mt-2 mx-0 " style="" > <div class="card" >
// <img src="image/logo.png" class="card-img-top" alt="..." style="width:100%"> 
// <div class="card-body" style="width:900px">
// <h5 class="card-title">'.$name[$i].'</h5>
// <p class="card-subtitle">'.$price[$i].'</p>
// <p class="card-text">'.$description[$i].'</p>
// </div></div></div></div> '
// echo "<div class='col-md-4 mt-2'>
//     <div class='card '>
//     <div class='card-body'>
//     <img class='card-img-top' src='image/logo.png' alt='Card image cap' height='500px' width='10px'>
//     </div>
//     <div class='card-body'>
//       <h4 class='mb-2'>". $name[$i]."</h4>
//       <p class='card-text'>Price :". $price[$i]."</p>
//       <p class='card-text'>". $description[$i]."</p>
//       </div>
//     </div>
//     </div>
// </div>
//  "


// ;}
for($i=0;$i<count($name)-1;$i++ ){
  
    
  echo(
  
  ' <div style="display: inline-block;">
  <div class="container col-md-4 mt-4 mb-3">
    <div class="card" style="width:300px">
  
   <img class="card-img-top" src="image/logo.png" alt="Card image" style="width:100%">
   
     <div class="card-body">
        <h4 class="card-title" style="color:#7f7f7f">'.$name[$i].'</h4>
        <p class="card-text"style="color:#7f7f7f">'.$description[$i].'</p>
        <p class="card-text"style="color:#7f7f7f">'.$price[$i].'</p>
      </div>
      </div>
      </div>
  </div>')
  
  ;} 
  
?>


<!-- <img src="image/back.jpg " height=300px> -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-f5f3f4"
          style="background-color:#faeff2;  "
          >
    <!-- Grid container -->
 
          <!-- Grid column -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-0">
            <h6 class="text-uppercase mb-4 font-weight-bold">
             Anna
            </h6>
            
            <p>
            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-bbbbbb">all products</a>
            </p>
            <p>
              <a class="text-bbbbbb">categories</a>
            </p>
            <p>
              <a class="text-bbbbbb">brands</a>
            </p>
            <p>
              <a class="text-bbbbbb">sales </a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
             links
            </h6>
            <p>
              <a class="text-bbbbbb">Your Account</a>
            </p>
            <p>
              <a class="text-bbbbbb">jobs</a>
            </p>
            <p>
              <a class="text-bbbbbb">Shipping </a>
            </p>
            <p>
              <a class="text-bbbbbb">Help</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-bbbbbb" href="https://mdbootstrap.com/"
                 >Tasnembaibars@gmail.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               
               ><i class="fab fa-facebook-f" ><img src="image/lin.png"  width="30px"  style = "margin-left:10%" ></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"><img src="image/git.png"  width="30px"  style = "margin-left:10%" ></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"><img src="image/gm.png"  width="30px" height="100%"  style = "margin-left:0%" ></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"><img src="image/inst.png"  width="30px" height="100%"  style = "margin-left:0%" ></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
