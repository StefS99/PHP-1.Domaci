//Read

$(document).ready(function(){  //Ako je naš dokument spreman, prikaži sve 
    displayData();   //Funckija koju smo dole definisali
});
    

function displayData(){
    var displayData="true";
    $.ajax({
        url:"handler/display.php",
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
        url:"handler/insert.php", //Gde želimo da pošaljemo podatke
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

        $('#completeModal').modal('hide');  //Nakon unosa će se zatvoriti forma

        displayData();
        }
    });
}

//Delete 

function DeleteAutomobil(deleteId){  //Lokalni parametar koji hvata iz id
    $.ajax({
    url:"handler/delete.php",
    type:'post',
    data:{
        deleteSend: deleteId
    },
    success: function(data,status){
        displayData();                //Želimo da nakon brisanja ostanemo na stranici sa prikazanim ostalim, nakon brisanja
    }

    });
}

//Get value from Database

function GetDetails(updateId){

    $('#hiddendata').val(updateId);

    $.post("handler/update.php",               //Uzimamo iz baze sve što je za taj objekat uneto, ne radimo ajax ovde
            {updateId: updateId}, 
            function(data, status){   
        
        var autoId = JSON.parse(data); //Pošto je nečitljiv, JSON to pročita i da nam ga kao normal id
        $('#updateName').val(autoId.naziv);
        $('#updateName2').val(autoId.marka);
        $('#updateProdavac').val(autoId.prodavac);
        $('#updateCena').val(autoId.cena);
    });

    $('#updateModal').modal("show");  //modal("show") je bootstrap koji ce pokazati ovaj modal
    }

//Update
function UpdateAutomobil(){
    var updateName = $('#updateName').val();
    var updateName2 = $('#updateName2').val();
    var updateProdavac = $('#updateProdavac').val();
    var updateCena = $('#updateCena').val();
    var hiddendata = $('#hiddendata').val(); //Ovde čuvamo id, koji nam nije bitan da ga prikažemo zato je hidden

    $.post("handler/update.php", {
        updateName:updateName,
        updateName2:updateName2,
        updateProdavac:updateProdavac,
        updateCena:updateCena,
        hiddendata:hiddendata

    }, function(data,status){
        $('#updateModal').modal('hide'); //Kada izmenimo podatke, gasi se modal za popunjavanje
        displayData();

    });
}
