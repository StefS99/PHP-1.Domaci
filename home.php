<?php
    @include '../connect.php';

    session_start();
    if(!isset($_SESSION['user_name'])){
        header('location:auth/login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
          <a class="navbar-brand"href="#">Prodaja automobila</a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" href="#" aria-current="page">Početna strana <span class="visually-hidden">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="auth/logout.php">Odjavite se</a>
                  </li>
                  <li class="nav-item">
                      <p class="my-2" style="color:aliceblue;">Dobro došli, <?php echo $_SESSION['user_name']?></p>
                  </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                  <input class="form-control me-sm-2" type="text" id="search_text" autocomplete="off" placeholder="Search">
                  <input type="text" id="myInput" onkeyup="funkcijaZaPretragu()" placeholder="Pretrazi kolokvijume po predmetu" hidden>
                </form>
          </div>
      </nav>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role = "dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dodavanje novog automobila</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
            <label for="completeName" class="form-label">Naziv automobila</label>
            <input type="text" class="form-control" id="completeName" aria-describedby="emailHelp" placeholder="Unesite naziv automobila">
          </div>
          <!--<label class="form-label">Izaberite marku automobila</label>
          <div class="mb-3 btn-group" btnRadioGroup name = 'propType'>
            <input type="radio" class="btn-check" name="automarke" id="automarka1" value="Audi" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka1">Audi</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka2" value="Mercedes" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka2">Mercedes</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka3" value="Dacia" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka3">Dacia</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka4" value="Fiat" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka4">Fiat</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka5" value="Ferrari" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka5">Ferrari</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka6" value="Bentley" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka6">Bentley</label>
          </div>-->
          <div class="mb-3">
            <label for="completeName2" class="form-label">Marka</label>
            <input type="text" class="form-control" id="completeName2" aria-describedby="emailHelp" placeholder="Unesite naziv marke">
          </div>
          <div class="mb-3">
            <label for="completeProdavac" class="form-label">Ime prodavca</label>
            <input type="text" class="form-control" id="completeProdavac" aria-describedby="emailHelp" placeholder="Unesite ime prodavca">
          </div>
          <div class="mb-3">
            <label for="completeCena" class="form-label">Cena automobila</label>
            <input type="text" class="form-control" id="completeCena" aria-describedby="emailHelp" placeholder="Unesite cenu automobila">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick ="addAutomobil()">Sačuvajte auto</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container m-5">
    <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
      Dodajte novi auto
    </button>

    <div id="displayDataTable"></div>
    </div>

    <!--Update Modal-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Izmena podataka o automobilu </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
            <label for="updateName" class="form-label">Naziv automobila</label>
            <input type="text" class="form-control" id="updateName" aria-describedby="emailHelp" placeholder="Unesite naziv automobila">
          </div>
          <!--<label class="form-label">Izaberite marku automobila</label>
          <div class="mb-3 btn-group" btnRadioGroup name = 'propType'>
            <input type="radio" class="btn-check" name="automarke" id="automarka1" value="Audi" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka1">Audi</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka2" value="Mercedes" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka2">Mercedes</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka3" value="Dacia" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka3">Dacia</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka4" value="Fiat" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka4">Fiat</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka5" value="Ferrari" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka5">Ferrari</label>
            <input type="radio" class="btn-check" name="automarke" id="automarka6" value="Bentley" autocomplete="off">
            <label class="btn btn-outline-primary" for="automarka6">Bentley</label>
          </div>-->
          <div class="mb-3">
            <label for="updateName2" class="form-label">Marka</label>
            <input type="text" class="form-control" id="updateName2" aria-describedby="emailHelp" placeholder="Unesite naziv marke">
          </div>
          <div class="mb-3">
            <label for="updateProdavac" class="form-label">Ime prodavca</label>
            <input type="text" class="form-control" id="updateProdavac" aria-describedby="emailHelp" placeholder="Unesite ime prodavca">
          </div>
          <div class="mb-3">
            <label for="updateCena" class="form-label">Cena automobila</label>
            <input type="text" class="form-control" id="updateCena" aria-describedby="emailHelp" placeholder="Unesite cenu automobila">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" onClick="UpdateAutomobil()">Izmeni auto</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
            <input type="hidden" id="hiddendata">
          </div>
        </div>
      </div>
    </div>


    <!--js i jquery-->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

      <script src="js/main.js"></script>
      <script>

      function Search() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

      </script>

  </body>
</html>