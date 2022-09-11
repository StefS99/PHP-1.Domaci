<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodaja automobila</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand"href="#">Prodaja automobila</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prijavite se na sistem</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="../1.PHP-domaci/login.php">Prijava</a>
                        <a class="dropdown-item" href="../1.PHP-domaci/register.php">Registracija</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

 
    <h1 class="text-center my-4">Hello, world!</h1>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!--Update Modal-->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodavanje novog automobila</h5>
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
        <button type="button" class="btn btn-success" onclick ="UpdateAutomobil()">Izmeni auto</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>



<div class="container m-5">
<button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
  Izmenite auto
</button>
<div id="displayDataTable"></div>
</div>




<!--js i jquery-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

    <script>

    //Read

    $(document).ready(function(){  //Ako je naš dokument spreman, prikaži sve 
      displayData();   //Funckija koju smo dole definisali
    });
    

    function displayData(){
      var displayData="true";
      $.ajax({
        url:"display.php",
        type: 'post',
        data:{
          displaySend: displayData
        },
        success:function(data,status){
          $('#displayDataTable').html(data);  //Prikazace se u delu gde je ovo id
        }
      });
    }

    //Add

    function addAutomobil(){

      var nameAdd = $('#completeName').val(); 
      var markeAdd = $('#completeName2').val();
      var prodavacAdd = $('#completeProdavac').val(); 
      var cenaAdd = $('#completeCena').val(); 

      $.ajax({
        url:"insert.php", //Gde želimo da pošaljemo podatke
        type: 'post',  //Koji je tip//Post metod
        data:{                  //Podaci koje dodajemo promenljivima slanja
          nameSend: nameAdd,
          markeSend: markeAdd,
          prodavacSend: prodavacAdd,
          cenaSend: cenaAdd
        },
        success: function(data,status){ //podaci koje uzimamo i status
          //funckija za pokazivanje podataka
          // console.log(status); 

          displayData();
        }
      });
    }

    //Delete 

    function DeleteAutomobil(deleteId){  //Lokalni parametar koji hvata iz id
        $.ajax({
          url:"delete.php",
          type:'post',
          data:{
            deleteSend: deleteId
          },
          success: function(data,status){
            displayData();                //Želimo da nakon brisanja ostanemo na stranici sa prikazanim ostalim, nakon brisanja
          }

        });
    }

    //Update

    function UpdateAutomobil(updateId){

      $('#hiddendata').val(updateId);
      
      $.post("update.php", {updateId:updateId}, function(data, status){
        
        var userId = JSON.parse(data); //Pošto je nečitljiv, JSON to pročita i da nam ga kao normal id
        $('#updateName').val(userId.naziv);
        $('#updateName2').val(userId.marka);
        $('#updateProdavac').val(userId.prodavac);
        $('#updateCena').val(userId.cena);
      });

      $('#updateModal').modal("show");
    }


    </script>

   </body>
  </body>
</html>