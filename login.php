<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="row">
  <div class="col-6 m-auto">
  <div class="card m-auto">
    <div class="card-header">
      <h3>Prijava</h3>
    </div>
    <div class="card-body">
      <form>
        <div class="form-group col-12">
          <label>Email</label>
          <input type = "email" class="form-control" name="email" [(ngModel)]="email" required> <!--Pozivamo form kontrolu da vidimo sta smo uneli, u donjem delu koda se nalazi nastavak-->
        </div>

        <div class="form-group col-12">
          <label>Lozinka</label>
          <input type="password" class="form-control" name="password" [(ngModel)]="password" required>
        </div>
        <br>
        <div class="form-group col-12">
          <button type="submit" class="btn btn-primary me-2">Sačuvaj</button>
          <button type="reset" class="btn btn-secondary">Poništi</button>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <a href="../1.PHP-domaci/index.php" style="text-decoration: none;"><span class="text">Početna strana</span></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</div>
    
</body>
</html>