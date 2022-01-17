<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Meal Planner</title>
    <!-- MDB icon -->
    <link rel="icon" href="./assets/icons/logo-calendar.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/recetas.css" />
    <link rel="stylesheet" href="css/styles.css" />    
 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    

</head>

<body>
    <div class="container-fluid p-0 search" style="height:100%; width:100%;">
        <div class="container-fluid text-left p-0 busqueda">
            <div class="m-0 p-0">
                <?php include("layouts/header.php"); ?>
            </div>
        </div>
        <div class="container d-flex align-items-center text-center justify-content-center mt-0 pt-5"
        style="padding-top:8em">
            <h3 class="text-white small text-*-center m-3 mt-auto mb-auto"
            style="font-size:4vw;font-family: 'Montserrat', serif;">ELIGE TU</h3>
            <h3 class="text-white text-*-center" 
            style="font-size:6.1vw; font-family: 'Roboto Slab', serif;">RECETA</h3>
        </div>              
            <div class="container input-group mb-5 w-75 botones">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="margin-left:12px">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="DESAYUNO" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">DESAYUNO</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="ALMUERZO" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">ALMUERZO</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="CENA" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">CENA</label>
                </div>         
                <div class="container d-flex justify-content-center botones">  
                    <select class="form-select" id="gustos" style="width:20%; border:none; border-radius:0">
                        <option selected disabled>Tipo</option>
                        <option value="Dietética">Dietética</option>
                        <option value="Vegetariana">Vegetariana</option>
                        <option value="Típica peruana">Típica peruana</option>
                        <option value="Comida rápida">Comida rápida</option>
                    </select>
                    <input type="search" id="search" class="form-control" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" style="height:auto;border:none;border-radius:0px" required="true"/>
                    <button type="button" class="btn btn-primary" onclick="searchReceta()"
                    style="border-radius:0px;background-color:#F3F3F4;color:black">
                        <i class="fas fa-search"></i>
                    </button>
                </div>


            </div>   
            <br>
            <br>
            <br>       
      </div>
    <div class="container" style="margin-top:7vw">
        <div class="row row-cols-1 row-cols-md-3 g-4" id="space-list"></div> 
    </div>
  
</body>
  
  <br>
  <br>
  <br>
  <?php include("layouts/footer.php"); ?>
  <script src="js/recetas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
